<footer class="site-footer">
	<section class="site-footer__contact-information">
		<div class="site-footer__contact-information-name">
			Heurigenrestaurant Hauerperle
		</div>
		<div class="site-footer__contact-information-address">
			<img
				class="site-footer__contact-information-address-icon"
				src="<?php bloginfo("template_directory"); ?>/assets/icons/icon_phone_green.svg"
				alt="Anfahrt Icon"
			/>
			<a
				class="site-footer__contact-information-address-info"
				href="tel:+43262277826"
				>Hauptstraße 113, 7201 Neudörfl</a
			>
		</div>
		<div class="site-footer__contact-information-phone">
			<img
				class="site-footer__contact-information-phone-icon"
				src="<?php bloginfo("template_directory"); ?>/assets/icons/icon_direction_green.svg"
				alt="Telefon Icon"
			/>
			<a class="site-footer__contact-information-phone-number" href="#"
				>02622 / 77286</a
			>
		</div>
		<div class="site-footer__contact-information-mail">
			<img
				class="site-footer__contact-information-mail-icon"
				src="<?php bloginfo("template_directory"); ?>/assets/icons/icon_mail_green.svg"
				alt="E-Mail Icon"
			/>
			<a
				class="site-footer__contact-information-mail-address"
				href="mailto:heuriger.hauer@aon.at"
				>heuriger.hauer@aon.at</a
			>
		</div>
	</section>

	<div class="site-footer-navbar">
		<ul class="site-footer-navbar__navigation-list">

			<?php
				$defaults = array(
					'walker'         => new FooterNavwalker(),
					'menu'           => 'Footernavigation',
					'theme_location' => 'nav-footer-main',
					'depth'          => 1,
					'container'      => FALSE,
					'container_class'   => '',
					'menu_class'     => '',
					'items_wrap'     => '%3$s',
					'fallback_cb'		=>	'NavWalker::fallback'
				);
				wp_nav_menu($defaults);
			?>

		</ul>
	</div>

	<div class="site-footer__additional-data">
		<nav class="site-footer__navigation">
			<ul class="site-footer__navigation-list">

			<?php
				$defaults = array(
					'walker'         => new FooterMenuNavwalker(),
					'menu'           => 'Footermenü',
					'theme_location' => 'nav-footer-menu',
					'depth'          => 1,
					'container'      => FALSE,
					'container_class'   => '',
					'menu_class'     => '',
					'items_wrap'     => '%3$s',
					'fallback_cb'		=>	'NavWalker::fallback'
				);
				wp_nav_menu( $defaults );
			?>

			</ul>
		</nav>

		<p class="site-footer__copyright">
			©&nbsp;Copyright&nbsp;2023 - <span class="wordwrap"></span
			>Heurigenrestaurant Hauerperle
		</p>
	</div>
</footer>


	<?php wp_footer();?>



	<!-- === START SCRIPTS AREA === -->

	<!-- General Scripts -->
	<!-- <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script> -->


	<!-- Hamburger Menu Toggle -->
	<script>
		var navigation = document.querySelector(".main-navigation")
		var hamburger = document.querySelector(".burger-menu")

		navigation.onclick = function () {
			this.classList.toggle("is-active")
		}

		hamburger.onclick = function () {
			this.classList.toggle("checked")
		}
	</script>

	</body>
</html>