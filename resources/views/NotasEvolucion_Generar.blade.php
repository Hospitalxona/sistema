
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="icon" type="image/png" href="{{asset('login/images/icons/favicon3.ico')}}"/>
<style type="text/css" media="print">
.nover {display:none}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!-- Bootstrap Core CSS -->
<link href="{{asset('HistoriaCG/jquery/bootstrap.min.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<script type="text/javascript" src="{{asset('HistoriaCG/jquery/jquery-3.2.1.js')}}"></script>  
<title>Notas de Evoluci&oacute;n</title>
</head>
<style>
.sinborde {
  border: 0;
}
</style>
<style>
.fecha {
  border: 0;
}
</style>
<script>
$(document).ready(function() {
$("#div1").click(function(){
$("#nota1").prepend("<input type='date' style='height:15px'  id='Fecha_Elaboracion1' name='Fecha_Elaboracion1' class='fecha'> <br> <input type='time'  style='height:15px' value='12:00:00' class='sinborde' id='Hora_Elaboracion1' name='Hora_Elaboracion1' not null>");
$("#cancelarnota1").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div1").empty();
$("#div2").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
    });
$("#cancelarnota1").click(function(){
$("#div1").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota1").empty();
$("#cancelarnota1").empty();
$("#div2").empty();
	});
$("#div2").click(function(){
$("#cancelarnota1").empty();
$("#nota2").prepend("<input type='date' style='height:15px'  id='Fecha_Elaboracion2' name='Fecha_Elaboracion2' class='fecha' notnull> <br> <input type='time'  style='height:15px' value='12:00:00' class='sinborde' id='Hora_Elaboracion2' name='Hora_Elaboracion2'>");
$("#cancelarnota2").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div2").empty();
$('#Nota2').prop("required", true);
$('#Nota2').removeAttr("readonly");
$("#div3").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota2").click(function(){
$("#div2").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota2").empty();
$('#Nota2').removeAttr("required");
$('#Nota2').prop("readonly", true);
$('#Nota2').val('');
$("#cancelarnota2").empty();
$("#cancelarnota1").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div3").empty();
	});//
$("#div3").click(function(){
$("#cancelarnota2").empty();
$("#nota3").prepend("<input type='date' style='height:15px'  id='Fecha_Elaboracion3' name='Fecha_Elaboracion3' class='fecha' notnull> <br> <input type='time'  style='height:15px' value='12:00:00' class='sinborde' id='Hora_Elaboracion3' name='Hora_Elaboracion3'>");
$("#cancelarnota3").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div3").empty();
$('#Nota3').prop("required", true);
$('#Nota3').removeAttr("readonly");
$("#div4").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota3").click(function(){
$("#div3").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota3").empty();
$('#Nota3').removeAttr("required");
$('#Nota3').prop("readonly", true);
$('#Nota3').val('');
$("#cancelarnota3").empty();
$("#cancelarnota2").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div4").empty();
	});//
$("#div4").click(function(){
$("#cancelarnota3").empty();
$("#nota4").prepend("<input type='date' style='height:15px'  id='Fecha_Elaboracion4' name='Fecha_Elaboracion4' class='fecha' notnull> <br> <input type='time'  style='height:15px' value='12:00:00' class='sinborde' id='Hora_Elaboracion4' name='Hora_Elaboracion4'>");
$("#cancelarnota4").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div4").empty();
$('#Nota4').prop("required", true);
$('#Nota4').removeAttr("readonly");
$("#div5").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota4").click(function(){
$("#div4").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota4").empty();
$('#Nota4').removeAttr("required");
$('#Nota4').prop("readonly", true);
$('#Nota4').val('');
$("#cancelarnota4").empty();
$("#cancelarnota3").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div5").empty();
	});//
	$("#div5").click(function(){
$("#cancelarnota4").empty();
$("#nota5").prepend("<input type='date' style='height:16px'  id='Fecha_Elaboracion5' name='Fecha_Elaboracion5' class='fecha' notnull> <br> <input type='time'  style='height:16px' value='12:00:00' class='sinborde' id='Hora_Elaboracion5' name='Hora_Elaboracion5'>");
$("#cancelarnota5").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div5").empty();
$('#Nota5').prop("required", true);
$('#Nota5').removeAttr("readonly");
$("#div6").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota5").click(function(){
$("#div5").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota5").empty();
$('#Nota5').removeAttr("required");
$('#Nota5').prop("readonly", true);
$('#Nota5').val('');
$("#cancelarnota5").empty();
$("#cancelarnota4").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div6").empty();
	});//
	$("#div6").click(function(){
$("#cancelarnota5").empty();
$("#nota6").prepend("<input type='date' style='height:17px'  id='Fecha_Elaboracion6' name='Fecha_Elaboracion6' class='fecha' notnull> <br> <input type='time'  style='height:17px' value='12:00:00' class='sinborde' id='Hora_Elaboracion6' name='Hora_Elaboracion6'>");
$("#cancelarnota6").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div6").empty();
$('#Nota6').prop("required", true);
$('#Nota6').removeAttr("readonly");
$("#div7").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota6").click(function(){
$("#div6").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota6").empty();
$('#Nota6').removeAttr("required");
$('#Nota6').prop("readonly", true);
$('#Nota6').val('');
$("#cancelarnota6").empty();
$("#cancelarnota5").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div7").empty();
	});//
	$("#div7").click(function(){
$("#cancelarnota6").empty();
$("#nota7").prepend("<input type='date' style='height:18px'  id='Fecha_Elaboracion7' name='Fecha_Elaboracion7' class='fecha' notnull> <br> <input type='time'  style='height:18px' value='12:00:00' class='sinborde' id='Hora_Elaboracion7' name='Hora_Elaboracion7'>");
$("#cancelarnota7").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div7").empty();
$('#Nota7').prop("required", true);
$('#Nota7').removeAttr("readonly");
$("#div8").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota7").click(function(){
$("#div7").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota7").empty();
$('#Nota7').removeAttr("required");
$('#Nota7').prop("readonly", true);
$('#Nota7').val('');
$("#cancelarnota7").empty();
$("#cancelarnota6").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div8").empty();
	});
	$("#div8").click(function(){
$("#cancelarnota7").empty();
$("#nota8").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion8' name='Fecha_Elaboracion8' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion8' name='Hora_Elaboracion8'>");
$("#cancelarnota8").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div8").empty();
$('#Nota8').prop("required", true);
$('#Nota8').removeAttr("readonly");
$("#div9").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota8").click(function(){
$("#div8").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota8").empty();
$('#Nota8').removeAttr("required");
$('#Nota8').prop("readonly", true);
$('#Nota8').val('');
$("#cancelarnota8").empty();
$("#cancelarnota7").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div9").empty();
	});//
$("#div9").click(function(){
$("#cancelarnota8").empty();
$("#nota9").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion9' name='Fecha_Elaboracion9' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion9' name='Hora_Elaboracion9'>");
$("#cancelarnota9").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div9").empty();
$('#Nota9').prop("required", true);
$('#Nota9').removeAttr("readonly");
$("#div10").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota9").click(function(){
$("#div9").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota9").empty();
$('#Nota9').removeAttr("required");
$('#Nota9').prop("readonly", true);
$('#Nota9').val('');
$("#cancelarnota9").empty();
$("#cancelarnota8").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div10").empty();
	});//
$("#div10").click(function(){
$("#cancelarnota9").empty();
$("#nota10").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion10' name='Fecha_Elaboracion10' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion10' name='Hora_Elaboracion10'>");
$("#cancelarnota10").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div10").empty();
$('#Nota10').prop("required", true);
$('#Nota10').removeAttr("readonly");
$("#div11").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota10").click(function(){
$("#div10").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota10").empty();
$('#Nota10').removeAttr("required");
$('#Nota10').prop("readonly", true);
$('#Nota10').val('');
$("#cancelarnota10").empty();
$("#cancelarnota9").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div11").empty();
	});//	
$("#div11").click(function(){
$("#cancelarnota10").empty();
$("#nota11").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion11' name='Fecha_Elaboracion11' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion11' name='Hora_Elaboracion11'>");
$("#cancelarnota11").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div11").empty();
$('#Nota11').prop("required", true);
$('#Nota11').removeAttr("readonly");
$("#div12").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota11").click(function(){
$("#div11").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota11").empty();
$('#Nota11').removeAttr("required");
$('#Nota11').prop("readonly", true);
$('#Nota11').val('');
$("#cancelarnota11").empty();
$("#cancelarnota10").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div12").empty();
	});//
$("#div12").click(function(){
$("#cancelarnota11").empty();
$("#nota12").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion12' name='Fecha_Elaboracion12' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion12' name='Hora_Elaboracion12'>");
$("#cancelarnota12").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div12").empty();
$('#Nota12').prop("required", true);
$('#Nota12').removeAttr("readonly");
$("#div13").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota12").click(function(){
$("#div12").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota12").empty();
$('#Nota12').removeAttr("required");
$('#Nota12').prop("readonly", true);
$('#Nota12').val('');
$("#cancelarnota12").empty();
$("#cancelarnota11").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div13").empty();
	});//	
	$("#div13").click(function(){
$("#cancelarnota12").empty();
$("#nota13").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion13' name='Fecha_Elaboracion13' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion13' name='Hora_Elaboracion13'>");
$("#cancelarnota13").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div13").empty();
$('#Nota13').prop("required", true);
$('#Nota13').removeAttr("readonly");
$("#div14").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota13").click(function(){
$("#div13").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota13").empty();
$('#Nota13').removeAttr("required");
$('#Nota13').prop("readonly", true);
$('#Nota13').val('');
$("#cancelarnota13").empty();
$("#cancelarnota12").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div14").empty();
	});//
$("#div14").click(function(){
$("#cancelarnota13").empty();
$("#nota14").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion14' name='Fecha_Elaboracion14' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion14' name='Hora_Elaboracion14'>");
$("#cancelarnota14").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div14").empty();
$('#Nota14').prop("required", true);
$('#Nota14').removeAttr("readonly");
$("#div15").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota14").click(function(){
$("#div14").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota14").empty();
$('#Nota14').removeAttr("required");
$('#Nota14').prop("readonly", true);
$('#Nota14').val('');
$("#cancelarnota14").empty();
$("#cancelarnota13").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div15").empty();
	});//
$("#div15").click(function(){
$("#cancelarnota14").empty();
$("#nota15").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion15' name='Fecha_Elaboracion15' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion15' name='Hora_Elaboracion15'>");
$("#cancelarnota15").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div15").empty();
$('#Nota15').prop("required", true);
$('#Nota15').removeAttr("readonly");
$("#div16").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota15").click(function(){
$("#div15").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota15").empty();
$('#Nota15').removeAttr("required");
$('#Nota15').prop("readonly", true);
$('#Nota15').val('');
$("#cancelarnota15").empty();
$("#cancelarnota14").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div16").empty();
	});//
$("#div16").click(function(){
$("#cancelarnota15").empty();
$("#nota16").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion16' name='Fecha_Elaboracion16' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion16' name='Hora_Elaboracion16'>");
$("#cancelarnota16").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div16").empty();
$('#Nota16').prop("required", true);
$('#Nota16').removeAttr("readonly");
$("#div17").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota16").click(function(){
$("#div16").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota16").empty();
$('#Nota16').removeAttr("required");
$('#Nota16').prop("readonly", true);
$('#Nota16').val('');
$("#cancelarnota16").empty();
$("#cancelarnota15").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div17").empty();
	});//
$("#div17").click(function(){
$("#cancelarnota16").empty();
$("#nota17").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion17' name='Fecha_Elaboracion17' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion17' name='Hora_Elaboracion17'>");
$("#cancelarnota17").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div17").empty();
$('#Nota17').prop("required", true);
$('#Nota17').removeAttr("readonly");
$("#div18").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota17").click(function(){
$("#div17").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota17").empty();
$('#Nota17').removeAttr("required");
$('#Nota17').prop("readonly", true);
$('#Nota17').val('');
$("#cancelarnota17").empty();
$("#cancelarnota16").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div18").empty();
	});//
$("#div18").click(function(){
$("#cancelarnota17").empty();
$("#nota18").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion18' name='Fecha_Elaboracion18' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion18' name='Hora_Elaboracion18'>");
$("#cancelarnota18").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div18").empty();
$('#Nota18').prop("required", true);
$('#Nota18').removeAttr("readonly");
$("#div19").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota18").click(function(){
$("#div18").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota18").empty();
$('#Nota18').removeAttr("required");
$('#Nota18').prop("readonly", true);
$('#Nota18').val('');
$("#cancelarnota18").empty();
$("#cancelarnota17").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div19").empty();
	});//
$("#div19").click(function(){
$("#cancelarnota18").empty();
$("#nota19").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion19' name='Fecha_Elaboracion19' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion19' name='Hora_Elaboracion19'>");
$("#cancelarnota19").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div19").empty();
$('#Nota19').prop("required", true);
$('#Nota19').removeAttr("readonly");
$("#div20").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota19").click(function(){
$("#div19").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota19").empty();
$('#Nota19').removeAttr("required");
$('#Nota19').prop("readonly", true);
$('#Nota19').val('');
$("#cancelarnota19").empty();
$("#cancelarnota18").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div20").empty();
	});//
$("#div20").click(function(){
$("#cancelarnota19").empty();
$("#nota20").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion20' name='Fecha_Elaboracion20' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion20' name='Hora_Elaboracion20'>");
$("#cancelarnota20").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div20").empty();
$('#Nota20').prop("required", true);
$('#Nota20').removeAttr("readonly");
$("#div21").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota20").click(function(){
$("#div20").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota20").empty();
$('#Nota20').removeAttr("required");
$('#Nota20').prop("readonly", true);
$('#Nota20').val('');
$("#cancelarnota20").empty();
$("#cancelarnota19").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div21").empty();
	});//
$("#div21").click(function(){
$("#cancelarnota20").empty();
$("#nota21").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion21' name='Fecha_Elaboracion21' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion21' name='Hora_Elaboracion21'>");
$("#cancelarnota21").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div21").empty();
$('#Nota21').prop("required", true);
$('#Nota21').removeAttr("readonly");
$("#div22").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota21").click(function(){
$("#div21").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota21").empty();
$('#Nota21').removeAttr("required");
$('#Nota21').prop("readonly", true);
$('#Nota21').val('');
$("#cancelarnota21").empty();
$("#cancelarnota20").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div22").empty();
	});//
$("#div22").click(function(){
$("#cancelarnota21").empty();
$("#nota22").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion22' name='Fecha_Elaboracion22' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion22' name='Hora_Elaboracion22'>");
$("#cancelarnota22").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div22").empty();
$('#Nota22').prop("required", true);
$('#Nota22').removeAttr("readonly");
$("#div23").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota22").click(function(){
$("#div22").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota22").empty();
$('#Nota22').removeAttr("required");
$('#Nota22').prop("readonly", true);
$('#Nota22').val('');
$("#cancelarnota22").empty();
$("#cancelarnota21").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div23").empty();
	});//
$("#div23").click(function(){
$("#cancelarnota22").empty();
$("#nota23").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion23' name='Fecha_Elaboracion23' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion23' name='Hora_Elaboracion23'>");
$("#cancelarnota23").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div23").empty();
$('#Nota23').prop("required", true);
$('#Nota23').removeAttr("readonly");
$("#div24").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota23").click(function(){
$("#div23").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota23").empty();
$('#Nota23').removeAttr("required");
$('#Nota23').prop("readonly", true);
$('#Nota23').val('');
$("#cancelarnota23").empty();
$("#cancelarnota22").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div24").empty();
	});//
$("#div24").click(function(){
$("#cancelarnota23").empty();
$("#nota24").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion24' name='Fecha_Elaboracion24' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion24' name='Hora_Elaboracion24'>");
$("#cancelarnota24").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div24").empty();
$('#Nota24').prop("required", true);
$('#Nota24').removeAttr("readonly");
$("#div25").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota24").click(function(){
$("#div24").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota24").empty();
$('#Nota24').removeAttr("required");
$('#Nota24').prop("readonly", true);
$('#Nota24').val('');
$("#cancelarnota24").empty();
$("#cancelarnota23").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div25").empty();
	});//
$("#div25").click(function(){
$("#cancelarnota24").empty();
$("#nota25").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion25' name='Fecha_Elaboracion25' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion25' name='Hora_Elaboracion25'>");
$("#cancelarnota25").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div25").empty();
$('#Nota25').prop("required", true);
$('#Nota25').removeAttr("readonly");
$("#div26").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota25").click(function(){
$("#div25").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota25").empty();
$('#Nota25').removeAttr("required");
$('#Nota25').prop("readonly", true);
$('#Nota25').val('');
$("#cancelarnota25").empty();
$("#cancelarnota24").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div26").empty();
	});//
$("#div26").click(function(){
$("#cancelarnota25").empty();
$("#nota26").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion26' name='Fecha_Elaboracion26' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion26' name='Hora_Elaboracion26'>");
$("#cancelarnota26").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div26").empty();
$('#Nota26').prop("required", true);
$('#Nota26').removeAttr("readonly");
$("#div27").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota26").click(function(){
$("#div26").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota26").empty();
$('#Nota26').removeAttr("required");
$('#Nota26').prop("readonly", true);
$('#Nota26').val('');
$("#cancelarnota26").empty();
$("#cancelarnota25").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div27").empty();
	});//
$("#div27").click(function(){
$("#cancelarnota26").empty();
$("#nota27").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion27' name='Fecha_Elaboracion27' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion27' name='Hora_Elaboracion27'>");
$("#cancelarnota27").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div27").empty();
$('#Nota27').prop("required", true);
$('#Nota27').removeAttr("readonly");
$("#div28").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota27").click(function(){
$("#div27").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota27").empty();
$('#Nota27').removeAttr("required");
$('#Nota27').prop("readonly", true);
$('#Nota27').val('');
$("#cancelarnota27").empty();
$("#cancelarnota26").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div28").empty();
	});//
$("#div28").click(function(){
$("#cancelarnota27").empty();
$("#nota28").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion28' name='Fecha_Elaboracion28' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion28' name='Hora_Elaboracion28'>");
$("#cancelarnota28").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div28").empty();
$('#Nota28').prop("required", true);
$('#Nota28').removeAttr("readonly");
$("#div29").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota28").click(function(){
$("#div28").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota28").empty();
$('#Nota28').removeAttr("required");
$('#Nota28').prop("readonly", true);
$('#Nota28').val('');
$("#cancelarnota28").empty();
$("#cancelarnota27").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div29").empty();
	});//
$("#div29").click(function(){
$("#cancelarnota28").empty();
$("#nota29").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion29' name='Fecha_Elaboracion29' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion29' name='Hora_Elaboracion29'>");
$("#cancelarnota29").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div29").empty();
$('#Nota29').prop("required", true);
$('#Nota29').removeAttr("readonly");
$("#div30").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota29").click(function(){
$("#div29").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota29").empty();
$('#Nota29').removeAttr("required");
$('#Nota29').prop("readonly", true);
$('#Nota29').val('');
$("#cancelarnota29").empty();
$("#cancelarnota28").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div30").empty();
	});//
$("#div30").click(function(){
$("#cancelarnota29").empty();
$("#nota30").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion30' name='Fecha_Elaboracion30' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion30' name='Hora_Elaboracion30'>");
$("#cancelarnota30").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div30").empty();
$('#Nota30').prop("required", true);
$('#Nota30').removeAttr("readonly");
$("#div31").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota30").click(function(){
$("#div30").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota30").empty();
$('#Nota30').removeAttr("required");
$('#Nota30').prop("readonly", true);
$('#Nota30').val('');
$("#cancelarnota30").empty();
$("#cancelarnota29").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div31").empty();
	});//
$("#div31").click(function(){
$("#cancelarnota30").empty();
$("#nota31").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion31' name='Fecha_Elaboracion31' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion31' name='Hora_Elaboracion31'>");
$("#cancelarnota31").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div31").empty();
$('#Nota31').prop("required", true);
$('#Nota31').removeAttr("readonly");
$("#div32").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota31").click(function(){
$("#div31").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota31").empty();
$('#Nota31').removeAttr("required");
$('#Nota31').prop("readonly", true);
$('#Nota31').val('');
$("#cancelarnota31").empty();
$("#cancelarnota30").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div32").empty();
	});//
$("#div32").click(function(){
$("#cancelarnota31").empty();
$("#nota32").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion32' name='Fecha_Elaboracion32' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion32' name='Hora_Elaboracion32'>");
$("#cancelarnota32").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div32").empty();
$('#Nota32').prop("required", true);
$('#Nota32').removeAttr("readonly");
$("#div33").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota32").click(function(){
$("#div32").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota32").empty();
$('#Nota32').removeAttr("required");
$('#Nota32').prop("readonly", true);
$('#Nota32').val('');
$("#cancelarnota32").empty();
$("#cancelarnota31").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div33").empty();
	});//
$("#div33").click(function(){
$("#cancelarnota32").empty();
$("#nota33").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion33' name='Fecha_Elaboracion33' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion33' name='Hora_Elaboracion33'>");
$("#cancelarnota33").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div33").empty();
$('#Nota33').prop("required", true);
$('#Nota33').removeAttr("readonly");
$("#div34").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota33").click(function(){
$("#div33").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota33").empty();
$('#Nota33').removeAttr("required");
$('#Nota33').prop("readonly", true);
$('#Nota33').val('');
$("#cancelarnota33").empty();
$("#cancelarnota32").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div34").empty();
	});//
$("#div34").click(function(){
$("#cancelarnota33").empty();
$("#nota34").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion34' name='Fecha_Elaboracion34' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion34' name='Hora_Elaboracion34'>");
$("#cancelarnota34").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div34").empty();
$('#Nota34').prop("required", true);
$('#Nota34').removeAttr("readonly");
$("#div35").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota34").click(function(){
$("#div34").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota34").empty();
$('#Nota34').removeAttr("required");
$('#Nota34').prop("readonly", true);
$('#Nota34').val('');
$("#cancelarnota34").empty();
$("#cancelarnota33").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div35").empty();
	});//
$("#div35").click(function(){
$("#cancelarnota34").empty();
$("#nota35").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion35' name='Fecha_Elaboracion35' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion35' name='Hora_Elaboracion35'>");
$("#cancelarnota35").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div35").empty();
$('#Nota35').prop("required", true);
$('#Nota35').removeAttr("readonly");
$("#div36").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota35").click(function(){
$("#div35").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota35").empty();
$('#Nota35').removeAttr("required");
$('#Nota35').prop("readonly", true);
$('#Nota35').val('');
$("#cancelarnota35").empty();
$("#cancelarnota34").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div36").empty();
	});//
$("#div36").click(function(){
$("#cancelarnota35").empty();
$("#nota36").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion36' name='Fecha_Elaboracion36' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion36' name='Hora_Elaboracion36'>");
$("#cancelarnota36").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div36").empty();
$('#Nota36').prop("required", true);
$('#Nota36').removeAttr("readonly");
$("#div37").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota36").click(function(){
$("#div36").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota36").empty();
$('#Nota36').removeAttr("required");
$('#Nota36').prop("readonly", true);
$('#Nota36').val('');
$("#cancelarnota36").empty();
$("#cancelarnota35").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div37").empty();
	});//
$("#div37").click(function(){
$("#cancelarnota36").empty();
$("#nota37").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion37' name='Fecha_Elaboracion37' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion37' name='Hora_Elaboracion37'>");
$("#cancelarnota37").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div37").empty();
$('#Nota37').prop("required", true);
$('#Nota37').removeAttr("readonly");
$("#div38").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
	});
$("#cancelarnota37").click(function(){
$("#div37").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota37").empty();
$('#Nota37').removeAttr("required");
$('#Nota37').prop("readonly", true);
$('#Nota37').val('');
$("#cancelarnota37").empty();
$("#cancelarnota36").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div38").empty();
	});//
$("#div38").click(function(){
$("#cancelarnota37").empty();
$("#nota38").prepend("<input type='date' style='height:19px'  id='Fecha_Elaboracion38' name='Fecha_Elaboracion38' class='fecha' notnull> <br> <input type='time'  style='height:19px' value='12:00:00' class='sinborde' id='Hora_Elaboracion38' name='Hora_Elaboracion38'>");
$("#cancelarnota38").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
$("#div38").empty();
$('#Nota38').prop("required", true);
$('#Nota38').removeAttr("readonly");
	});
$("#cancelarnota38").click(function(){
$("#div38").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' />");
$("#nota38").empty();
$('#Nota38').removeAttr("required");
$('#Nota38').prop("readonly", true);
$('#Nota38').val('');
$("#cancelarnota38").empty();
$("#cancelarnota37").prepend("<input name='button' type='button' class='btn btn-default btn-xs nover' value='Eliminar Ultimo' />");
	});//	
	
});	
</script> 

