<?php

function service_services_group_posttype( array $parameters = [] ) {
  $where = ['relation' => 'AND'];
  $i=0;
  if(!empty($parameters['author'])){
    $where[$i] = ['taxonomy' => 'author', 'field'	 	=> 'name', 'terms' => $parameters['author']];
    $i++;
  }

  if(!empty($parameters['sector'])){
    $where[$i] = ['taxonomy' => 'sector', 'field'	 	=> 'name', 'terms' => $parameters['sector']];
    $i++;
  }

  if(!empty($parameters['country'])){
    $where[$i] = ['taxonomy' => 'country', 'field'	 	=> 'name', 'terms' => $parameters['country']];
    $i++;
  }


  $args = [
    'post_type'         => 'post',
    'orderby'           => 'date',
    'order'             => 'DESC',
    'posts_per_page'    => $parameters['posts_per_page'],
    'tax_query'	=> $where];
 
  $query = new WP_Query( $args );

  return $query;
}

function service_services_group_all() {

  $args = [
    'post_type'         => 'post',
    'orderby'           => 'date',
    'order'             => 'DESC'
   ];
  $query = new WP_Query( $args );

  return $query;
}

