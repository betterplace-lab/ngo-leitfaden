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
    <style>
    .fundraising-handbuch-teaser {
      background: #fc2bfc;
      color: white;
      padding: 20px 0;
      position: relative;
    }
    .fundraising-handbuch-teaser .container {
      position: relative;
    }
    @media (min-width: 980px) {
      .fundraising-handbuch-teaser .container:before {
        content: '';
        position: absolute;
        top: -90px;
        right: 20px;
        background: url('http://www.fundraising-handbuch.org/assets/media/handbuch-online-fundraising.png') no-repeat 0 0;
        background-size: contain;
        height: 170px;
        width: 139px;
        display: block;
      }
    }
    .fundraising-handbuch-teaser a {
      color: white;
    }
    .fundraising-handbuch-teaser .btn {
      color: #485155;
      margin-left: 10px;
    }
    @media (max-width: 980px) {
      .fundraising-handbuch-teaser .btn {
        display: none;
      }
    }

    </style>
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

      <div class="fundraising-handbuch-teaser">
        <div class="container">
          NGO Leitfaden?
          <span style="color: #dddddd; display: inline-block; margin-right: 50px;">Alt und vergriffen.</span>
          Jetzt aktuelles <a href="http://www.fundraising-handbuch.org/"><strong>Handbuch Online-Fundraising</strong></a> bestellen.
          <a href="http://www.ngoleitfaden.org/bestellen/" class="btn btn-secondary" type="button">Leitfaden bestellen</a>
        </div>
      </div>

    </header>
    <div class="main">
      <article class="container">