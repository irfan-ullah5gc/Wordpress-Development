<?php

function university_post_types(){
   // Events Post Type
   register_post_type( 'event', array(
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array(
         'slug' => 'events'
      ),
      'has_archive' => true,
      'public' => true,
      'show_in_rest' => true,
      'labels' => array(
         'name' => 'Events',
         'add_new_item' => 'Add New Event',
         'add_new' => 'Add New Event',
         'edit_item' => 'Edit Event',
         'all_items' => 'All Events',
         'singular_name' => 'Event',
      ),
      'menu_icon' => 'dashicons-calendar'

   ) );

   // Program Post Type
   register_post_type( 'program', array(
      'supports' => array('title', 'editor'),
      'rewrite' => array(
         'slug' => 'programs'
      ),
      'has_archive' => true,
      'public' => true,
      'show_in_rest' => true,
      'labels' => array(
         'name' => 'Programs',
         'add_new_item' => 'Add New Program',
         'add_new' => 'Add New Program',
         'edit_item' => 'Edit Program',
         'all_items' => 'All Programs',
         'singular_name' => 'Program',
      ),
      'menu_icon' => 'dashicons-awards'

   ) );


   // Professor Post Type
   register_post_type( 'professor', array(
      'supports' => array('title', 'editor' , 'thumbnail'),
      'public' => true,
      'show_in_rest' => true,
      'labels' => array(
         'name' => 'professors',
         'add_new_item' => 'Add New professor',
         'add_new' => 'Add New professor',
         'edit_item' => 'Edit professor',
         'all_items' => 'All professors',
         'singular_name' => 'professor',
      ),
      'menu_icon' => 'dashicons-welcome-learn-more'

   ) );
}

add_action('init' , 'university_post_types');

?>