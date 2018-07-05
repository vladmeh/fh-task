<!DOCTYPE html>
<html lang="en">
<?php include 'template/head.php'?>
<body>
<?php include 'template/navbar.php'?>
<main role="main" class="container">
    <div class="row">
        <div class="col-sm-3">
            <?php include 'template/list_users.php'?>
        </div>
        <div class="col-sm-9" id="content">
            <?php include 'template/user.php'?>
        </div>
    </div>
</main>
<?php include 'template/footer.php' ?>
</body>
<?php include 'template/scripts.php' ?>
</html>