<?php

get_header();

$author_search = $_GET['authors'] ? $_GET['authors'] : null;
$city_search = $_GET['country'] ? $_GET['country'] : null;
$sector_search = $_GET['sectors'] ? $_GET['sectors'] : null;


include_once('template_parts/post-filter.php');

$group_post = service_services_group_posttype(['posts_per_page' => 6, 'author'=> $author_search,'country' => $city_search, 'sector' => $sector_search])->posts;

 
?>




<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php
            if (!empty($group_post)) :
                foreach ($group_post as $post) : ?>
                    <?php $author = get_terms( array('taxonomy' => 'author','hide_empty' => false,'object_ids' => $post->ID)); ?>
                    <?php $country = get_terms( array('taxonomy' => 'country','hide_empty' => false,'object_ids' => $post->ID)); ?>
                    <?php $sector = get_terms( array('taxonomy' => 'sector','hide_empty' => false,'object_ids' => $post->ID));?>
                    <div class="post-preview">
                        <a href="/<?= $post->post_name ?>">
                            <h2 class="post-title">
                                <?= $post->post_title ?>
                            </h2>
                            
                        </a>
                        <p class="post-meta">Postato da
                            <a href="/<?= $post->post_name ?>"><?= $author[0]->name ?></a>
                            <?='in data '.$post->post_date?> da <?= $country[0]->name ?></p>
                    </div>
                    <hr>
                <?php endforeach;
            else : ?>
                <td>Nessuna stuttura inserita!</td>
            <?php endif; ?>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>