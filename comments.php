<?php
	
	if(post_password_required()) : 
		_e( 'This post is password protected. Enter the password to view any comments.' ); 
		return;
	endif;
	
	if(have_comments()) : 
		get_the_title(); 
		wp_list_comments();
	else : 
		if(!comments_open()) :
			_e( 'Comments are closed.' ); 
		endif; 
	endif;

	comment_form();