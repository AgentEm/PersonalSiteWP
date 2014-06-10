<div class="footer">
	<div class="innerWrapper">
    <p>Design and Code &copy; <a href="mailto:hello@emilyporta.com">Emily Porta</a> <?php echo date('Y'); ?></p>
    <img src="<?php echo get_template_directory_uri(); ?>/images/footerOrnament.jpg">
    <?php wp_footer(); ?>
  </div>
</div>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID 
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));

/* Smooth scroll*/

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

/* Video hover playback control */
$(function() {
  $("video").hover(function() {
    this.play();
    },function(){
    this.pause();
  });
});

/* Changes the margin when you submit the contact form */
$(function() {
  $("#ninja_forms_field_5").on("click", function(){
    $(".socialBoxes").css("margin-top","35%");
  });
});

</script>

</body>
</html>