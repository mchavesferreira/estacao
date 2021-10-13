

// dia casa 23h40
 $('#btn1').click(function(){
    $.ajax({
    type: "POST",
    url: "/php/apicasa.php?periodo=24h",
    dataType: "json",
    success: function (data) {

        // for (var i in data) {
        //     console.log(data[i].vendas)
        // }
        var horaarray = [];
        var dif_ativatotalarray = [];
        var dif_ativaindutivaarray= [];
        
        
        var somaativatotal=0;
        var somaindutivatotal=0;


        for (var i = 0; i < data.length; i++) {

            horaarray.push(data[i].hora);
            dif_ativatotalarray.push(data[i].dif_ativatotal);
            dif_ativaindutivaarray.push(data[i].dif_ativaindutiva);
            somaativatotal =   somaativatotal +  parseInt(data[i].dif_ativatotal);
            somaindutivatotal= somaindutivatotal + parseInt(data[i].dif_ativaindutiva);


        }

        grafico(horaarray,dif_ativaindutivaarray,  dif_ativatotalarray);
    
       
        document.getElementById('resultado').innerHTML = " Ativa total: <b>" + somaativatotal + "</b> Watts.hora, Indutiva total:<b> " + somaindutivatotal + "</b> Watts.hora";
        document.getElementById("demo").innerHTML = " ";
    
    }


});
});

//default
$('document').ready(function () {

    $.ajax({
    type: "POST",
    url: "/php/apicasa.php?periodo=24h",
    dataType: "json",
    success: function (data) {

        // for (var i in data) {
        //     console.log(data[i].vendas)
        // }
        var horaarray = [];
        var dif_ativatotalarray = [];
        var dif_ativaindutivaarray= [];
        var somaativatotal=0;
        var somaindutivatotal=0;

        for (var i = 0; i < data.length; i++) {

            horaarray.push(data[i].hora);
            dif_ativatotalarray.push(data[i].dif_ativatotal);
            dif_ativaindutivaarray.push(data[i].dif_ativaindutiva);
            somaativatotal =   somaativatotal +  parseInt(data[i].dif_ativatotal);
            somaindutivatotal= somaindutivatotal + parseInt(data[i].dif_ativaindutiva);
        }

        grafico(horaarray,dif_ativaindutivaarray,  dif_ativatotalarray);
    
        document.getElementById('resultado').innerHTML = " Ativa total: <b>" + somaativatotal + "</b> Watts.hora, Indutiva total:<b> " + somaindutivatotal + "</b> Watts.hora";
        document.getElementById("demo").innerHTML = " ";
    
    
    }
  });
});



function  grafico(hora,ativaindutiva,  ativatotal) {
    var ctx = document.getElementById('casachart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: hora,
            datasets: [
                {
                    label: 'Ativa total (Watts.hora)',
                    backgroundColor: 'rgba(144, 81, 30, 0.5)',
                    borderColor: 'rgba(144, 81, 30, 0.8)',
                    data: ativatotal
                },
                {
                label: 'Ativa indutiva (Watts.hora) ',
                backgroundColor: 'rgba(244, 81, 30, 0.5)',
                borderColor: 'rgba(244, 81, 30, 0.8)',
                pointBackgroundColor: 'rgba(244, 81, 30, 0.5)',
                pointBorderColor: 'rgba(244, 81, 30, 0.8)',
                fill: false,
                pointRadius: 3,
                showLine: false,
                data: ativaindutiva
            },
          ]
        },
        

        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
           
            animation: {
                duration:2000,
            },
         
           legend: {
                     display: true,
                     position: 'bottom',
                     labels: {
                         color: 'rgb(255, 99, 132)'
                     }
                 }
                  
        }
    });
}



//default
$('#btn1').click(function(){

    $.ajax({
    type: "POST",
    url: "/php/apicasa.php?periodo=2min",
        dataType: "json",
    success: function (data) {
        var horaarray = [];
        var parametro1array = [];
        var parametro2array = [];
        
        for (var i = 0; i < data.length; i++) {
            horaarray.push(data[i].hora);
            parametro1array.push(data[i].dif_ativatotal);
            parametro2array.push(data[i].dif_ativaindutiva);
        }

        graficoconsumo(horaarray,parametro1array, parametro2array );
    }
});
});



