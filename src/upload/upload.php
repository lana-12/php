<?php
require_once '../../src/functions/function.php';

// On démarre la session
// session_start();

// on regarde 
// dump($_POST); // => c'est vide car c'est dans $_FILES
// dump($_FILES);
// die(); 

// A imbriquer au reste des validations du form si par ex add un avatar.
//Vérifier si file envoyé ['image'] => le name de input et que le champ error est =0 
if(isset($_FILES['image']) && $_FILES['image']['error'] === 0){
    // Image ou File bien récupéré
        //dump($_FILES);

    // On proccède aux verifications  (extension, le type, dimension, le poids...) en function des besoins
//17:00


}



$title = "Ajout/Fichier";
require_once '../../includes/head.php';
// require_once '../../includes/header.php';


?>
<main class="container">
    <section class="container my-4">
        <h1 class="text-center">Ajout de fichier</h1>
    </section>


    <section class="container ">
        
        <form  method="post" enctype="multipart/form-data">
            <div>
                <label for="file">Fichier</label>
                <input type="file"  name="image" id="file">
            </div>
            <button type="submit">Envoyer</button>
        </form>

    </section>

</main>


<?php
// require_once '../../includes/footer.php';

?>