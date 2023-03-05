<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php require_once (FLUX_THEME_DIR."/orange_themes/skyzone_config.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
			
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Skyzone X Mihael">
		<!-- Meta Description -->
		<meta name="description" content="Ragnarok Online (MMORPG)">
		<!-- Meta Keyword -->
		<meta name="keywords" content="Ragnarok, Skyzone Hosting, Skyzone Developing, Skyzone Solution, RO VPS, RO Developer">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		

		<?php if (isset($metaRefresh)): ?>
		<meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
		<?php endif ?>		
		<title><?php echo Flux::config('SiteTitle'); if (isset($title)) echo ": $title" ?></title>
		<link rel="icon" type="image/x-icon" href="./favicon.ico" />
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link href="<?php echo $this->themePath('css/flux/unitip.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
		<?php if (Flux::config('EnableReCaptcha')): ?>
			<script src='https://www.google.com/recaptcha/api.js'></script>
		<?php endif ?>
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo $this->themePath('css/linearicons.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('css/font-awesome.min.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('css/bootstrap.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('css/magnific-popup.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('css/nice-select.css') ?>">					
		<link rel="stylesheet" href="<?php echo $this->themePath('css/animate.min.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('css/owl.carousel.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('css/main.css') ?>">
		
	</head>
	<body>
	
    <!-- Fixed navbar -->
	<?php //include $this->themePath('main/navbar.php', true) ?>
	<header id="header" id="home">
		<div class="header-top">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
					</div>
				</div>			  					
			</div>
		</div>			  	
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
			  <div id="logo">
				<a href="<?php echo $this->url('main'); ?>">
					<!--<img src="img/logo.png" alt="" title="" />-->
					<h1 class="text-white"><?php echo $config['server_name']; ?></h1>
				</a>
				<h6 class="text-white text-uppercase">
					<br>
					Char Server: <img src="<?php echo $this->themePath($config['status_online'][0]) ?>"/> 
					Login Server: <img src="<?php echo $this->themePath($config['status_online'][0]) ?>"/> 
					Map Server: <img src="<?php echo $this->themePath($config['status_online'][0]) ?>"/> 
					Online Player: <?php echo number_format($config['online'][0]);?>
				</h6>
			  </div>
			  
			  <nav id="nav-menu-container">
				<ul class="nav-menu">
				 
					<?php foreach($config['nav_index'] as $navi): ?>
					<li class="<?php echo $navi[1]; ?>">
						<a href="<?php echo $navi[2]; ?>">
							<?php echo $navi[0]; ?>
						</a>
					</li>
					<?php endforeach; ?>
					
					<li class="menu-has-children">
						<a href="#">CONTROL PANEL</a>
						<ul>
							<?php foreach($config['nav_panel'] as $cp): ?>
								<li>
									<a href="<?php echo $cp[2]; ?>"><?php echo $cp[0]; ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>

					<?php //if(!($params->get('module') == 'main' && $params->get('action') == 'index')){ ?>
					<?php $adminMenuItems = $this->getAdminMenuItems(); ?>
					<?php if (!empty($adminMenuItems) && Flux::config('AdminMenuNewStyle')): ?>
						<li class="menu-has-children">
							<a href="#">Admin</a>
							<ul>
							<?php foreach ($adminMenuItems as $menuItem): ?>
								<li>
									<a href="<?php echo $this->url($menuItem['module'], $menuItem['action']) ?>"><?php echo htmlspecialchars(Flux::message($menuItem['name'])) ?></a>
								</li>
							<?php endforeach ?>
							</ul>
						</li>
					<?php endif ?>
					<?php //} ?>
					
				</ul>
			  </nav><!-- #nav-menu-container -->		    		
			</div>
		</div>
	</header><!-- #header -->

	<?php  if(!($params->get('module') == 'main' && $params->get('action') == 'index')){ ?>
		<section class="banner-area pb-100 pt-150">	
			<div class="container" style="background-color:#FFF; border-radius:10px; padding:10px;">	
				
				<!-- Messages -->
				<?php if ($message=$session->getMessage()): ?>
					<p class="message"><?php echo htmlspecialchars($message) ?></p>
				<?php endif ?>
	<?php } ?>
		
			<?php if (Flux::config('DebugMode') && @gethostbyname(Flux::config('ServerAddress')) == '127.0.0.1'): ?>
				<p class="notice">Please change your <strong>ServerAddress</strong> directive in your application config to your server's real address (e.g., myserver.com).</p>
			<?php endif ?>
								
								
			<!-- Sub menu -->
			<?php //include $this->themePath('main/submenu.php', true) ?>
			
			<!-- Page menu -->
			<?php //include $this->themePath('main/pagemenu.php', true) ?>
			
			<!-- Credit balance -->
			<?php //if (in_array($params->get('module'), array('donate', 'purchase'))) include 'main/balance.php' ?>
