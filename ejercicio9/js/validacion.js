$(document).ready(function () {
  //your code here

  		 $(document).on('change', '#tipo', function(event) {

  		 var tipo =	$("#tipo").val();

	  		 $.post("funcion.php", {posttipo: tipo}, 
	              function(data)
	              {  

	              		$("#resul").html(data);
	              });        
        });

  });