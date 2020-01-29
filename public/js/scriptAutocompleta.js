
/***************************************************** */
function autocompletar(identificador){
    var query = $("#p_buscar").val(); //Valor de la caja de texto 
    if(query != '')  
    {  
        $.ajax({  
            url:"php/search.php",  //Busqueda en la base de datos y creacion de lista
            method:"POST",  
            data:{query:query},  
            success:function(data)  
            {  
                $('#lista'+identificador).fadeIn().css("opacity","1").removeAttr("hidden");  //Muestra la lista
                $('#lista'+identificador).html(data);  //Coloca datos de la base
                $('#lista'+identificador+" dl dt").each(function(index, item){
                    $(item).attr("onclick","seleccion('"+ $(item).html() +"',"+identificador+")");
                });
                $(document).on('click', 'body', function(){  
                    $('#lista'+identificador).html("");
                });  
            }  
        });  
    } 
}
function seleccion(texto ,idConte){
    $("#p_buscar").val(texto);  
    $("#lista"+idConte).html("");
}


/************************************************************ */

function autocompletarMedicamento(identificador){
    var query = $("#Nombre_M"+identificador).val(); //Valor de la caja de texto 
    if(query != '')  
    {  
        $.ajax({  
            url:"php/searchMedicamento.php",  //Busqueda en la base de datos y creacion de lista
            method:"POST",  
            data:{query:query},  
            success:function(data)  
            {  
                $('#listaMedi'+identificador).fadeIn().css("opacity","1").removeAttr("hidden");  //Muestra la lista
                $('#listaMedi'+identificador).html(data);  //Coloca datos de la base
                $('#listaMedi'+identificador+" dl dt").each(function(index, item){
                    $(item).attr("onclick","seleccionMedicamento('"+ $(item).html() +"',"+identificador+")");
                });
                $(document).on('click', 'body', function(){  
                    $('#listaMedi'+identificador).html("");
                });  
            }  
        });  
    } 
}
function seleccionMedicamento(texto ,idConte){
    $("#Nombre_M"+idConte).val(texto);  
    $("#listaMedi"+idConte).html("");
}

