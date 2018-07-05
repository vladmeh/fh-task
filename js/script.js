getQueryParams();

function getQueryParams() {
	if (location.hash !== '') {
		let qp = location.hash.replace('#', '');
		let qp_arr = qp.split('/');
		if(qp_arr[0] !== 'usecase' && isFinite(qp_arr[0])){
			getUser(qp_arr[0]);
		}
	}
	return false;
}

function getUser(id) {
	$.get("template/user.php", {user_id: id}, function (data) {
		$('#content').html(data);
	});
}