<body>
<div align='center'>
<form class="form-horizontal" action="{{ 'guardanota' }}" method='POST'>
{{csrf_field()}}



<div align="left"><img src="{{asset('HistoriaCG/neimage004.gif')}}" width="201" height="107"HSPACE="200" VSPACE="0"><align="right" >
<img src="{{asset('HistoriaCG/neimage003.png')}}" width="155" height="60"HSPACE="76" VSPACE="0"></div>
<div class=WordSection1>
<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext 1.5pt;
 mso-border-bottom-alt:solid windowtext 1.5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  page-break-inside:avoid;height:22.7pt'>
  <td width=712 style='width:533.95pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:22.7pt'>
<body lang=ES-MX style='tab-interval:35.4pt'>

<div class=WordSection1>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext 1.5pt;
 mso-border-bottom-alt:solid windowtext 1.5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  page-break-inside:avoid;height:21.25pt'>
  <td width=557 style='width:417.5pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:21.25pt'>
  <h5><span lang=ES>Notas de Evoluci&oacute;n</span></h5>
  </td>
  <td width=155 style='width:116.45pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:21.25pt'>
  <h1><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:12.0pt'>HOJA
  No.<input type="text"  style="WIDTH: 30px; HEIGHT:25px "class="sinborde" name="hoja" id="hoja" required>DE
 <input input type="number"  style="WIDTH: 42px; HEIGHT:25px "class="sinborde" name='de'id="de" required> </h1>
  </td>
 </tr>
