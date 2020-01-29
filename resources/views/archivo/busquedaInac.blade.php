<!-- AQUI SOLO SE COLOCA LAS ESTIQUETAS CORRESPONDIENTES A LAS TABLAS CON DATOS DE LA CONSULTA  -->	

<H1 align='center'>Resultados de la busqueda</H1>
@if($ina->isEmpty()) 
	<h2 align='center'>Lo sentimos, no hay datos disponibles</h2>	
@else
		<table class="table table-striped" id="myTable">
		<thead>
		<tr class="table-active">
		<th scope="col"><i class="mdi mdi mdi-key"></i>Id</th>
		<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Nombre(s)</th>
		<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Apellido Paterno</th>
		<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Apellido Materno</th>
		<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Edad/ Sexo</th>

		<th scope="col"><i class="mdi mdi mdi-account-card-details"></i>Curp</th>
		<th scope="col"><i class="mdi mdi-format-list-numbers"></i>Número de Afiliación</th>
		<th scope="col"><i class="mdi mdi-clippy"></i>Ubicación</th>
		<th scope="col"colspan="3" ><div align='center'><i class="mdi mdi mdi-apps"></i>Acciones</div></th>

		</tr>
		</thead>
		<!-- SE RECIBEN LOS DATOS ENVIADOS DESDE EL CONTROLADOR CARCHIVO  -->
		@foreach($ina as $pac)
		<tbody>
		<tr style="display: table-row;">
		<th class="table-active" scope="row">{{$pac->id_expediente}}</th>
		<td>{{$pac->nom_paciente}}</td>
		<td>{{$pac->ap_paciente}}</td>
		<td>{{$pac->am_paciente}}</td>
		<td>{{$pac->edad}} / {{$pac->sexo}}</td>

		<td> <a href="{{URL::action('carchivo@detalleexp',['id_expediente'=>$pac->id_expediente])}}">{{$pac->curp}}</a></td>
		<td><a href="{{URL::action('carchivo@detalleexp',['id_expediente'=>$pac->id_expediente])}}">{{$pac->num_afiliacion}} </a></td>
		<td><a href="{{URL::action('carchivo@detalleexp',['id_expediente'=>$pac->id_expediente])}}">{{$pac->ubicacion}} </a> </td>

			
			 <td><a href="{{URL::action('cexpedientes@restauraex',['id_expediente'=>$pac->id_expediente])}}">
			<i class="mdi mdi mdi-file-restore"></i> Restaurar
			</a></td>
				<td>
			<a href="{{URL::action('ccitas@agencitas',['id_expediente'=>$pac->id_expediente])}}"> 
			<i class="mdi mdi mdi-grease-pencil"></i>Agendar Cita    
			</a> 
			</td>	
			<td><a href="#" data-toggle="modal" data-target="#modifica"> 
			<i class="material-icons mdi mdi mdi-grease-pencil"> </i>
			Modificar Ubicacion </td>	
			</a>  
			
			
			 
		
			
			
			</td>
		</tr>
		</tbody>
		@include('archivo.modificacion')
		@endforeach
		</table>


		<ul class="pagination pagination-lg pager" id="myPager">
			<li>
				<a href="#" class="prev_link" style="display: none;">«</a>
			</li>
			<li class="active">
				<a href="#" class="page_link active">1</a>
			</li>
			<li class="">
				<a href="#" class="page_link">2</a>
			</li>
			<li class="">
				<a href="#" class="page_link">3</a>
			</li>
			<li>
				<a href="#" class="next_link" style="display: inline;">»</a>
			</li>
		</ul>
@endif
    <script type="text/javascript">
        $.fn.pageMe = function(opts){
    var $this = this,
        defaults = {
            perPage: 7,
            showPrevNext: false,
            hidePageNumbers: false
        },
        settings = $.extend(defaults, opts);
    
    var listElement = $this.find('tbody');
    var perPage = settings.perPage; 
    var children = listElement.children();
    var pager = $('.pager');
    
    if (typeof settings.childSelector!="undefined") {
        children = listElement.find(settings.childSelector);
    }
    
    if (typeof settings.pagerSelector!="undefined") {
        pager = $(settings.pagerSelector);
    }
    
    var numItems = children.size();
    var numPages = Math.ceil(numItems/perPage);

    pager.data("curr",0);
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
    }
    
    var curr = 0;
    while(numPages > curr && (settings.hidePageNumbers==false)){
        $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
        curr++;
    }
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
    }
    
    pager.find('.page_link:first').addClass('active');
    pager.find('.prev_link').hide();
    if (numPages<=1) {
        pager.find('.next_link').hide();
    }
  	pager.children().eq(1).addClass("active");
    
    children.hide();
    children.slice(0, perPage).show();
    
    pager.find('li .page_link').click(function(){
        var clickedPage = $(this).html().valueOf()-1;
        goTo(clickedPage,perPage);
        return false;
    });
    pager.find('li .prev_link').click(function(){
        previous();
        return false;
    });
    pager.find('li .next_link').click(function(){
        next();
        return false;
    });
    
    function previous(){
        var goToPage = parseInt(pager.data("curr")) - 1;
        goTo(goToPage);
    }
     
    function next(){
        goToPage = parseInt(pager.data("curr")) + 1;
        goTo(goToPage);
    }
    
    function goTo(page){
        var startAt = page * perPage,
            endOn = startAt + perPage;
        
        children.css('display','none').slice(startAt, endOn).show();
        
        if (page>=1) {
            pager.find('.prev_link').show();
        }
        else {
            pager.find('.prev_link').hide();
        }
        
        if (page<(numPages-1)) {
            pager.find('.next_link').show();
        }
        else {
            pager.find('.next_link').hide();
        }
        
        pager.data("curr",page);
      	pager.children().removeClass("active");
        pager.children().eq(page+1).addClass("active");
    
    }
};

$(document).ready(function(){
    
  $('#myTable').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:4});
    
});
    </script>

<div class="as-console-wrapper" align="center"> <div class="as-console"></div></div>
