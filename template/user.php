<?php
require_once __DIR__.'/../db/connection.php';

$user = getFirstUser();

if ($_REQUEST['user_id']) {
    $user = getUser($_REQUEST['user_id']);
}

function getUser($id): array
{
    $db = new SQLiteDB();
    if (!$db) echo $db->lastErrorMsg();
    $statement = $db->prepare('SELECT * FROM USERS WHERE ID=:id');
    $statement->bindValue(':id', $id);
    $result = $statement->execute()->fetchArray(SQLITE3_ASSOC);
    $db->close();

    return $result ? $result : [];
}

function getFirstUser(): array
{
    $db = new SQLiteDB();
    if (!$db) echo $db->lastErrorMsg();
    $statement = $db->prepare('SELECT * FROM USERS LIMIT 1');
    $result = $statement->execute()->fetchArray(SQLITE3_ASSOC);
    $db->close();

    return $result;
}

?>

<?php if ($user): ?>
<div class="p-4 mx-auto" id="user">
    <h1 class="display-4" id="userName"><?=$user['FULL_NAME']?></h1>
    <dl class="row m-5">
        <dt class="col-sm-3">Телефон</dt><dd class="col-sm-9" id="userTel"><?=$user['TELEPHONE']?></dd>
        <dt class="col-sm-3">Пол</dt><dd class="col-sm-9" id="userSex"><?=$user['SEX']?></dd>
        <dt class="col-sm-3">День рождения</dt><dd class="col-sm-9" id="userBirthDay"><?=$user['BIRTHDAY']?></dd>
    </dl>
    <a href="#<?=$user['ID']?>/usecase" class="btn btn-info mx-5">Действия</a>
</div>
<?php else: ?>
<div class="alert alert-danger" role="alert">
    Пользователь не найден! Выберите другого пользователя...
</div>
<?php endif; ?>