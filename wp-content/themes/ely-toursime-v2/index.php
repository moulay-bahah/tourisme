<?php 
require('header.php') 
?>

<body>

  <!-- menu -->
  <?php include('parts/menu.php') ?>
  <!-- contenue -->
 
   <div>
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   <?php  if ( has_post_thumbnail() ) {
        the_post_thumbnail();
        }
        ?> 
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; else : ?>
        <p>Aucun article trouvé.</p>
    <?php endif; ?>
    </div>
  <!-- footer -->
  <?php
  include('parts/footer-big-menu.php');
  include('parts/footer-short-menu.php');
  include('parts/footer.php')
    ?>

  <?php wp_footer() ?>
</body>

</html>