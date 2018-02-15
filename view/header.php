		<header>
			<img src="/asset/banniere.jpg" alt="banniere">
		</header>
		<nav class="pure-g">
			<ul class="pure-u-2-3">
				<li class="pure-u-1-3" id="logo"><a href="/"><img src="<?=$icon?>" alt="logo" width="100%" ></a></li>
				<li class="pure-u-2-3"><a href="/">openshop</a></li>
			</ul>
			<ul class="pure-u-1-3">
				<?php 
if(isset($_SESSION['id'])){echo 
'				<!--li class="ib"><img src="" alt="avatar"><li-->
				<li class="ib">
					<a href="#">'.htmlentities($_SESSION['name']).'</a>
					<ul>
						<li><a href="cart.html">cart</a></li>
						<li><a href="sale.html">sale</a></li>
					</ul>
				</li>
				<li class="ib"><a href="/session.html">logout</a></li>'."\n";}
else{echo '				<li class="ib"><a href="/session.html">login register</a></li>'."\n";}
?>
			</ul>
			<ul class="pure-u-3-4">
				<li class="ib"><a href="/" class="fas fa-home"></a></li>
				<li class="ib">
					<a href="/articles.html">articles</a>
					<ul>
<?php foreach($cat as $v) {echo '						<li><a href="/articles/'.htmlentities($v).'.html">'.htmlentities($v).'</a></li>'."\n";}?>
					</ul>
				</li>
				<!--li class="ib"><form><i class="fas fa-search"></i><input type="search" name="q"><input type="submit"></form></li-->
			</ul>
		</nav>
