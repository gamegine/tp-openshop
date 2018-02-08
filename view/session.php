<?php $url="/session.php"; ?>
<!doctype html>
<html lang="<?=$lang="en"?>">
<?php include('asset/head.php'); ?>
	<body>
<?php include('header.php'); ?>
		<main>
			<form action="">
				<input type="text" name="name">
				<input type="text" name="mdp">
				<input type="submit" value="Submit">
			</form>
			<form action="">
				<input type="text" name="name">
				<input type="text" name="mdp">
				<input type="text" name="mdpc">
				<input type="submit" value="Submit">
			</form>
		</main>
<?php include('footer.html'); ?>	
	</body>
</html>