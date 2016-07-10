<?php
	$primary_color = esc_attr( get_theme_mod('radiance_lite_pri_color', '#ffdd24') );
	$secondary_color = esc_attr( get_theme_mod('radiance_lite_sec_color', '#293936') );
	$_logo_width = esc_attr( get_theme_mod('radiance_lite_logo_width', '228') );
	$_logo_height = esc_attr( get_theme_mod('radiance_lite_logo_height', '65') );
?>
<style type="text/css">
/*Custom Header
*************************/
<?php if ( get_header_image() ) { ?>
	#main-head-wrap{ background-image: url('<?php header_image(); ?>'); }
<?php } ?>

/*Custom Background
*************************/
body.custom-background { background-size: <?php echo esc_attr( get_theme_mod('background_size', 'auto') ); ?>; }

/*LOGO WIDTH AND HEIGHT
*************************/
#logo img{width:<?php echo $_logo_width.'px' ?>;height:<?php echo $_logo_height.'px' ?>;}

/*FONT PRIMARY COLOR
***********************/
#skenav .max-menu li.current a,
.strip-icon i,.testimonial-designation,.blog-meta,#back-to-top,
.footer-social a:hover,
.featured-inner-content:hover i,
#sidebar ul ul li a:hover,
#sidebar .sktwed-popular-post .popular-text:hover,
#sidebar .widget_tag_cloud a:hover,
.skt-info a:hover,
.news_full_blog .post-commentss a:hover,
.post-admin a:hover,
 .reply a,
 #respond .form-submit input,
 .footer-widgets .widget_archive li,
 .footer-widgets .tagcloud a:hover,
 .footer-items #recentcomments,
 .footer-items .comment-author-link a,
 .serve-inner-content h2,
 .serve-icon i ,
 #skenav .max-menu li.current a:hover,
 .copyright a:hover{color:<?php echo $primary_color; ?>;}


/*BORDER TOP PRIMARY COLOR
****************************/
.featured-inner-content:hover .featured-style { border-top-color:<?php echo $primary_color; ?>; }

/*BACKGROUND PRIMARY COLOR
****************************/
.search-bar input[type="text"],
.horizontal-style::before,
.horizontal-style::after,
#testimonial-carousel .owl-page.active,
.port_scode_fwrap nav.primary ul li a.selected,.btn_readmore,
.contact-info,input[type="submit"],
.contact-style,
.title-seperator > span,
blockquote.skt-quote, .page blockquote, blockquote,
.horizontal-box,
.sktmenu-toggle{background-color:<?php echo $primary_color; ?>; }

/*BORDER SECONDARY COLOR
**************************/
.iconbox-icon i,.SktFollowContact .social li a{border-color:<?php echo $secondary_color;?>;}

/*BORDER TOP SECONDARY COLOR
******************************/
.featured-style{border-top-color:<?php echo $secondary_color; ?>;}

/*BACKGROUND SECONDARY COLOR
******************************/
.horizontal-style,
.sketch-theme-black .sketch-close,
.blog-meta,.radiance-contact-wrapper,
.featured-inner-content:hover i,
#sidebar .widget_tag_cloud a:hover,
#respond .form-submit input,
.footer-widgets .tagcloud a:hover,
#skenav ul.max-menu ul.sub-menu li.current a,
.comment-reply-link{background-color: <?php echo $secondary_color; ?>; }


/*FONT SECONDARY COLOR
************************/
.team-description,
.protfolio_right,
.skt_blog_commt,
.skt_blog_commt a,
blockquote.skt-quote, .page blockquote,
.social li a::before,
.author-comment-section .author_title,
.skt_blog_middle .btn_readmore,
.team-job,.team-title,
.port_scode_fwrap nav.primary ul li a.selected,
h3.ske-title,
#sidebar li.ske-container > div a,
#sidebar li.ske-container > ul a,
#sidebar li.ske-container.widget_recent_entries li a,
#wp-calendar table th,
div.follow-icons li a,
.author_social .team-social a,
.author-comment-section .author_name,
.author-comment-section .black.mb,
.comment-author cite,
.commentlist p,
#respond input, #respond textarea,
h3#reply-title,
.alignright,
.alignleft,
.page-navigation a,
.footer-widgets .tagcloud a,
.footer-items .search-icon i{color:<?php echo $secondary_color; ?>;}

/*BACKGROUND SECONDARY COLOR WITH WHITE FONT
**********************************************/
.team-social li a,
.primary ul li a{background-color: <?php echo $secondary_color; ?>; color:#ffffff;}

/* ON HOVER -> BACKGROUND COLOR PRIMARY WITH FONT COLOR SECONDARY
******************************************************************/
#skenav ul.max-menu ul.sub-menu li:hover > a{background-color: <?php echo $primary_color; ?>;color:<?php echo $secondary_color; ?>;}

/*ON HOVER->BACKGROUND COLOR PRIMARY
**************************************/
.team-member-wrapper:hover .team-overlay { background-color: <?php echo $primary_color; ?>; }

/*GENERAL STYLING
********************/
.skt_blog_title a { color: <?php echo $secondary_color; ?>; margin-bottom: 9px; }
.team-social li a:hover{ color:<?php echo $secondary_color; ?>; background-color:#ffffff;}

/*BREADCRUMB COLOR/IMAGE OPTION SETTING FOR PAGES/POSTS
*********************************************************/
#main-head-wrap {background-color: #293136; }
</style>