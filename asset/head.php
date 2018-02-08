<?php $lang=(!empty($lang))?$lang:"en";?>
<?php $site_name=(!empty($site_name))?$site_name:$_SERVER['HTTP_HOST'];?>
<?php $site_root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];?>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="LANGUAGE" content="<?=$lang?>">
		<meta name="Content-Language" content="<?=$lang?>">
<?php if(isset($langalt)){foreach ($langalt as $value){echo '		<link rel="alternate" href="'.$value[1].'" hreflang="'.$value[0].'" />'."\n";}}?>

		<title><?php echo (!empty($title))?$title.' || '.$site_name:$site_name; ?></title>
<?php echo (!empty($subject))?'		<meta name="subject" content="'.$subject.'"/>'."\n":""; ?>
<?php echo (!empty($desc))?'		<meta name="description" content="'.$desc.'"/>'."\n":""; ?>
<?php echo (!empty($keywords))?'		<meta name="keywords" content="'.$keywords.'">'."\n":""; ?>
<?php echo (!empty($category))?'		<meta name="category" content="'.$category.'">'."\n":""; ?>
<?php echo (!empty($author))?'		<meta name="author" content="'.$author.'">'."\n":""; ?>
<?php echo (!empty($designer))?'		<meta name="designer" content="'.$designer.'">'."\n":""; ?>

		<meta name="robots" content="<?php echo (isset($index))? ($index)? 'index':'noindex':'index'; ?>,<?php echo (isset($follow))? ($follow)? 'follow':'nofollow':'follow'; ?>" />
		<meta name="hostname" content="<?=$_SERVER['HTTP_HOST']?>">
<?php echo (!empty($url))? '		<link rel="canonical" href="'.$site_root.$url.'"/>'."\n":''; ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php if(isset($css)){foreach ($css as $value){echo '		<link rel="stylesheet" type="text/css" href="'.$value.'">'."\n";}}?>
		<link rel="icon" type="image/jpg" href="<?=$icon?>" />
		<meta name="msapplication-TileImage" content="<?=$icon?>" />
		<link rel="shortcut icon" href="<?=$icon?>" />
		<meta name="copyright" content="<?=$site_name?>" />
		<meta name="publisher" content="gamgine">
<?php echo (!empty($site_mail))? '		<meta name="reply-to" content="'.$site_mail.'"/>'."\n":''; ?>
<?php echo (!empty($site_color))? '		<meta name="apple-mobile-web-app-status-bar-style" content="'.$site_color.'"/>'."\n":''; ?>
<?php echo (!empty($site_color))? '		<meta name="theme-color" content="'.$site_color.'"/>'."\n":''; ?>

<?php echo (!empty($url))? '		<meta property="og:url"  content="'.$site_root.$url.'"/>'."\n":''; ?>
		<meta property="og:site_name" content="<?=$site_name?>" />
		<meta property="og:title" content="<?php echo (!empty($title))?$title.' || '.$site_name:$site_name; ?>" />
<?php echo (!empty($desc))?'		<meta property="og:description" content="'.$desc.'" />'."\n":""; ?>
<?php echo (!empty($img))?'		<meta property="og:image" content="'.$img.'" />'."\n":""; ?>
	</head>
