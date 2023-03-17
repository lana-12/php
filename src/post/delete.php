<?php
require_once './controller/DeleteController.php';


$title = "Article/Supprimer";

require_once '../../includes/head.php';
require_once '../../includes/header.php';

?>

<main class="container">
    <section class="container mt-4">
        <div class="alert alert-success text-center" role="alert">
            <p><?= $success; ?></p>
            <p><a href="/src/post/list.php" title="Retour à la liste de message" alt="Retour à la liste de message">Retour à la liste</a></p>
        </div>
    </section>

</main>
<?php
require_once '../../includes/footer.php';

?>