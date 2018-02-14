<?php
	session_start();
	if(isset($_GET['a']))
	{
		if(isset($_SESSION['id']))
		{
			include("asset/bdd.php");
			switch ($_GET['a'])
			{
				case 'a':
					if(isset($_GET['id']))
					{
						$reponse = $bdd->prepare('INSERT INTO `cart`(`uid`, `aid`, `n`) VALUES (:uid, :aid, 1)');
						$reponse->bindValue(':uid',$_SESSION['id'],PDO::PARAM_INT);
						$reponse->bindValue(':aid',htmlentities($_GET['id']),PDO::PARAM_INT);
						$reponse->execute();
						$reponse->closeCursor();
						header('Location: /article.php?id='.htmlentities($_GET['id']));
					}else{header('Location: /articles.php');}
				break;
				case 'b':
					if(isset($_GET['id']))
					{
						$reponse = $bdd->prepare('INSERT INTO `cart`(`uid`, `aid`, `n`) VALUES (:uid, :aid, 1)');
						$reponse->bindValue(':uid',$_SESSION['id'],PDO::PARAM_INT);
						$reponse->bindValue(':aid',htmlentities($_GET['id']),PDO::PARAM_INT);
						$reponse->execute();
						$reponse->closeCursor();
						header('Location: /cart.php');
					}else{header('Location: /articles.php');}
				break;
				case 'r':
					if(isset($_GET['id']))
					{
						$reponse = $bdd->prepare('DELETE FROM `cart` WHERE `uid`=:uid and `id`=:id and `pay`=false');
						$reponse->bindValue(':uid',$_SESSION['id'],PDO::PARAM_INT);
						$reponse->bindValue(':id',htmlentities($_GET['id']),PDO::PARAM_INT);
						$reponse->execute();
						$reponse->closeCursor();
					}
					header('Location: /cart.php');
				break;
				default:
					header('Location: /');
			}
		}
		else{header('Location: /session.php');}
	}
	else{header('Location: /');}
