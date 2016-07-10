<?php
/**
* The Header for logged-in user.
*/
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!--[if IE 9]>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
<![endif]-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<!-- wrapper -->
	<div id="wrapper" class="skepage">
		<div id="main-head-wrap" class="clearfix">
			<div id="header" class="skehead-headernav clearfix">
				<!-- top-head-secwrap -->
				<div id="head">
					<!-- container -->
					<div class="container">
						<!-- row-fluid -->
						<div class="row-fluid">
							<!-- #logo -->
							<div id="logo" class="col-md-3 col-sm-3 col-xs-6">
								<?php if( get_theme_mod('radiance_lite_logo_img', '') != '' ) { ?>
									<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" ><img class="logo" src="<?php echo esc_url( get_theme_mod('radiance_lite_logo_img') ); ?>" alt="<?php bloginfo('name'); ?>" /></a>
								<?php } elseif ( display_header_text() ) { ?>
								<!-- #description -->
								<div id="site-title" class="logo_desp">
									<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" ><?php bloginfo('name'); ?></a> 
									<div id="site-description"><?php bloginfo( 'description' ); ?></div>
								</div>
								<!-- #description -->
								<?php } ?>
							</div>
							<!-- #logo -->
							

							<!-- top-nav-menu -->
							<div class="top-nav-menu col-md-9 col-sm-9 col-xs-6">
								<!-- Header Search Icon// -->
			<!-- 					<div class="top-search col-md-1 col-sm-1 col-xs-3">						
									<a href="javascript:void(0);" class="strip-icon search-strip" title="search"><i class="fa fa-search"></i></a>
								</div> -->
								<!-- Header Search Icon -->
								<div id="skenav" class="ske-menu col-md-11 col-sm-11 col-xs-6  collapse navbar-collapse" >
								<?php if( has_nav_menu( 'Header' ) ) {
									wp_nav_menu( array('theme_location' => 'Header', 'menu_id' => 'menu', 'menu_class' => 'max-menu') );
								} else { ?>
									<ul id="menu-main" class="max-menu">
										<li class="gohome"><a href="<?php echo esc_url(home_url('/')); ?>"> <?php _e('HOME', 'radiance-lite'); ?></a></li>
										<li><a href=""><?php _e('ANNOUNCEMENTS', 'radiance-lite'); ?></a></li>
										<li><a href=""> <?php _e('SIGN UPS', 'radiance-lite'); ?> </a></li>
										<li><a href=""> | </a></li>
										<li> <a href=""><?php _e('WELCOME USER', 'radiance-lite') ?></a> </li>
									</ul>
								<?php } ?>

								</div>
							</div>
							<!-- top-nav-menu -->

							<!-- search-strip -->
							<!-- <div class="hsearch col-md-12 col-sm-12 col-xs-12" >
								<div class="container">
									<div class="row-fluid">
										<form method="get" id="header-searchform" action="<?php echo home_url('/'); ?>">
											<fieldset>
												<input type="text" value="" placeholder="<?php _e('Search Here ...', 'radiance-lite'); ?>" id="s" name="s">
											</fieldset>
										</form>
									</div>
								</div>
							</div> -->
							<!-- search-strip -->
						</div>
					<!-- row-fluid -->
				</div>
				<!-- container -->
			</div>
			<!-- top-head-secwrap -->
		</div>
		<!-- HEADER -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="loginLabel">Login</h4>
		      </div>
		      <form>
			      <div class="modal-body">
			        
			        	<div class="form-group">
			        		<label for="username">Username</label>
			        		<input type="text" class="form-control" id="username" placeholder="Username" />
			        	</div>
			        	<div class="form-group">
			        		<label for="password">Password</label>
			        		<input type="password" class="form-control" id="password" placeholder="Password" />
			        	</div>
			        
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Login</button>
			      </div>
		      </form>
		    </div>
		  </div>
		</div>
		<?php $classes = get_body_class();
	if( !(in_array('front-page',$classes)) && !is_home() ) { ?>
		<!-- BreadCrumb Section // -->
		<div class="bread-title-holder">
			<div class="container">
				<div class="row-fluid">
					<div class="container_inner clearfix">
						<h1 class="title">

							<?php if ( is_day() ) {
										printf( __( 'Daily Archives : <span>%s</span>', 'radiance-lite' ), get_the_date() );
								
								} elseif ( is_month() ) {
									printf( __( 'Monthly Archives : <span>%s</span>', 'radiance-lite' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'radiance-lite' ) ) );
								} elseif ( is_year() ) {
									printf( __( 'Yearly Archives : <span>%s</span>', 'radiance-lite' ), get_the_date( _x( 'Y', 'yearly archives date format', 'radiance-lite' ) ) );
								} elseif (is_author()) {

									$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
								    _e('Author Archives : ','radiance-lite'); echo $curauth->display_name;


								} elseif (is_category()) {

									printf( __( 'Category Archives : %s', 'radiance-lite' ), '<span>' . single_cat_title( '', false ) . '</span>' );

								} elseif (is_search()) {

									printf( __( 'Search Results for : %s', 'radiance-lite' ), '<span>' . get_search_query() . '</span>' );

								} elseif (is_tag()) {

									printf( __( 'Tag Archives : %s', 'radiance-lite' ), '<span>' . single_tag_title( '', false ) . '</span>' );

								} elseif ( is_home() ) {

									echo esc_attr( get_theme_mod('radiance_lite_blogpage_heading', __('Blog', 'radiance-lite') ) );

								} elseif (is_404()) {

									_e('404', 'radiance-lite');

								} else {

									the_title();

								}
							?>
						<span class="horizontal-style"></span>
						</h1>
						<?php if ( ( !is_home() || !is_404() ) && (class_exists('radiance_lite_breadcumb_class') ) ) {
							$radiance_lite_breadcumb = new radiance_lite_breadcumb_class();
							$radiance_lite_breadcumb->radiance_lite_custom_breadcrumb();
						} ?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
		<!-- \\ BreadCrumb Section -->
	</div>

<?php if(!is_front_page()) { ?><div class="header-clone"></div><?php } ?>

<?php if( is_front_page() ) {
  	get_template_part( 'includes/front', 'header-image-section' );
} ?>