</table>

<p class=MsoNormal><b><span lang=ES style='font-size:4.0pt;mso-bidi-font-size:
12.0pt;font-family:"Arial","sans-serif"'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
 mso-border-bottom-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  page-break-inside:avoid;height:25.5pt'>
  <td width=557 valign=top style='width:417.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h2 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt;page-break-after:auto'><span lang=ES
  style='font-size:7.0pt;font-weight:normal'>UNIDAD M&Eacute;DICA:</span><span
  lang=ES style='font-size:7.0pt'><o:p></o:p></span></h2>
   <select class="custom-select col-12" id="inlineFormCustomSelect" name = 'Id_unidad'>
                                        @foreach($unidades as $uni)
			<option value = '{{$uni->id_unidad}}'>{{$uni->nom_unidad}}</option>
			@endforeach
                                    </select>
   <input type="text" style="WIDTH: 400px; HEIGHT:20px "class="sinborde" id="Id_Notas" name='Id_Notas' value="{{$idns}}" hidden />
   
  </td>
  <td width=155 valign=top style='width:116.45pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h2 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt;page-break-after:auto'><span lang=ES
  style='font-size:7.0pt;font-weight:normal'>EXPEDIENTE:</span><span lang=ES
  style='font-size:7.0pt'><o:p></o:p></span></h2>
  
   <input type="text" style="WIDTH: 150px; HEIGHT:20px " class="sinborde" name="Id_expediente" id="Id_expediente"  placeholder="No Expediente" required>

  </td>
  
 </tr>
