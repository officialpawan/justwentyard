<div class="header-base">
	<div class="container">
		<div class="header-base__logo">
			<a href="<?php echo site_url() ?>">
				<img class="header-base__logo-image" src="<?php echo get_theme_file_uri('/images/logo-goingyard.svg')?>" alt="">
			</a>
		</div><!-- header-base__logo -->

		<div class="header-base__text">
			<div class="header-base__info">
				<span class="header-base__tagline">Total Lawn Managament</span>

				<a class="header-base__call" href="tel:(316) 617-9848">
					<img class="header-base__call-icon" src="<?php echo get_theme_file_uri('/images/icon-phone-round.svg')?>" alt="">
					<span class="header-base__call-text">Call or Text<br>(316) 617-9848</span>
				</a>
			</div><!-- header-base__info -->

			<nav class="header-base__menu">
				<?php
				wp_nav_menu( [
					'theme_location' => 'header',
					'container'      => false
				] )
				?>
			</nav><!-- header-base__menu -->
		</div><!-- header-base__text -->
	</div><!-- container -->
</div><!-- header-base -->