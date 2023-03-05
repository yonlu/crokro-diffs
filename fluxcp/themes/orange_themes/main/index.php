<?php if (!defined('FLUX_ROOT')) exit; require_once (FLUX_MODULE_DIR."/server/info.php"); ?>
<!-- start banner Area -->
<section class="banner-area" id="home">	
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-start">
			<div class="banner-content col-lg-7">
				<p></p>
				<h6 class="text-white text-uppercase"> </h6>
				<h1>
					<?php echo $config['server_name']; ?>		
				</h1>
				<a href="<?php echo $this->url('account', 'create'); ?>" class="primary-btn text-uppercase">
				<img src="<?php echo $this->themePath('./img/passe.gif') ?>"/> 
					CREATE ACCOUNT</a>
				<a href="#download" class="primary-btn text-uppercase">
					<img src="<?php echo $this->themePath('./img/7427.png') ?>"/> 
					DOWNLOAD PATCH
				</a>
			</div>											
		</div>
	</div>
</section>
<!-- End banner Area -->


<!-- Start video-sec Area -->
<section class="video-sec-area pb-100 pt-40" id="about">
	<div class="container">
		<div class="row justify-content-start align-items-center">
			<div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
				<div class="overlay overlay-bg"></div>
				<a class="play-btn" href="<?php echo $config['social_links']['youtube']; ?>">
					<img class="img-fluid" src="<?php echo $this->themePath('./img/play-icon.png') ?>" alt="">
				</a>
			</div>						
			<div class="col-lg-6 video-left">
				<h6>NEW HERE? MEET OUR SERVER! </h6>
				<h1>Watch our <br>
				server presentation</h1>
				<p><span>Know our history</span></p>
				<p>
					Create your account, download the game and come and have fun with us. We have a prosperous and friendly community!
				</p>
				<img class="img-fluid" src="<?php echo $this->themePath('./img/k.png') ?>" alt="">
			</div>
		</div>
	</div>	
</section>
<!-- End video-sec Area -->


<!-- SERVER INFORMATION AREA -->
	<section class="menu-area section-gap" id="serverinfo">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Server Information</h1>
						<p>We are a server made from fan to fan.</p>
					</div>
				</div>
			</div>						
			<div class="row">
				<?php foreach($config['server_information'] as $label): ?>
				<div class="col-lg-4">
					<div class="single-menu">
						<center>
							<img src="<?php echo $this->themePath($label[0]); ?>"/>
							<p><?php echo $label[1]; ?></p>
							<h4><?php echo $label[2]; ?></h4>
							<p style="color:orange"><?php echo $label[3]; ?></p>	
						</center>
					</div>
				</div>
				<?php endforeach; ?>			
			</div>
		</div>	
	</section>
<!-- End menu Area -->


<!-- Start Gallery Area -->
<section class="gallery-area section-gap" id="gallery">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">Server Gallery</h1>
					<p>We have a large and friendly community.</p>
				</div>
			</div>
		</div>						
		<div class="row">
			<div class="col-lg-4">
				<a href="<?php echo $this->themePath('img/g1.jpg'); ?>" class="img-pop-home">
					<img class="img-fluid" src="<?php echo $this->themePath('img/g1.jpg'); ?>" alt="">
				</a>	
				<a href="<?php echo $this->themePath('img/g2.jpg'); ?>" class="img-pop-home">
					<img class="img-fluid" src="<?php echo $this->themePath('img/g2.jpg'); ?>" alt="">
				</a>	
			</div>
			<div class="col-lg-8">
				<a href="<?php echo $this->themePath('img/g3.jpg'); ?>" class="img-pop-home">
					<img class="img-fluid" src="<?php echo $this->themePath('img/g3.jpg'); ?>" alt="">
				</a>	
				<div class="row">
					<div class="col-lg-6">
						<a href="<?php echo $this->themePath('img/g5.jpg'); ?>" class="img-pop-home">
							<img class="img-fluid" src="<?php echo $this->themePath('img/g4.jpg'); ?>" alt="">
						</a>	
					</div>
					<div class="col-lg-6">
						<a href="<?php echo $this->themePath('img/g5.jpg'); ?>" class="img-pop-home">
							<img class="img-fluid" src="<?php echo $this->themePath('img/g5.jpg'); ?>" alt="">
						</a>	
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>
<!-- End gallery Area -->


