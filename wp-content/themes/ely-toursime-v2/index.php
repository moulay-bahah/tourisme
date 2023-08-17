<?php 
// the page content will be display there
require('header.php') 
?>

<body>

  <!-- menu -->
  <?php include('parts/menu.php') ?>
  <!-- contenue -->
  

  <div class="wp-page">
    <h1 id="titel">
      <?php
      include('parts/thumbnail.php') 
      ?>
    </h1>

    <div class="wp-container" id="wp-container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php  if ( has_post_thumbnail() ) {
          the_post_thumbnail();
          }
      ?>  
      <?php the_content(); ?>
      <?php endwhile; else : ?>
          <p>Aucun article trouvé.</p>
      <?php endif; ?>
    </div>
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