<?php $url="/sale.html"; ?>
<!doctype html>
<html lang="<?=$lang="en"?>">
<?php include('asset/head.php'); ?>
	<body>
<?php include('header.php'); ?>
		<main class="pure-g">
			<?=(isset($_SESSION['msg']))?'<p class="pure-u-1-1">'.$_SESSION['msg']."<p>\n":''?>
			<form action="/action.html?a=s" method="post" class="pure-u-3-4 pure-form pure-form-stacked">
				<label for="card">name of product</label>
				<input type="text" name="name" required placeholder="Bank card number" <?=(isset($_SESSION['fname']))?'value="'.$_SESSION['fname'].'"':'';?> class="pure-input-1">
				<label for="prix">price</label>
				<input type="text" name="prix" required placeholder="Bank card number" <?=(isset($_SESSION['prix']))?'value="'.$_SESSION['prix'].'"':'';?> class="pure-input-1">
				<textarea name="desc" required rows="25" style="width: 100%;">product desc</textarea>
				<input type="submit" value="sale" class="pure-button pure-button-primary">
			</form>
		</main>
<?php include('footer.html'); ?>	
	</body>
</html>