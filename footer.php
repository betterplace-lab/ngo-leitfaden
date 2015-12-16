        </article>
      </div>
      <footer>
        <nav class="container content">
          <ul class="inline">
          <?php
          wp_nav_menu( array( 
              'container' => false,
              'fallback_cb' => false,
              'theme_location' => 'footer',
              'items_wrap' => '%3$s',
              'link_after' => '',
              'after' => '<span> | </span>',
          ));
          ?>
          </ul>
        </nav>
        <div class="support">
          <div class="container">
            <a class="ir pull-left" id="bpl" href="http://www.betterplace-lab.org/" target="_blank">betterplace lab</a>
            <a class="ir pull-left" id="wigwam" href="http://www.wigwam.im/" target="_blank">wigwam Kommunikationsberatung</a>
            <span class="ir pull-right" id="sap">SAP</span>
          </div>
        </div>
        <div class="container content">
          <p class="pull-right"><small>© 2013 Leitfaden für NGOs</small></p> 
        </div>
      </footer>
    <?php
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '2.3.1' );
    if(is_page_template('page-with-subnav.php')) {
      wp_enqueue_script( 'stickem', get_template_directory_uri() . '/js/stickem/jquery.stickem.js', array( 'jquery' ), '1.4' );
    }
    wp_footer();
    ?>
    <?php if(is_page_template('page-with-subnav.php')): ?>
    <script type="text/javascript">
      (function($){
        $('.container').stickem({
          offset: 53
        });
      })(jQuery);
    </script>
    <?php endif; ?>
    <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-1584203-19', 'ngoleitfaden.org');
      ga('send', 'pageview');
    
    </script>
  </body>
</html>