<?php $url="/articles.php"; ?>
<!doctype html>
<html lang="<?=$lang="en"?>">
<?php include('asset/head.php'); ?>
	<body>
<?php include('header.php'); ?>
		<main class="pure-g">
			<section class="pure-u-20-24 pure-g" id="articles">
				<article class="pure-u-1-4">
					<img src="./articlesimg/arimg.jpg" alt="ar img" width="100%">
					<h2>article name</h2>
					<p>article short desc</p>
					<p class="link">
						<a href="/article.php">see the offer</a>
						<a href="#">buy now</a>
					</p>
				</article>
			</section>
		</main>
<?php include('footer.html'); ?>	
	</body>
</html>