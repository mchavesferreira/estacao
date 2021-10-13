$(document).ready(function(){

    $(".tabela-relatorio").hide();

    $("#btn-gerar-pdf").click(function(e){
        e.preventDefault()

        var dataInicial = $("#dataInicialRelatorio").val();
        var dataFinal = $("#dataFinalRelatorio").val();
        getDadosRelatorio(dataInicial, dataFinal)
    });

    function getDadosRelatorio(dataInicial, dataFinal){
        $.ajax({
            url: baseUrl+'/api/gerarRelatorio.php?dataInicial='+dataInicial+'&dataFinal='+dataFinal+'',
            async: true,
            type: 'GET',
            dataType: 'JSON',
            success: function(data){
                if(data.error_message != undefined) {
                    // $(".canvas-message-"+sensor).addClass('py-4')
                    // $(".canvas-message-"+sensor).text(data.error_message)
                    // $("#toggle_canvas_"+sensor).hide()
                    return false;
                }
                // $(".canvas-message-"+sensor).removeClass('py-4')
                // $(".canvas-message-"+sensor).text("")
                // $("#toggle_canvas_"+sensor).fadeIn()
                criarPdf(data, dataInicial, dataFinal)
            },  
            error: function(request, error){
                console.log('Ocorreu um erro: '+ error);
            }
        });
    }

    function criarPdf(dados, dataInicial, dataFinal) {
        var dadosPorSensor = dados.reduce(function(result, current) {
            result[current.sensor_id] = result[current.sensor_id] || [];
            result[current.sensor_id].push(current);
            return result;
        }, {})

        $(".tabela-relatorio").show();
        $('#putDados').html('');

        arrayDados = [];
        arraySensores = [];

        for(var i=0; i<Object.keys(dadosPorSensor).length; i++) {
            // var sensor = Object.keys(dadosPorSensor)[i]
            // arraySensores.push(sensor)

            for(var j=0; j<dadosPorSensor[Object.keys(dadosPorSensor)[i]].length; j++) {
                var item = dadosPorSensor[Object.keys(dadosPorSensor)[i]]
                // arrayDados.push( item[j] );
                var dataFormatada = moment(item[j].data_coleta).format('L')

                $("#putDados").append('<tr>'+
                    '<td>'+item[j].sensor_nome+'</td>'+
                    '<td>'+item[j].unidade_medida+'</td>'+
                    '<td>'+item[j].valor+'</td>'+
                    '<td>'+dataFormatada+'</td>'+
                    '<td>'+item[j].hora_coleta+'</td>'+
                '</tr>')
            }
        }


        var doc = new jsPDF();

        doc.setFontSize(16);
        // doc.text(20, 20, "Relatório de dados - Smart Campus Unoesc - Estação Meteorológica");

        doc.autoTable({
            headStyles: { fillColor: [0, 0, 0] },
            html: '#tabelaRelatorio'
        })

        //doc.output('save', 'filename.pdf'); //Try to save PDF as a file (not works on ie before 10, and some mobile devices)
        //doc.output('datauristring'); //returns the data uri string
        //doc.output('datauri'); //opens the data uri in current window
        
        // doc.output('dataurlnewwindow'); 
        doc.save('Relatório Smart Campus - Estações Meteorológicas.pdf');
    }

});