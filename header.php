<?php
/**
* The Header for our theme.
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
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<base href="/">
	<?php wp_head(); ?>

<script src="http://code.jquery.com/jquery-1.4.4.js">< / script>  
</pre>  
<h2>Step7: Adding jQuery’s ajax function</h2>  
<pre name="code" class="javascript">  
<script type="text/javascript">                           
$("#submitbtn").click(function() {  
  
$('#result').html('<img src="<?php bloginfo('template_url'); ?>/images/loader.gif" class="loader" />').fadeIn();  
var input_data = $('#wp_login_form').serialize();  
$.ajax({  
type: "POST",  
url:  "< ?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",  
data: input_data,  
success: function(msg){  
$('.loader').remove();  
$('<div>').html(msg).appendTo('div#result').hide().fadeIn('slow');  
}  
});  
return false;  
  
});  
</script>  
<?php $home_url = home_url(); ?>
</head>
<body <?php body_class(); ?> >
	<?php get_template_part('login'); ?>
	<!-- wrapper -->
	<div id="wrapper" class="skepage">
		<div id="main-head-wrap" class="clearfix">
			<div id="header" class="skehead-headernav clearfix">
				<!-- top-head-secwrap -->
				<div id="head">
					<nav class="navbar">
					<!-- container -->
					<div class="container">
						<!-- row-fluid -->
						<div class="row-fluid">
							<!-- #logo -->
							<div class="navbar-header">
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
								<button type="button" class="btn btn-default navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-home" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							    </button>
							</div>
							
							<!-- #logo -->
							

							<!-- top-nav-menu -->
							<div class="top-nav-menu col-md-9 col-sm-9 col-xs-6 collapse navbar-collapse" id="navbar-home">
								<!-- Header Search Icon// -->
			<!-- 					<div class="top-search col-md-1 col-sm-1 col-xs-3">						
									<a href="javascript:void(0);" class="strip-icon search-strip" title="search"><i class="fa fa-search"></i></a>
								</div> -->
								<!-- Header Search Icon -->
								<div id="skenav" class="ske-menu col-md-11 col-sm-11 col-xs-6  collapse navbar-collapse" >
								
									<ul id="menu-main nav navbar-nav" class="max-menu">
<!-- 									<li class="gohome"><a href="<?php if( is_front_page() ){ echo '#wrapper'; } else { echo esc_url(home_url('/')); } ?>" title="<?php bloginfo('name') ?>" ><?php _e('Home', 'radiance-lite'); ?></a></li> -->										
										<li><a href="<?php echo $home_url ?>/#"><?php _e('ABOUT US', 'radiance-lite') ?></a></li>
										<li class="home-nav"><a href="<?php echo $home_url ?>/#section1"><?php _e('INSTITUTIONS', 'radiance-lite'); ?></a></li>
										<li class="home-nav"><a href="<?php echo $home_url ?>/#section2"><?php _e('NEWS', 'radiance-lite'); ?></a></li>
										<li><a href="<?php echo $home_url ?>/#"> <?php _e('DONATE', 'radiance_lite') ?> </a></li>
										<li class="home-nav"><a href="<?php echo $home_url ?>/#section3"><?php _e('CONTACT US', 'radiance-lite'); ?></a></li>
<!-- 										<?php wp_list_pages('title_li=&depth=0'); ?> -->   <!-- page listing -->	
										<li><a href=""><?php _e('|', 'radiance-lite') ?></a></li>									
										<li><a href="<?php echo $home_url ?>/#" data-toggle="modal" data-target="#login">LOGIN</a></li>
									</ul>
								
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
				</nav>
			</div>
			<!-- top-head-secwrap -->
		</div>
		<!-- HEADER -->
		
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

<?php 
if($_POST){  
//We shall SQL escape all inputs  
$username = $wpdb->escape($_REQUEST['username']);  
$password = $wpdb->escape($_REQUEST['password']);  
$remember = $wpdb->escape($_REQUEST['rememberme']);  
      
if($remember) $remember = "true";  
else $remember = "false";  
$login_data = array();  
$login_data['user_login'] = $username;  
$login_data['user_password'] = $password;  
$login_data['remember'] = $remember;  
$user_verify = wp_signon( $login_data, true );   
          
if ( is_wp_error($user_verify) )   
{  
echo "<span class='error'>Invalid username or password. Please try again!</span>";  
exit();  
} else   
{     
echo "<script type='text/javascript'>window.location=''. get_bloginfo('url') .''</script>";  
exit();  
}  

 }?>