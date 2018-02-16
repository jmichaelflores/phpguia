$(document).ready(function () {
  //your code here


  
        //valida que solo se puedan introducir numeros
      $('#precio').keypress(function(event) {
      	    if (event.which != 46 && (event.which < 47 || event.which > 59))
      	    {
                     
                     event.preventDefault();


      	        if ((event.which == 46) && ($(this).indexOf('.') != -1)) {
      	            
                    event.preventDefault();
      	        }

      	    }

      	});
         
  

      	$("#btn").click(function(){

            //se obtine el nuevo valor ingresado para la variable precio
            var precio =$("#precio").val();

               //Se obtiene el valor solo con 2 decimales
            var precio = Math.floor(precio * 1000) / 1000;
            precio = (precio.toFixed(2));

            if( precio > 0 ){//evalua que no se encuentre vacio el campo de precio.

               //evalua si esta seleccionado un radio button y le asigna un valor
                if ($('input[name=pago]:checked', '#form').is(':checked')) {
                  
                     var pago = $('input[name=pago]:checked', '#form').val();

                     document.body.innerHTML=""; 

                     $.post("ejercicio2.php", {postprecio: precio, postpago: pago}, 
                        function(data)
                        {  
                           document.body.innerHTML=data;
                        });

                 } 
                 else {
                    
                    $("#warning2").css("display", "block").fadeOut(6000);
                    
              
                  }
            }//fin if de precio

            else{//error por si no se introduce el precio

                $("#precio").css("background-color", "rgba(248, 0, 0, 0.2)");
                 $("#warning").css("display", "block").fadeOut(6000);
                 $("#precio").focus();
            }



      	});

});