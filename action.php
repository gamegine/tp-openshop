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
					}else{header('Location: /articles.html');}
				break;
				case 'b':
					if(isset($_GET['id']))
					{
						$reponse = $bdd->prepare('INSERT INTO `cart`(`uid`, `aid`, `n`) VALUES (:uid, :aid, 1)');
						$reponse->bindValue(':uid',$_SESSION['id'],PDO::PARAM_INT);
						$reponse->bindValue(':aid',htmlentities($_GET['id']),PDO::PARAM_INT);
						$reponse->execute();
						$reponse->closeCursor();
						header('Location: /cart.html');
					}else{header('Location: /articles.html');}
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
					header('Location: /cart.html');
				break;
				case 's':
					if(isset($_POST['name'])&&isset($_POST['desc'])&&isset($_POST['prix']))//not sec --> verif // no img
					{
						$reponse = $bdd->prepare('INSERT INTO `articles`(`uid`,`name`, `prix`, `txt`) VALUES (:uid,:name,:prix,:desc)');
						$reponse->bindValue(':uid',$_SESSION['id'],PDO::PARAM_INT);
						$reponse->bindValue(':name',htmlentities($_POST['name']),PDO::PARAM_STR);
						$reponse->bindValue(':desc',htmlentities($_POST['desc']),PDO::PARAM_STR);
						$reponse->bindValue(':prix',htmlentities($_POST['prix']),PDO::PARAM_INT);
						$reponse->execute();
						$reponse->closeCursor();
						$_SESSION['fname']=$_SESSION['prix']=null;
					}else{header('Location: /sell.html');}
					header('Location: /');
				break;
				default:
					header('Location: /');
			}
		}
		else{header('Location: /session.html');}
	}
	else{header('Location: /');}
