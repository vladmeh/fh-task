<?php

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('data/database.db');
    }
}
$users = getUsers();

if ($_REQUEST['user_id']){
    //$user = getUser($_REQUEST['user_id']);
    foreach ($users as $user){
        if ($user['ID'] == $_REQUEST['user_id']){
            echo json_encode($user, JSON_UNESCAPED_UNICODE);
            break;
        }
    }
    return null;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Users Actions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/fh.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Users Actions</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
<main role="main" class="container">
    <div class="row">
        <div class="col-sm-3">
            <ul class="list-group list-group-flush" id="users-list">
                <li class="list-group-item list-group-header">Пользователи</li>
                <?php foreach ($users as $user): ?>
                    <li onclick="getUser(<?= $user['ID'] ?>)" class="list-group-item list-group-item-action"><?= $user['FULL_NAME']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-sm-9">
            <div class="no-user px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Действия пользователей</h1>
                <p class="lead">Тестовое задание к собеседованию на должность Web разработчика PHP.</p>
                <p class="lead">Что бы увидеть действия выберите одного из пользователей.</p>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="container text-center">
        <span class="text-muted">&copy; 2018 VladMeh</span>
    </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</html>

<?php
    function getUsers() : array
    {
        $result = [];
        $db = new MyDB();
        if (!$db) echo $db->lastErrorMsg();
        $ret = $db->query('SELECT * FROM USERS');
        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            $result[] = $row;
        }
        $db->close();
        return $result;
    }

    function getUser($id):array
    {
        $db = new MyDB();
        if (!$db) echo $db->lastErrorMsg();
        $statement = $db->prepare('SELECT * FROM USERS WHERE ID=:id');
        $statement->bindValue(':id', $id);
        $result = $statement->execute()->fetchArray(SQLITE3_ASSOC);
        $db->close();
        return $result;
    }
?>
