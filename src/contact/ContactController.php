<?php

require_once '../dataBase/install.php';

//mettre les message error success ds une div alerte

// Create message contact
	try {
		// if(isset($pdo)){

			if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
	
				$query = $pdo->prepare('INSERT INTO contact (name, email, message) VALUE (:name, :email, :message)');
				// var_dump($query);
				//Premiere methodes en protégeant la request
				$query->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
				$query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
				$query->bindValue(':message', $_POST['message'], PDO::PARAM_STR);
				
				//Deuxième méthodes
				// $query->execute([
				// 	'name' => $_POST['name'],
				// 	'email' => $_POST['email'],
				// 	'message' => $_POST['message'],
				// ]);
				$query->execute();
				echo $success = 'Message bien envoyé';
				header('Location: ./index.php');
				exit();
			}
		// }
	} catch (PDOException $e) {
		$error = $e->getMessage();
		echo 'Oups une erreur s\'est produite';
		die();
	}


// Display One MessageContact = findBy()
	// Verifie si id
		if(!isset($_GET["id"]) || empty($_GET["id"])){

		}

//	A FINIR
// Edit message contact
// if (isset($_GET['id'])) {
// 	try {
// 		$query = $pdo->prepare('UPDATE `contact` WHERE id =:id');
// 		// var_dump($query);
// 		$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
// 		$query->execute();
// 		echo 'Message supprimé';
// 		header('Location: ./view.php');
// 		exit();

// 	} catch (PDOException $e) {
// 		$error = $e->getMessage();
// 		echo 'Oups une erreur s\'est produite';
// 		die();
// 	}
// } 


// Delete message contact
function delete($pdo){
	if (isset($_GET['id'])) {
		try {
			$query = $pdo->prepare('DELETE FROM `contact` WHERE id =:id');
			// var_dump($query);
			$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
			$query->execute();

			// if ($query->execute()) {
			// 	echo 'La suppression a bien été effectuée';
			// } else {
			// 	$errorInfo = $query->errorInfo();
			// 	echo $errorInfo[2];
			// }

			echo 'Message supprimé';
			header('Location: ./view.php');
			exit();
		} catch (PDOException $e) {
			$error = $e->getMessage();
			echo 'Oups une erreur s\'est produite';
			die();
		}
	} 
}
// delete($pdo);


    
    

