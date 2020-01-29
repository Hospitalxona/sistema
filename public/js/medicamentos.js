  
function autocompletaar(identificador){
    var query = $("#Clave_M"+identificador).val(); //Valor de la caja de texto 
    if(query != '')  
    {  
        $.ajax({  
            url:"php/mbuscar.php",  //Busqueda en la base de datos y creacion de lista
            method:"POST",  
            data:{query:query},  
            success:function(data)  
            {  
                $('#listaMedi'+identificador).fadeIn().css("opacity","1").removeAttr("hidden");  //Muestra la lista
                $('#listaMedi'+identificador).html(data);  //Coloca datos de la base
            }  
        });  
    } 
    $(document).on('click', 'dt', function(){  
        /*Selecciona un dato y coloca texto en la caja de texto */
            $('#Clave_M'+identificador).val($(this).text());  
            $('#listaMedi'+identificador).html("");
    });  
    $(document).on('click', 'body', function(){  
        $('#listaMedi'+identificador).html("");
    });  
}
