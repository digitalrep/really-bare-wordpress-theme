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
	
		if(is_home() || is_archive()) :
			if(have_posts()) :
				while(have_posts()) : 
					the_post(); 
					the_permalink(); 
					the_title();
					get_the_date('m-d-Y');
					the_content('Read More...'); 
					get_the_category_list(', '); 
					get_the_tag_list($before='', $sep=', ', $after=' ');
				endwhile; 
			endif;
		else : 
			// no posts
		endif; 

		if(is_single()) :
			if(have_posts()) :
				while(have_posts()) : 
					the_post(); 
					the_permalink(); 
					the_title(); 
					get_the_date('F d, Y'); 
					the_content('Continue'); 
					get_the_category_list(' - '); 
				    get_the_tag_list($before='', $sep=' - ', $after=' '); 
					if (comments_open() || '0' != get_comments_number())
						comments_template('', true);
				endwhile; 
			else : 
				// no posts
		 	endif;
		endif;

		if(is_page()) :
			if(have_posts()) :
				while(have_posts()): 
					the_post(); 
					the_permalink(); 
					the_title();
					get_the_date('M D y'); 
					the_content(); 
				endwhile; 
			else :
				// no posts
			endif;
		endif;
	
	?>
	
</body>
</html>
