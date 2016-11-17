
function confirmLogout()
{
	if (confirm('Esta usted seguro de cerrar la sesion?'))
	{
		return true;
		
	}else{

		return false;
	}
}

//JQuery-Ajax
$(document).ready(function(){

	var _baseurl = "/panel-laravel";

	//--Eliminar Usuario--
	$(".btn-eliminar").click(function(){

		var _id = $(this).val();

		var user_status = confirm("¿Estas seguro de eliminar este registro?");

		if (user_status)
		{
			$.ajaxSetup({
		       headers: {
		           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		       }
		    });

			$.ajax({
				type: "POST",
	            url: _baseurl + "/panel/delete",
	            data: {id: _id},
	            success: function (data) {
	                //console.log(data);

	                $("#usr" + _id).remove();
	                //alert(data.mensaje);
	            },
	            error: function (data) {
	                //console.log('Error:', data);
	            }
		    });
		}

	});

	//--Agregar Usuario--
	$("#btn-agregar").click(function(){
		$("#frm-usuario").trigger("reset");
		$("#myModal").modal("show");
	});

	$("#btn-save").click(function(){

		$.ajaxSetup({
	       headers: {
	           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	       }
	    });

		$.ajax({
			type: "POST",
            url: _baseurl + "/panel/create",
            data: {
            	   nombre: $("#nombre").val(),
                   apellido: $("#apellido").val(),
                   email: $("#email").val(),
                   password: $("#password").val(), 
            	  },
            success: function (data) {

            	//console.log(data);
                //alert(data.mensaje);

                var _usuario = "<tr id='usr" + data.id + "'>";
                _usuario += "<td>" + data.id + "</td>";
            	_usuario += "<td>" + data.nombre + "</td>";
            	_usuario += "<td>" + data.apellido + "</td>";
            	_usuario += "<td>" + data.email + "</td>";
            	_usuario += "<td>" + data.password + "</td>";
            	_usuario += "<td><button class='button-link btn-eliminar' value='" + data.id + "'>Eliminar</button></td>";
            	_usuario += "</tr>";

            	$("#tbl-usuarios").append(_usuario);
                $("#myModal").modal("hide");
            },
            error: function (data) {
                //console.log('Error:', data);
            }
	    });

	});

});