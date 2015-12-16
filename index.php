<?php
get_header();
?>
<div class="row">
  <div class="span3"></div>
  <section class="span8 offset1">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <header>
      <a href="#"><strong><?php the_title(); ?></strong></a>
    </header>
    <div class="content">
      <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>
  </section>
</div>
<?php
get_footer();
?>