<?php
require_once __DIR__.'/../db/connection.php';

$users = getUsers();
function getUsers()
{
    $db = MysqlDB::getConnection();
    
    $result = [];
    $stmt = $db->query('SELECT * FROM USERS');
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[] = $row;
    }
    return $result;
}
?>
<div class="dropdown-menu" aria-labelledby="dropdownNavMenu">
    <?php foreach ($users as $user): ?>
        <a href="#<?= $user['ID'] ?>" onclick="getUser(<?= $user['ID'] ?>)" class="dropdown-item"><?= $user['FULL_NAME']; ?></a>
    <?php endforeach; ?>
</div>
