<?php $url="/transaction.html"; ?>
<!doctype html>
<html lang="<?=$lang="en"?>">
<?php include('asset/head.php'); ?>
	<body>
<?php include('header.php'); ?>
		<main class="pure-g">
			<?=(isset($_SESSION['msg']))?'<p class="pure-u-1-1">'.$_SESSION['msg']."<p>\n":''?>
			<form action="/transaction.html" method="post" class="pure-u-9-24 pure-form pure-form-stacked">
				<label for="card">Bank card</label>
				<input type="text" name="card" required placeholder="Bank card number" <?=(isset($_SESSION['card']))?'value="'.$_SESSION['card'].'"':'';?> class="pure-input-1">
				<input type="submit" value="pay" class="pure-button pure-button-primary">
			</form>
		</main>
<?php include('footer.html'); ?>	
	</body>
</html>