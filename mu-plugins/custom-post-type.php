<?php 

add_post_type_support( 'menu', 'thumbnail' );    

function resturent_post_types() {                   
    
    register_post_type('menu', array(           

        'show_in_rest'  => true,
        'supports'      =>      array ('title', 'editor', 'excerpt'),
        'rewrite'       =>      array ('slug'   =>   'menu'),
        'has_archive'   =>      true,
        'public'        =>      true,
        
        'labels'           =>   array(

            'name'          =>  'menu',         
            'add_new_item'  =>  'Add New item',
            'edit_item'     =>  'Edit item',
            'all_items'     =>  'All items',
            'singular_name' =>  'menu'


        ),

        'taxonomies' => array('topics', 'category' ),

        'menu_icon'     =>      'dashicons-text-page'
  

    ) );

}



add_action('init', 'resturent_post_types');