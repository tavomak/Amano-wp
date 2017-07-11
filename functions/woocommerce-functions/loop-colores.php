<?php

// Disponibilidad de color
function add_texture($parent_cat_ID) {

    //echo '<div class="">';
    $image = get_field('textura');
    $terms = get_the_terms( $post->ID, 'product_cat' );
    $postid = get_the_ID();
    foreach ( $terms as $term )
        $cats_array[] = $term->term_id;
        $args = array(
            'post_type' => 'product',
            'category' => $term->name,
            'posts_per_page' => 20,
            'no_found_rows' => 1,
            'post_status' => 'publish',
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'id',
                    'terms' => $cats_array,
                    'include_children' => false
                )
            ),
            'post__not_in' => array( $postid )// Evita que el producto actual aparezca en los resultados
        );

        $products= new WP_Query( $args );

        if ( $products->have_posts() ) :

        echo '<div class="cam-product-texture"><p class="cam-product-texture__title"> Tambien disponible en:</p>';

                     while ( $products->have_posts() ) : $products->the_post();


                        $image = get_field('textura');

                        if( !empty($image) ):

                            echo '<a href="'.get_the_permalink().'" class="cam-product-texture__link"><img src="'. $image['url'].'" alt="'.$image['alt'].'" class="cam-product-texture__img"/></a>';
                            
                        endif;


                    endwhile;

        echo '</div>';

        endif;

        wp_reset_postdata();


}
// add the action
add_action( 'woocommerce_product_thumbnails', 'add_texture', 10, 2 );

?>
