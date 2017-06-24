<?php

function cam_wp_search_form( $form ) {
    $form = '<form class="form-inline" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
	<input class="form-control" type="text" value="' . get_search_query() . '" placeholder="' . esc_attr__('Buscar', 'cam-wp') . '..." name="s" id="s" />
	<button type="submit" id="searchsubmit" value="'. esc_attr__('Buscar', 'cam-wp') .'" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'cam_wp_search_form' );
