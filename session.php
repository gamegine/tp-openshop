<?php
	session_start();
	$site_name="openshop";
	$icon ="/asset/icon.png";
	$css=array("https://use.fontawesome.com/releases/v5.0.6/css/all.css","https://unpkg.com/purecss@1.0.0/build/pure-min.css","/asset/style.css");
	$designer=$author="gamgine";
	$img = "/asset/banniere.jpg";
	$title="login/register";
	
	if(isset($_SESSION['id'])){session_destroy();header('Location: /');}
	elseif(/*isset($_POST) && !empty($_POST)*/$_SERVER['REQUEST_METHOD']=='POST')
	{
		include("asset/bdd.php");
		$_SESSION['f_mail']=(isset($_POST['mail']))?htmlentities($_POST['mail']):$_SESSION['f_mail'];
		if($_POST['a']=="l")
		{
			if(!empty($_POST['mail']) && !empty($_POST['mdp']))
			{
				/*$_SESSION['id']=1;$_SESSION['name']="gamgine";
					
					$_SESSION['f_mail']=$_SESSION['msg'] = null;
				header('Location: /');*/
				$reponse = $bdd->prepare('SELECT * FROM `users` WHERE `mail`=:mail');
				$reponse->bindValue(':mail',$_POST['mail'],PDO::PARAM_STR);
				$reponse->execute();
				if($donnees = $reponse->fetch())
				{
					if(password_verify($_POST['mdp'], $donnees['mdp']))
					{
						$_SESSION['id'] = $donnees['id'];
						$_SESSION['name'] = htmlentities($donnees['name']);
						$_SESSION['f_mail']=$_SESSION['mail'] = null;
						header('Location: /');
					}
					else
					{
						$_SESSION['msg'] = 'bad pass';
						$_SESSION['f_mail'] = $_SESSION['mail'];
						header('Location: /session.php');
					}
				}
				else
				{
					$_SESSION['msg'] = 'user not fund';
					$_SESSION['f_mail'] = $_SESSION['mail'];
					header('Location: /session.php');
				}	
			}else{$_SESSION['msg'] = 'missing item';header('Location: /session.php');}
		}
		elseif($_POST['a']=="r")
		{
			if(!empty($_POST['name'])&&!empty($_POST['mail'])&&!empty($_POST['mdp']))
			{
				$name = htmlentities($_POST['name']);
				$mail = htmlentities($_POST['mail']);
				$reponse = $bdd->prepare('SELECT * FROM `users` WHERE `mail`=:mail');
				$reponse->bindValue(':mail',$mail,PDO::PARAM_STR);
				$reponse->execute();
				if($donnees = $reponse->fetch())
				{
					$_SESSION['msg'] = 'user_exist';
					header('Location: /session.php');
				}
				else
				{
					$reponse = $bdd->prepare('INSERT INTO `users`(`name`, `mail`, `mdp`) VALUES (:name,:mail,:mdp)');
					$reponse->bindValue(':name',$name,PDO::PARAM_STR);
					$reponse->bindValue(':mail',$mail,PDO::PARAM_STR);
					$options = ['cost' => 12,];
					$reponse->bindValue(':mdp',password_hash($_POST['mdp'], PASSWORD_BCRYPT, $options),PDO::PARAM_STR);
					$reponse->execute();
					$reponse->closeCursor();
					$_SESSION['id'] = $bdd->lastInsertId();
					$_SESSION['name'] = $name;
					
					$_SESSION['f_mail']=$_SESSION['msg'] = null;
					header('Location: /');
				}
			}else{$_SESSION['msg'] = 'missing item';header('Location: /session.php');}
		}else{header('Location: /session.php');}
	}else{include("view/session.php");}	