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
      <p>Hi, I'm Emily. I'm a front-end web developer who loves creating great looking web products with rock-solid code. I'm currently looking for a position as a junior developer at a company who values life-long learning and passion for innovation.</p>
      <div class="button">Contact Me<div>
    </div> <!-- /.about -->
  </div> <!-- /.innerWrapper -->
<?php get_footer(); ?>