</table>
</form>
<p class=MsoNormal><b><span lang=ES style='font-size:4.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
  height:25.5pt'>
  <td width=402 colspan=4 valign=top style='width:301.2pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><span lang=ES style='font-size:7.0pt;font-family:"Arial","sans-serif"'>NOMBRE
  DEL PACIENTE (</span><span lang=ES style='font-size:6.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif"'>APELLIDO PATERNO, APELLIDO MATERNO Y
  NOMBRE(S))<o:p></o:p></span></p>
  
  
 <input type="text" style="WIDTH: 100px; HEIGHT:20px " id="Apellido_P" name="Apellido_P" class="sinborde" >
<input type="text" style="WIDTH: 100px; HEIGHT:20px " id="Apellido_M" name="Apellido_M"class="sinborde"> 
<input type="text" style="WIDTH: 150px; HEIGHT:20px " id="Nombre" name="Nombre"class="sinborde" >


  </td>
  <td width=104 colspan=2 valign=top style='width:77.95pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
<p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><span lang=ES style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-weight:bold'>EDAD:<o:p></o:p></span></p>
   <input type="text" style="WIDTH: 100px; HEIGHT:20px "class="sinborde" name='Edad' id="Edad"  />
  </td>
  <td width=206 colspan=2 valign=top style='width:154.8pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><span lang=ES style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-weight:bold'>GENERO:<o:p></o:p></span></p> 
 <input type="radio" name="Genero" id="Genero" checked value="Masculino"/> Masculino   
  <input type="radio" name="Genero" id="Genero"  value="Femenino" />Femenino
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:3.95pt'>
  <td width=712 colspan=8 valign=bottom style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:3.95pt'>
  <h3 style='margin-bottom:0cm;margin-bottom:.0001pt'><span lang=ES
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'>SIGNOS VITALES<o:p></o:p></span></h3>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:25.5pt'>
  <td width=119 valign=top style='width:88.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=FR style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;mso-ansi-language:FR;font-weight:normal'>T/A<o:p></o:p></span></h4>
     <input type="text" style="WIDTH:120px; HEIGHT:22px " id="T_A" name="T_A" class='sinborde' placeholder="T/A" required>
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=FR style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;mso-ansi-language:FR;font-weight:normal'>TEMP<o:p></o:p></span></h4>
       <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Temp" name="Temp" class='sinborde' placeholder="TEMP" required>
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>FREC. C.<o:p></o:p></span></h4>
     <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Frec_C" name="Frec_C" class='sinborde' placeholder="FREC. C" required>
  </td>
  <td width=119 colspan=2 valign=top style='width:89.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>FREC R.<o:p></o:p></span></h4>
   <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Frec_R" name="Frec_R" class='sinborde' placeholder="FREC. R" required>
  </td>
  <td width=119 colspan=2 valign=top style='width:89.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>PESO<o:p></o:p></span></h4>
     <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Peso" name="Peso" class='sinborde' placeholder="PESO" required>
  </td>
  <td width=119 valign=top style='width:89.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>TALLA</span><span lang=ES
  style='color:black'><o:p></o:p></span></h4>
    <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Talla" name="Talla" class='sinborde' placeholder="TALLA" required>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=119 style='border:none'></td>
  <td width=119 style='border:none'></td>
  <td width=119 style='border:none'></td>
  <td width=46 style='border:none'></td>
  <td width=73 style='border:none'></td>
  <td width=31 style='border:none'></td>
  <td width=88 style='border:none'></td>
  <td width=119 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal><span lang=ES style='font-size:4.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
 mso-border-bottom-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.0pt'>
  <td width=151 style='width:113.05pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 3.5pt 0cm 3.5pt;height:17.0pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:0cm;text-align:center'><b><span lang=ES
  style='font-size:9.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
  text-transform:uppercase'>FECHA Y HORA<o:p></o:p> </span></b></p>
  
  <div id='cancelarnota1'></div>
  <div id='cancelarnota2'></div><div id='cancelarnota15'></div><div id='cancelarnota28'></div>
  <div id='cancelarnota3'></div><div id='cancelarnota16'></div><div id='cancelarnota29'></div>
  <div id='cancelarnota4'></div><div id='cancelarnota17'></div><div id='cancelarnota30'></div>
  <div id='cancelarnota5'></div><div id='cancelarnota18'></div><div id='cancelarnota31'></div>
  <div id='cancelarnota6'></div><div id='cancelarnota19'></div><div id='cancelarnota32'></div>
  <div id='cancelarnota7'></div><div id='cancelarnota20'></div><div id='cancelarnota33'></div>
  <div id='cancelarnota8'></div><div id='cancelarnota21'></div><div id='cancelarnota34'></div>
  <div id='cancelarnota9'></div><div id='cancelarnota22'></div><div id='cancelarnota35'></div>
  <div id='cancelarnota10'></div><div id='cancelarnota23'></div><div id='cancelarnota36'></div>
  <div id='cancelarnota11'></div><div id='cancelarnota24'></div><div id='cancelarnota37'></div>
  <div id='cancelarnota12'></div><div id='cancelarnota25'></div><div id='cancelarnota38'></div>
  <div id='cancelarnota13'></div><div id='cancelarnota26'></div>
  <div id='cancelarnota14'></div><div id='cancelarnota27'></div>
 
  </td>
  <td width=561 style='width:420.9pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:17.0pt'>
  <h6 style='margin-top:3.0pt;margin-right:0cm;margin-bottom:1.0pt;margin-left:
  0cm'><span lang=ES>NOTAS DE EVOLUCI&Oacute;N</span></h6>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div1' name='div1'>
