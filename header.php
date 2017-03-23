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
        margin-bottom: 30px;
      }
      .fundraising-handbuch-teaser__cta:first-child {
        margin-bottom: 6px; 
      }
      .fundraising-handbuch-teaser .container {
        position: relative;
      }
      .fundraising-handbuch-teaser a {
        color: white;
      }
      .fundraising-handbuch-teaser .btn {
        color: #485155;
        margin-left: 10px;
        display: none;
      }
      @media (max-width: 980px) {
        .fundraising-handbuch-teaser__cta:first-child {
          margin-top: 6px; 
        }
      }
      @media (min-width: 980px) {
        .fundraising-handbuch-teaser .container:before {
          content: '';
          position: absolute;
          top: -70px;
          right: -20px;
          background: url('<?php echo get_template_directory_uri(); ?>/images/handbuch.png') no-repeat 0 0;
          background-size: contain;
          height: 250px;
          width: 300px;
          display: block;
          z-index: 0;
        }
        .fundraising-handbuch-teaser__layout {
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          position: relative;
          z-index: 1;
        }
        .fundraising-handbuch-teaser__layout > :first-child {
          margin-right: 50px;
        }
      }
      @media (min-width: 1200px) {
        .fundraising-handbuch-teaser .btn {
          display: inline-block;
        }
        .fundraising-handbuch-teaser .container:before {
          right: 60px;
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
            <div class="fundraising-handbuch-teaser__layout">

              <div>NGO Leitfaden? Alt und vergriffen.</div>

              <div>
                <div class="fundraising-handbuch-teaser__cta clearfix">
                  Jetzt aktuelles <a href="http://www.fundraising-handbuch.org/"><strong>Handbuch Online-Fundraising</strong></a> bestellen.
                  <a href="http://www.fundraising-handbuch.org/" class="btn btn-secondary pull-right" type="button">Jetzt bestellen</a>
                </div>
                <div class="fundraising-handbuch-teaser__cta clearfix">
                  Jetzt aktuelles <a href="https://wigwam.im/campaigning-guide/"><strong>Handbuch Kampagnen-Konzeption</strong></a> bestellen.
                  <a href="https://wigwam.im/campaigning-guide/" class="btn btn-secondary pull-right" type="button">Jetzt bestellen</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </header>
      <div class="main">
        <article class="container">