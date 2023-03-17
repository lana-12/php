<?php

$title = "Article/Liste";

require_once '../../includes/head.php';
require_once '../../includes/header.php';
require_once '../functions/function.php';
require_once './controller/ListeController.php';

?>
<main class="container">

    <section class=" mt-4">
        <h1 class="text-center">Liste des articles</h1>
    </section>

    <section class="">
        <?php
        if (isset($error)) { ?>
            <div class="alert alert-danger text-center" role="alert">
                <?= $error; ?>
            </div>

        <?php } else {  ?>
            <div class="d-flex justify-content-center flex-wrap container   ">
                <?php
                if (isset($posts)) {
                    foreach ($posts as $post) :
                        var_dump($post->id); ?>


                        <div class="card m-5 " style="width: 20rem;">
                            <h3 class="card-header text-center"><?= $post->title; ?></h3>

                            <div class="card-body">
                                <p class="card-text"><?= getWord($post->content, 50); ?></p>

                                <div class="d-flex justify-content-center">
                                    <a href="/src/post/view.php?id=<?= $post->id ?>" type="button" title="Cliquer pour accéder au détail de l'artivle" alt="Cliquer pour accéder au détail de l'artivle" class="btn btn-dark">Voir l'article</a>
                                </div>

                            </div>

                        </div>

                    <?php endforeach;
                } else {  ?>
                    <div class="alert alert-success text-center" role="alert">
                        Il n'y a aucun articles.
                    </div>
                <?php } ?>

            </div>

        <?php }; ?>

    </section>

</main>


<?php
require_once '../../includes/footer.php';

?>