<?php $url="/cart.html"; ?>
<!doctype html>
<html lang="<?=$lang="en"?>">
<?php include('asset/head.php'); ?>
	<body>
<?php include('header.php'); ?>
		<main>
			<table class="cart pure-table pure-table-horizontal">
				<caption>cart</caption>
				
				<thead>
					<tr>
						<th>img</th>
						<th>article</th>
						<th>prix</th>
						<th>state</th>
						<th>action</th>
					</tr>
				</thead>
				<!--tfoot>
					<tr>
						<th>img</th>
						<th>article</th>
						<th>prix</th>
						<th>action</th>
					</tr>
				</tfoot-->
				<tbody>
<?php foreach($articles as $article)
{
echo '					<tr>
						<td><img src='.$article['img'].' alt="ar img" width="100%"></td>
						<td><h3>'.$article['name'].'</h3><p>'.$article['sdesc'].'</p></td>
						<td>'.$article['prix'].'</td>
						<td>'.(($article['state'])?'in delivery':'waiting for payment').'</td>
						<td><a href="'.$article['action'].'">delete</a></td>
					</tr>';
}?>
</tbody>
			</table>
			<p class="pure-u-3-4" style="text-align:end;">total : <?=$total?> $</p>
			<a href="/transaction.html" class="pure-u-3-4" style="text-align:end;">finish the purchase</a>
			<br><br>
			<table class="cart pure-table pure-table-horizontal">
				<caption>cart old</caption>
				<thead>
					<tr>
						<th>img</th>
						<th>article</th>
						<th>prix</th>
						<th></th>
						<th>action</th>
					</tr>
				</thead>
				<tbody>
<?php foreach($articlesold as $article)
{
echo '					<tr>
						<td><img src='.$article['img'].' alt="ar img" width="100%"></td>
						<td><h3>'.$article['name'].'</h3><p>'.$article['sdesc'].'</p></td>
						<td>'.$article['prix'].'</td>
						<td></td>
						<td><a href="'.$article['action'].'">re-add to cart</a></td>
					</tr>';
}?>
				</tbody>
			</table>
		</main>
<?php include('footer.html'); ?>	
	</body>
</html>