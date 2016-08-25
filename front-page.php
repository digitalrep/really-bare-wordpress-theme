<?php
/**
 * Front page
 */
?>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <title><?php bloginfo('name'); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
		echo get_bloginfo('name');
		wp_nav_menu(array('theme_location' => 'primary')); 
	?>

</body>
</html>
