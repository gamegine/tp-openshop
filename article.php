<?php
	session_start();
	$site_name="openshop";
	$icon ="/asset/icon.png";
	$css=array("https://use.fontawesome.com/releases/v5.0.6/css/all.css","https://unpkg.com/purecss@1.0.0/build/pure-min.css","/asset/style.css");

	$designer=$author="gamgine";
	
	include("asset/bdd.php");
	
	$aid=intval(htmlentities($_GET['id']));
	$reponse = $bdd->prepare('SELECT `articles`.* FROM `articles` WHERE `articles`.`id`=:id');
	$reponse->bindValue(':id',$aid,PDO::PARAM_INT);
	$reponse->execute();
	$donnees = $reponse->fetch();
	$article=array('name'=>$donnees['name'],'sdesc'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit.",'prix'=>$donnees['prix'],'delivery'=>$donnees['delivery'],'desc'=>$donnees['txt'],'img'=>array(),'action'=>$donnees['id']);
	$reponse->closeCursor();
	
	$reponse = $bdd->prepare('SELECT `img`.url FROM `img` WHERE `img`.`aid`=:aid');
	$reponse->bindValue(':aid',$aid,PDO::PARAM_INT);
	$reponse->execute();
	while ($donnees = $reponse->fetch())
	{ array_push($article['img'],"/articlesimg/".$donnees['url'] ); }
	$reponse->closeCursor();
	if(!isset($article['img'][0])){$article['img']=array("articlesimg/image_non_disponible.png");}

	$img = $article['img'][0];
	$title=$article['name'];
	$desc=$article['sdesc'];
	include("view/article.php");