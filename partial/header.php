<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>
	<link rel="stylesheet" href="<?php echo theme_url('/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo theme_url('/css/styles.css'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
	<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">
	<script src="<?php echo theme_url('js/jquery-2.1.4.min.js'); ?>"></script>
	<style>
	.bg-cover {
		background-image: url(<?php echo article_custom_field('article_img', theme_url('/img/uploads/c80bfccb640a8792afa5d1b5f8926248.jpg')); ?>);
	}
	.bg-cover:after {
		background: rgba(0,0,0, 0.8);
	}
	</style>
	<?php if(customised()): ?>
    <style><?php echo article_css(); ?></style>
    <script><?php echo article_js(); ?></script>
	<?php endif; ?>
</head>
<body>

<header id="header" class="bg-cover">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="<?php echo base_url(); ?>" class="navbar-brand">
					<?php echo site_name(); ?>
				</a>

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
				<?php if(has_menu_items()):
					while(menu_items()): ?>
					<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
						<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
							<?php echo menu_name(); ?>
						</a>
					</li>
					<?php endwhile;
				endif; ?>
				</ul>
			</div>
		</div>
	</nav>

	<?php 
		$jumbotron_title = site_meta('jumbotron_title');
		$jumbotron_text  = site_meta('jumbotron_text');
		
		if(!empty($jumbotron_title) && !empty($jumbotron_text)):
	?>
	<div class="jumbotron">
		<div class="container text-center">
			<h1><?php echo $jumbotron_title; ?></h1>
			<p><?php echo $jumbotron_text; ?></p>
		</div>
	</div>
	<?php endif; ?>
</header>
