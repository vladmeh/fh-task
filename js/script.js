getQueryParams();

function getQueryParams() {
	if (location.hash !== '') {
		let qp = location.hash.replace(/#/g,'');
		let qp_arr = qp.split('/');
		let userId = qp_arr[0];
		if (qp_arr.length > 1 && qp_arr[1] === 'usecase') {
			getUseCase(userId);
		}
		else {
			getUser(userId);
		}
	}
	return false;
}

function getUser(id) {
	$.get("template/user.php", {user_id: id}, function (data) {
		$('#content').html(data);
	});
}

function getUseCase(id) {
	$.get("usecase.php", {user_id:id}, function (data) {
		$('#content').html(data);
	})
}