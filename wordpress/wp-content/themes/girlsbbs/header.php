<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSSフィード" href="<?php bloginfo('rss2_url'); ?>">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<!-- External files -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<!-- Favicon, Thumbnail image -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
<?php
wp_deregister_script('jquery');
wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), '1.11.0');
?>
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47554971-2', 'gossiper-bbs.com');
  ga('send', 'pageview');

</script>
</head>
<body <?php body_class(); ?>>
	<div id="page">
		<div id="wrapper">
			<!-- Header -->         
			<div id="header">
				<div class="header-wrap">
					<?php if(is_home()): // ホームが表示されている場合、ブログタイトルを H1 で表示 ?>
						<h1><a href="<?php bloginfo('url'); ?>" class="blog_title"><?php bloginfo('name'); ?></a></h1>
					<?php else: // ホーム以外のページが表示されている場合は H1 を削除。各記事やページのタイトルに H1 を使用 ?>
						<a href="<?php bloginfo('url'); ?>" class="blog_title"><?php bloginfo('name'); ?></a>
					<?php endif; ?>
					<?php bloginfo('description'); //現在使ってなので非表示にしてます。?>
                    <?php wp_nav_menu( array('menu_id' => 'nav' )); ?>
                    </div>
               </div><!-- /#header -->
               <div id="searchBox">
               	<?php bbp_get_template_part( 'form', 'search' ); ?>
               </div><!-- /#searchBox -->
               <div id="entryBox">
                          <?php if (!array_key_exists(topic, $_GET) && $_GET["page_id"] != 60): //トピック単体・トピック作成ページはリンクなしにしてます。?>
                           <p class="create-topic">
                                <a href="http://board.s502.xrea.com/?page_id=60">新しいトピックスを投稿する</a>
                           </p>
                         <?php endif; ?>
               </div><!-- /#entryBox -->
