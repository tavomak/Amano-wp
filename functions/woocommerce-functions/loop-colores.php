<?php

// Disponibilidad de color
function add_after_summary($parent_cat_ID) {

    echo '<div class="col-sm-12 cb">';
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

        echo '<div class=" col-lg-6">';

                     while ( $products->have_posts() ) : $products->the_post();


                        $image = get_field('textura');

                        if( !empty($image) ):

                            echo '<a href="'.get_the_permalink().'"><img src="'. $image['url'].'" alt="'.$image['alt'].'"/></a>';
                            /*echo '<p>'.$term->term_id.'</p>';
                            echo '<p>'.$term->name.'</p>';
                            echo '<p>'.$term->slug.'</p>';
                            echo '<p>'.$term->trem_group.'</p>';
                            echo '<p>'.$term->term_taxonomy_id.'</p>';
                            echo '<p>'.$term->taxonomy.'</p>';
                            echo '<p>'.$term->parent.'</p>';
                            echo '<p>'.$term->count.'</p>';*/

                        endif;


                    endwhile;

        echo '</div>';

        endif;

        wp_reset_postdata();


}
// add the action
add_action( 'woocommerce_after_single_product_summary', 'add_after_summary', 10, 2 );

?>