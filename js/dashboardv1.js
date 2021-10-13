$(window).on("load", function(){
  // página totalmente carregada (DOM, imagens etc.)
  getData();
});



setInterval(function() {
  // Call a function repetatively with 2 Second interval
  getData();
}, 60000); //2000mSeconds update rate

setInterval(function() {
  // Call a function repetatively with 2 Second interval
  gethora();
}, 2000); //2000mSeconds update rate

function gethora() {
  var data = new Date();
  var dia     = data.getDate();           // 1-31
 
  var hora    = data.getHours();          // 0-23
  var min     = data.getMinutes();        // 0-59
  var seg     = data.getSeconds();        // 0-59
 
var formatohora = hora + ':'+ min 
//console.log(formatohora);
$(".horaatual").html( formatohora );

}
function getData() {

$.getJSON( "https://api.coindesk.com/v1/bpi/currentprice/BRL.json", function( data ) {
  var items = [];
 // console.log(data.time.updated);  // imprime dados no console
  $(".bitcoinreal").html(data.bpi.BRL.rate_float);
  $(".bitcoindolar").html(data.bpi.USD.rate_float);
  $(".bitcoindate").html(data.time.updated);

});

$.getJSON( "/php/getvaluejson.php?parametro=MP10", function( data2 ) {
  var items = [];
 $(".valorMP10").html( data2.parametro1 );
 $(".diaMP10").html( data2.dia );
 $(".horaMP10").html( data2.hora );
});

$.getJSON( "/php/getvaluejson.php?parametro=TEMP", function( data2 ) {
  var items = [];
 $(".valorTEMP").html( data2.parametro1 );
 $(".valorUR").html( data2.parametro2 );
 $(".diaTEMP").html( data2.dia );
 $(".horaTEMP").html( data2.hora );
});


$.getJSON( "/php/getvaluejson.php?parametro=O3", function( data2 ) {
  var items = [];

 $(".valorO3").html( data2.parametro1 );
 $(".diaO3").html( data2.dia );
 $(".horaO3").html( data2.hora );
});

$.getJSON( "/php/getvaluejson.php?parametro=NO", function( data2 ) {
  var items = [];

 $(".valorNO").html( data2.parametro1 );
 $(".valorNO2").html( data2.parametro2 );
 $(".valorNOx").html( data2.parametro3 );
 $(".diaNO2").html( data2.dia );
 $(".horaNO2").html( data2.hora );
});

$.getJSON( "/php/getvaluejson.php?parametro=RADG", function( data2 ) {
  var items = [];

 $(".valorRADG").html( data2.parametro1 );
 $(".diaRADG").html( data2.dia );
 $(".horaRADG").html( data2.hora );
});

$.getJSON( "/php/getvaluejson.php?parametro=PRESS", function( data2 ) {
  var items = [];

 $(".valorPRESS").html( data2.parametro1 );
 
});

$.getJSON( "/php/getvaluejson.php?parametro=VV", function( data2 ) {
  var items = [];

 $(".valorVV").html( data2.parametro1 );
 $(".valorDV").html( data2.parametro2 );
 $(".valorDVG").html( data2.parametro3 );
});

$.getJSON( "/php/getvaluejson.php?parametro=WaterSomamensal", function( data2 ) {
  var items = [];

 $(".valorWaterSomamensal").html( data2.parametro1 );
 $(".valorWaterSomamensalhorta").html( Math.round(data2.parametro2) );

 
});


}

