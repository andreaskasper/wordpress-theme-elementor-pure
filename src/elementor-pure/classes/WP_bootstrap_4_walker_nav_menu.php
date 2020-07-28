<?php

class WP_bootstrap_4_walker_nav_menu extends Walker_Nav_menu {

    private static $megamenu = false;

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $object      = $item->object;
    	$type        = $item->type;
    	$title       = $item->title;
    	$description = $item->description;
        $permalink   = $item->url;
        
        $active_class = '';
        if( in_array('current-menu-item', $item->classes) ) {
            $active_class = 'active';
        }

        if ($depth == 0 AND $title == "Tanzkurse" ) self::$megamenu = true;
        if ($depth == 0 AND $title != "Tanzkurse" ) self::$megamenu = false;

        $dropdown_class = '';
        $dropdown_link_class = '';
        if( $args->walker->has_children && $depth == 0 ) {
            $dropdown_class = 'dropdown';
            $dropdown_link_class = 'dropdown-toggle';
        }

        $output .= "<li class='nav-item $active_class $dropdown_class " .  implode(" ", $item->classes) . "'>";

        if( $args->walker->has_children && $depth == 0 ) {
            $output .= '<a href="' . esc_url($permalink) . '" class="nav-link ' . $dropdown_link_class . '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
        }
        else {
            $output .= '<a href="' . esc_url($permalink) . '" class="nav-link">';
        }

        if ($title == "lang_en") $output .= '<img src="/wp-content/themes/thomas/assets/images/enGB.png" style="height: 1rem;"/><span class="d-inline d-sm-none ml-2">English</span>';
        elseif ($title == "lang_fr") $output .= '<img src="/wp-content/themes/thomas/assets/images/frFR.png" style="height: 1rem;"/><span class="d-inline d-sm-none ml-2">Français</span>';
        else $output .= $title;

        if( $description != '' && $depth == 0 ) {
            $output .= '<small class="description">' . $description . '</small>';
        }

        $output .= '</a>';
    }

    function start_lvl( &$output, $depth=0, $args = array() ){
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        if (self::$megamenu AND $depth == 0) $output .= '<div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
        <div class="container">
          <div class="row bg-white rounded-0 m-0 shadow-sm">
            <div class="col-lg-7 col-xl-8">
              <div class="p-4">
                <div class="row">
                  <div class="col-lg-6 mb-4">';
        else $output .= "<ul class='dropdown-menu $submenu depth_$depth' style='".(self::$megamenu?'color:red;':'')."'>";
    }

    function end_lvl( &$output, $depth=0, $args = array() ){
        
        $output .= "</ul>";
    }

}
