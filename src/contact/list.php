<?php

$title = "Contact/Liste";

require_once '../../includes/head.php';
require_once '../../includes/header.php';
require_once './controller/ListeController.php';

?>
<main class="container">
    <section class="container mt-4">
        <h1 class="text-center">Liste des messages contact</h1>
    </section>

    <section class="container">
        <?php
        if (isset($error)) { ?>
            <div class="alert alert-danger text-center" role="alert">
                <?= $error; ?>
            </div>

        <?php } else {  ?>
            <div class="d-flex justify-content-center flex-wrap container   ">
                <?php

                if (isset($contacts)) {
                    foreach ($contacts as $contact) : ?>
                        <div class="card bg-primary text-white m-5" style="width: 20rem;">
                            <div class="card-body">
                                <h3 class="card-title">De:
                                    <?= $contact->name; ?>
                                </h3>
                                <h3 class="card-title">Email:
                                    <?= $contact->email; ?>
                                </h3>
                                <p class="card-text text-muted">Envoyé le : <?= date("d/m/Y", strtotime($contact->created_At)); ?></p>
                                <p class="card-text">
                                    <?= $contact->message; ?>
                                </p>
                                <div class="text-center">
                                    <a href="/app/contact/view.php?id=<?= $contact->id ?>" type="button" class="btn btn-dark">Détail</a>

                                    <!-- <a href="/app/contact/view.php?id=<?= $contact->id ?>" type="button" class="btn btn-dark delete">Supprimer</a>

                                <button type="button" class="btn btn-dark " id="editBtn">Modifier</button> -->
                                    <!-- <a href="/app/contact/edit.php" type="button" class="btn btn-dark " id="editBtn">Modifier</a> -->
                                </div>
                            </div>
                        </div>
                    <?php endforeach;

                } else {  ?>
                    <div class="alert alert-danger text-center" role="alert">
                        Vous n'avez aucun message.
                    </div>
                <?php } ?>

            </div>

        <?php } ?>
        
    </section>

</main>
<?php
require_once '../../includes/footer.php';

?>