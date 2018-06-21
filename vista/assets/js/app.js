$(document).ready(function(){
    $('.sidenav').sidenav();
  });
$(".dropdown-trigger").dropdown();
        

$(document).ready(function(){
	
	$("#loginForm").bind("submit", function(){

		$.ajax({
			type:$(this).attr("method"),
			url:$(this).attr("action"),
			data: $(this).serialize(),
			success: function(response){

				console.log(response);

				if (response.estado == "true") {
					$("body").overhang({
  					type: "success",
  					message: "Usuario encontrado, te estamos redirigiendo...",
  					callback: function(){
  						window.location.href = "admin.php";
  					}
				});
				}else {

				$("body").overhang({
  					type: "error",
  					message: "Usuario o contraseña incorrecto"
				});
				}
				
			},
			error: function(){
				$("body").overhang({
  					type: "error",
  					message: "Usuario o contraseña incorrecto"
				});
			}

		});

		return false;
	});

});