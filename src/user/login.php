<?php
require_once './controller/LoginController.php';


$title = "Connexion";
require_once '../../includes/head.php';
require_once '../../includes/header.php';



?>
<main class="container">
    <section class="container my-4">
        <h1 class="text-center">Connexion</h1>

    </section>

    <section class="container ">
        <form method="POST" action="">
            
            <div class="mb-3 form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="exemple@exemple.fr">
            </div>

            <div class="mb-3 form-group">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="password">
            </div>

            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Connexion</button>
            </div>


        </form>

    </section>

</main>


<?php
require_once '../../includes/footer.php';

?>