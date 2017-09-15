<?php 
include('connectToDb.php');
$reponse = $bdd->query('SELECT * FROM minichat ORDER BY ID DESC LIMIT 0, 10');
 ?>
<section class="row">
	<form method="post" action="minichat_post.php" class="col s10 m8 l6 offset-s1 offset-m2 offset-l3">
		<p >
			<label for="pseudo">Pseudo : </label><br>
			<input type="text" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo" autofocus required>
		</p>
		<p>
			<label for="message">Message : </label><br>
			<input type="text" name="message" id="message" placeholder="Entrez votre message" required>
		</p>
		<input type="submit" value="Envoyer">
	</form>
</section>
<article class="row">
	<p class="col s10 m8 l6 offset-s1 offset-m2 offset-l3">
		<?php 
		while($donnees = $reponse->fetch())
		{
			echo '<strong>'.$donnees['pseudo'] . ' :</strong> ' . $donnees['message'] . '<br/>';
		}

		$reponse->closeCursor();
		?>
	</p>
</article>
