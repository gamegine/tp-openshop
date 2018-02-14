<?php $url="/article.php"; ?>
<!doctype html>
<html lang="<?=$lang="en"?>">
<?php include('asset/head.php'); ?>
	<body>
<?php include('header.php'); ?>
		<main>
			<article class="pure-g" id="article">
				<h1 class="pure-u-1-1"><?=$article['name']?></h1>
				<div class="pure-u-1-3">
<?php foreach($article['img'] as $v){echo "					<img src=\"".$v."\" width=\"100%\">\n";} ?>
				</div>
				<div class="pure-u-2-3">
					<div>
						<p><a>vendeur</a> <a>note</a></p>
						<p><a><?=$article['prix']?> $</a> <a><?=($article['delivery']!=0)?"delivery ".$article['delivery']." $":"free delivery";?></a></p>
						<p><a href="<?=$article['action']."&a=a"?>">add to cart</a> <a href="<?=$article['action']."&a=b"?>">buy now</a></p>
					</div>
					<p>
					<?=$article['sdesc']?>
					</p>
				</div>
				<div class="pure-u-20-24">
					<p>
					<?=$article['desc']?>
					</p>
				</div>
			</article>
			<section class="pure-g">
				<h2 class="pure-u-1-1">commentary</h2>
				<ul class="pure-u-20-24">
					<li><a>username</a><p>blablabla</p></li>
					<li><a>username</a><p>blablabla</p></li>
				</ul>
			</section>
		</main>
<?php include('footer.html'); ?>	
	</body>
</html>