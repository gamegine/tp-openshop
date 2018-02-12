<?php
	$site_name="openshop";
	$icon ="/asset/icon.png";
	$css=array("https://use.fontawesome.com/releases/v5.0.6/css/all.css","https://unpkg.com/purecss@1.0.0/build/pure-min.css","/asset/style.css");

	$designer=$author="gamgine";
	
	$arimg=array("/articlesimg/arimg.jpg");
	$article=array('name'=>"article name",'sdesc'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit.",'prix'=>250,'desc'=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Cum, tempore, amet temporibus unde deleniti quos recusandae architecto nostrum facere voluptas nam corporis mollitia nesciunt atque repellat incidunt repudiandae pariatur deserunt?</span><span>Deleniti, voluptatem corporis dicta vel perferendis. Voluptatibus, reprehenderit quibusdam in cum blanditiis necessitatibus id ullam ab. Minima, fugiat, quibusdam repellat quaerat veniam dolores repellendus hic vero! Quam aliquid impedit quos.",'img'=>$arimg);
	
	
	$img = $arimg[0];
	$title=$article['name'];
	$desc=$article['sdesc'];
	include("view/article.php");