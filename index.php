<?php
require_once 'vendor/autoload.php';
$title = "Accueil";
require_once 'includes/head.php';
require_once 'includes/header.php';
require_once 'src/functions/function.php';
// require_once './src/dataBase/createBDD.php';

use Database\DBConnection;


?>
    <main class="container">
        <section class="container my-4">
            <h1 class="text-center">Page Accueil</h1>
        </section>

        <section>
            <p>Projet qui me permet de pratiquer:</p>
                <ul>
                    <li>PHP</li>
                    <li>PDO</li>
                    <li>SQL</li>
                </ul>
        <?php ?>
        </section>

    </main>


<?php  
require_once './includes/footer.php';

?>