# Wordpress Custom Post Type

För att kunna lägga till custom post types, så måste vi registrera dem i functions.php

```php
/*
  Another action hook, it adds a custom post type called "product"
*/
add_action( 'init', 'add_custom_post_types');

function add_custom_post_types() {
  $labels = array(
    'name'               => _x( 'Products', 'post type general name' ),
    'singular_name'      => _x( 'Product', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Product' ),
    'edit_item'          => __( 'Edit Product' ),
    'new_item'           => __( 'New Product' ),
    'all_items'          => __( 'All Products' ),
    'view_item'          => __( 'View Product' ),
    'search_items'       => __( 'Search Products' ),
    'not_found'          => __( 'No products found' ),
    'not_found_in_trash' => __( 'No products found in the Trash' ), 
    'menu_name'          => 'Products'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our products and product specific data',
    'public'        => true,
    /* This is important, it makes it so that we can add custom archive pages */
    'has_archive'   => true,
    /* the next one is important, it tells what's enabled in the post editor */
    'supports' => array( 'title', 'editor', 'author', 'thumbnail'),
  );
  register_post_type('product', $args);
}
```