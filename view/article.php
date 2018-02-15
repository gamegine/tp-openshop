<?php $url="/article-".str_replace(' ', '-',$article['name'])."-".$article['action'].".html"; ?>
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
						<p><a href="<?="/action/add.html/id=".$article['action']?>">add to cart</a> <a href="<?="/action/buy.html/id=".$article['action']?>">buy now</a></p>
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
				<h2 class="pure-u-1-1">Customer Reviews</h2>
				<ul class="pure-u-20-24">
					<li><a>username</a><p>Reviews</p></li>
					<li><a>username</a><p>Reviews</p></li>
				</ul>
			</section>
		</main>
<?php include('footer.html'); ?>	
	</body>
</html>