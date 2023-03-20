<?php
// require_once './controller/ViewController.php';



$title = "Article/Modifier";

require_once '../../includes/head.php';
require_once '../../includes/header.php';
require_once './controller/EditController.php';

?>

<main class="container">

    <section class="container my-4">
        <h1 class="text-center">Modifier l'article</h1>
    </section>

    <section>
        
        <?php
        if ($success): ?>
            <div class="alert alert-success text-center" role="alert">
                <?= $success; ?>
            </div>
        <?php   endif ?>

        <?php if (isset($error)) : ?>
            <div class="alert alert-danger text-center" role="alert">
                <?= $error; ?>
            </div>
        <?php   else : ?>
            <form method="POST" action="">
                <div class="mb-3 form-group">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="title" aria-describedby="title" name="title" value="<?= htmlentities($post->title); ?>">

                </div>

                <div class="mb-3 form-group">
                    <label for="author" class="form-label">Auteur</label>
                    <input type="author" class="form-control" name="author" id="author" aria-describedby="author" value="<?= htmlentities($post->author); ?>">
                </div>
                <div class="mb-3 form-group">
                    <label for="content" class="form-label">Contenu</label>
                    <textarea type="text" class="form-control" id="content" aria-describedby="content" name="content" value=""><?= htmlentities($post->content); ?></textarea>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary ">Modifier</button>
                </div>

            <?php endif ?>

            </form>




    </section>
</main>
<?php
require_once '../../includes/footer.php';

?>