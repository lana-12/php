<?php
require_once './controller/ListeController.php';

// TODOLIST
// AMINATION JS QUI ARRIVE DE LA GAUCHE

$title = "Article/Liste";

require_once '../../includes/head.php';
require_once '../../includes/header.php';
require_once '../functions/function.php';

?>
<main class="container">

    <section class=" mt-4">
        <h1 class="text-center">Liste des articles</h1>
    </section>

    <section class="">
        <?php
        if (isset($error)) : ?>
            <div class="alert alert-danger text-center" role="alert">
                <?= $error; ?>
                <p><a href="../../index.php" title="Retour à l'accueil " alt="Retour à l'accueil ">Retour à l'accueil </a></p>
            </div>

        <?php else :  ?>
            <div class="d-flex justify-content-center flex-wrap container   ">
                <?php
                if (isset($posts)) :
                    foreach ($posts as $post) :
                ?>
                    <div class="card m-5 posts" style="width: 20rem;">
                        <h3 class="card-header text-center"><?= $post->title; ?></h3>

                        <div class="card-body">
                            <p class="card-text"><?= getWord($post->content, 30); ?></p>

                            <div class="d-flex justify-content-center">
                                <a href="/src/post/view.php?id=<?= $post->id ?>" type="button" title="Cliquer pour accéder au détail de l'artivle" alt="Cliquer pour accéder au détail de l'artivle" class="btn btn-dark">Lire la suite</a>
                            </div>

                        </div>

                    </div>

                    <?php endforeach;
                else :  ?>
                    <div class="alert alert-success text-center" role="alert">
                        Il n'y a aucun articles.
                    </div>
                <?php endif ?>

            </div>

        <?php endif ?>

    </section>

</main>


<?php
require_once '../../includes/footer.php';

?>