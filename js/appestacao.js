// dia busca 01:24

//default
$('#TEMP').click(function(){

    $.ajax({
    type: "POST",
    url: "/php/apiestacao.php?parametro=TEMP",
    dataType: "json",
    success: function (data) {
        var horaarray = [];
        var parametro1array = [];
        var parametro2array = [];
        
        for (var i = 0; i < data.length; i++) {
            horaarray.push(data[i].hora);
            parametro1array.push(data[i].parametro1);
            parametro2array.push(data[i].parametro2);
        }

        graficoestacao(horaarray,parametro1array, parametro2array );
    }
});
});

$('#O3').click(function(){

    $.ajax({
    type: "POST",
    url: "/php/apiestacao.php?parametro=O3",
    dataType: "json",
    success: function (data) {

        var horaarray = [];
        var parametro1array = [];
        var parametro2array = [];

        
        for (var i = 0; i < data.length; i++) {

            horaarray.push(data[i].hora);
            parametro1array.push(data[i].parametro1);
            parametro2array.push(data[i].parametro2);
        }

        graficoestacaoO3(horaarray,parametro1array );
    }
});
});

$('#MP10').click(function(){

    $.ajax({
    type: "POST",
    url: "/php/apiestacao.php?parametro=MP10",
    dataType: "json",
    success: function (data) {

        var horaarray = [];
        var parametro1array = [];
        var parametro2array = [];

        
        for (var i = 0; i < data.length; i++) {

            horaarray.push(data[i].hora);
            parametro1array.push(data[i].parametro1);
            parametro2array.push(data[i].parametro2);
        }

        graficoestacaoMP10(horaarray,parametro1array );
    }
});
});

$('#NO').click(function(){

    $.ajax({
    type: "POST",
    url: "/php/apiestacao.php?parametro=NO",
    dataType: "json",
    success: function (data) {

        var horaarray = [];
        var parametro1array = [];
        var parametro2array = [];
        var parametro3array = [];

        for (var i = 0; i < data.length; i++) {
            horaarray.push(data[i].hora);
            parametro1array.push(data[i].parametro1);
            parametro2array.push(data[i].parametro2);
            parametro3array.push(data[i].parametro3);
        }

        graficoestacaoNO(horaarray,parametro1array, parametro2array,parametro3array );
    }
});
});


$('#RADG').click(function(){

    $.ajax({
    type: "POST",
    url: "/php/apiestacao.php?parametro=RADG",
    dataType: "json",
    success: function (data) {

        var horaarray = [];
        var parametro1array = [];
        var parametro2array = [];
        var parametro3array = [];

        for (var i = 0; i < data.length; i++) {
            horaarray.push(data[i].hora);
            parametro1array.push(data[i].parametro1);
            parametro2array.push(data[i].parametro2);
            parametro3array.push(data[i].parametro3);
        }

        graficoestacaoRADG(horaarray,parametro1array );
    }
});
});

$('#PRESS').click(function(){

    $.ajax({
    type: "POST",
    url: "/php/apiestacao.php?parametro=PRESS",
    dataType: "json",
    success: function (data) {

        var horaarray = [];
        var parametro1array = [];
        var parametro2array = [];
        var parametro3array = [];

        for (var i = 0; i < data.length; i++) {
            horaarray.push(data[i].hora);
            parametro1array.push(data[i].parametro1);
            parametro2array.push(data[i].parametro2);
            parametro3array.push(data[i].parametro3);
        }

        graficoestacaoPRESS(horaarray,parametro1array );
    }
});
});

$('#VV').click(function(){

    $.ajax({
    type: "POST",
    url: "/php/apiestacao.php?parametro=VV",
    dataType: "json",
    success: function (data) {

        var horaarray = [];
        var parametro1array = [];
        var parametro2array = [];
        var parametro3array = [];

        for (var i = 0; i < data.length; i++) {
            horaarray.push(data[i].hora);
            parametro1array.push(data[i].parametro1);
            parametro2array.push(data[i].parametro2);
            parametro3array.push(data[i].parametro3);
        }

        graficoestacaoVV(horaarray,parametro1array,parametro2array,parametro3array   );
    }
});
});

