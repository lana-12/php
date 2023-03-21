<?php
require_once './controller/ProfileController.php';

$title = $_SESSION['user']['name'];
require_once '../../includes/head.php';
require_once '../../includes/header.php';

?>
<main class="container">
    <section class="container my-4">
        <h1 class="text-center">Mon Espace Client</h1>

    </section>

    <section class="container ">
        <h2>Bienvenue <?= $_SESSION['user']['name'] ?> </h2>
        <p>Pseudo : <?= $_SESSION['user']['name'] ?></p>
        <p>Email : <?= $_SESSION['user']['email'] ?></p>
    </section>

</main>

<?php
require_once '../../includes/footer.php';

?>