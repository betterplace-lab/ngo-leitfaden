<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico" type="image/x-icon" />
    <?php
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', null, '2.3.2' );
    wp_head();
    ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand ir" href="<?php echo home_url(); ?>">NGO Leitfaden</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <?php
              wp_nav_menu( array( 
                  'container' => false,
                  'fallback_cb' => false,
                  'theme_location' => 'main',
                  'items_wrap' => '%3$s',
                  'link_after' => '',
                  'after' => '',
              ));
              ?>
            <li>
              <span class="order-btn">
                <a href="<?php echo get_page_link_by_slug('bestellen'); ?>" class="btn btn-primary" type="button">Leitfaden bestellen</a>
              </span>
            </li>
            </ul>
            <?php get_search_form(); ?> 
          </div>
        </div>
      </div>
    </nav>
    <header class="masthead">
      <div class="container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/masthead.jpg" alt="">
      </div>
    </header>
    <div class="main">
      <article class="container">