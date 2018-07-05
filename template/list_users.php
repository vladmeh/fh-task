<?php
require_once __DIR__.'/../db/connection.php';
$users = getUsers();
function getUsers(): array
{
    $result = [];
    $db = new SQLiteDB();
    if (!$db) echo $db->lastErrorMsg();
    $ret = $db->query('SELECT * FROM USERS');
    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        $result[] = $row;
    }
    $db->close();
    return $result;
}
?>
<div class="dropdown-menu" aria-labelledby="dropdownNavMenu">
    <?php foreach ($users as $user): ?>
        <a href="#<?= $user['ID'] ?>" onclick="getUser(<?= $user['ID'] ?>)" class="dropdown-item"><?= $user['FULL_NAME']; ?></a>
    <?php endforeach; ?>
</div>
