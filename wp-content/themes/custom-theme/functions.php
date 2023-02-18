<?php
   /*------------ all style and script enqueue code start------------------ */
   
   function load_stylesheet(){
       wp_enqueue_style('style', get_template_directory_uri() . '/assets/vendor/aos/aos.css',  array(), false, 'all'); 
       wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css',  array(), false, 'all'); 
       wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css',  array(), false, 'all'); 
       wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css',  array(), false, 'all'); 
       wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css',  array(), false, 'all'); 
       wp_enqueue_style('remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css',  array(), false, 'all');
       wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css',  array(), false, 'all'); 
       wp_enqueue_style('css', get_template_directory_uri() . '/assets/css/style.css',  array(), false, 'all'); 
   
   
   	// Js enqueue script code..................................
   
       wp_enqueue_script('aos', get_template_directory_uri().'/assets/vendor/aos/aos.js',array('jquery'), false, true);
       wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',array('jquery'), false, true);
       wp_enqueue_script('glightbox', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js',array('jquery'), false, true);
       wp_enqueue_script('isotope-layout', get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js',array('jquery'), false, true);
       wp_enqueue_script('swiper', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js',array('jquery'), false, true);
       wp_enqueue_script('waypoints', get_template_directory_uri().'/assets/vendor/waypoints/noframework.waypoints.js',array('jquery'), false, true);
       wp_enqueue_script('waypoints', get_template_directory_uri().'/waypoints',array('jquery'), false, true);
   
      wp_enqueue_script('js', get_template_directory_uri().'/assets/js/main.js',array('jquery'), false, true);
   
   
      
   
   }
   
   add_action('wp_enqueue_scripts', 'load_stylesheet');
   
   
   /*------------ all style and script enqueue code end------------------ */
   
        
   function mytheme_register_nav_menu(){
       register_nav_menus( array(
           'primary_menu' => __( 'Primary Menu', 'text_domain' ),
           'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
           'footer_menu1'  => __( 'Footer Menu1', 'text_domain' ),
       ) );
   }
   add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
   
   //creating widget
   function tutsplus_widgets_init() {
    
       // First footer widget area, located in the footer. Empty by default.
       register_sidebar( array(
           'name' => __( 'First Footer Widget Area', 'tutsplus' ),
           'id' => 'first-footer-widget-area',
           'description' => __( 'The first footer widget area', 'tutsplus' ),
           'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
           'after_widget' => '</div>',
           'before_title' => '<h3 class="widget-title">',
           'after_title' => '</h3>',
       ) );
    
       // Second Footer Widget Area, located in the footer. Empty by default.
       register_sidebar( array(
           'name' => __( 'Second Footer Widget Area', 'tutsplus' ),
           'id' => 'second-footer-widget-area',
           'description' => __( 'The second footer widget area', 'tutsplus' ),
           'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
           'after_widget' => '</div>',
           'before_title' => '<h3 class="widget-title">',
           'after_title' => '</h3>',
       ) );
    
       // Third Footer Widget Area, located in the footer. Empty by default.
       register_sidebar( array(
           'name' => __( 'Third Footer Widget Area', 'tutsplus' ),
           'id' => 'third-footer-widget-area',
           'description' => __( 'The third footer widget area', 'tutsplus' ),
           'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
           'after_widget' => '</div>',
           'before_title' => '<h3 class="widget-title">',
           'after_title' => '</h3>',
       ) );
    
       // Fourth Footer Widget Area, located in the footer. Empty by default.
       register_sidebar( array(
           'name' => __( 'Fourth Footer Widget Area', 'tutsplus' ),
           'id' => 'fourth-footer-widget-area',
           'description' => __( 'The fourth footer widget area', 'tutsplus' ),
           'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
           'after_widget' => '</div>',
           'before_title' => '<h3 class="widget-title">',
           'after_title' => '</h3>',
       ) );
            
   }
    
   // Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
   add_action( 'widgets_init', 'tutsplus_widgets_init' );
   
   if( function_exists('acf_add_options_page') ) {
   	
   	acf_add_options_page(array(
   		'page_title' 	=> 'Theme General Settings',
   		'menu_title'	=> 'Theme Settings',
   		'menu_slug' 	=> 'theme-general-settings',
   		'capability'	=> 'edit_posts',
   		'redirect'		=> false
   	));
   
   	
   	acf_add_options_sub_page(array(
   		'page_title' 	=> 'Theme Footer Settings',
   		'menu_title'	=> 'Footer',
   		'parent_slug'	=> 'theme-general-settings',
   	));
   
   
       acf_add_options_sub_page(array(
           'page_title'    => 'Theme Header Settings',
           'menu_title'    => 'Header',
           'parent_slug'   => 'theme-general-settings',
       ));
   	
   }
   
   // Our custom post type function
   function create_posttype() {
    
       register_post_type( 'Games',
       // CPT Options
           array(
               'labels' => array(
                   'name' => __( 'Games' ),
                   'singular_name' => __( 'Games' )
               ),
               'public' => true,
               'has_archive' => true,
               'rewrite' => array('slug' => 'Games'),
               'show_in_rest' => true,
    
           )
       );
   }
   // Hooking up our function to theme setup
   add_action( 'init', 'create_posttype' );
   
   
   /*
   * Creating a function to create our CPT
   */
    
   function custom_post_type() {
    
       // Set UI labels for Custom Post Type
           $labels = array(
               'name'                => _x( 'Games', 'Post Type General Name', 'thompson' ),
               'singular_name'       => _x( 'Games', 'Post Type Singular Name', 'thompson' ),
               'menu_name'           => __( 'Games', 'thompson' ),
               'parent_item_colon'   => __( 'Parent Games', 'thompson' ),
               'all_items'           => __( 'All Games', 'thompson' ),
               'view_item'           => __( 'View Games', 'thompson' ),
               'add_new_item'        => __( 'Add New Games', 'thompson' ),
               'add_new'             => __( 'Add New', 'thompson' ),
               'edit_item'           => __( 'Edit Games', 'thompson' ),
               'update_item'         => __( 'Update Games', 'thompson' ),
               'search_items'        => __( 'Search Games', 'thompson' ),
               'not_found'           => __( 'Not Found', 'thompson' ),
               'not_found_in_trash'  => __( 'Not found in Trash', 'thompson' ),
           );
            
       // Set other options for Custom Post Type
            
           $args = array(
               'label'               => __( 'Games', 'thompson' ),
               'description'         => __( 'See All Gamess', 'thompson' ),
               'labels'              => $labels,
               // Features this CPT supports in Post Editor
               'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
               // You can associate this CPT with a taxonomy or custom taxonomy. 
               'taxonomies'          => array( 'Games-category' ),
               /* A hierarchical CPT is like Pages and can have
               * Parent and child items. A non-hierarchical CPT
               * is like Posts.
               */ 
               'hierarchical'        => false,
               'public'              => true,
               'show_ui'             => true,
               'show_in_menu'        => true,
               'show_in_nav_menus'   => true,
               'show_in_admin_bar'   => true,
               'menu_position'       => 5,
               'can_export'          => true,
               'has_archive'         => true,
               'exclude_from_search' => false,
               'publicly_queryable'  => true,
               'capability_type'     => 'post',
               'show_in_rest' => true,
        
           ); 
           
           $labels = array(
               'name' => _x( 'Games Category', 'taxonomy general name' ),
               'singular_name' => _x( 'Games Category', 'taxonomy singular name' ),
               'search_items' =>  __( 'Search Games Category' ),
               'popular_items' => __( 'Popular Games Category' ),
               'all_items' => __( 'All Games Category' ),
               'parent_item' => null,
               'parent_item_colon' => null,
               'edit_item' => __( 'Edit Games Category' ), 
               'update_item' => __( 'Update Games Category' ),
               'add_new_item' => __( 'Add New Games Category' ),
               'new_item_name' => __( 'New Games Category Name' ),
               'separate_items_with_commas' => __( 'Separate Games Category with commas' ),
               'add_or_remove_items' => __( 'Add or remove Games Category' ),
               'choose_from_most_used' => __( 'Choose from the most used Games Category' ),
               'menu_name' => __( 'Games Category' ),
             ); 
   
   
           register_taxonomy('Games-category','Games Category',array(
               'hierarchical' => true,
               'labels' => $labels,
               'show_ui' => true,
               'show_in_rest' => true,
               'show_admin_column' => true,
               'update_count_callback' => '_update_post_term_count',
               'query_var' => true,
               'rewrite' => array( 'slug' => 'Games-category' ),
             ));
            
           // Registering your Custom Post Type
           register_post_type( 'Games', $args );
        
       }
        
       /* Hook into the 'init' action so that the function
       * Containing our post type registration is not 
       * unnecessarily executed. 
       */
        
       add_action( 'init', 'custom_post_type', 0 );
   
   
   
       
       add_theme_support( 'post-thumbnails' );
   
   
   
       function na_remove_slug( $post_link, $post, $leavename ) {
           if ( 'Games' != $post->post_type || 'publish' != $post->post_status ) {
               return $post_link;
           }
           $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
           return $post_link;
       }
       add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );
   
   
       function na_parse_request( $query ) {
           if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
               return;
           }
           if ( ! empty( $query->query['name'] ) ) {
               $query->set( 'post_type', array( 'post', 'Games', 'page' ) );
           }
       }
       add_action( 'pre_get_posts', 'na_parse_request' );
   
   
   
   
   
   
   
   ?>