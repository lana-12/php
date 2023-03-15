<?php

$title = "Contact/afficher";

require_once '../../includes/head.php';
require_once '../../includes/header.php';
require_once './ContactController.php';

?>

<section class="container">
    <h1 class="text-center">Visualiser les messages contact</h1>
</section>

<section class="container">
    <div class="d-flex justify-content-center flex-wrap container   ">
        <?php
        foreach ($contacts as $contact) { ?>
            <div class="card bg-primary text-white m-5" style="width: 20rem;">
                <div class="card-body">
                    <h3 class="card-title">
                        <?= $contact->name; ?>
                    </h3>

                    <h5 class="card-subtitle mb-2 text-muted">
                        <?= $contact->email; ?>
                    </h5>
                    <p class="card-text">
                        <?= $contact->message; ?>
                    </p>
                    <div class="text-center">
                        <a href="/app/contact/view.php?id=<?= $contact->id ?>" type="button" class="btn btn-dark delete">Supprimer</a>

                        <button type="button" class="btn btn-dark " id="editBtn">Modifier</button>
                        <!-- <a href="/app/contact/edit.php" type="button" class="btn btn-dark " id="editBtn">Modifier</a> -->
                    </div>

                </div>
            </div>
        <?php } ?>

</section>
<div id="edit">

</div>
<?php
require_once '../../includes/footer.php';

?>