<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE ]>
<link rel="stylesheet" href="<?=bloginfo('template_url')?>/style-ie.css" type="text/css" media="screen" />
<script type="text/javascript">
	var png_trans = "<?=bloginfo('template_url')?>/images/transparent.gif";
</script>
<![endif]-->
<!-- Main Menu -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.1.2.6.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jqueryslidemenu/jqueryslidemenu.js"></script>
	<!-- /Main Menu -->
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>

<body>
<div id="page">

<div id="menu">
	<!-- <div id="top_rss"><a href="<?php bloginfo('rss2_url'); ?>" title="Rss"><img src="<?php bloginfo('template_url')?>/images/rss.png" alt="<?php bloginfo('name'); ?> Rss" /></a></div> -->
	<div id="mainmenu">
		<ul>
			<li class="first <? if(is_home()) echo 'current_page_item'; ?>"><a href="<?php echo get_option('home'); ?>/">Главная</a></li>
			<?php $exclude = obwp_get_meta(SHORTNAME.'_exclude_page'); wp_list_pages2('title_li=&sort_column=menu_order&depth=0&exclude='.$exclude) ?>
		</ul>
	</div>
</div>

<div id="header">
	<div id="header_title">
        <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<span style = 'float: right'>&laquo;<?php bloginfo('description'); ?>&raquo;</span>
    </div>
	<div id="header_right">
		<h1 class='telefon'><i style="font-size: 22px; font-weight: normal;">+7(495)</i> 344-67-13</h1>
    </div>
</div>

<div id="board">
<!-- 	<div id="board_post">
		<h3>Featured Post</h3>
		<?php $recent = new WP_Query("showposts=1&orderby=rand"); while($recent->have_posts()) : $recent->the_post();?>
		<h2><?php the_title_limited(70); ?></h2>
		<p><?php the_content_limit(300); ?></p>
		<p><a href="<?php the_permalink() ?>">Read More</a></p>
		<?php endwhile; ?> 
	</div> -->
	<div id="board_twitter">
		<!-- <p><a href="<?php echo theme_twitter_link_show(); ?>"><img src="<?php bloginfo('template_url')?>/images/button_twitter.png" alt="" /></a></p> -->
		<div style='text-align: center; margin: 0px 30px 0 0; padding: 15px; color: #212121;'>
			<div style='background: #fff; background: rgba( 255, 255, 255, 0.8); padding: 15px; margin: 0 0 15px 0'>
				<h2>Часы работы:</h2>
			</div>
			<div style='background: #fff;  background: rgba( 255, 255, 255, 0.8); padding: 15px;'>
				<p style='padding: 5px 0'></p>
				<h3>ПН - ПТ: с 8.00 до 23.00</h3>
				<p style='padding: 5px 0'></p>
				<h3>СБ - ВС: с 9.00 до 22.00</h3>
			</div>

		</div>
	</div>
</div>

<div id="body">

	<div id="body_left">
    	<div id="body_left_content">