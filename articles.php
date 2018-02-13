<?php
	session_start();
	$site_name="openshop";
	$icon ="/asset/icon.png";
	$css=array("https://use.fontawesome.com/releases/v5.0.6/css/all.css",
	"https://unpkg.com/purecss@1.0.0/build/pure-min.css",
	"https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css","/asset/style.css",);
	$designer=$author="gamgine";
	$img = "/asset/banniere.jpg";
	$title="articles page 1";
	$desc="cat + articles page";
	include("asset/bdd.php");
	
	//$page=(isset($_GET['p'])?intval(1):1;
	$page=1;
	if(false)
	{
	$reponse = $bdd->prepare('');
	$reponse->bindValue(':p',$page,PDO::PARAM_INT);
	}
	else
	{
	$reponse = $bdd->prepare('SELECT `articles`.*,`img`.url FROM `articles`,`img` WHERE `img`.`id`= ifnull( `articles`.`img` , 0 ) LIMIT :p,10');
	$reponse->bindValue(':p',$page,PDO::PARAM_INT);
	}
	$reponse->execute();
	$articles=array();
	while ($donnees = $reponse->fetch())
	{array_push($articles, array('name'=>$donnees['name'],/*'sdesc'=>"ttt"*/'sdesc'=>substr($donnees['txt'],0,124),'prix'=>$donnees['prix'],'img'=>"/articlesimg/".$donnees['url'],'url'=>"/article.php?a=".$donnees['id'],'action'=>"action.php?a=a&id=".$donnees['id']) );}
	$reponse->closeCursor();
	
	if(false)
	{
	$reponse = $bdd->prepare('');
	}
	else{$reponse = $bdd->prepare('SELECT count(articles.id) as n FROM `articles`;');}
	$reponse->execute();
	$donnees = $reponse->fetch();
	$pages=($donnees['n']/10)+1;
	$reponse->closeCursor();

	include("view/articles.php");