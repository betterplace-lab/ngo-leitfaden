<?php
get_header();
?> 
  <div class="row">
  <section class="span8">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <header>
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
    <?php endwhile; endif; ?>
  </section>
  <div class="span3 offset1"><?php dynamic_sidebar( 'sidebar-widgets' ); ?></div>
</div>
<?php
get_footer();
?>