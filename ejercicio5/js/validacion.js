$(document).ready(function () {
  //your code here


        //valida que solo se puedan introducir numeros en el input de la base
      $('#base').keypress(function(event) {
       
       //se evalua que si el ascii es menor 47 o mayor que 59 para evitar que sean ingresados las teclas que esten fuera del rango medio
      	    if (event.which != 46 && (event.which < 46 || event.which > 57))
      	    {
                     
                    event.preventDefault();


          //Se evalua que se pueda ingresar el punto(.) para que este pueda ser ingresado
      	        if ((event.which == 46) && ($(this).indexOf('.') != -1)) {
      	            
                    event.preventDefault();
      	        }

      	    }

      	});
      
      //valida que solo se puedan introducir numeros en el input de la potencia
        $('#potencia').keypress(function(event) {

          //se evalua que si el ascii es menor 47 o mayor que 59 para evitar que sean ingresados las teclas que esten fuera del rango medio
            if ( (event.which < 48 || event.which > 57)) 
            {
                     
                     event.preventDefault();

            }

        });
         
  

      	$("#btn").click(function(){

            //se obtine el nuevo valor ingresado para la variable base y potencia
            var base =$("#base").val();
            var potencia =$("#potencia").val();



            //se envian las variables por medio del metodo post a ejercicio5.php
           $.post("ejercicio5.php", {postpbase: base, postpotencia: potencia}, 
              function(data)
              {  
                  //se obtiene el resultado de la data que retorna php para imprimirlo en el div
                 $("#resul").html("<h3>Resultado: "+data+"</h3>");
              });

                


      	});

});