//default
$('document').ready(function () {
    $.ajax({
        type: "POST",
        url: "/php/apiestacao.php?parametro=TEMP",
        dataType: "json",
        success: function (data) {
            var horaarray = [];
            var parametro1array = [];
            var parametro2array = [];
            
            for (var i = 0; i < data.length; i++) {
                horaarray.push(data[i].hora);
                parametro1array.push(data[i].parametro1);
                parametro2array.push(data[i].parametro2);
            }
    
            graficoestacao(horaarray,parametro1array, parametro2array );
        }
    });
});




function graficoestacao(hora,parametro1, parametro2) {
    let ctx = document.getElementById('estacaochart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: hora,
            datasets: [
                {
                label: ' temperatura (°C)',
                backgroundColor: 'rgba(244, 81, 30, 0.5)',
                borderColor: 'rgba(244, 81, 30, 0.8)',
                pointBackgroundColor: 'rgba(244, 81, 30, 0.5)',
                pointBorderColor: 'rgba(244, 81, 30, 0.8)',
                fill: false,
                pointRadius: 3,
                showLine: true,
                data: parametro1,
                yAxisID: 'A',
            },
            {
                label: 'umidade(%)',
                backgroundColor: 'rgba(44, 81, 230, 0.5)',
                borderColor: 'rgba(44, 81, 230, 0.8)',
                fill: false,
                pointRadius: 3,
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




function graficoestacaoMP10(hora, parametro1) {
    let ctx = document.getElementById('estacaochart').getContext('2d');
   let chart = new Chart(ctx, {

        type: 'line',
        data: {
            labels: hora,
 
            datasets: [
                {
                label: ' MP10 (Partículas Inaláveis) µg/m3',
                backgroundColor: 'rgba(255,140,0, 0.5)',
                borderColor: 'rgba(255,140,0, 0.8)',
                pointBackgroundColor: 'rgba(255,140,0, 0.5)',
                pointBorderColor: 'rgba(255,140,0, 0.8)',
                fill: false,
                pointRadius: 3,
                showLine: true,
                data: parametro1,
        
                yAxisID: 'A',
         
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
                  }
                 ]
                     
            },
    
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    color: 'rgb(244, 81, 130)'
                }
            },
            animation: {
                duration:2000,
            }
        }  
    });
}

function graficoestacaoO3(hora, parametro1) {
    let ctx = document.getElementById('estacaochart').getContext('2d');
   let chart = new Chart(ctx, {

        type: 'line',
        data: {
            labels: hora,
 
            datasets: [
                {
                label: 'Ozônio (µg/m3)',
                backgroundColor: 'rgba(30,144,255, 0.5)',
                borderColor: 'rgba(30,144,255, 0.8)',
                pointBackgroundColor: 'rgba(30,144,255, 0.5)',
                pointBorderColor: 'rgba(30,144,255, 0.8)',
                fill: false,
                pointRadius: 3,
                showLine: true,
                data: parametro1,
        
                yAxisID: 'A',
         
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
                  }
                 ]
                     
            },
    
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    color: 'rgb(244, 81, 130)'
                }
            },
            animation: {
                duration:2000,
            }
        }  
    });
}