<center><input name='button' type='button' class='btn btn-default btn-xs nover' value='Nuevo' /></center>
  </div>
  
  <div id='nota1'></div>

  </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota1" id="Nota1" required></textarea>
  </p></td></tr>
  
  
  
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div2'></div>
       <div id='nota2'></div>
 <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
   <textarea rows="2" cols="70" class="sinborde" name="Nota2" id="Nota2" readonly></textarea></p>
  </td>
  </tr>
  
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
 <div='div3'></div>
  <div id='div3'></div>
       <div id='nota3'></div>
 </p> </td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota3" id="Nota3" readonly></textarea>
  </p> </td> </tr>

   
 
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
<div id='div4'></div>
       <div id='nota4'></div>  </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota4" id="Nota4" readonly></textarea>
  </p> </td></tr>
 

 
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
<div id='div5'></div>
       <div id='nota5'></div></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota5" id="Nota5" readonly></textarea> </p> </td></tr>
 
  
 
 
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
 <div id='div6'></div>
       <div id='nota6'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota6" id="Nota6" readonly></textarea>
  </p></td></tr>
 
 
 
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
 <div id='div7'></div>
       <div id='nota7'></div> </td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota7" id="Nota7" readonly></textarea>
  </p></td></tr>
 

 
   <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
 <div id='div8'></div>
       <div id='nota8'></div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota8" id="Nota8" readonly></textarea>
  </p></td></tr>
 
 
 
   <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div9'></div>
       <div id='nota9'></div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota9" id="Nota9" readonly></textarea>
  </p></td></tr>
  
 
  
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
 <div id='div10'></div>
       <div id='nota10'></div>  </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota10" id="Nota10" readonly></textarea>
  </p></td></tr>
  
    
   
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div11'></div>
       <div id='nota11'></div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota11" id="Nota11" readonly></textarea>
  </p></td></tr>
  
 
  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div12'></div>
       <div id='nota12'></div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota12" id="Nota12" readonly></textarea>
  </p></td></tr>

  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
   <div id='div13'></div>
       <div id='nota13'></div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota13" id="Nota13" readonly></textarea>
  </p></td></tr>

 
  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div14'></div>
       <div id='nota14'></div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota14" id="Nota14" readonly></textarea>
  </p></td></tr>

  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div15'></div>
       <div id='nota15'></div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota15" id="Nota15" readonly></textarea>
  </p></td></tr>
  
  
  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
 <div id='div16'></div>
       <div id='nota16'></div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota16" id="Nota16" readonly></textarea>
  </p></td></tr>
  
  
  
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div17'></div>
       <div id='nota17'></div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota17" id="Nota17" readonly></textarea>
  </p></td></tr>
   
