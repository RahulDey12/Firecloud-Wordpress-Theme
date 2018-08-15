<!DOCTYPE html>
<html>
<head>
	<meta charset=<?php bloginfo('charset') ?>>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
	<div class="main">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a href="<?php echo home_url() ?>" class="navbar-brand"><?php bloginfo('name') ?></a>
				<!-- Burger Nav -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>

				<div class="collapse navbar-collapse" id="navContent">
					<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => false, 'items_wrap' => '<ul class="navbar-nav">%3$s</ul>')) ?>
				</div>
			</nav>
		</header>
