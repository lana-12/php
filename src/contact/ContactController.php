<?php

require_once '../dataBase/install.php';

//mettre les message error success ds une div alerte




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


    
    

