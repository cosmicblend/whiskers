<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="MobileOptimized" content="width">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="cleartype" content="on">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="<?php echo $base_url ?>theme/js/scripts.js<?php echo '?' . time(); ?>"></script>
	<link rel="stylesheet" href="<?php echo $base_url ?>theme/css/skeleton/base.css">
	<link rel="stylesheet" href="<?php echo $base_url ?>theme/css/style.css<?php echo '?' . time(); ?>">
	<!--[if lt IE 9]>
		<link rel="stylesheet" media="all" href="styles/ie-lt9whiskersapp.css" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body class="row wrapper mobile-screens">
	<header class="row branding">
		<h1><?php echo anchor('post', 'Whiskers'); ?></h1>
		<?php if ($authenticated): ?>
		<div class="btn" id="user"><?php echo anchor('logout', 'sign out'); ?></div>
		<?php elseif (!($authenticated)): ?>
		<p>Welcome. <span>Please sign in</span></p>
		<?php endif; ?>		
	</header>

	<div class="row container">
		<div class="content curl">
		<article>
		<?php if (!empty($messages)): ?>
			<?php foreach ($messages as $class_type => $class_msgs) : foreach ($class_msgs as $message) : ?>
			<div class="flash messages <?php print $class_type; ?>"><?php print $message; ?></div>
			<?php endforeach; endforeach; ?>				
		<?php endif; ?>
		
		<?php echo $content ?>		
		</article>
		</div>
		
		<div id="sidebar">
			<nav id="primary">
				<ul>
					<li class="btn">
					<?php $att_current = (strstr(current_url(), 'post')) ? 'class="active"' : NULL;
					echo anchor('post', 'Post', $att_current); ?>
					</li>
					<li class="btn">
					<?php $att_current = (strstr(current_url(), 'history')) ? 'class="active"' : NULL;
					echo anchor('history', 'History', $att_current); ?>
					</li>
					<li class="btn">
					<?php $att_current = (strstr(current_url(), 'admin')) ? 'class="active"' : NULL;
					echo anchor('admin', 'Admin', $att_current); ?>
					</li>
				</ul>
			</nav>
		</div>	
	</div>
	
	<footer class="row">
		<p>&copy; 2012 Larry Halff</p>
	</footer>		
</body>
<?php if (isset($scripts)) : ?>
<?php foreach ($scripts as $name) : ?>
<script src="<?php echo $base_url ?>theme/js/<?php echo $name ?>.js<?php echo '?' . time(); ?>"></script>
<?php endforeach; ?>
<?php endif; ?>
</html>