<?php

$title = "Article/Poster";

require_once '../../includes/head.php';
require_once '../../includes/header.php';
require_once './controller/CreateController.php';
?>
<main class="container">

    <section class="container my-4">
        <h1 class="text-center">Poster un article</h1>
    </section>
    <section>
        <?php
        if (isset($success)) { ?>
            <div class="alert alert-success text-center" role="alert">
                <p><?= $success; ?></p>
                <p><a href="/src/post/list.php" title="Retour à la liste de message" alt="Retour à la liste de message">Retour à la liste</a></p>
            </div>
        <?php    }
        else if (isset($error)) { ?>
            <div class="alert alert-danger text-center" role="alert">
                <?= $error; ?>
            </div>

        <?php } else {  ?>
            <form method="POST" action="">
                <div class="mb-3 form-group">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="title" aria-describedby="title" name="title" placeholder="Titre de l'article">

                </div>

                <div class="mb-3 form-group">
                    <label for="author" class="form-label">Auteur</label>
                    <input type="author" class="form-control" name="author" id="author" aria-describedby="author" placeholder="Votre nom">
                </div>
                <div class="mb-3 form-group">
                    <label for="content" class="form-label">Contenu</label>
                    <textarea type="text" class="form-control" id="content" aria-describedby="content" name="content" placeholder="Ici votre article ..."></textarea>
                </div>
                <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
                <div class="text-center">
                    <button type=" submit" class="btn btn-primary ">Envoyer</button>
                </div>

            <?php } ?>

            </form>

    </section>
</main>

<?php
require_once '../../includes/footer.php';

?>