<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=pokemon;charset=UTF8','root','');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		die('Erreur'.$e->getMessage());
	}
?>