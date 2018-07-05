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
            <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
        </div>
    </div>
</main>
<?php include 'template/footer.php' ?>
</body>
<?php include 'template/scripts.php' ?>
</html>