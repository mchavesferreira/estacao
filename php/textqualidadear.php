	

<style>

.subtitulo 				{ FONT-FAMILY: verdana; font-size: 10px; font-weight: bold; color: #480099; text-transform:uppercase; text-decoration: none;  height: 20px; padding: 1px 0px 0px 2px; background-image: url(../img/subtituloback.gif); ; background-repeat: repeat;     }
.titulo 				{ FONT-FAMILY: verdana; font-size: 10px; font-weight: normal; color: #000066; text-decoration: none;  height: 22px; padding: 0px 0px 0px 2px;    }
.titulo a				{ FONT-FAMILY: verdana; font-size: 10px; font-weight: normal; color: #000066; text-decoration: none;     }
.titulo a:hover			{ FONT-FAMILY: verdana; font-size: 10px; font-weight: normal; color: #ff0000; text-decoration:underline    }
.result 				{ FONT-FAMILY: verdana; font-size: 10px; font-weight:bold; color: #000066; text-decoration: none;  height: 22px; padding: 0px 0px 0px 2px;    }
.titulolista 			{ FONT-FAMILY: verdana; font-size: 10px; font-weight: bold; color: #000000 ; text-decoration: none;  height: 20px; padding: 0px 0px 0px 0px; background-color: #CCCCCC ; text-align: center;  background-image:url(../img/fundo1a.jpg)     }
.tabelainterna 			{ FONT-FAMILY: verdana; font-size: 10px; font-weight: normal; color: #000066; text-decoration: none; height: 17px; padding: 0px 0px 0px 2px; border: thin solid #CCCCCC;}
.tabelainternav 		{ FONT-FAMILY: verdana; font-size: 10px; font-weight: normal; color: #ff0000; text-decoration: none; height: 17px; padding: 0px 0px 0px 2px; border: thin solid #CCCCCC;}
.campoInput 			{ FONT-FAMILY: verdana; font-size: 10px; font-weight: normal; color: #000066; text-decoration: none; BORDER-RIGHT: #666666 1px solid; BORDER-TOP: #666666 1px solid; FILTER: alpha(opacity=95); BORDER-LEFT: #666666 1px solid; BORDER-BOTTOM: #666666 1px solid; background-image:url(../img/campotext.jpg)  }
.campoInputdis 			{ FONT-FAMILY: verdana; font-size: 10px; font-weight: normal; color:#333333; text-decoration: none; BORDER-RIGHT: #666666 1px solid; BORDER-TOP: #666666 1px solid; FILTER: alpha(opacity=95); BORDER-LEFT: #666666 1px solid; BORDER-BOTTOM: #666666 1px solid;   }
.print		 			{ FONT-FAMILY: verdana; font-size: 10px; font-weight: normal; color:#000066; text-decoration: none; BORDER: #666666 0px solid;    }
.campoSelect 			{ FONT-FAMILY: verdana; font-size: 10px; font-weight: normal; color: #000066; text-decoration: none; BORDER-RIGHT: #003366 1px solid; BORDER-TOP: #003366 1px solid; FILTER: alpha(opacity=95); BORDER-LEFT: #003366 1px solid; BORDER-BOTTOM: #003366 1px solid; text-transform:uppercase }
.box					{font-family:Verdana; font-color:#CAD1E3; border-color:#CAD1E3; background-color:#DADADA; font-size:10px; border-width : 0.01cm;}
.camada_tabela			{ overflow:auto; z-index:1; }
#tit_tab				{ FONT-FAMILY: verdana; font-size: 10px; font-weight: bold; color: #000000 ; text-decoration: none;  height: 20px; padding: 0px 0px 0px 0px; background-color: #CCCCCC ; text-align: center;  background-image:url(../img/fundo1a.jpg); border-left:#FFFFFF 1PX solid }
#tit_tab1				{ height:27px; background-image:url(../images/fundo_tittabela1.jpg); font-family:interstate, verdana, arial; font-size:10px; color:#000066; font-weight:bold; text-align:center  }
#tit_tabtri				{ height:27px; background-image:url(../images/fundo_tittabelatri.jpg); font-family:interstate, verdana, arial; font-size:10px; color:#000066; font-weight:bold; text-align:center  }
#borda_branco			{ border:1px solid #d8d8d8; border-top: 0px; background-color:#FFFFFF; font-family:interstate, verdana, arial; font-size:10px; color:#000066; font-weight:normal; height:16px; text-align:right }
#borda_branco a			{ font-family:interstate, verdana, arial; font-size:10px; color:#42AFE5; font-weight:normal;}
#borda_branco  a:hover	{ font-family:interstate, verdana, arial; font-size:10px; color:#ff3300; font-weight:normal; }
#borda_brancofixo		{ border:1px solid #d8d8d8; border-top: 0px; background-color:#FFFFFF; font-family:interstate, verdana, arial; font-size:10px; color:#EA0000; font-weight:normal; height:16px; text-align:right }
#borda_azul				{ border:1px solid #d8d8d8; border-top: 0px; background-color:#f7f7f7; font-family:interstate, verdana, arial; font-size:10px; color:#000066; font-weight:normal; height:16px; text-align:right }
#borda_azul a			{ font-family:interstate, verdana, arial; font-size:10px; color:#42AFE5; font-weight:normal;}
#borda_azul	a:hover		{ font-family:interstate, verdana, arial; font-size:10px; color:#ff3300; font-weight:normal; }
#borda_azulfixo			{ border:1px solid #d8d8d8; border-top: 0px; background-color:#f7f7f7; font-family:interstate, verdana, arial; font-size:10px; color:#EA0000;  font-weight:normal; height:16px; text-align:right }
#subtit_tab				{ height:25px; background-image:url(../images/fundo_subtittabela.gif); font-family:interstate, verdana, arial; font-size:10px; color:#000066; font-weight:bold; text-align:center  }
.menu116 				{COLOR: #666666; TEXT-DECORATION: none}
.menu116:hover 			{COLOR: #666666; TEXT-DECORATION: underline}
.font01 				{FONT-WEIGHT: normal; FONT-SIZE: 10px; FONT-STYLE: normal; FONT-FAMILY: Verdana, Arial, sans-serif}
.font02 				{FONT-WEIGHT: bold; FONT-SIZE: 10px; FONT-STYLE: normal; FONT-FAMILY: Verdana, Arial, sans-serif}
.font03 				{FONT-WEIGHT: normal; FONT-SIZE: 13px; FONT-STYLE: normal; FONT-FAMILY: Verdana, Arial, sans-serif}
.font04 				{FONT-WEIGHT: bold; FONT-SIZE: 13px; FONT-STYLE: normal; FONT-FAMILY: Verdana, Arial, sans-serif}
.font05 				{FONT-WEIGHT: normal; FONT-SIZE: 16px; FONT-STYLE: normal; FONT-FAMILY: Verdana, Arial, sans-serif}
.font06 				{FONT-WEIGHT: bold; FONT-SIZE: 16px; FONT-STYLE: normal; FONT-FAMILY: Verdana, Arial, sans-serif}
.estilo 				{BORDER-RIGHT: #6699cc 1px solid; BORDER-TOP: #6699cc 1px solid; FONT: 10px Verdana; BORDER-LEFT: #6699cc 1px solid; BORDER-BOTTOM: #6699cc 1px solid; BACKGROUND-COLOR: #ffffff}
.readonly				{BORDER-RIGHT: #6699cc 1px solid; BORDER-TOP: #6699cc 1px solid; FONT: 10px Verdana; BORDER-LEFT: #6699cc 1px solid; BORDER-BOTTOM: #6699cc 1px solid; BACKGROUND-COLOR: #eeeeee}
.style1 				{ font-weight: bold}
.style2 				{ color: #FF3300; font-weight: bold; }
#Layer1 				{ position:absolute; left:310px; top:120px; width:133px; height:55px; z-index:1; }

</style>


				<table border="0" cellpadding="0" cellspacing="0" width="80%" align="center">
				
					<tr>
						<th colspan="4" id="tit_tab_azul_1">&nbsp;UGRHI:&nbsp;
							15 - TURVO/GRANDE</th>
					</tr>
					
						<tr>
							<th colspan="4" id="tit_tab_azul_2">&nbsp;&nbsp;&nbsp;Munic&iacute;pio:&nbsp;
								Catanduva
							</th>
						</tr>
						<tr>
							<th width="30%" id="tit_tab_azul_3">ESTA&Ccedil;&Atilde;O</th>
							<th width="21%" id="tit_tab_azul_3">QUALIDADE DO AR</th>
							<th width="17%" id="tit_tab_azul_3">&Iacute;NDICE</th>
							<th width="32%" id="tit_tab_azul_3">POLUENTE</th>
						</tr>
						
						
							<tr>
								<td id="borda_azul" style="text-align:center">
									Catanduva
								</td>
								<td id='borda_amarelo' style="text-align:center">
									N2 - MODERADA</td>
								<td id="borda_azul" style="text-align:center">
									57</td>
								<td id="borda_azul" style="text-align:center">
									MP10 (Partículas Inaláveis)
								</td>
							</tr>
						
						<tr>
							<th colspan="4">
							  <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
							  <tr>
								  <th colspan="3" id="tit_tab_azul_4" style="text-align:right">Efeitos Causados &agrave; Sa&uacute;de:&nbsp;&nbsp;
								 </th>
								  <th width="70%" id="tit_tab_azul_4" style="text-align:left">&nbsp;
								  
							    	Pessoas com doenças respiratórias podem apresentar sintomas como tosse seca e cansaço.
								  
							    </th>
								</tr>
								<tr>
								  <th colspan="3" id="tit_tab_azul_4" style="text-align:right ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Como Proteger Sua Sa&uacute;de:&nbsp;&nbsp;</th>
								  <th width="70%" id="tit_tab_azul_4" style="text-align:left">&nbsp;
								  
							    	Pessoas com doenças cardíacas ou pulmonares, procurem reduzir esforço pesado ao ar livre. 
								  
							      </th>
							  </tr>
							  </table>
	  						</th>
						</tr>
						<tr>
							<th colspan="4" style="line-height:5px">&nbsp;</th>
						</tr>
					
					<tr>
						<th colspan="4" style="line-height:10px">&nbsp;</th>
					</tr>
				
				</table>