<?php
	session_start();
	if(isset($_SESSION['id']))
	{
		include("asset/bdd.php");
		if(isset($_POST['card']))
		{
			$nbr=htmlentities($_POST['card']);
			if((int)nbr)
			{
				$tab=array_reverse(str_split($nbr));
				foreach($tab as $a=>$b)
				{
					if((int)$a%2!=0)
					{
						$temp=$b*2;
						($temp>9)?$temp=array_sum(str_split($temp)):null;
						$tab[$a]=$temp;
					}
					else{$tab[$a]=(int)$b;
					}
				}
				if( array_sum($tab)%10!=0 )//card val
				{
					$reponse = $bdd->prepare('UPDATE `cart` SET `pay`=1 WHERE `uid`=:uid');
					$reponse->bindValue(':uid',$_SESSION['id'],PDO::PARAM_INT);
					$reponse->execute();
					$reponse->closeCursor();
					header('Location: /cart.html');
				}
			}else{$_SESSION['card']=$nbr;header('Location: /transaction.html');}
		}
		$site_name="openshop";
		$icon ="/asset/icon.png";
		$css=array("https://use.fontawesome.com/releases/v5.0.6/css/all.css","https://unpkg.com/purecss@1.0.0/build/pure-min.css","/asset/style.css");
		$designer=$author="gamgine";
		$img = "/asset/banniere.jpg";
		$title="finish the purchase transaction";
		$desc="open shop e-commerce dédié à l'open source";	
		
		$cat=array();
		$reponse = $bdd->prepare('SELECT `name` FROM `category`');
		$reponse->execute();
		while ($donnees = $reponse->fetch()){array_push($cat,$donnees['name']);}
		
		include("view/transaction.php");
	}
else{header('Location: /session.html');}	