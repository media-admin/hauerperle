<!DOCTYPE html>
<html class="outer-html" lang='de'>
	<head>

		<!-- === META DATA === -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta http-equiv="content-type" content="text/html; charset=macintosh" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scaleable=no">

		<!-- Site Title -->
		<?php if (is_front_page()): ?>
			<title>Startseite | <?php bloginfo("name"); ?></title>
		<?php else: ?>
			<title><?php wp_title($sep = ""); ?> | <?php bloginfo("name"); ?></title>
		<?php endif; ?>

		<!-- === FAVICONS === -->

		<!-- Default -->
		<link rel="icon" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/favicon.svg" type="image/x-icon">
		<link rel="shortcut icon" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/favicon.ico?v=2" type="image/x-icon">

		<!-- PNG icons with different sizes -->
		<link rel="icon" type="image/png" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/favicon-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/favicon-16x16.png" sizes="16x16">

		<!-- Apple Touch Icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo(
    "template_directory"
  ); ?>/vassets/images/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/apple-touch-icon-180x180.png">
		<link rel="apple-touch-icon" sizes="192x192" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/apple-touch-icon-192x192.png">

		<!-- Apple macOS Safari Mask Icon -->
		<link rel="mask-icon" href="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/favicon.svg" color="#6F7070">

		<!-- Apple iOS Safari Theme -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#6F7070">
		<meta name="apple-mobile-web-app-title" content="Heurigenrestaurant Hauerperle - Genießen beim Hauer in Neudörfl">
		<meta name="apple-mobile-web-app-capable" content="yes">

		<!-- Microsoft Windows Tiles -->
		<meta name="theme-color" content="#8DC21C">
		<meta name="msapplication-navbutton-color" content="#6F7070">
		<meta name="msapplication-TileColor" content="#F5FBEF">
		<meta name="msapplication-TileImage" content="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/windows-tile-icon-144x144.png">
		<meta name="application-name" content="Heurigenrestaurant Hauerperle - Genießen beim Hauer in Neudörfl">

		<!-- Internet Explorer 11 Tiles -->
		<meta name="msapplication-square70x70logo" content="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/ms-ie11-icon-70x70.png">
		<meta name="msapplication-square150x150logo" content="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/ms-ie11-icon-150x150.png">
		<meta name="msapplication-wide310x150logo" content="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/ms-ie11-icon-310x150.png">
		<meta name="msapplication-square310x310logo" content="<?php bloginfo(
    "template_directory"
  ); ?>/assets/images/favicon/ms-ie11-icon-310x310.png">

		<!-- Open Graph -->
		<meta property="og:title" content="Heurigenrestaurant Hauerperle - Genießen beim Hauer in Neudörfl">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://www.hauerperle.at">
		<meta property="og:image" content="og_image_url">
		<meta property="og:site_name" content="Heurigenrestaurant Hauerperle - Genießen beim Hauer in Neudörfl">
		<meta property="og:locale" content="de_AT">

		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>

	</head>

	<body <?php body_class("site-body"); ?>>

		<?php if (is_front_page()) {
			$args = [
				"post_status" => "publish",
				"posts_per_page" => 1,
				"post_type" => "notification",
			];
			$loop = new WP_Query($args);

			while ($loop->have_posts()):
				$loop->the_post(); ?>
					<div class="notification">
						<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
						<div class="notification__body inner-wrapper">
							<h2 class="notification__title">Aktueller Hinweis</h2>
							<div class="notification__content">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				<?php
			endwhile;
			wp_reset_postdata();
		} ?>

		<header class="site-header-top">
			<div class="site-header-top__contact-information">
				<div class="site-header-top__contact-information-name">
					Heurigenrestaurant Hauerperle
				</div>
				<div class="site-header-top__contact-information-address">
					<img
						class="site-header-top__contact-information-address-icon"
						src="<?php bloginfo("template_directory"); ?>/assets/icons/icon_phone_green.svg"
						alt="Anfahrt Icon"
					/>
					<a class="site-header-top__contact-information-address-info" href="#">
						Hauptstraße 113, 7201 Neudörfl
					</a>
				</div>
				<div class="site-header-top__contact-information-phone">
					<img
						class="site-header-top__contact-information-phone-icon"
						src="<?php bloginfo("template_directory"); ?>/assets/icons/icon_direction_green.svg"
						alt="Telefon Icon"
					/>
					<a class="site-header-top__contact-information-phone-number" href="tel:+43262277826">
						02622 / 77286
					</a>
				</div>
				<div class="site-header-top__contact-information-mail">
					<img
						class="site-header-top__contact-information-mail-icon"
						src="<?php bloginfo("template_directory"); ?>/assets/icons/icon_mail_green.svg"
						alt="E-Mail Icon"
					/>
					<a class="site-header-top__contact-information-mail-address" href="mailto:heuriger.hauer@aon.at">
						heuriger.hauer@aon.at
					</a>
				</div>
			</div>
		</header>

		<header class="site-header">
			<!-- Header Logo -->
			<div class="site-header__branding">
				<div class="site-header__logo">
					<a class="header-logo__link wrapper" href="<?php echo get_home_url(); ?>">
						<img
							class="site-header__logo-img"
							src="<?php bloginfo("template_directory"); ?>/assets/images/logo_hauerperle-smartphone.svg"
							alt="Logo Heurigenrestaurant Hauerperle"
						/>
						<img
							class="site-header__logo-img--desktop"
							src="<?php bloginfo("template_directory"); ?>/assets/images/logo_hauerperle-desktop.svg"
							alt="Logo Heurigenrestaurant Hauerperle"
						/>
					</a>
				</div>
			</div>

			<!-- Hamburger Menu Toggle -->
			<nav class="main-navigation">
				<div class="site-menu">
					<div class="burger-menu">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</div>
				</div>

				<!-- Main Navigation -->
				<div class="navbar inner-wrapper">
					<ul class="navbar__navigation-list">
						<?php
							$defaults = [
								"walker" => new Navwalker(),
								"menu" => "Hauptnavigation",
								"theme_location" => "nav-menu-main",
								"depth" => 1,
								"container" => false,
								"container_class" => "",
								"menu_class" => "",
								"items_wrap" => '%3$s',
								"fallback_cb" => "NavWalker::fallback",
							];
						wp_nav_menu($defaults);
						?>
					</ul>
				</div>
			</nav>
		</header>

		<!-- <div class="large-hero">
			<img
				class="large-hero__img lazyload"
				src="<?php bloginfo("template_directory"); ?>/assets/images/hero-image_home_smartphone.png"
				alt="Hero Image"
			/>

			<div class="large-hero__text">
				<?php the_title(); ?>
			</div>
		</div> -->



		<div class="large-hero">

			<?php
				$image_desktop = get_field('page_header_image_desktop');
				$image_smartphone = get_field('page_header_image_smartphone');

				if( !empty( $image_desktop ) ): ?>
					<img class="large-hero__img large-hero__img--desktop lazyload" src="<?php echo esc_url($image_desktop['url']); ?>" alt="<?php echo esc_attr(['alt']); ?>" />
				<?php endif;

				if( !empty( $image_smartphone ) ): ?>
					<img class="large-hero__img large-hero__img--smartphone lazyload" src="<?php echo esc_url($image_smartphone['url']); ?>" alt="<?php echo esc_attr(['alt']); ?>" />
				<?php endif; ?>


			<div class="large-hero__text">
				<h1 class="site-title">
					<?php
						if (is_front_page()) {
								echo "Herzlich willkommen";
						} else {
								echo the_title();
						}
					?>
				</h1>
			</div>
		</div>


		<div class="contact-navbar">
			<div class="contact-navbar__wrapper">
				<a class="contact-navbar__item contact-navbar__item--mail" href="mailto:heuriger.hauer@aon.at"
					><img
						class="contact-navbar__item-icon contact-navbar__item--mail-icon"
						src="<?php bloginfo("template_directory"); ?>/assets/icons/icon_mail_green.svg"
						alt="Anfahrt Icon"
					/>Mailen</a
				>
				<a class="contact-navbar__item contact-navbar__item--route" href="#"
					><img
						class="contact-navbar__item-icon contact-navbar__item--route-icon"
						src="<?php bloginfo("template_directory"); ?>/assets/icons/icon_direction_green.svg"
						alt="Anfahrt Icon"
					/>Route</a
				>
				<a class="contact-navbar__item contact-navbar__item--phone" href="tel:+43262277826"
					><img
						class="contact-navbar__item-icon contact-navbar__item--phone-icon"
						src="<?php bloginfo("template_directory"); ?>/assets/icons/icon_phone_green.svg"
						alt="Anfahrt Icon"
					/>Anrufen</a
				>
			</div>
		</div>

		<main class="site-main clearfix">
			<div class="site-content">
