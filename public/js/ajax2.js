$(document).ready( function(){
	Carga();
});

function Carga(){
	var tableDatos = $('#datos');
	var route = "/genres";

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tableDatos.append("<tr><td>"+value.genre+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button value="+value.id+" OnClick='Eliminar(this);'  class='btn btn-danger' >Borrar</button></td></tr>");
		});
	});
}

function Eliminar(btn){
	var route = "/genre/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers:{'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'JSON',
		success: function(){
			Carga();
			$("#msj-success").fadeIn();
		}
	});
}

function Mostrar(btn){
	var route = "/genre/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#genre").val(res.genre);
		$("#id").val(res.id);
	});
}

$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#genre").val();
	var route = "/genre/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers:{'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'JSON',
		data: {genre: dato},
		success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});