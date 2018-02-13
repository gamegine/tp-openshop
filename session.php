<?php
	session_start();
	$site_name="openshop";
	$icon ="/asset/icon.png";
	$css=array("https://use.fontawesome.com/releases/v5.0.6/css/all.css","https://unpkg.com/purecss@1.0.0/build/pure-min.css","/asset/style.css");
	$designer=$author="gamgine";
	$img = "/asset/banniere.jpg";

	$title="login/register";
	
	if(true)
	{
		if(!isset($_SESSION['id']))
		{$_SESSION['id']=0;$_SESSION['name']="gamgine";}
		else{session_destroy();}
		header('Location: /');
	}
	else{include("view/session.php");}