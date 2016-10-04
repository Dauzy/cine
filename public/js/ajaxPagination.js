$(document).on('click', '.pagination a', function(e){
	e.preventDefault(); //se previene un evento desencadene algo
	var page = $(this).attr('href').split('page=')[1]; //split divide la cadena
	var route = "/user";
	console.log(page);

	$.ajax({
		url: route,
		data: {page: page},
		type: 'GET',
		dataType: 'JSON',
		success: function(data){
			$(".users").html(data);
		}
	});

});