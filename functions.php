<?php 
	function remove_admin_bar(){
		show_admin_bar(false);
	}
	
	function gazi_scripts(){
		//Header - CSS
		wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css',false,'1.1','all');
		wp_enqueue_style( 'custom-css2', get_template_directory_uri() . '/assets/css/owl.carousel.min.css',false,'1.1','all');
		wp_enqueue_style( 'custom-css3', get_template_directory_uri() . '/assets/css/magnific-popup.css',false,'1.1','all');
		wp_enqueue_style( 'custom-css4', get_template_directory_uri() . '/assets/css/font-awesome.min.css',false,'1.1','all');
		wp_enqueue_style( 'custom-css5', get_template_directory_uri() . '/assets/css/themify-icons.css',false,'1.1','all');
		wp_enqueue_style( 'custom-css6', get_template_directory_uri() . '/assets/css/nice-select.css',false,'1.1','all');
		wp_enqueue_style( 'custom-css7', get_template_directory_uri() . '/assets/css/flaticon.css',false,'1.1','all');
		wp_enqueue_style( 'custom-css8', get_template_directory_uri() . '/assets/css/gijgo.css',false,'1.1','all');
		wp_enqueue_style( 'custom-css9', get_template_directory_uri() . '/assets/css/animate.min.css',false,'1.1','all');
		wp_enqueue_style( 'custom-css10', get_template_directory_uri() . '/assets/css/slick.css',false,'1.1','all');
		wp_enqueue_style( 'custom-css11', get_template_directory_uri() . '/assets/css/slicknav.css',false,'1.1','all');
		wp_enqueue_style( 'custom-css12', get_template_directory_uri() . '/assets/css/style.css',false,'1.1','all');
		// Footer - JS
		wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script2', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script3', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script4', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script5', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script6', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script7', get_template_directory_uri() . '/assets/js/ajax-form.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script8', get_template_directory_uri() . '/assets/js/waypoints.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script9', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script10', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script11', get_template_directory_uri() . '/assets/js/scrollIt.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script12', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script13', get_template_directory_uri() . '/assets/js/wow.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script14', get_template_directory_uri() . '/assets/js/nice-select.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script15', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script16', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script17', get_template_directory_uri() . '/assets/js/plugins.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script18', get_template_directory_uri() . '/assets/js/gijgo.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script19', get_template_directory_uri() . '/assets/js/contact.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script20', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script21', get_template_directory_uri() . '/assets/js/jquery.form.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script22', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script23', get_template_directory_uri() . '/assets/js/mail-script.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'script24', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
	
	}
	
	function menu_kayit(){
		register_nav_menu('primary',__('Primary Menu'));
	}
	
	require_once get_theme_file_path() .'/admin/theme-options.php';
	require_once('class-wp-bootstrap-navwalker.php');
	add_action('after_setup_theme','remove_admin_bar');
	add_action('wp_enqueue_scripts','gazi_scripts');
	add_action('init','menu_kayit');
	add_theme_support( 'post-thumbnails' );
	
	
	
	
	
	
	
	
	



?>