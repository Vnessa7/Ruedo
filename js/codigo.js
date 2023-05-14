function validaForm(){
	//validar 
	if (document.form.nombre.value.length==0) {
		alert("Debe ingresar su nombre");
		document.form.nombre.focus();
		return 0;
	}
	if (document.form.apellido.value.length==0) {
		alert("Debe ingresar su apellido");
		document.form.apellido.focus();
		return 0;
	}
	if (document.form.mensaje.value.length==0) {
		alert("Ingresar su mensaje");
		document.form.nombre.focus();
		return 0;
	}
	if (document.form.tele.value.length==0) {
		alert("Debe ingresar su teléfono");
		document.form.tele.focus();
		return 0;
	}
	//validar email
	var regexp = /^[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+$/
	if ((regexp.test(document.form.correo.value)=0) / (document.form.correo.value.length=0)) {
       alert("Ingrese email válido");
       document.form.correo.focus();
       return 0 ;
	} else {
		var c_email=true;
	}
	alert("Gracias por contactarnos")
	//envio de formulario
	document.form.submit();
}