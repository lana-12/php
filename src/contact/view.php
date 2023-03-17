<?php
require_once './controller/ViewController.php';


$title = "Message/" . $contact->name;

require_once '../../includes/head.php';
require_once '../../includes/header.php';
require_once '../functions/function.php';

?>

<main class="container">
    <section class="container mt-4">
        <h1 class="text-center">Message de :</h1>
        <h2 class="text-center"> <?= $contact->name ?></h2>

        <p class="text-muted">
            <a href="mailto:<?= $contact->email ?>" title="Cliquer ici pour répondre au message" alt="Cliquer ici pour répondre au message">
                <?= $contact->email ?>
            </a>
        </p>

        <p>Reçu le: <?= dateFormat($contact->created_At); ?></p>
        <p class="text-justify"><?= $contact->message ?></p>

        <div class="text-center">
            <a href="/src/contact/delete.php?id=<?= $contact->id ?>" type="button" title="Cliquer pour supprimer le message" alt="Cliquer pour supprimer le message" class="btn btn-dark">Supprimer</a>
        </div>

    </section>

</main>

<?php
require_once '../../includes/footer.php';

?>