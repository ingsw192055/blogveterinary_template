<?php

/**
 * Registers `typology` custom taxonomy.
 *
 * @return void
 */
function register_country_taxonomy()
{
    register_taxonomy('country', [ 'post' ], [
        'rewrite' => [
            'slug' => 'country',
            'with_front' => true,
            'hierarchical' => false,
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_quick_edit' => false,
        'meta_box_cb' => false,
        'labels' => [
            'name' => esc_html__( 'Paese', 'blogveterinary' ),
            'singular_name' => esc_html__( 'Paese', 'blogveterinary' ),
            'search_items' => esc_html__( 'Cerca Paese', 'blogveterinary' ),
            'all_items' => esc_html__( 'Tutti i Paesi', 'blogveterinary' ),
            'edit_item' => esc_html__( 'Modifica Paese', 'blogveterinary' ),
            'update_item' => esc_html__( 'Aggiorna Paese', 'blogveterinary' ),
            'add_new_item' => esc_html__( 'Aggiungi una nuova Paese', 'blogveterinary' ),
            'new_item_name' => esc_html__( 'Nuovo nome', 'blogveterinary' ),
            'menu_name' => esc_html__( 'Paese', 'blogveterinary' ),
        ],
    ]);
}
add_action('init', 'register_country_taxonomy', 0);

function register_sector_taxonomy()
{
    register_taxonomy('sector', [ 'post' ], [
        'rewrite' => [
            'slug' => 'sector',
            'with_front' => true,
            'hierarchical' => false,
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_quick_edit' => false,
        'meta_box_cb' => false,
        'labels' => [
            'name' => esc_html__( 'Settore', 'blogveterinary' ),
            'singular_name' => esc_html__( 'Settore', 'blogveterinary' ),
            'search_items' => esc_html__( 'Cerca Settore', 'blogveterinary' ),
            'all_items' => esc_html__( 'Tutte le Settore', 'blogveterinary' ),
            'edit_item' => esc_html__( 'Modifica Settore', 'blogveterinary' ),
            'update_item' => esc_html__( 'Aggiorna Settore', 'blogveterinary' ),
            'add_new_item' => esc_html__( 'Aggiungi un nuovo Settore', 'blogveterinary' ),
            'new_item_name' => esc_html__( 'Nuovo nome', 'blogveterinary' ),
            'menu_name' => esc_html__( 'Settore', 'blogveterinary' ),
        ],
    ]);
}
add_action('init', 'register_sector_taxonomy', 0);


function register_author_taxonomy()
{
    register_taxonomy('author', [ 'post' ], [
        'rewrite' => [
            'slug' => 'author',
            'with_front' => true,
            'hierarchical' => false,
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_quick_edit' => false,
        'meta_box_cb' => false,
        'labels' => [
            'name' => esc_html__( 'Autore', 'blogveterinary' ),
            'singular_name' => esc_html__( 'Autore', 'blogveterinary' ),
            'search_items' => esc_html__( 'Cerca Autore', 'blogveterinary' ),
            'all_items' => esc_html__( 'Tutte le Autore', 'blogveterinary' ),
            'edit_item' => esc_html__( 'Modifica Autore', 'blogveterinary' ),
            'update_item' => esc_html__( 'Aggiorna Autore', 'blogveterinary' ),
            'add_new_item' => esc_html__( 'Aggiungi un nuovo Autore', 'blogveterinary' ),
            'new_item_name' => esc_html__( 'Nuovo nome', 'blogveterinary' ),
            'menu_name' => esc_html__( 'Autore', 'blogveterinary' ),
        ],
    ]);
}
add_action('init', 'register_author_taxonomy', 0);


