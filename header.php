<!DOCTYPE HTML>
<!--[if lt IE 10]><html lang="he" class="lt10"><![endif]-->
<!--[if gt IE 9]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <meta name="google-site-verification" content="qaU8Pr_AsiNmWTalSRt83gwi49PpzSFe-oWL4AJUJL8" /> -->
	<title><?php the_title(); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
	<!--[if lt IE 10]>
		<script type='text/javascript'>
			$(document).ready(function(){
				$.get('browsers.html',function(data){
					$('body').html(data);
				});
			});
		</script>
	<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php  
	$logo = get_field('main_logo', 'option');
	$facebook = get_field('facebook_link', 'option');
	$youtube = get_field('youtube_link', 'option');
	$google_plus = get_field('google_plus', 'option');
	$phone_text = get_field('phone_text', 'option');
	$phone_num = get_field('phone_num', 'option');
	$contact_nav_text = get_field('contact_nav_text', 'option');
	$contact_nav_link = get_field('contact_nav_link', 'option');
?>
<div class="sidebar_icons">
</div>
<div class="go_to hideInMobile">
	<button type="button" class="go_to_bg" title="בחזרה למעלה"></button>
</div>
<header class="headerWrapper">
	<div class="header_top">
		<div class="container">
			<div class="header_top_lft">
				<div class="social">
					<a href="<?php echo $youtube; ?>" target="_blank" class="socialLinks youtube">
						<i class="fa fa-youtube" aria-hidden="true"></i>
					</a>
					<a href="<?php echo $facebook; ?>" target="_blank" class="socialLinks facebook">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</a>
					<a href="<?php echo $google_plus; ?>" target="_blank" class="socialLinks google">
						<i class="fa fa-google-plus" aria-hidden="true"></i>
					</a>
				</div>
				<div class="number">
					<a href="tel:<?php echo $phone_num; ?>"><?php echo $phone_text . $phone_num; ?></a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="<?php echo home_url(); ?>" class="logo_in">
					<img class="mainlogo" src="<?php echo $logo['url']; ?>" width="211" height="81" alt="" />
				</a>
			</div>
			<div class="header_lft">
				<nav class="nav">
					<?php
			           	wp_nav_menu( array(
			                  'theme_location'    => 'top_menu',
			                  'menu_class'        => 'main_top_menu',
			                  'container'         => '',
			                  'container_class'   => '',
			                  )
			            );
			        ?>
					<div class="clear"></div>
				</nav>
				<div class="contact">
					<a href="<?php echo $contact_nav_link; ?>" class="head_contact"><?php echo $contact_nav_text; ?></a>
				</div>

				<form role="search" method="get" action="<?php echo home_url(); ?>" class="search_wrapper desktop_form">
					<input class="input_search" type="search" name="s" id="search" placeholder="חפש"/>
					<input class="button" type="submit" value="" />
					<div class="clear"></div>
				</form>

				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>


		<!-- <button type="button" class="mob_search"></button> -->

		<form role="search" method="get" action="<?php echo home_url(); ?>" class="mob_search search_wrapper">
			<input class="input_search" type="search" name="s" id="search" placeholder="חפש"/>
			<input class="button" type="submit" value="" />
			<div class="clear"></div>
		</form>
		
		<button type="button" class="menu_icon">
			<span class="menuIconSpans menuIconSpan1"></span>
			<span class="menuIconSpans menuIconSpan2"></span>
			<span class="menuIconSpans menuIconSpan3"></span>
		</button>
	</div>
</header>
