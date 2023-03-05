<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php  if(!($params->get('module') == 'main' && $params->get('action') == 'index')){ ?>
		</div>
	</section>
<?php } ?>

<footer class="footer-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6><?php echo $config['server_name']; ?></h6>
					<p>
						<?php if (Flux::config('ShowCopyright')): ?>
						Powered by <a href="https://github.com/rathena/FluxCP" target="_blank">FluxCP</a>
						<?php endif ?>
					</p>
					<p class="footer-text">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
						All rights reserved 
						<br><i class="fa fa-heart-o" aria-hidden="true"></i>
						Design by <a href="https://rathena.org/board/profile/28706-mihael/" target="_blank">Mihael</a> |
						<i class="fa fa-code" aria-hidden="true"></i> 
						Coded by <a href="https://skyzonehosting.net" target="_blank">Skyzone</a>	
					</p>								
				</div>
			</div>
			<div class="col-lg-5  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<center><img src="<?php echo $this->themePath('img/bgf.png') ?>"/>
				</div>
			</div>						
			<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
				<div class="single-footer-widget">
					<h6>Follow Us</h6>
					<p>Let us be social</p>
					<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
					
					
					<?php if (count(Flux::$appConfig->get('ThemeName', false)) > 1): ?>				
						<span>Theme:
							<select name="preferred_theme" onchange="updatePreferredTheme(this)">
							<?php foreach (Flux::$appConfig->get('ThemeName', false) as $themeName): ?>
								<option value="<?php echo htmlspecialchars($themeName) ?>"<?php if ($session->theme == $themeName) echo ' selected="selected"' ?>><?php echo htmlspecialchars($themeName) ?></option>
							<?php endforeach ?>
							</select>
						</span>
					<?php endif ?>
					<span>Language:
						<select name="preferred_language" onchange="updatePreferredLanguage(this)">
						<?php foreach (Flux::getAvailableLanguages() as $lang_key => $lang): ?>
							<option value="<?php echo htmlspecialchars($lang_key) ?>"<?php if (!empty($_COOKIE['language']) && $_COOKIE['language'] == $lang_key) echo ' selected="selected"' ?>><?php echo htmlspecialchars($lang) ?></option>
						<?php endforeach ?>
						</select>
					</span>
					<form action="<?php echo $this->urlWithQs ?>" method="post" name="preferred_theme_form" style="display: none">
						<input type="hidden" name="preferred_theme" value="" />
					</form>
				</div>
			</div>							
		</div>
	</div>
</footer>	
			<!-- End footer Area -->	
	
	
		<!--[if lt IE 9]>
		<script src="<?php echo $this->themePath('js/ie9.js') ?>" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitpngfix.js') ?>"></script>
		<![endif]-->
		
		<script type="text/javascript">
			function updatePreferredServer(sel){
				var preferred = sel.options[sel.selectedIndex].value;
				document.preferred_server_form.preferred_server.value = preferred;
				document.preferred_server_form.submit();
			}
			
			function updatePreferredTheme(sel){
				var preferred = sel.options[sel.selectedIndex].value;
				document.preferred_theme_form.preferred_theme.value = preferred;
				document.preferred_theme_form.submit();
			}

            function updatePreferredLanguage(sel){
                var preferred = sel.options[sel.selectedIndex].value;
                setCookie('language', preferred);
                reload();
            }

			// Preload spinner image.
			var spinner = new Image();
			spinner.src = '<?php echo $this->themePath('img/spinner.gif') ?>';
			
			function refreshSecurityCode(imgSelector){
				$(imgSelector).attr('src', spinner.src);
				
				// Load image, spinner will be active until loading is complete.
				var clean = <?php echo Flux::config('UseCleanUrls') ? 'true' : 'false' ?>;
				var image = new Image();
				image.src = "<?php echo $this->url('captcha') ?>"+(clean ? '?nocache=' : '&nocache=')+Math.random();
				
				$(imgSelector).attr('src', image.src);
			}
			function toggleSearchForm()
			{
				//$('.search-form').toggle();
				$('.search-form').slideToggle('fast');
			}

            function setCookie(key, value) {
                var expires = new Date();
                expires.setTime(expires.getTime() + expires.getTime()); // never expires
                document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
            }
		</script>
		
		<?php if (Flux::config('EnableReCaptcha') && Flux::config('ReCaptchaTheme')): ?>
			<script type="text/javascript">
				 var RecaptchaOptions = {
					theme : '<?php echo Flux::config('ReCaptchaTheme') ?>'
				 };
			</script>
		<?php endif ?>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var inputs = 'input[type=text],input[type=password],input[type=file]';
				$(inputs).focus(function(){
					$(this).css({
						'background-color': '#f9f5e7',
						'border-color': '#dcd7c7',
						'color': '#726c58'
					});
				});
				$(inputs).blur(function(){
					$(this).css({
						'backgroundColor': '#ffffff',
						'borderColor': '#dddddd',
						'color': '#444444'
					}, 500);
				});
				$('.menuitem a').hover(
					function(){
						$(this).fadeTo(200, 0.85);
						$(this).css('cursor', 'pointer');
					},
					function(){
						$(this).fadeTo(150, 1.00);
						$(this).css('cursor', 'normal');
					}
				);
				$('.money-input').keyup(function() {
					var creditValue = parseInt($(this).val() / <?php echo Flux::config('CreditExchangeRate') ?>, 10);
					if (isNaN(creditValue))
						$('.credit-input').val('?');
					else
						$('.credit-input').val(creditValue);
				}).keyup();
				$('.credit-input').keyup(function() {
					var moneyValue = parseFloat($(this).val() * <?php echo Flux::config('CreditExchangeRate') ?>);
					if (isNaN(moneyValue))
						$('.money-input').val('?');
					else
						$('.money-input').val(moneyValue.toFixed(2));
				}).keyup();
				
				// In: js/flux.datefields.js
				processDateFields();
			});
			
			function reload(){
				window.location.href = '<?php echo $this->url ?>';
			}
		</script>

		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.datefields.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitip.js') ?>"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
		<!-- End footer Area -->	

		<script src="<?php echo $this->themePath('js/vendor/jquery-2.2.4.min.js') ?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="<?php echo $this->themePath('js/vendor/bootstrap.min.js') ?>"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="<?php echo $this->themePath('js/easing.min.js') ?>"></script>			
		<script src="<?php echo $this->themePath('js/hoverIntent.js') ?>"></script>
		<script src="<?php echo $this->themePath('js/superfish.min.js') ?>"></script>	
		<script src="<?php echo $this->themePath('js/jquery.ajaxchimp.min.js') ?>"></script>
		<script src="<?php echo $this->themePath('js/jquery.magnific-popup.min.js') ?>"></script>	
		<script src="<?php echo $this->themePath('js/owl.carousel.min.js') ?>"></script>			
		<script src="<?php echo $this->themePath('js/jquery.sticky.js') ?>"></script>
		<script src="<?php echo $this->themePath('js/jquery.nice-select.min.js') ?>"></script>			
		<script src="<?php echo $this->themePath('js/parallax.min.js') ?>"></script>	
		<script src="<?php echo $this->themePath('js/waypoints.min.js') ?>"></script>
		<script src="<?php echo $this->themePath('js/jquery.counterup.min.js') ?>"></script>					
		<script src="<?php echo $this->themePath('js/mail-script.js') ?>"></script>	
		<script src="<?php echo $this->themePath('js/main.js') ?>"></script>
	</body>
</html>
