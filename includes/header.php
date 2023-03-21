<header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/src/about/index.php">A propos</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Article
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/src/post/create.php">Poster un Article</a></li>
                            <li><a class="dropdown-item" href="/src/post/list.php">Liste des Articles</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contact
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/src/contact/create.php">Poster message Contact</a></li>
                            <li><a class="dropdown-item" href="/src/contact/list.php">Liste des messages</a></li>
                        </ul>
                    </li>
                    <?php if (!isset($_SESSION['user'])) : ?>

                        <li class="nav-item">
                            <a class="nav-link" href="/src/user/login.php">Se connecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/src/user/register.php">S'incrire</a>
                        </li>

                    <?php else : ?>

                        <li class="nav-item">
                            <a class="nav-link" href="/src/user/logout.php">Se déconnecter</a>
                        </li>
                        <li class="nav-item text-white">
                            <a class="nav-link" href="#">Connecté en tant que: <?= $_SESSION['user']['name'] ?></a>
                        </li>
                    <?php endif ?>

                </ul>

            </div>
        </div>
    </nav>

</header>