function graficoconsumo(hora,parametro1, parametro2) {
    let ctx = document.getElementById('ativaindutivachart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: hora,
            datasets: [
                {
                    label: 'Ativa total (Watts.hora)',
                backgroundColor: 'rgba(244, 81, 30, 0.5)',
                borderColor: 'rgba(244, 81, 30, 0.8)',
                pointBackgroundColor: 'rgba(244, 81, 30, 0.5)',
                pointBorderColor: 'rgba(244, 81, 30, 0.8)',
                fill: false,
                pointRadius: 1,
                showLine: true,
                data: parametro1,
                yAxisID: 'A',
            },
            {
                label: 'Ativa indutiva (Watts.hora) ',
                backgroundColor: 'rgba(44, 81, 230, 0.5)',
                borderColor: 'rgba(44, 81, 230, 0.8)',
                fill: false,
                pointRadius: 1,
                showLine: true,
                yAxisID: 'B',
                data: parametro2,
                display: true,
            }]
        },
        options: {
            responsive: true,
            scales: {
              
                yAxes: [{
                    id: 'A',
                    type: 'linear',
                    position: 'left',
                    ticks: {
                        min: Math.min.apply(this, parametro1) - 5,
                        max: Math.max.apply(this, parametro1) + 5    
                      }
                  }, {
             
                    id: 'B',
                    type: 'linear',
                    position: 'right',
                    ticks: {
                        min: Math.min.apply(this, parametro2) - 5,
                        max: Math.max.apply(this, parametro2) + 5    
                    }, 
                    title: {
                        display: true,
                        text: 'Value',
                        color: '#191',
                    },
                  }]
            },
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    color: 'rgb(255, 99, 132)'
                }
            },
            animation: {
                duration:2000,
            }
        }  
    });
}


function graficoumavariavel(hora,soma,fonte) {

    var legendagrafico = fonte + ' (Watts.hora)';
    var ctx = document.getElementById('casachartbusca').getContext('2d');

    var chart = new Chart(ctx, {

        type: 'bar',
        data: {
            labels: hora,


            datasets: [
                {
                label: legendagrafico,
                backgroundColor: 'rgba(244, 81, 30, 0.5)',
                borderColor: 'rgba(244, 81, 30, 0.8)',
                pointBackgroundColor: 'rgba(244, 81, 30, 0.5)',
                pointBorderColor: 'rgba(244, 81, 30, 0.8)',
                fill: false,
                pointRadius: 5,
                showLine: false,
                data: soma
            },
            ]
        },
        

        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            
            animation: {
                duration:2000,
            },
         
           legend: {
                     display: true,
                     position: 'bottom',
                     labels: {
                         color: 'rgb(255, 99, 132)'
                     }
                 }
                  
        }
    });
}

function graficomes(hora,soma, horta) {


    var ctx = document.getElementById('casachart').getContext('2d');

    var chart = new Chart(ctx, {

        type: 'bar',
        data: {
            labels: hora,


            datasets: [
                {
                label: 'Entrada (Litros)',
                backgroundColor: 'rgba(244, 81, 30, 0.5)',
                borderColor: 'rgba(244, 81, 30, 0.8)',
                pointBackgroundColor: 'rgba(244, 81, 30, 0.5)',
                pointBorderColor: 'rgba(244, 81, 30, 0.8)',
                fill: false,
                pointRadius: 5,
                showLine: false,
                data: soma
            },
            {
                label: 'horta (Litros)',
                backgroundColor: 'rgba(144, 81, 30, 0.5)',
                borderColor: 'rgba(144, 81, 30, 0.8)',

                data: horta
            }]
        },
        

        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fontSize: 10,
                        fontColor: "Black",
                        defaultFontFamily: "Arial, Helvetica, sans-serif",
                        }
                }]
            },
           
            animation: {
                duration:2000,
            },
            
           legend: {
                     display: true,
                     position: 'bottom',
                     labels: {
                         color: 'rgb(255, 99, 132)'
                     }
                 }
                  
        },
        
    });
}


