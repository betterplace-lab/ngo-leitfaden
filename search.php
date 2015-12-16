<?php
get_header();
?>
<div class="row">
  <section class="span8">
    
    <?php if ( have_posts() ) : ?>

      <header>
        <h1>Suchergebnisse für &#132;<?php echo get_search_query(); ?>&#148;</h1>
      </header>
      <div class="content">
        <ul class="media-list">
          <?php while ( have_posts() ) : the_post(); ?>
          <li class="media">
            <div class="media-body">
            <h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <?php the_excerpt(); ?>
            </div>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
    <?php else : ?>
      <header>         
        <h1>Keine Suchergebnisse</h1>
      </header>
      <p>Wir haben keine Ergebnisse zu Ihrem Suchbegriff gefunden.</p>

    <?php endif; ?>
  </section>
  <div class="span3 offset1"><?php dynamic_sidebar( 'sidebar-widgets' ); ?></div>
</div>
<?php
get_footer();
?>