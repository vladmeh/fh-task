function getUser(id) {
	$.get("index.php", {user_id: id}, function (data) {
		console.log(data);
	});
}