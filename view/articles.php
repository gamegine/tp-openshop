<?php $url='/articles'.((isset($_GET['cat']))?("/".htmlentities($_GET['cat']).""):'').((isset($_GET['p']))?("/page-".htmlentities($_GET['p'])):'').'.html'; ?>
<!doctype html>
<html lang="<?=$lang="en"?>">
<?php include('asset/head.php'); ?>
	<body>
<?php include('header.php'); ?>
		<main class="pure-g">
			<div class="pure-u-20-24 pure-g " id="articles">
<?php foreach($articles as $article)
{
echo '				<article class="pure-u-sm-1-1 pure-u-md-10-24 pure-u-lg-1-4 pure-u-xl-4-24 dc">
					<a href="'.$article['url'].'" class="dc"></a><img src='.$article['img'].' alt="ar img">
					<h2>'.$article['name'].'</h2><p>'.$article['sdesc'].'</p><p>'.$article['prix'].' $<p>
					<p class="link"><a href="'.$article['url'].'">see the offer</a> <a href="'.$article['action'].'">buy now</a></p>
				</article>'."\n";
}?>
				<div>
					<p>page</p>
					<ul>
<?php for ($i = 1; $i <= $pages; $i++) {echo '						<li class="ib"><a href="/articles/'.((isset($_GET['cat']))?(htmlentities($_GET['cat'])."/"):'').'page-'.$i.'.html">'.$i."</a></li>\n";}?>
					</ul>
				</div>
			</div>
		</main>
<?php include('footer.html'); ?>	
	</body>
	</html>