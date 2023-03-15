<?php

        // ICI ON INSERE LES 
        // $title = 'Page d\'Accueil';

        //  superGlobal  = $_server
        // $nav = 'index';
require_once('./app/Functions/function.php');
require_once('elements/header.php');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <title>PHP</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">

            <div class="container-fluid">
                <a class="navbar-brand " href="#">Mon site</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <ul class="navbar-nav">

                        <?php
                        // echo nav_menu();
                        ?>



                    </ul>
                </div>
            </div>
        </nav>

        


    </header>
    <?php

    // create var environnement
    // putenv('host=localhost');
    // foreach (getenv() as $key => $value) {
    //     echo "[$key] => $value<br>";
    // }


    ?>
    <main class="container">
        <h1>Démarrer un projet avec php !!</h1>

        <h2>
            

        </h2>
        <form method="POST">
            <div class=" mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="prenom">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Nombre</label>
                <input type="number" name="number" class="form-control" id="number">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Année</label>
                <input type="year" name="year" class="form-control" id="year">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
        isPair(intval($_POST["number"]));
        $entier = $_POST["number"];
        dump(is_int($entier));
        function election(string $annee)
        {
            if ($annee >= 2007) {
                if (($annee - 2007) % 5 === 0) {
                    echo 'L\'année ' . $annee . ' est une année d\'élection ';
                } else {
                    echo 'Pas d\'élection cette année : ' . $annee;
                }
            } else {
                echo $annee . "est trop petit";
            }
            // dump($annee);
        }
        election(intval($_POST["year"]));
        // dump($test);
        // echo election(2032);
        // if (!empty($_POST)) {
        //     if (empty($_POST["name"]) || empty($_POST["prenom"]) || empty($_POST["number"])) {
        //         echo "veuillez remplir les trois champs !!";
        //     } else {
        //         isPair($_POST["number"]);
        //         // echo "merci pour votre message !";
        //     }
        // }
        // dump($_POST['name']);
        // dump($_POST['prenom']);
        // dump($_POST['number']);
        // var_dump($_SERVER['REQUEST_METHOD']);
        ?>
        <?php
        $ts = [8, 6, 7, 9, 2, 12, 0];
        // echo closestToZero($ts);

        for ($i = 0; $i < count($ts); $i++) {
            $t = 0;
            if ($t === 0) {
                $t = $ts[$i];
            } elseif ($ts[$i] < $t && $ts[$i] > $t) {
                $t = $ts[$i];
            }
            return $t;
        }

        function closestToZero(array $ts)
        {
            if (empty($ts)) {
                return 0;
            }

            $closest = 0;

            for ($i = 0; $i < count($ts); $i++) {
                if ($closest === 0) {
                    $closest = $ts[$i];
                } else if ($ts[$i] > 0 && $ts[$i] <= abs($closest)) {
                    $closest = $ts[$i];
                } else if ($ts[$i] < 0 && -$ts[$i] >= abs($closest)) {
                    $closest = $ts[$i];
                }
            }
            return $closest;
        }
        echo 'closestToZero($ts)hello';
        $test = closestToZero($ts);
        dump($test);
        /* Ignore and do not change the code above */


        ?>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>

</html>