function graficoestacaoRADG(hora, parametro1) {
    let ctx = document.getElementById('estacaochart').getContext('2d');
    let chart = new Chart(ctx, {

        type: 'line',
        data: {
            labels: hora,
            datasets: [
                {
                label: 'RADG (Radiação Solar Global) W/m2',
                backgroundColor: 'rgba(255,105,180, 0.5)',
                borderColor: 'rgba(255,105,180, 0.8)',
                pointBackgroundColor: 'rgba(255,105,180, 0.5)',
                pointBorderColor: 'rgba(255,105,180, 0.8)',
                fill: false,
                pointRadius: 3,
                showLine: true,
                data: parametro1,
                yAxisID: 'A',
            }
          ]
        },
        options: {
            responsive: true,
            scales: {
              
                yAxes: [{
                    id: 'A',
                    type: 'linear',
                    position: 'left',
                    ticks: {
                        min: 0,
                        max: Math.max.apply(this, parametro1) + 30  
                      }
                  }, 
                ]
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



function graficoestacaoNO(hora,parametro1, parametro2, parametro3) {
    let ctx = document.getElementById('estacaochart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: hora,
            datasets: [
                {
                label: 'NO (Monóxido de Nitrogênio) µg/m3',
                backgroundColor: 'rgba(127,255,212, 0.5)',
                borderColor: 'rgba(127,255,212, 0.8)',
                pointBackgroundColor: 'rgba(127,255,212, 0.5)',
                pointBorderColor: 'rgba(127,255,212, 0.8)',
                fill: false,
                pointRadius: 3,
                showLine: true,
                data: parametro1,
                yAxisID: 'A',
            },
            {
                label: ' NO2 (Dióxido de Nitrogênio) µg/m3',
                backgroundColor: 'rgba(255,245,0, 0.5)',
                borderColor: 'rgba(255,245,0, 0.9)',
                pointBackgroundColor: 'rgba(255,245,0, 0.5)',
                pointBorderColor: 'rgba(255,245,0, 0.8)',
                fill: false,
                pointRadius: 3,
                showLine: true,
                yAxisID: 'A',
                data: parametro2,
                display: true,
            },
            {
                label: ' NOx (Óxidos de Nitrogênio) ppb',
                backgroundColor: 'rgba(240,128,128, 0.5)',
                borderColor: 'rgba(240,128,128, 0.8)',
                pointBackgroundColor: 'rgba(240,128,128, 0.5)',
                pointBorderColor: 'rgba(240,128,128, 0.8)',
                fill: false,
                pointRadius: 3,
                showLine: true,
                data: parametro3,
                yAxisID: 'A',
            },
          ]
        },
        options: {
            responsive: true,
            scales: {
              
                yAxes: [{
                    id: 'A',
                    type: 'linear',
                    position: 'left',
                    ticks: {
                        min: 0,
                        max: Math.max.apply(this, parametro2) + 30  
                      }
                  }, 
                ]
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


function graficoestacaoVV(hora,parametro1, parametro2, parametro3) {
    let ctx = document.getElementById('estacaochart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: hora,
            datasets: [
                {
                label: 'VV (Velocidade do Vento) m/s',
                backgroundColor: 'rgba(60,179,113, 0.5)',
                borderColor: 'rgba(60,179,113, 0.8)',
                pointBackgroundColor: 'rgba(60,179,113, 0.5)',
                pointBorderColor: 'rgba(60,179,113, 0.8)',
                fill: false,
                pointRadius: 3,
                showLine: true,
                data: parametro1,
                yAxisID: 'A',
            },
            {
                label: 'DV (Direção do Vento) °',
                backgroundColor: 'rgba(44, 81, 230, 0.5)',
                borderColor: 'rgba(44, 81, 230, 0.8)',
                fill: false,
                pointRadius: 3,
                showLine: true,
                yAxisID: 'B',
                data: parametro2,
                display: true,
            },
            {
                label: 'DVG (Direção do Vento Global) °',
                backgroundColor: 'rgba(255,215,0, 0.7)',
                borderColor: 'rgba(255,215,0, 0.9)',
                pointBackgroundColor: 'rgba(255,215,0, 0.7)',
                pointBorderColor: 'rgba(255,215,0, 0.9)',
                fill: false,
                pointRadius: 4,
                showLine: true,
                data: parametro3,
                yAxisID: 'B',
            },
          ]
        },
        options: {
            responsive: true,
            scales: {
              
                yAxes: [{
                    id: 'A',
                    type: 'linear',
                    position: 'left',
                    ticks: {
                        min: 0,
                        max: Math.max.apply(this, parametro1) + 5  
                      }
                  }, 
                  {
                    id: 'B',
                    type: 'linear',
                    position: 'right',
                    ticks: {
                        min: 0,
                        max: 360  
                      }
                  }, 
                ]
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




function graficoestacaoPRESS(hora, parametro1) {
    let ctx = document.getElementById('estacaochart').getContext('2d');
    let chart = new Chart(ctx, {

        type: 'line',
        data: {
            labels: hora,
 
            datasets: [
                {
                label: ' PRESS (Pressão Atmosférica) hPa',
                backgroundColor: 'rgba(188,143,143, 0.5)',
                borderColor: 'rgba(188,143,143, 0.9)',
                pointBackgroundColor: 'rgba(188,143,143, 0.5)',
                pointBorderColor: 'rgba(188,143,143, 0.8)',
                fill: false,
                pointRadius: 3,
                showLine: true,
                data: parametro1,
                yAxisID: 'A',
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
                        min: Math.min.apply(this, parametro1) - 2,
                        max: Math.max.apply(this, parametro1) + 2                     
                     }
                  }
                 ]
            },
    
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    color: 'rgb(244, 81, 130)'
                }
            },
            animation: {
                duration:2000,
            }
        }  
    });
}
