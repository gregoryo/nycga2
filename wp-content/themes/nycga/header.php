<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ) ?>; charset=<?php bloginfo( 'charset' ) ?>" />
		<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
		<meta name="description" content="The official website for the New York General Assembly and the Occupy Wall Street Movement." />
		<?php do_action( 'bp_head' ) ?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>" />

		<?php
			if ( is_singular() && bp_is_blog_page() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );

			wp_head();
		?>
	</head>

	<body <?php body_class() ?> id="bp-default">
		<div id="header-section">
		<?php do_action( 'bp_before_header' ) ?>
		<div id="search-bar" role="search">
		<form action="<?php echo bp_search_form_action() ?>" method="post" id="search-form">
			<label for="search-terms" class="accessibly-hidden"><?php _e( 'Search for:', 'buddypress' ); ?></label>
			<input type="text" id="search-terms" name="search-terms" value="<?php echo isset( $_REQUEST['s'] ) ? esc_attr( $_REQUEST['s'] ) : ''; ?>" />

			<?php echo bp_search_form_type_select() ?>

			<input type="submit" name="search-submit" id="search-submit" value="<?php _e( 'Search', 'buddypress' ) ?>" />

			<?php wp_nonce_field( 'bp_search_form' ) ?>

		</form><!-- #search-form -->

<?php do_action( 'bp_search_login_bar' ) ?>
	</div><!-- #search-bar -->
		<div id="header">
			
				<div class="padder">
					<div id="header-link"><a href="<?php echo home_url(); ?>" title="<?php _ex( 'Home', 'Home page banner link title', 'buddypress' ); ?>">.</a>
										</div>
					<h1 id="logo" role="banner"><a href="<?php echo home_url(); ?>" title="<?php _ex( 'Home', 'Home page banner link title', 'buddypress' ); ?>"><?php bp_site_name(); ?></a></h1>
						
				</div><!-- .padder -->
			

			<div id="navigation" role="navigation">
				<?php wp_nav_menu( array( 'container' => false, 'menu_id' => 'nav', 'theme_location' => 'primary', 'fallback_cb' => 'bp_dtheme_main_nav' ) ); ?>
			</div>

			<?php do_action( 'bp_header' ) ?>

		</div><!-- #header -->
		</div> <!-- header-section -->
		<?php do_action( 'bp_after_header' ) ?>
		<?php do_action( 'bp_before_container' ) ?>
		
		<? if( ! is_user_logged_in() ){ ?>
		<div id="blurb" style="padding:10px 0 14px;background-color:#fc0;text-align:center;">
			Welcome to the new and improved New York General Assembly web site for the #occupywallstreet movement. <a href="/resources/web-site-help/">Learn more</a>
			<div style="margin-top:12px;font-size:14px;">
				<a href="/register">Create an Account</a> <em>or</em> <a href="#">Login</a> // Join some <a href="/groups">groups</a> // Get stuff done!
			</div>
		</div>
		<? } ?>

		<div id="container">