function graficoano(hora,soma, horta) {


        var ctx = document.getElementById('casachart').getContext('2d');

    var chart = new Chart(ctx, {

        type: 'bar',
        data: {
            labels: hora,


            datasets: [
                {
                label: 'Entrada (Litros)',
                backgroundColor: 'rgba(244, 81, 30, 0.5)',
                borderColor: 'rgba(244, 81, 30, 0.8)',
                pointBackgroundColor: 'rgba(244, 81, 30, 0.5)',
                pointBorderColor: 'rgba(244, 81, 30, 0.8)',
                fill: false,
                pointRadius: 5,
                showLine: false,
                data: soma
            },
            {
                label: 'horta (Litros)',
                backgroundColor: 'rgba(144, 81, 30, 0.5)',
                borderColor: 'rgba(144, 81, 30, 0.8)',

                data: horta
            }]
        },
        

        options: {
            scales: {
                yAxes: [{
                    
                    ticks: {
                        beginAtZero: true,
                        fontSize: 12,
                        fontColor: "Black",
                        defaultFontFamily: "Arial, Helvetica, sans-serif",
                        }
                }]
            },
         
            animation: {
                duration:2000,
            },
            
           legend: {
                     display: true,
                     position: 'bottom',
                     labels: {
                         color: 'rgb(255, 99, 132)'
                     }
                 },
        },
        plugins: {
          
            afterDatasetsDraw: function (context, easing) {
              var ctx = context.chart.ctx;
              context.data.datasets.forEach(function (dataset) {
                for (var i = 0; i < dataset.data.length; i++) {
                  if (dataset.data[i] != 0) {
                    dataset.data[i]= Math.trunc( dataset.data[i]);
                    var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
                    var textY = model.y + (dataset.type == "line" ? -3 : 15);

                    ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, 'normal', Chart.defaults.global.defaultFontFamily);
                    ctx.textAlign = 'start';
                    ctx.textBaseline = 'middle';
                    ctx.fillStyle = dataset.type == "line" ? "black" : "black";
                    ctx.save();
                    ctx.translate(model.x, textY-20);
                    ctx.rotate(4.7);
                    ctx.fillText(dataset.data[i], 0, 0);
                    ctx.restore();
                  }
                }
              });
            }
          
        }
    });
}

function graficosemana(hora,soma, horta) {
   var ctx = document.getElementById('casachart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: hora,
          datasets: [
                {
                label: 'Entrada (Litros)',
                backgroundColor: 'rgba(244, 81, 30, 0.5)',
                borderColor: 'rgba(244, 81, 30, 0.8)',
                pointBackgroundColor: 'rgba(244, 81, 30, 0.5)',
                pointBorderColor: 'rgba(244, 81, 30, 0.8)',
                fill: false,
                pointRadius: 5,
                showLine: false,
                data: soma
            },
            {
                label: 'horta (Litros)',
                backgroundColor: 'rgba(144, 81, 30, 0.5)',
                borderColor: 'rgba(144, 81, 30, 0.8)',
                data: horta
            }]
        },
        

        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
           
            animation: {
                duration:2000,
            },
         
           legend: {
                     display: true,
                     position: 'bottom',
                     labels: {
                         color: 'rgb(255, 99, 132)'
                     }
                 }
                  
        }
    });
}

function busca() {

    var datainicial = document.getElementById("myForm").datainicial.value;
    var datafinal = document.getElementById("myForm").datafinal.value;
    var intervalo = document.getElementById("myForm").intervalo.value;
    var fonte = document.getElementById("myForm").fonte.value;
    $.ajax({
        type: "POST",
        url: "/php/apicasaperiodo.php?datainicial="+ datainicial+"&datafinal="+datafinal+"&intervalo="+intervalo+"&fonte="+fonte,
        dataType: "json",
        success: function (data) {
            titulo='Periodo';
            var horaarray = [];
            var entradaarray = [];
            var total =0;
            var numero=0;
            for (var i = 0; i < data.length; i++) {
             horaarray.push(data[i].hora);
                entradaarray.push(data[i].dif_ativatotal);
                numero = parseInt(data[i].dif_ativatotal);
                total= total + numero;
            }
            graficoumavariavel(horaarray, entradaarray, fonte);
            document.getElementById('resultadobuscaenergy').innerHTML = "Consumo total no período: <b>" + total + "</b> Watts.hora";
            document.getElementById("periodoenergy").innerHTML = "Data Inicial: " + datainicial + ", Data Final: " + datafinal;
      }
    });    
}

