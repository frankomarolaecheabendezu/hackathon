$("#frmAcceso").on('submit', function(e){
	e.preventDefault();
	username=$("#username").val();
	password=$("#password").val();

	$.post("./controlador/C_Usuario.php?op=verificar",{"username":username, "password":password}, function(data){
		
		if(data!=null){
			$(location).attr("href","bienvenido.php");
			console.log("hola");
		}else{
			$(location).attr("href","no.php");
			
			console.log("hola usuario no registrado");
			}
	});
})