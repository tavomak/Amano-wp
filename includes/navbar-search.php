<?php
/*
Navbar search form
==================
If you don't want a search form in your navbar, then delete the link to this PHP page from within the navbar in header.php.
Then you can insert the Search Widget into the sidebar.
*/
?>

<form class="cam-search-form" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input class="fl" type="text" value="<?php echo get_search_query(); ?>" placeholder="Buscar..." name="s" id="s">
  <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Buscar', 'cam-wp') ?>" class="fl"><i class="glyphicon glyphicon-search fl"></i></button>
</form>
