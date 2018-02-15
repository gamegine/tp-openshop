<?php
	session_start();
	if(isset($_SESSION['id']))
	{
		include("asset/bdd.php");
		$site_name="openshop";
		$icon ="/asset/icon.png";
		$css=array("https://use.fontawesome.com/releases/v5.0.6/css/all.css","https://unpkg.com/purecss@1.0.0/build/pure-min.css","/asset/style.css");
		$designer=$author="gamgine";
		$img = "/asset/banniere.jpg";
		$title="sell an product";
		$desc="open shop e-commerce dédié à l'open source";
		$cat=array();
		$reponse = $bdd->prepare('SELECT `name` FROM `category`');
		$reponse->execute();
		while ($donnees = $reponse->fetch()){array_push($cat,$donnees['name']);}
		include("view/sale.php");
	}
	else{header('Location: /session.html');}