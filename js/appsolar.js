

// dia busca 18 setembro 2021 9h52

 $('#btn1solar').click(function(){
    $.ajax({
    type: "POST",
    url: "/php/apisolar.php?periodo=24h",
    dataType: "json",
    success: function (data) {

        // for (var i in data) {
        //     console.log(data[i].vendas)
        // }
        var horaarray = [];
        var somaarray = [];
        var  somahortaarray = [];

        for (var i = 0; i < data.length; i++) {

            horaarray.push(data[i].hora);
            somaarray.push(data[i].potencia);
            somahortaarray.push(data[i].producao);

        }

        graficosolar(horaarray,somaarray);

    }
});
});
//default
$('document').ready(function () {

    $.ajax({
    type: "POST",
    url: "/php/apisolar.php?periodo=24h",
    dataType: "json",
    success: function (data) {

        // for (var i in data) {
        //     console.log(data[i].vendas)
        // }
        var horaarray = [];
        var somaarray = [];


        for (var i = 0; i < data.length; i++) {

            horaarray.push(data[i].hora);
            somaarray.push(data[i].potencia);


        }

        graficosolar(horaarray,somaarray);
    }
});
});

// semana
$('#btn2solar').click(function(){
    var mL = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    var mS = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab', 'Dom'];
    $.ajax({
    type: "POST",
    url: "/php/apisolar.php?periodo=mes",
    dataType: "json",
    success: function (data) {

        for (var i = 0; i < data.length; i++) {
           for (var j = 0; j < 7; j++) {
            if(data[i].hora == mL[j]) { data[i].hora = mS[j]; 
                 console.log(mS[j])
              //   console.log(data[i].hora)
            } 
          }
           }

        var horaarray = [];

        var  somahortaarray = [];

        for (var i = 1; i < data.length; i++) {

            horaarray.push(data[i].hora);
             somahortaarray.push(data[i].producao);

        }

        graficomessolar(horaarray, somahortaarray);

    }
});
});
// mes
$('#btn3solar').click(function(){
    $.ajax({
    type: "POST",
    url: "php/apisolar.php?periodo=mes",
    dataType: "json",
    success: function (data) {

        // for (var i in data) {
        //     console.log(data[i].vendas)
        // }
        var horaarray = [];
    
        var  producaoarray = [];

        for (var i = 0; i < data.length; i++) {

            horaarray.push(data[i].hora);
            producaoarray.push(data[i].producao);

        }

        graficomessolar(horaarray, producaoarray);

    }
});
});



//ano
$('#btn4solar').click(function(){
    var mL = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var mS = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
   
    $.ajax({
    type: "POST",
    url: "php/apisolar.php?periodo=ano",
    dataType: "json",
    success: function (data) {

         for (var i = 0; i < data.length; i++) {
            for (var j = 0; j < 12; j++) {
              if(data[i].hora == mL[j]) { data[i].hora = mS[j]; 
              //    console.log(mS[j])
             } 
            }
           }

        var horaarray = [];
          var  somahortaarray = [];

        for (var i = 0; i < data.length; i++) {

            horaarray.push(data[i].hora);
            somahortaarray.push(data[i].producao);

        }

        graficoanosolar(horaarray, somahortaarray);

    }
});
});

function graficosolar(hora,soma) {
    var ctx = document.getElementById('solarchart').getContext('2d');
    var chart = new Chart(ctx, 
    {
        type: 'line',
        data: {
            labels: hora,
            datasets: [
                {
                    label: ' Potência (Watts)',
                    backgroundColor: 'rgba(244, 81, 30, 0.5)',
                    borderColor: 'rgba(244, 81, 30, 0.8)',
                    pointBackgroundColor: 'rgba(244, 81, 30, 0.5)',
                    pointBorderColor: 'rgba(244, 81, 30, 0.8)',
                    fill: false,
                    pointRadius: 4,
                    showLine: true,
                    data: soma
                }    ]
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


function graficomessolar(hora, producao) {


    var ctx = document.getElementById('solarchart').getContext('2d');

    var chart = new Chart(ctx, {

        type: 'bar',
        data: {
            labels: hora,


            datasets: [
                {
                label: 'KWh',
                backgroundColor: 'rgba(244, 81, 30, 0.5)',
                borderColor: 'rgba(244, 81, 30, 0.8)',
                pointBackgroundColor: 'rgba(244, 81, 30, 0.5)',
                pointBorderColor: 'rgba(244, 81, 30, 0.8)',
                fill: false,
                pointRadius: 5,
                showLine: false,
                data: producao
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
            hover: {
                animationDuration: 0
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


function graficoanosolar(hora,soma) {


    var ctx = document.getElementById('solarchart').getContext('2d');

    var chart = new Chart(ctx, {

        type: 'bar',
        data: {
            labels: hora,


            datasets: [
                {
                label: 'KWh',
                backgroundColor: 'rgba(244, 81, 30, 0.5)',
                borderColor: 'rgba(244, 81, 30, 0.8)',
                pointBackgroundColor: 'rgba(244, 81, 30, 0.5)',
                pointBorderColor: 'rgba(244, 81, 30, 0.8)',
                fill: false,
                pointRadius: 5,
                showLine: false,
                data: soma
            }
            ]
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
            hover: {
                animationDuration: 0
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


function busca() {

    var datainicial = document.getElementById("myForm").datainicial.value;
    var datafinal = document.getElementById("myForm").datafinal.value;
    var intervalo = document.getElementById("myForm").intervalo.value;
    var fonte = document.getElementById("myForm").fonte.value;
    $.ajax({
        type: "POST",
        url: "/php/apiwaterperiodo.php?datainicial="+ datainicial+"&datafinal="+datafinal+"&intervalo="+intervalo+"&fonte=entrada",
        dataType: "json",
        success: function (data) {
            titulo='Periodo';
            var horaarray = [];
            var entradaarray = [];
            var total =0;
            var numero=0;
            for (var i = 0; i < data.length; i++) {
             horaarray.push(data[i].hora);
                entradaarray.push(data[i].entrada);
                numero = parseInt(data[i].entrada);
                total= total + numero;
            }
            graficoumavariavel(horaarray, entradaarray, fonte);
            document.getElementById('resultado').innerHTML = "Produção total no período: <b>" + total + "</b> litros";
            document.getElementById("demo").innerHTML = "Data Inicial: " + datainicial + ", Data Final: " + datafinal;
      }
    });    
}



function graficoumavariavel(hora,soma,fonte) {

    var legendagrafico = fonte + ' (watts)';
    var ctx = document.getElementById('energychartbusca').getContext('2d');

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
