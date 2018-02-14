<?php
	session_start();
	$site_name="openshop";
	$icon ="/asset/icon.png";
	$css=array("https://use.fontawesome.com/releases/v5.0.6/css/all.css","https://unpkg.com/purecss@1.0.0/build/pure-min.css","/asset/style.css");
	$designer=$author="gamgine";
	$img = "/asset/banniere.jpg";

	include("asset/bdd.php");
	$reponse = $bdd->prepare('SELECT `articles`.*,`img`.url FROM `articles`,`img` WHERE `img`.`id`= ifnull( `articles`.`img` , 0 ) ORDER by `id` limit 1,3');
	$reponse->execute();
	$articles=array();
	while ($donnees = $reponse->fetch())
	{array_push($articles, array('name'=>$donnees['name'],'prix'=>$donnees['prix'],'img'=>"/articlesimg/".$donnees['url'],'url'=>"/article.php?id=".$donnees['id'],'action'=>"action.php?a=b&id=".$donnees['id']) );}
	$reponse->closeCursor();

	$title="openshop index";
	$desc="open shop e-commerce dédié à l'open source";	
	
	include("view/index.php");