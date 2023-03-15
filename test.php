<?php

// ICI ON INSERE LES 

require_once('function.php');
require_once('header.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>TEST</title>
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
                        echo nav_menu();

                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">

    <?php
    // $entier = 5;
    // dump($entier);
    // $text = strval($entier);
    // dump($text);
    // $inv = intval($text);
    // dump($inv);

    // voir les function:
    // array_slice
    // array_splice
    // sort($ts);
    // dump(sort($ts));
    // dump(min($arratTs));
    // foreach($ts as $key => $val){
    //     echo $key. ' = '.$val. '<br>';
    // }

    // foreach($arratTs as $key => $val){
    //     echo $key. ' = '.$val. '<br>';
    // }
    $ts = [8, 6, 7, 9, 2, 12, -3, -6, -36];
    $arratTs = [8, 7, 9, 12, 26, 23, 4, 10, 90, -1, 2];

    function minTemp(array $temps)
    {
        $closest=[];
        foreach ($temps as $temp ){
            dump('1- $temp a chaque passage ' . $temp);
            if($temp === 0){
                dump('ici 2 gggg ' . $temp);
                $closest = $temp;
                echo 'La température minimal est de : '. $closest;

            }elseif($temp > 0 && $closest > $temp){
                $closest = $temp;
                echo 'La température minimal est de : ' . $closest;
                dump('3 -$temp a chaque passage ' . $temp);

            }
            // elseif ($temp < 0 && $closest < $temp){
            //     $closest = $temp;
            //     echo 'La température minimal est de : ' . $closest;
            //     dump('4 -$temp a chaque passage ' . $temp);
            // }
        
            dump('ici fin iteration $t '.$temp);
            dump('ici fin iteration $c '.$closest);
        }                    
        echo "La température minimal est de : {$closest} <br>";
        dump('ici fin foreach '.$temp);
        dump('ici fin foreach '.$closest);
    }
minTemp($arratTs);

    
?>

    </main>
</body>

</html>