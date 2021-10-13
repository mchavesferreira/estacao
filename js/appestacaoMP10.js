

$('document').click(function(){

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





function graficoestacaoMP10(hora, parametro1) {
    let ctx = document.getElementById('estacaochartMP10').getContext('2d');
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
                pointRadius: 4,
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
