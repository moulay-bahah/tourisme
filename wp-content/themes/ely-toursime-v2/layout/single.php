<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('./parts/head.php');
  ?>
  <title>Planning</title>
</head>

<body>


  <!-- menu -->
  <?php include('./parts/menu.php') ?>
<!-- thainbel image -->
  <div class="hero-wrapper">
    <div class="hero-body">
      <div class="hero" style="background-image: url(/images/slide/slide1.jpg)">
        <p>welcome to chinguetti</p>
      </div>
    </div>
  </div>
  <!-- contenu  -->
  <div class="main">
    <?php
    include('./parts/contenu-mocked.php')
      ?>
    <!-- contact -->
    <?php
    include('./parts/contact.php')
      ?>
  </div>
  <!-- footer -->
  <?php
  include('./parts/footer-big-menu.php');
  include('./parts/footer-short-menu.php');
  include('./parts/footer.php')
    ?>
  <script src="js/all.min.js" defer></script>
  <script src="js/script.js" defer></script>
</body>

</html>