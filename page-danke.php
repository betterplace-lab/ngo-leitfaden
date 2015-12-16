<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<div class="row">
  <section class="span4">
    <header>
      <h1><?php the_title(); ?></h1>
    </header>
    <div class="content">
      <?php the_content(); ?>
    </div>
  </section>
  <section class="span8">
    <div class="content">
      <script type="text/javascript">
      /* Configure at https://www.betterplace.org/de/projects/13026-leitfaden-internet-fur-ngos/iframe_donation_form */
      var _bp_iframe         = _bp_iframe || {};
      _bp_iframe.project_id  = 13026; /* REQUIRED */
      _bp_iframe.lang        = 'de'; /* Language of the form */
      /* Uncomment for further customization but *only* if you really need to! */
      _bp_iframe.width  = 450;  /* Custom iframe-tag-width, integer, minimum 450px */
      //_bp_iframe.height = 840;  /* Custom iframe-tag-height, integer */
      //_bp_iframe.color  = '6c9c2e'; /* Button and banderole color, hex without "#" */
      //_bp_iframe.background_color = 'fff'; /* Background-color, hex without "#" */
      _bp_iframe.default_amount   = 7;    /* Donation-amount, integer 1-99 */
      (function() {
        var bp = document.createElement('script'); bp.type = 'text/javascript'; bp.async = true;
        bp.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'www.betterplace.org/assets/load_donation_iframe.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(bp, s);
      })();
    </script>
    <div id="betterplace_donation_iframe" style="background: transparent url('http://www.betterplace.org/assets/new_spinner.gif') 275px 20px no-repeat;">
      <strong>
        <a href="https://www.betterplace.org/de/projects/13026-leitfaden-internet-fur-ngos/donations/new">Jetzt Spenden für &bdquo;Leitfaden &quot;Internet für NGOs&quot;&ldquo; bei unserem Partner betterplace.org</a></strong></div>
    </div>
  </section>
</div>
<?php
endwhile; endif;
get_footer();
?>