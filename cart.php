<?php
	session_start();
	if(isset($_SESSION['id']))
	{
		include("asset/bdd.php");
		$cat=array();
		$reponse = $bdd->prepare('SELECT `name` FROM `category`');
		$reponse->execute();
		while ($donnees = $reponse->fetch()){array_push($cat,$donnees['name']);}
		$site_name="openshop";
		$icon ="/asset/icon.png";
		$css=array("https://use.fontawesome.com/releases/v5.0.6/css/all.css","https://unpkg.com/purecss@1.0.0/build/pure-min.css","/asset/style.css");
		$designer=$author="gamgine";
		$img = "/asset/banniere.jpg";
		$title="openshop cart";
		$desc="open shop e-commerce dédié à l'open source";

		$reponse = $bdd->prepare('SELECT `cart`.`id` as cartid,`img`.`url`,`articles`.*,`cart`.`pay`,`cart`.`completed` FROM `cart`,`articles`,`img` WHERE `img`.`id`=ifnull(`articles`.`img`,0) and `articles`.`id`=`cart`.`aid` and `cart`.`uid`=:id order by `cart`.`pay`');
		$reponse->bindValue(':id',$_SESSION['id'],PDO::PARAM_INT);
		$reponse->execute();
		$articles=array();
		$articlesold=array();
		$total=0;
		while ($donnees = $reponse->fetch())
		{
			if(!$donnees['completed']){if(!$donnees['pay']){$total+=intval($donnees['prix']);}array_push($articles, array('name'=>htmlentities($donnees['name']),'sdesc'=>htmlentities(substr($donnees['txt'],0,124)),'prix'=>$donnees['prix'],'img'=>"/articlesimg/".$donnees['url'],'action'=>"/action/delete.html/id=".$donnees['cartid'],'state'=>$donnees['pay']));}
			else{array_push($articlesold, array('name'=>htmlentities($donnees['name']),'sdesc'=>nl2br(htmlentities(substr($donnees['txt'],0,124))),'prix'=>$donnees['prix'],'img'=>"/articlesimg/".$donnees['url'],'action'=>"/action/buy.html/id=".$donnees['id']) );}
		}
		$reponse->closeCursor();
		
		include("view/cart.php");
	}
else{header('Location: /session.php');}