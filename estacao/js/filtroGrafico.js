$(document).ready(function(){

    window.onunload = () => {
       window.localStorage.clear();
    }

    // gerar o gráfico quando carregar a página
    var dataInicial = $(".dataInicial").val();
    var dataFinal = $(".dataFinal").val();
    var sensor = $(".box").siblings().find(".sensor-id").val();

    isFirstClick(sensor, 'datas')

    getDadosEntreDatas(dataInicial, dataFinal, sensor, 'datas')

    $('.link').click(function() {
        isFirstClick( $(this).attr('data-sensor-id'), 'datas')
    })

    function isFirstClick(sensor, formatoFiltro) {
        var getSensor = localStorage.getItem("firstClick"+sensor)
        if(getSensor == null) {
            localStorage.setItem("firstClick"+sensor, sensor)
            getDadosEntreDatas(dataInicial, dataFinal, sensor, formatoFiltro)
            return true
        }
        return false
    }

    // gerar o gráfico a partir do filtro
    $(".btn-filtrar").click(function(e){
        e.preventDefault()

        var thisForm = $(this).parents("form")

        var formatoFiltro = thisForm.find('.formatoFiltro').find(":selected").val(); // datas ou dia
        var sensor = thisForm.find(".sensor-id").val();
        var dataInicial = thisForm.find(".dataInicial").val();
        var dataFinal = thisForm.find(".dataFinal").val();
        var dataUnica = thisForm.find(".dataUnica").val();
        
        if(formatoFiltro == "datas") {
            getDadosEntreDatas(dataInicial, dataFinal, sensor, formatoFiltro)
        }
        if(formatoFiltro == "dia") {
            getDadosUnicoDia(dataUnica, sensor, formatoFiltro)
        }
    });

    function getDadosEntreDatas(dataInicial, dataFinal, sensor, formatoFiltro){
        $.ajax({
            url: baseUrl+'/php/apiestacao.php?sensor_id='+sensor+'&dataInicial='+dataInicial+'&dataFinal='+dataFinal+'',
            async: true,
            type: 'GET',
            dataType: 'JSON',
            success: function(data){
                if(data.error_message != undefined) {
                    $(".canvas-message-"+sensor).addClass('py-4')
                    $(".canvas-message-"+sensor).text(data.error_message)
                    $(".toggle_canvas_"+sensor).hide()
                    return false;
                }
                $(".canvas-message-"+sensor).removeClass('py-4')
                $(".canvas-message-"+sensor).text("")
                $(".toggle_canvas_"+sensor).fadeIn()
                criarGraficoEntreDatas(data, dataInicial, dataFinal, sensor)
            },  
            error: function(request, error){
                console.log('Ocorreu um erro: '+ error);
            }
        });
    }

    function getDadosUnicoDia(dataUnica, sensor, formatoFiltro){
        $.ajax({
            url: baseUrl+'/php/apiestacao.php?sensor_id='+sensor+'&data='+dataUnica+'',
            async: true,
            type: 'GET',
            dataType: 'JSON',
            success: function(data){
                if(data.error_message != undefined) {
                    $(".canvas-message-"+sensor).addClass('py-4')
                    $(".canvas-message-"+sensor).text(data.error_message)
                    $(".toggle_canvas_"+sensor).hide()
                    return false;
                }
                $(".canvas-message-"+sensor).removeClass('py-4')
                $(".canvas-message-"+sensor).text("")
                $(".toggle_canvas_"+sensor).fadeIn()
                criarGraficoDia(data, dataUnica, sensor)
            },  
            error: function(request, error){
                console.log('Ocorreu um erro: '+ error);
            }
        });
    }

    function criarGraficoEntreDatas(dados, dataInicial, dataFinal, sensor) {
        var dadosPorData = dados.reduce(function(result, current) {
            result[current.data_coleta] = result[current.data_coleta] || [];
            result[current.data_coleta].push(current);
            return result;
        }, {})

        var unidade_medida = dados[0].unidade_medida
        var sensor_nome = dados[0].sensor_nome
        arrayQuantidade = []
        arrayData = []

        for(var i=0; i<Object.keys(dadosPorData).length; i++) {
            var data = Object.keys(dadosPorData)[i]
            var dataFormatada = moment(data).format('DD MMM YYYY')
            arrayData.push(dataFormatada)

            for(var j=0; j<dadosPorData[Object.keys(dadosPorData)[i]].length; j++) {
                var item = dadosPorData[Object.keys(dadosPorData)[i]]
                arrayQuantidade.push( parseFloat(item[j].media_valor).toFixed(2) );
            }
        }

        console.log(arrayQuantidade);

        var chart = document.getElementById('canvas_sensor_'+sensor);
        var myChart = new Chart(chart, {
            type: 'line',
            data: {
                labels: arrayData,
                datasets: [
                    { 
                        data: arrayQuantidade,
                        label: sensor_nome+" ("+unidade_medida+")",
                        borderColor: "#6a3093",
                        backgroundColor: "rgba(0, 204, 0, 0.5)",
                        fill: true
                    }
                ]
            },
            options: {
                title: {
                    display: true,
                    text: 'Dados coletados entre '+moment(dataInicial).format('DD/MM/YYYY')+' e '+moment(dataFinal).format('DD/MM/YYYY')+'',
                    fontSize: '18'
                },
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        },
                    }],
                }
            }
        });
    }

    function criarGraficoDia(dados, dataUnica, sensor) {
        var dadosPorHora = dados.reduce(function(result, current) {
            result[current.hora_coleta] = result[current.hora_coleta] || [];
            result[current.hora_coleta].push(current);
            return result;
        }, {})

        var dadosPorHora = dados;

        var unidade_medida = dados[0].unidade_medida
        var sensor_nome = dados[0].sensor_nome
        arrayQuantidade = []
        arrayData = []

        for(var i=0; i<Object.keys(dadosPorHora).length; i++) {
            // var hora = Object.keys(dadosPorHora)[i]
            // var horaFormatada = moment(dadosPorHora[i].hora_coleta).format('LT');
            arrayData.push( dadosPorHora[i].hora_coleta )
            arrayQuantidade.push( parseFloat(dadosPorHora[i].valor).toFixed(2) )
            

            // for(var j=0; j<=dadosPorHora[Object.keys(dadosPorHora)[i]].length; j++) {
            //     var item = dadosPorHora[Object.keys(dadosPorHora)[i]]
            //     console.log(item);
            //     if(item[j] != undefined)
            //         arrayQuantidade.push( item[j].valor );
            // }
        }

        var chart = document.getElementById('canvas_sensor_'+sensor);
        var myChart = new Chart(chart, {
            type: 'line',
            data: {
                labels: arrayData,
                datasets: [
                    { 
                        data: arrayQuantidade,
                        label: sensor_nome+" ("+unidade_medida+")",
                        borderColor: "#00b300",
                        backgroundColor: "rgba(0, 204, 0, 0.5)",
                        fill: true
                    }
                ]
            },
            options: {
                title: {
                    display: true,
                    text: 'Dados coletados em '+moment(dataUnica).format('DD/MM/YYYY')+'',
                    fontSize: '18'
                },
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        },
                    }],
                }
            }
        });
    }

});