</table>

<p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm'><!--[if gte vml 1]><v:shapetype id="_x0000_t202" coordsize="21600,21600"
 o:spt="202" path="m,l,21600r21600,l21600,xe">
 <v:stroke joinstyle="miter"/>
 <v:path gradientshapeok="t" o:connecttype="rect"/>
</v:shapetype><v:shape id="_x0000_s1026" type="#_x0000_t202" style='position:absolute;
 margin-left:441pt;margin-top:575.15pt;width:81pt;height:18pt;z-index:251657728;
 mso-position-horizontal-relative:text;mso-position-vertical-relative:text'
 filled="f" stroked="f"/><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:251657728;margin-left:588px;margin-top:767px;
width:112px;height:28px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=112 height=28 style='vertical-align:top'><![endif]><![if !mso]><span
  style='position:absolute;mso-ignore:vglayout;z-index:251657728'>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td><![endif]>
    <div v:shape="_x0000_s1026" style='padding:3.6pt 7.2pt 3.6pt 7.2pt'
    class=shape>
    
    </div>
    <![if !mso]></td>
   </tr>
  </table>
  </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
 </tr>
</table>

</span><![endif]><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
12.0pt;font-family:"Arial","sans-serif"'>NOTA: </span></b><span lang=ES
style='font-size:9.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif"'>TODAS
LAS NOTAS M&Eacute;DICAS DEBER&Aacute;N ESTAR FIRMADAS POR EL M&Eacute;DICO ADSCRITO DEL SERVICIO<o:p></o:p></span></p>

