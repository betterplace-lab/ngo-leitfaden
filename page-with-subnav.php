<?php
/*
Template Name: Seite mit Inhaltsverzeichnis
*/
?>

<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<div class="row stickem-container">
  <nav class="span3 stickem">
    <ul class="nav page-toc">
      <?php
      wp_nav_menu( array( 
          'container' => false,
          'fallback_cb' => false,
          'theme_location' => 'toc',
          'items_wrap' => '%3$s',
          'link_after' => '',
          'after' => '',
          //'depth' => '1',
      ));
      ?>
      </ul>
  </nav>
  <section class="span8 offset1">
    <header>
      <strong class="dachzeile"><?php echo rwmb_meta( 'cs_dachzeile', null, $post->ID ); ?></strong>
      <h1><?php the_title(); ?></h1> 
    </header>
    <section class="content">
      <?php the_content(); ?>
    </section>
      <?php if(comments_open()) : ?>
        <section class="comments">
      <?php comments_template( '', true ); ?>
      </section>
      <?php endif; ?>
  </section>
</div>
<?php
endwhile; endif;
$hasSubnav = true;
get_footer();
?>