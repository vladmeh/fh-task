<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">Users Actions</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <button class="btn btn-dark dropdown-toggle" id="dropdownNavMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Пользователи</button>
                <?php include 'list_users.php'?>
            </li>
        </ul>
    </div>
    <a class="btn btn-outline-light" href="https://github.com/vladmeh/fh-task" target="_blank" rel="noopener" aria-label="GitHub">GitHub</a>
</nav>