<p class=MsoNormal align=right style='margin-top:1.0pt;margin-right:16.15pt;
margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:right'><span
lang=ES style='font-size:7.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif"'>217B20000-016-06<o:p></o:p></span></p>

</div><br><br><br>
<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-top-alt:solid windowtext .5pt;
 mso-border-bottom-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.0pt'>
  <td width=150 style='width:112.85pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 3.5pt 0cm 3.5pt;height:17.0pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span lang=ES
  style='font-size:9.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
  text-transform:uppercase'>FECHA Y HORA<o:p></o:p></span></b></p>
  </td>
  <td width=561 style='width:421.1pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:17.0pt'>
  <h6><span lang=ES>NOTAS DE EVOLUCI&Oacute;N</span></h6>
  </td>
 </tr>
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div18'></div>
       <div id='nota18'></div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota18" id="Nota18" readonly></textarea>
  </p></td></tr>
  
   
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div19'></div>
       <div id='nota19'></div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota19" id="Nota19" readonly></textarea>
  </p></td></tr>
  

  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div20'></div>
       <div id='nota20'></div>  </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota20" id="Nota20" readonly></textarea>
  </p></td></tr>
  
   
  
   <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div21'></div>
       <div id='nota21'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota21" id="Nota21" readonly></textarea>
  </p></td></tr>
  
 
  
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div22'></div>
       <div id='nota22'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota22" id="Nota22" readonly></textarea>
  </p></td></tr>
  
  
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div23'></div>
       <div id='nota23'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota23" id="Nota23" readonly></textarea>
  </p></td></tr>
  
  
  
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div24'></div>
       <div id='nota24'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota24" id="Nota24" readonly></textarea>
  </p></td></tr>
  
  
  
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
   <div id='div25'></div>
       <div id='nota25'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota25" id="Nota25" readonly></textarea>
  </p></td></tr>
  
     
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
   <div id='div26'></div>
       <div id='nota26'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota26" id="Nota26" readonly></textarea>
  </p></td></tr>
  

  
<tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div27'></div>
       <div id='nota27'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota27" id="Nota27" readonly></textarea>
  </p></td></tr>
  
 
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
   <div id='div28'></div>
       <div id='nota28'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota28" id="Nota28" readonly></textarea>
  </p></td></tr>
 
   
 
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div29'></div>
       <div id='nota29'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota29" id="Nota29" readonly></textarea>
  </p></td></tr>
  
  
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div30'></div>
       <div id='nota30'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota30" id="Nota30" readonly></textarea>
  </p></td></tr>
  
 
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div31'></div>
       <div id='nota31'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota31" id="Nota31" readonly></textarea>
  </p></td></tr>
  
    
  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div32'></div>
       <div id='nota32'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota32" id="Nota32" readonly></textarea>
  </p></td></tr>
  

  
  <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
 <div id='div33'></div>
       <div id='nota33'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota33" id="Nota33" readonly></textarea>
  </p></td></tr>
  
    
  
   <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
 <div id='div34'></div>
       <div id='nota34'></div> </p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota34" id="Nota34" readonly></textarea>
  </p></td></tr>

  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div35'></div>
       <div id='nota35'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota35" id="Nota35" readonly></textarea>
  </p></td></tr>
  
  
   
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
 <div id='div36'></div>
       <div id='nota36'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota36" id="Nota36" readonly></textarea>
  </p></td></tr>
  
 
  
  
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:19.85pt'>
  <td width=151 valign=top style='width:113.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
  <div id='div37'></div>
       <div id='nota37'></div></p></td>
  <td width=561 valign=top style='width:420.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:19.85pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";text-transform:uppercase'><o:p>&nbsp;</o:p></span></b>
    <textarea rows="2" cols="70" class="sinborde" name="Nota37" id="Nota37" readonly></textarea>
  </p></td></tr>

</table>

<p class=MsoNormal><span lang=ES style='font-size:8.0pt;mso-bidi-font-size:
12.0pt'><o:p>&nbsp;</o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
  height:3.95pt'>
  <td width=712 colspan=6 valign=top style='width:533.95pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:3.95pt'>
  <h3 style='margin-bottom:0cm;margin-bottom:.0001pt'><span lang=ES
  style='font-size:8.0pt;mso-bidi-font-size:12.0pt'>SIGNOS VITALES<o:p></o:p></span></h3>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:25.5pt'>
  <td width=119 valign=top style='width:88.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>T/A<o:p></o:p></span></h4>
    <input type="text" style="WIDTH:120px; HEIGHT:22px " id="T_A2" name="T_A2" class='sinborde' placeholder="T/A" required>
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>TEMP.<o:p></o:p></span></h4>
  <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Temp2" name="Temp2" class='sinborde' placeholder="TEMP" required>
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>FREC. C.<o:p></o:p></span></h4>
       <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Frec_C2" name="Frec_C2" class='sinborde' placeholder="FREC. C" required>
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>FREC R.<o:p></o:p></span></h4>
  <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Frec_R2" name="Frec_R2" class='sinborde' placeholder="FREC. R" required>
  </td>
  <td width=119 valign=top style='width:89.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;color:black;font-weight:normal'>PESO:<o:p></o:p></span></h4>
   <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Peso2" name="Peso2" class='sinborde' placeholder="PESO" required>
  </td>
  <td width=119 valign=top style='width:89.0pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:25.5pt'>
  <h4 style='margin-top:1.0pt;margin-right:0cm;margin-bottom:0cm;margin-left:
  0cm;margin-bottom:.0001pt'><span lang=ES style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt'>TALLA:<o:p></o:p></span></h4>
     <input type="text" style="WIDTH:100px; HEIGHT:22px " id="Talla2" name="Talla2" class='sinborde' placeholder="TALLA" required>
  
  </td>
 </tr>
</table>
<style type="text/css">
		#abajo { display : none; }
</Style>
<div id= 'abajo'>
<p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:2.0pt;
margin-left:0cm'><!--[if gte vml 1]><v:shapetype id="_x0000_t202" coordsize="21600,21600"
 o:spt="202" path="m,l,21600r21600,l21600,xe">
 <v:stroke joinstyle="miter"/>
 <v:path gradientshapeok="t" o:connecttype="rect"/>
</v:shapetype><v:shape id="_x0000_s1026" type="#_x0000_t202" style='position:absolute;
 margin-left:441pt;margin-top:575.15pt;width:81pt;height:18pt;z-index:251657728;
 mso-position-horizontal-relative:text;mso-position-vertical-relative:text'
 filled="f" stroked="f"/><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
position:absolute;z-index:251657728;margin-left:588px;margin-top:767px;
width:112px;height:28px'>

</div>

</span><![endif]><b><span lang=ES style='font-size:9.0pt;mso-bidi-font-size:
12.0pt;font-family:"Arial","sans-serif"'>NOTA: </span></b><span lang=ES
style='font-size:9.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif"'>TODAS
LAS NOTAS M&Eacute;DICAS DEBER&Aacute;N ESTAR FIRMADAS POR EL M&Eacute;DICO ADSCRITO DEL SERVICIO<o:p></o:p></span></p>

<p class=MsoNormal align=right style='margin-top:3.0pt;margin-right:16.3pt;
margin-bottom:2.0pt;margin-left:0cm;text-align:right'><span lang=ES
style='font-size:7.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif"'>217B20000-016-06<o:p></o:p></span></p>
</form>
</div>
<style type="text/css" media="print">
.nover {display:none}
</style>
<div align="center"><input type="submit" class="btn btn-primary btn-lg nover" value="Guardar" id="Guardar" />
<input type='button' onclick='window.print();' value='Imprimir' class="btn btn-success btn-lg nover" id="imprimir" name="imprimir" />
<input value="Limpiar" onclick="history.go(0)" type="button" class="btn btn-warning btn-lg nover" >
<a href="{{URL::action('cnotas@principaln')}}"><input name="button" type="button" class="btn btn-danger btn-lg nover" value="Volver" /> </a>
</div></body>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

</td>
</div>
 

			</div>
</body>
</html>
