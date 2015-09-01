<?php

/*
	Template Name: Home Page
*/ 

get_header();  ?>

  <div class="innerWrapper">
    
    <div class="about full" id="about">
      <div class="sectionHeadingContainer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/h2OrnamentLeft.jpg">
        <h2>About Me</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/h2OrnamentRight.jpg">
      </div>

      <div class="wholeSection clearfix">
        <div class="headshot">
          <img src="<?php echo get_template_directory_uri(); ?>/images/emilyCropped.jpg">
        </div>
        
      <div class="textAndButton">
        <p>Hi, I'm Emily. I'm a front-end web developer based in Toronto who loves creating great looking web products with rock-solid code. I currently work for <a href="http://www.shifthealth.ca">Shift Health</a> as their jr. front-end developer.</p>
      
        <div class="button">      
         <a href="mailto:eeporta@gmail.com">Contact Me</a>
        </div>
      </div>

    </div>
    </div>
    

    <div class="portfolio clearfix" id="portfolio">
      <div class="sectionHeadingContainer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/h2OrnamentLeft.jpg">
        <h2>My Portfolio</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/h2OrnamentRight.jpg">
      </div>

      <h3>Hover over any video below to see the site in action.</h3>
      <h3>You can also see my code and fork my projects on <a href="http://github.com/agentem" target="_blank">Github</a>.</h3>



      <div class="portfolioPiece">
      <a href="http://emilyporta.com/coverme" target="_blank">
      <video loop muted>
        <source src="<?php echo get_template_directory_uri(); ?>/video/coverme.webm" type="video/webm"> 
        <source src="<?php echo get_template_directory_uri(); ?>/video/coverme.mp4" type="video/mp4">
        I'm sorry; your browser doesn't support HTML5 video in WebM or MP4. The link below will take you to the project's live site.
      </video></a>
      <p class="description">Cover Me is a web application that elegantly uses the Youtube API (v3) to find the best cover for any song title you type in. The page dynamically changes on submit, is fully responsive, and is cross-browser tested.</p> 
      <p>This site is live at: <a href="http://emilyporta.com/coverme" target="_blank">emilyporta.com/coverme</a></p>
      <p class="techDescription">HTML - CSS - SASS - Javascript - jQuery - Youtube API - AJAX - Design - Responsive Design</p>
      </div> <!--/.portfolioPiece-->

      <div class="portfolioPiece">
      <a href="http://emilyporta.com/gallery" target="_blank">
        <video loop muted>
          <source src="<?php echo get_template_directory_uri(); ?>/video/gallery.webm" type="video/webm"> 
          <source src="<?php echo get_template_directory_uri(); ?>/video/gallery.mp4" type="video/mp4">
          I'm sorry; your browser doesn't support HTML5 video in WebM or MP4. The link below will take you to the project's live site.
        </video>
      </a>
      <p class="description">A jQuery gallery designed and developed by myself and <a href="http://www.morewhitespace.ca/">Jen Abella-Froese</a>, incorporating a jQuery lightbox and dynamically updating content and imagery. Hover over the video tumbnail to see it in action!</p>
      <p>This site is live at: <a href="http://emilyporta.com/gallery" target="_blank">emilyporta.com/gallery</a></p>
      <p class="techDescription">HTML - CSS - Javascript - jQuery - Design - Paired Programming</p>
      </div> <!--/.portfolioPiece-->

      <div class="portfolioPiece">
      <a href="http://emilyporta.com/onepage" target="_blank">
        <video loop muted>
          <source src="<?php echo get_template_directory_uri(); ?>/video/oldsite.webm" type="video/webm"> 
          <source src="<?php echo get_template_directory_uri(); ?>/video/oldsite.mp4" type="video/mp4">
          I'm sorry; your browser doesn't support HTML5 video in WebM or MP4. The link below will take you to the project's live site.
        </video>
      </a>
      <p class="description">For my first Hackeryou project, I created a personal one-page site, with a clean, minimalistic design reflective of my preferred aesthetic. It includes a Javascript smoothscroll.</p>
      <p>This site is live at: <a href="http://emilyporta.com/onepage" target="_blank">emilyporta.com/onepage</a></p>
      <p class="techDescription">HTML - CSS - Design</p>
      </div> <!--/.portfolioPiece-->

      <div class="portfolioPiece">
      <a href="http://emilyporta.com/hackeryou" target="_blank">
        <video loop muted>
          <source src="<?php echo get_template_directory_uri(); ?>/video/hackeryou.webm" type="video/webm"> 
          <source src="<?php echo get_template_directory_uri(); ?>/video/hackeryou.mp4" type="video/mp4">
          I'm sorry; your browser doesn't support HTML5 video in WebM or MP4. The link below will take you to the project's live site.
        </video>
      </a>
      <p class="description">I took the complex site at <a href="http://hackeryou.com">hackeryou.com</a> and remade the homepage from scratch. The site is fully responsive, also using an original mobile design.</p> 
      <p>This site is live at: <a href="http://emilyporta.com/hackeryou" target="_blank">emilyporta.com/hackeryou</a></p>
      <p class="techDescription">Responsive design - HTML - CSS - SASS - Design from client mockups</p>
      </div> 


      <div class="portfolioPiece">
        <a href="http://emilyporta.com/styleguide" target="_blank">
          <video loop muted>
            <source src="<?php echo get_template_directory_uri(); ?>/video/styleguide.webm" type="video/webm"> 
            <source src="<?php echo get_template_directory_uri(); ?>/video/styleguide.mp4" type="video/mp4">
            I'm sorry; your browser doesn't support HTML5 video in WebM or MP4. The link below will take you to the project's live site.
          </video>
        </a>
        <p class="description">This is a style guide created based on a client brief for the Deep Lagoon Hostel, showcasing part of my design and development process.</p>
        <p>This site is live at: <a href="http://emilyporta.com/styleguide" target="_blank">emilyporta.com/styleguide</a></p>
        <p class="techDescription">HTML - CSS - SASS - Wireframing - Design</p>
      </div>

      <div class="portfolioPiece">
      <a href="http://wolever.net" target="_blank">
        <video loop muted>
          <source src="<?php echo get_template_directory_uri(); ?>/video/wolever.webm" type="video/webm"> 
          <source src="<?php echo get_template_directory_uri(); ?>/video/wolever.mp4" type="video/mp4">
          I'm sorry; your browser doesn't support HTML5 video in WebM or MP4. The link below will take you to the project's live site.
        </video>
      </a>
      <p class="description">A simple and clean one-page site created for developer David Wolever, utilizing CSS keyframe animation.</p>
      <p>This site is live at: <a href="http://wolever.net" target="_blank">wolever.net</a></p>
      <p class="techDescription">HTML - CSS - Design</p>
      </div>

      <div class="button">
      <a href="<?php echo get_template_directory_uri(); ?>/emilyPortaResume.pdf">Download my resume</a>
      </div>
    </div>

    <div class="contact" id="contact">
      <div class="sectionHeadingContainer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/h2OrnamentLeft.jpg">
        <h2>Get in touch</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/h2OrnamentRight.jpg">
      </div>

      <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
      
      <div class="controlTwitter">
        <a class="twitter-timeline" href="https://twitter.com/AgentEmily" data-widget-id="464069747043094528" height="460">Tweets by @AgentEmily</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
        </script>
      </div>

      <div class="socialBoxes clearfix">
        <div id="github" class="socialBox">
          <a href="http://github.com/agentem" target="_blank">
            <i class="fa fa-github-alt"></i>
          </a>
        </div>

        <div id="linkedin" class="socialBox">
          <a href="http://linkedin.com/in/emilyporta" target="_blank">
            <i class="fa fa-linkedin"></i>
          </a>
        </div>

        <div id="twitter" class="socialBox">
          <a href="http://twitter.com/agentemily" target="_blank">
            <i class="fa fa-twitter"></i>
          </a>  
        </div>

        <div id="email" class="socialBox">
          <a href="mailto:hello@emilyporta.com">
            <i class="fa fa-envelope-o"></i>
          </a>
        </div>

      </div>
    </div>
    
  </div>
<?php get_footer(); ?>