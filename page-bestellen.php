<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<div class="row">
  <section class="span6">
    <header>
      <h1><?php the_title(); ?></h1>
    </header>
    <div class="content">
      <?php echo do_shortcode( '[contact-form-7 id="126" title="Leitfaden bestellen"]' ); ?>
    </div>
  </section>
  <section class="span5 offset1">
    <div class="content">
      <?php the_content(); ?>
    </div>
  </section>
</div>
<?php
endwhile; endif;
get_footer();
?>