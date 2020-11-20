<?php
  get_header();
?>
<!-- Text Block -->
<section class="text-block">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
      </div>
    </div>
  </div>
</section>
<!-- End Text Block -->

<?php get_footer(); ?>