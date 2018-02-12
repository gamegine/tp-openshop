<?php
	$site_name="openshop";
	$icon ="/asset/icon.png";
	$css=array("https://use.fontawesome.com/releases/v5.0.6/css/all.css","https://unpkg.com/purecss@1.0.0/build/pure-min.css","/asset/style.css");
	$designer=$author="gamgine";
	$img = "/asset/banniere.jpg";

	$article=array('name'=>"article name",'sdesc'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit.",'prix'=>250,'img'=>"/articlesimg/arimg.jpg",'url'=>"/article.php");
	
	$articles=array($article,$article,$article);
	$title="openshop index";
	$desc="open shop e-commerce dédié à l'open source";	

	include("view/index.php");