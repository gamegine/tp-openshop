<?php
	session_start();
	include("asset/bdd.php");
	$site_name="openshop";
	$icon ="/asset/icon.png";
	$css=array("https://use.fontawesome.com/releases/v5.0.6/css/all.css","https://unpkg.com/purecss@1.0.0/build/pure-min.css","/asset/style.css");
	$designer=$author="gamgine";
	$img = "/asset/banniere.jpg";
	$title="openshop index";
	$desc="open shop e-commerce dédié à l'open source";

	$reponse = $bdd->prepare('SELECT `cart`.`id` as cartid,`img`.`url`,`articles`.*,`cart`.`pay`,`cart`.`completed` FROM `cart`,`articles`,`img` WHERE `img`.`id`=ifnull(`articles`.`img`,0) and `articles`.`id`=`cart`.`aid` and `cart`.`uid`=:id');
	$reponse->bindValue(':id',1,PDO::PARAM_INT);
	$reponse->execute();
	$articles=array();
	while ($donnees = $reponse->fetch())
	{array_push($articles, array('name'=>$donnees['name'],'sdesc'=>substr($donnees['txt'],0,124),'prix'=>$donnees['prix'],'img'=>"/articlesimg/".$donnees['url'],'action'=>"action.php?a=r&id=".$donnees['cartid']) );}
	$reponse->closeCursor();

	include("view/cart.php");