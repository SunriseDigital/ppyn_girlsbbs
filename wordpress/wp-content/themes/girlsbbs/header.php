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
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
     <div id="page">
          <div id="wrapper">

<!-- Header -->         
               <div id="header">
                    <?php if(is_home()): // ホームが表示されている場合、ブログタイトルを H1 で表示 ?>
                         <h1><a href="<?php bloginfo('url'); ?>" class="blog_title"><?php bloginfo('name'); ?></a></h1>
                    <?php else: // ホーム以外のページが表示されている場合は H1 を削除。各記事やページのタイトルに H1 を使用 ?>
                         <a href="<?php bloginfo('url'); ?>" class="blog_title"><?php bloginfo('name'); ?></a>
                    <?php endif; ?>

                    <?php bloginfo('description'); //現在使ってなので非表示にしてます。?>
                         <?php if (!array_key_exists(topic, $_GET) && $_GET["page_id"] != 60): //トピック単体・トピック作成ページはリンクなしにしてます。?>
                              <p class="create-topic">
                                   <a href="http://board.s502.xrea.com/?page_id=60">トピックを投稿する</a>
                              </p>
                    <?php endif; ?>

               <?php wp_nav_menu( array('menu_id' => 'nav' )); ?>
               </div><!-- /#header -->
