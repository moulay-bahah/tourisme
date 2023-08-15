<?php

get_header(); ?>

<div class="max-w-4xl mx-auto px-4">

  <!-- example react component -->
  <!-- <div id="render-react-example-here"></div> -->
  <!-- end example react component -->
  <div class="container mx-auto mt-5">
    <div class="relative inline-block dropdown">
      <button class="px-4 py-2 text-white bg-blue-500 rounded">Menu</button>
      <ul class="absolute hidden right-0 mt-2 text-gray-700 bg-white border rounded">
        <li class="py-2 px-4 hover:bg-gray-200">Élément 1</li>
        <li class="py-2 px-4 hover:bg-gray-200">Élément 2</li>
        <li class="py-2 px-4 hover:bg-gray-200">Élément 3</li>
      </ul>
    </div>
  </div>
  <div class="prose max-w-full">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <div>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_content(); ?>
        </div>
      <?php }
    } ?>
  </div>
</div>

<?php get_footer();