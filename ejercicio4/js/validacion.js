$(document).ready(function () {
  //your code here

    //funcion para obtener el valor del select que se ha selecionado
        $(document).on('change', '#util', function(event) {

           $('#precio').val($("#util option:selected").val());//se obtiene el valor de la opcion seleccionada
           $('#ut').hide();//se esconde la primera opcion "utiles"


           //cuando se selecciona la opcion deseada el textbox cambia a read only y se le cambia el color de fondo al input
           $('#precio').attr('readonly',true).css('background', 'rgba(3, 36, 44, 0.5)');
           $('#precio').css('color', 'white');// se le cambia el color de letra para que se pueda visualizar mejor el precio
          
        });



      $("#btn").click(function(){

          var cantidad = $('#cantidad').val();
          var msj = "hola";

           $.post("ejercicio4.php", {postcantidad: cantidad}, 
              function(data)
              {  
                  if(data==0)//se evalua si el numero retornado desde la validacion en php es 0 envia un mesaje de advertencia
                  {
                    $("#warning").css('display','block').fadeOut(6000);

                  }
                  if (data == 1) //si el retorno es 1 desde la validacion en php dibuja el msj que los parametros son correctos
                  {
                   $("#warning2").css('display','block').fadeOut(6000); 
                  }

              });          


    	});

});