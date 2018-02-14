<?php $url="/cart.php"; ?>
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
						<td><a href="'.$article['action'].'">delete</a></td>
					</tr>';
}?>
				</tbody>
			</table>
			<p>total : <?=$total?> $</p>
		</main>
<?php include('footer.html'); ?>	
	</body>
</html>