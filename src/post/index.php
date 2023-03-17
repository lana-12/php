<?php

$title = "Article/";

require_once '../../includes/head.php';
require_once '../../includes/header.php';
require_once './PostController.php';

?>
<main class="container">

    <section class="container my-4">
        <h1 class="text-center">Liste des articles</h1>
    </section>

    <section class=" mt-5">
        <div class="d-flex justify-content-center flex-wrap container   ">
            <?php
            if (isset($posts)) {
                foreach ($posts as $post) : ?>

                    <div class="card mb-5">
                        <h3 class="card-header text-center"><?= $post->title; ?></h3>

                        <div class="card-body">
                            <h4 class="card-title"><?= $post->author; ?></h4>
                            <p class="card-text text-muted">Publié le : <?= date("d/m/Y", strtotime($post->created_At)) ; ?></p>
                            <p class="card-text"><?= $post->content; ?></p>

                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-primary">BTN</a>
                            </div>
                        </div>

                    </div>
                <?php endforeach;
            } else {
                echo "oups echo view";
            }
            ?>
        </div>

    </section>

</main>


<?php
require_once '../../includes/footer.php';

?>