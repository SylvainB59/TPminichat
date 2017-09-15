<?php 
if(isset($_POST['pseudo']) AND isset($_POST['message']))
{
	$pseudo = strip_tags($_POST['pseudo']);
	$message = strip_tags($_POST['message']);
	
	include('connectToDb.php');

	$req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)');
	$req->execute(array(
		'pseudo' => $pseudo,
		'message' => $message
    	));
	$req->closeCursor();
}

header('Location: index.php');
?>
