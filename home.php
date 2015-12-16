<?php
/*
Template Name: Inhaltsverzeichnis
*/
?>

<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<div class="row">
  <section class="span8">
    <header>
      <h1><?php the_title(); ?></h1> 
    </header>
    <div class="content">
      <?php the_content(); ?>
      <h2>Inhalt</h2>
      <ul class="nav toc">
      <?php
      wp_nav_menu( array( 
          'container' => false,
          'fallback_cb' => false,
          'theme_location' => 'toc',
          'items_wrap' => '%3$s',
          'link_after' => '',
          'after' => '',
      ));
      ?>
      </ul>
    </div>
  </section>
  <section class="span3 offset1"><?php dynamic_sidebar( 'sidebar-widgets' ); ?></section>
</div>
<?php
endwhile; endif;
get_footer();
?>