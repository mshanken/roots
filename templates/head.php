<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

  <!-- Charater Endcoding -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Mobile Compatible -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- SEO -->
  <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
  <meta name="description" content="">

  <!-- Twitter Cards  https://dev.twitter.com/docs/cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="">
  <meta name="twitter:creator" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image:src" content="">

  <!-- Facebook Open Graph  https://developers.facebook.com/docs/opengraph -->
  <meta property="fb:admins" content="">
  <meta property="fb:app_id" content="">
  <meta property="og:url" content="">
  <meta property="og:type" content="">
  <meta property="og:title" content="">
  <meta property="og:image" content=""/>
  <meta property="og:description" content="">
  <meta property="og:site_name" content="">
  <meta property="article:author" content="">
  <meta property="article:section" content="">
  <meta property="article:tag" content="">
  <meta property="article:publisher" content="">

  <!-- Schema Tags Schema.org -  Test this out via http://www.google.com/webmasters/tools/richsnippets  -->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">

  <!-- Google Authorship https://plus.google.com/authorship -->
  <link rel="author" href=""/>
  <link rel="publisher" href="" />

  <!-- Icons  -->
  <link rel="shortcut icon" href="">
  <link rel="apple-touch-icon" href="">

  <!-- Apple Mobile Web App -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
