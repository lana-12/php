<?php

$title = "Contact";

require_once '../../includes/head.php';
require_once '../../includes/header.php';
require_once './controller/CreateController.php';

?>
<main class="container">

    <section class="container my-3">
        <h1 class="text-center">Nous contacter</h1>
    </section>

    <section class="container">
        <?php
        if (isset($error)) { ?>
            <div class="alert alert-danger text-center" role="alert">
                <?= $error; ?>
            </div>

        <?php } else {  ?>
            <form method="POST" action="">
                <div class="mb-3 form-group">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name" placeholder="Votre nom ...">

                    <!-- <div id="name" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>

                <div class="mb-3 form-group">
                    <label for="email" class="form-label">Votre Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="exemple@exemple.fr">

                    <!-- <div id="email" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                
                <div class="mb-3 form-group">
                    <label for="message" class="form-label">Votre message</label>
                    <textarea type="text" class="form-control" id="message" aria-describedby="message" name="message" placeholder="Tapez votre message..."></textarea>
                </div>
                <!-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>

                <?php } ?>
            </form>
    </section>
    
</main>

<?php
require_once '../../includes/footer.php';

?>