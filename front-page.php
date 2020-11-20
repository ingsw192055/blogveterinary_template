<?php

    get_header();

    $settings = get_fields('theme-options');

    $query = service_services_group_all();

    $group_post = $query->posts; ?>

<?php include_once( 'template_parts/post-filter.php' ); ?>
    
 <!-- Main Content -->
 <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <?php if (!empty($group_post)) :
                foreach ($group_post as $post) :?>
                  <?php $author = get_terms( array('taxonomy' => 'author','hide_empty' => false,'object_ids' => $post->ID)); ?>
                  <?php $country = get_terms( array('taxonomy' => 'country','hide_empty' => false,'object_ids' => $post->ID)); ?>
        <div class="post-preview">
          <a href="/<?=$post->post_name?>">
            <h2 class="post-title">
            <?=$post->post_title?>
            </h2>
            <!--<h5 class="post-subtitle">
              <?='autore: '.$author?>
            </h5>-->
          </a>
          <p class="post-meta">Postato da
            <a href="/<?=$post->post_name?>"><?=$author[0]->name?></a>
            <?='in data '.$post->post_date?> da <?=$country[0]->name?></p>
        </div>
        <hr>
        <?php endforeach;
             else : ?>
                <td>Nessuna stuttura inserita!</td>
           <?php endif; ?>
        <!-- Pager -->
        <!--<div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>-->
      </div>
    </div>
  </div>



<?php get_footer(); ?>