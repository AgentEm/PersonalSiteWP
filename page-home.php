<?php

/*
	Template Name: Home Page
*/ 

get_header();  ?>

  <div class="innerWrapper">
    
    <div class="about full" id="about">
      <img src="<?php echo get_template_directory_uri(); ?>/images/h2OrnamentLeft.jpg">
      <h2>About Me</h2>
      <img src="<?php echo get_template_directory_uri(); ?>/images/h2OrnamentRight.jpg">
      
      <div class="wholeSection clearfix">
        <div class="headshot">
          <img src="<?php echo get_template_directory_uri(); ?>/images/emilyCropped.jpg">
        </div>
        
      <div class="textAndButton">
        <p>Hi, I'm Emily. I'm a front-end web developer based in Toronto who loves creating great looking web products with rock-solid code. I'm currently looking for a position as a junior developer at a company that values life-long learning and passion for innovation.</p>
      
        <div class="button">      
         <a href="mailto:eeporta@gmail.com">Contact Me</a>
        </div>
      </div> <!--/.textAndButton-->

    </div> <!--/.wholeSection-->
    </div> <!--/.about-->
    

    <div class="portfolio clearfix" id="portfolio">
      <img src="<?php echo get_template_directory_uri(); ?>/images/h2OrnamentLeft.jpg">
      <h2>My Portfolio</h2>
      <img src="<?php echo get_template_directory_uri(); ?>/images/h2OrnamentRight.jpg">

      <div class="portfolioPiece">
      <a href="http://emilyporta.com/coverme" target="_blank"><video src="<?php echo get_template_directory_uri(); ?>/video/coverme.mp4" poster="<?php echo get_template_directory_uri(); ?>/images/coverMe.png" loop muted>
      </video></a>
      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora, nesciunt voluptas possimus laborum quibusdam esse dolorum earum doloribus eius cumque officiis sapiente soluta quos obcaecati pariatur officia debitis similique?</p>
      </div> <!--/.portfolioPiece-->

      <div class="portfolioPiece">
      <a href="http://wolever.net" target="_blank"><video src="<?php echo get_template_directory_uri(); ?>/video/wolever.mp4" poster="<?php echo get_template_directory_uri(); ?>/images/wolever.png" loop muted>
      </video></a>
      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora, nesciunt voluptas possimus laborum quibusdam esse dolorum earum doloribus eius cumque officiis sapiente soluta quos obcaecati pariatur officia debitis similique?</p>
      </div> <!--/.portfolioPiece-->
      
      <div class="portfolioPiece">
      <a href="http://emilyporta.com/oldsite" target="_blank"><video src="<?php echo get_template_directory_uri(); ?>/video/oldsite.mp4" poster="<?php echo get_template_directory_uri(); ?>/images/oldsite.png" loop muted>
      </video></a>
      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora, nesciunt voluptas possimus laborum quibusdam esse dolorum earum doloribus eius cumque officiis sapiente soluta quos obcaecati pariatur officia debitis similique?</p>
      </div> <!--/.portfolioPiece-->

      <div class="portfolioPiece">
      <a href="http://emilyporta.com/gallery" target="_blank"><video src="<?php echo get_template_directory_uri(); ?>/video/gallery.mp4" poster="<?php echo get_template_directory_uri(); ?>/images/gallery.png" loop muted>
      </video></a>
      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora, nesciunt voluptas possimus laborum quibusdam esse dolorum earum doloribus eius cumque officiis sapiente soluta quos obcaecati pariatur officia debitis similique?</p>
      </div> <!--/.portfolioPiece-->

      <div class="portfolioPiece">
      <a href="http://emilyporta.com/hackeryou" target="_blank"><video src="<?php echo get_template_directory_uri(); ?>/video/hackeryou.mp4" poster="<?php echo get_template_directory_uri(); ?>/images/hackeryou.png" loop muted>
      </video></a>
      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora, nesciunt voluptas possimus laborum quibusdam esse dolorum earum doloribus eius cumque officiis sapiente soluta quos obcaecati pariatur officia debitis similique?</p>
      </div> <!--/.portfolioPiece-->


      <div class="portfolioPiece">
      <a href="http://emilyporta.com/styleguide" target="_blank"><video src="<?php echo get_template_directory_uri(); ?>/video/styleguide.mp4" poster="<?php echo get_template_directory_uri(); ?>/images/styleguide.png" loop muted>
      </video></a>
      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, tempora, nesciunt voluptas possimus laborum quibusdam esse dolorum earum doloribus eius cumque officiis sapiente soluta quos obcaecati pariatur officia debitis similique?</p>
      </div> <!--/.portfolioPiece-->

      <div class="button">
      <a href="<?php echo get_template_directory_uri(); ?>/emilyPortaResume.pdf">Download my resume</a>
      </div>
    </div> <!--/.portfolio-->

    <div class="contact" id="contact">
      <img src="<?php echo get_template_directory_uri(); ?>/images/h2OrnamentLeft.jpg">
      <h2>Get in touch</h2>
      <img src="<?php echo get_template_directory_uri(); ?>/images/h2OrnamentRight.jpg">

      <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
      
      <div class="controlTwitter">
        <a class="twitter-timeline" href="https://twitter.com/AgentEmily" data-widget-id="464069747043094528" height="460">Tweets by @AgentEmily</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
        </script>
      </div> <!--/.controlTwitter-->
      <div class="socialBoxes">
        <div id="github" class="socialBox"><i class="fa fa-github-alt"></i></div>
        <div id="linkedin" class="socialBox"><i class="fa fa-linkedin"></i></div>
        <div id="twitter" class="socialBox"><i class="fa fa-twitter"></i> </div>
        <div id="email" class="socialBox"><i class="fa fa-envelope-o"></i></div>
      </div> <!--/.socialBoxes-->
    </div> <!--/.contact-->
    
  </div> <!-- /.innerWrapper -->

<?php get_footer(); ?>