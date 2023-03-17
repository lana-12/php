<?php
require_once './controller/ViewController.php';


$title = $post->title;

require_once '../../includes/head.php';
require_once '../../includes/header.php';
require_once '../functions/function.php';

?>

<main class="container">
    <section class="container mt-4">
        <h1 class="text-center"><?= $post->title ?></h1>

        <p class="text-muted">
            Ecrit par : <?= $post->author ?>
        </p>

        <p class="text-muted">Date de l'article : <?= dateFormat($post->created_At); ?>
        </p>
        
        <p class="text-justify"><?= $post->content ?></p>

        <div class="text-center">
            <a href="/src/post/edit.php?id=<?= $post->id ?>" type="button" title="Cliquer pour modifier l'article" alt="Cliquer pour modifier l'article" class="btn btn-dark">Modifier</a>
            <a href="/src/post/delete.php?id=<?= $post->id ?>" type="button" title="Cliquer pour supprimer l'article" alt="Cliquer pour supprimer l'article" class="btn btn-dark">Supprimer</a>
        </div>

    </section>

</main>

<?php
require_once '../../includes/footer.php';

?>