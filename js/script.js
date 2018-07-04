function getUser(id) {
	$.get("index.php", {user_id: id}, function (data) {
		console.log(data);
		$('#userName').text(data.FULL_NAME);
		$('.list-group-item').removeClass('active');
		$('#user-list-item-'+ id).addClass('active');
		$('#userInfo').html(
			'<dl class="row m-5">' +
			'<dt class="col-sm-3">Телефон</dt>' +	'<dd class="col-sm-9">'+ data.TELEPHONE +'</dd>' +
			'<dt class="col-sm-3">Пол</dt>' +	'<dd class="col-sm-9">'+ data.SEX +'</dd>' +
			'<dt class="col-sm-3">День рождения</dt>' +	'<dd class="col-sm-9">'+ data.BIRTHDAY +'</dd>' +
			'</dl>'+
			'<a href="/usecase" class="btn btn-info mx-5">Действия</a>'
		);
	}, "json");
}