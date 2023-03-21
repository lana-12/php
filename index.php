<?php
// On démarre la session
session_start();

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
        <p class="mt-4">Ce projet me permet de pratiquer.</p>
    </section>
    
        <!-- <a class="nav-link" href="./src/user/register.php">S'inscrire</a>
        <a class="nav-link" href="./src/user/login.php">Connexion</a> -->

    <section class="container ">
        <div class="box">
            <h2 class="text-center pb-4">Technologie utilisées : </h2>
            <ul>
                <li>Back
                    <ul>
                        <li>PHP Procédural donc les bases</li>
                        <li>PDO</li>
                        <li>SQL</li>
                    </ul>
                </li>

                <li>Front
                    <ul>
                        <li>HTML</li>
                        <li>CSS
                            <ul>
                                <li>Revoir le footer pour le mettre en bas</li>
                            </ul>
                        </li>
                        <li>JS</li>
                    </ul>
                </li>
            </ul>

        </div>

        <div class="box">
            <h2 class="text-center pb-4">TODOLIST</h2>
            <ul>
                <li>POST</li>
                <ul>
                    <li>CRUD post => ok</li>
                    <li>Mettre une date de modification</li>
                    <li>Animation JS, article qui arrive de la gauche => A FAIRE</li>
                </ul>

                <li>Page Contact</li>
                <ul>
                    <li>Create par user => ok</li>
                    <li>View + list + sup =>ok pour si admin</li>
                    <li>répondre</li>
                </ul>


                <li>User</li>
                <ul>
                    <li>Create an user</li>
                    <li>Authentificator user</li>
                    <li>Compte user </li>
                </ul>
            </ul>
        </div>
        <?php ?>
    </section>

</main>


<?php
require_once './includes/footer.php';

?>