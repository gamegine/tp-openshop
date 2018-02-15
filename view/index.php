<?php $url="/"; ?>
<!doctype html>
<html lang="<?=$lang="en"?>">
<?php include('asset/head.php'); ?>
	<body>
<?php include('header.php'); ?>
		<main class="pure-g">
			<section class="pure-u-24-24" id="mostpopular">
				<!--h2>most popular articles</h2-->
				<h2>last articles</h2>
				<section class="pure-g " id="articles">
<?php 
foreach($articles as $article)
{
echo '					<article class="pure-u-1-4 dc">
						<a href="'.$article['url'].'" class="dc"></a><img src='.$article['img'].' alt="ar img" width="100%" style="height: 14vw;">
						<h2>'.$article['name'].'</h2>
						<p class="link"><a href="'.$article['url'].'">see the offer</a> <a href="'.$article['action'].'">buy now</a></p>
					</article>'."\n";
}?>
				</section>
			</section>
			<section class="pure-u-22-24">
				<h2>about openshop</h2>
				<p>
				open shop is a e-shop dedicated to open source
				</p>
			</section>
			<section class="pure-u-22-24">
				<article>
					<h2>let's celebrate the 20 Years of Open Source</h2>
					<p>
						The Open Source Initiative (OSI) is celebrating its 20th Anniversary in 2018. 
						<br>The “open source” label was created at a strategy session held on February 3rd, 1998 in Palo Alto, California. 
						<br>That same month, the OSI was founded. As a global non-profit, 
						<br>the OSI protects and promotes open source software, development and communities, championing software freedom in society through education, collaboration, 
						<br>and infrastructure, stewarding the Open Source Definition (OSD), and preventing abuse of the ideals and ethos inherent to the open source movement
					</p>
				</article>
				<article id="why">
					<h2>why choose open source</h2>
					<ul>
						<!--li class="ib"><span class="fa fa-user-secret fa-5x"></span><p></p></li-->
						<li class="ib"><span class="fa fa-puzzle-piece fa-5x"></span><p>modular</p></li>
						<li class="ib"><span class="fa fa-edit fa-5x"></span><p>réviser</p></li>
						<li class="ib"><span class="fa fa-share-square fa-5x"></span><p>share</p></li>
					</ul>
					<p>
					The open source movement highlights quality.
					<br>The source code and the product can be re-read and improved by everyone, which can include the correction of security problems.
					<br>open source confer technological independence at a lower cost.
					<br>
					<br>Open source often allows to have many choices of software and hardware.
					<br>Indeed, projects with the same function can coexist.
					<br>Moreover, any conflict concerning a software or material can be solved by a fork, with a second element which will be created, based on the first one.
					</p>
				</article>
			</section>
		</main>
<?php include('footer.html'); ?>	
	</body>
</html>