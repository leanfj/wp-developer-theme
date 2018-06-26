<?php
  while(have_posts()):
    the_post(); ?>
    <h1>Essa é uma pagina</h1>
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
  <?php
  endwhile;
?>