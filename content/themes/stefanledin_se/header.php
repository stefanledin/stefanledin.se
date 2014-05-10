<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title(''); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
		<div class="container-fluid">
			<header role="banner" class="page-header">
				<div class="row">
					<div class="col-xs-12">
						<h1>
							<a href="<?= home_url(); ?>">{stefan: ledin}<small>.se</small></a>
						</h1>
						<em>Web developer @ <a href="http://ordbild.se">ordbild.se</a>.</em>
					</div>
				</div>
			</header>