<!-- Start review Area -->
<section class="review-area section-gap" id="download">
	<div class="container">
	
		<center><h1 >Downloads</h1>
		<p>Start you Jorney.</p>
		</center>
			
		<div class="section-top-border">
			<div class="row">
				<div class="col-md-4">
					<div class="single-defination">
					<center>
						<img src="<?php echo $this->themePath('img/download.png'); ?>"/>	
						<br>
						</br>
						<h4 class="mb-20">Download Patch Lite 1.0</h4>
						<p>Small patch, needs updated data.grf to play</p>
						<a href="<?php echo $config['downloads']['direct_lite']; ?>" class="genric-btn primary-border">Link Direct</a>
						<a href="<?php echo $config['downloads']['mediafire_lite']; ?>" class="genric-btn primary-border">MediaFire</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-defination">
					<center><img src="<?php echo $this->themePath('img/download.png'); ?>"/>	
					<br>
					</br>
					<h4 class="mb-20">Download Patch Full 1.0</h4>
					<p>Patch Full, already has updated data.grf to play</p>
					<a href="<?php echo $config['downloads']['derect_full']; ?>" class="genric-btn primary-border">Link Direct</a>
					<a href="<?php echo $config['downloads']['mediafire_full']; ?>" class="genric-btn primary-border">MediaFire</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-defination">
					<center><img src="<?php echo $this->themePath('img/download.png'); ?>"/>	
					<br>
					</br>
					<h4 class="mb-20">Updated Data.grf</h4>
					<p>Updated with the latest version of the game</p>
					<a href="<?php echo $config['downloads']['derect_data']; ?>" class="genric-btn primary-border">Link Direct</a>
					<a href="<?php echo $config['downloads']['mediafire_data']; ?>" class="genric-btn primary-border">MediaFire</a>
					</div>
				</div>
			</div>
		</div>				

		<div class="title text-center">
			<p>
			</p>
			<h1 class="mb-10">System requirements</h1>
			<center><img src="<?php echo $this->themePath('img/charles.png'); ?>"/>
			<div class="row counter-row">
			
			<div class="col-lg-3 col-md-6 single-counter">
				<h2 style="color:#976b1b">Operational system</h2>
				<p>Windows Vista, 7, 8 or 10</p>
				</div>
				
			<div class="col-lg-3 col-md-6 single-counter">
				<h2 style="color:#976b1b">RAM memory requirement</h2>
				<p>2 GB or more</p>
				</div>
				
			<div class="col-lg-3 col-md-6 single-counter">
				<h2 style="color:#976b1b">DirectX version requirement</h2>
				<p>8.0 or higher</p>
			</div>
			
			<div class="col-lg-3 col-md-6 single-counter">
				<h2 style="color:#976b1b">Video card requirement</h2>
				<p>128MB video card</p>
			</div>	
			
		</div>
		
		<div class="row counter-row">
			<div class="col-lg-3 col-md-6 single-counter">
				<h1 class="counter"><?php echo number_format($info['accounts']); ?></h1>
				<p>Created Accounts</p>
			</div>
			<div class="col-lg-3 col-md-6 single-counter">
				<h1 class="counter"><?php echo number_format($info['characters']); ?></h1>
				<p>Characters Created</p>
			</div>
			<div class="col-lg-3 col-md-6 single-counter">
				<h1 class="counter"><?php echo number_format($info['guilds']); ?></h1>
				<p>Guilds</p>
			</div>	
			<div class="col-lg-3 col-md-6 single-counter">
				<h1 class="counter"><?php echo number_format($info['parties']); ?></h1>
				<p>Party</p>
			</div>			
		</div>
	</div>	
</section>
<!-- End review Area -->


<!-- COMMUNITY -->
<section class="blog-area section-gap" id="community">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">Community</h1>
					<p>Meet our community!</p>
				</div>
			</div>
		</div>						
		<div class="row">
			<div class="col-lg-6 col-md-6 single-blog">
				<iframe src="<?php echo $config['community']['discord']; ?>" width="555" height="320" allowtransparency="true" frameborder="0"></iframe>
			</div>
			<div class="col-lg-6 col-md-6 single-blog">
				<div id="fb-root"></div>
				<div class="fb-page" data-href="<?php echo $config['community']['facebook']; ?>" data-tabs="timeline" data-width="555" data-height="320" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
					<blockquote cite="https://www.facebook.com/<?php echo $config['community']['facebook']; ?>/" class="fb-xfbml-parse-ignore">
						<a href="https://www.facebook.com/<?php echo $config['community']['facebook']; ?>/"><?php echo $config['community']['facebook']; ?></a>
					</blockquote>
				</div>
				<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_EN/sdk.js#xfbml=1&version=v7.0"></script>
			</div>						
		</div>
	</div>	
</section>
<!-- End blog Area -->