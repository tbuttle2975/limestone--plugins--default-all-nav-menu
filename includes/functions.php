<?php
function create_nav_menu($menu, $title, $url)
{
    return $top_menu_about = wp_update_nav_menu_item($menu->term_id, 0, array(
        'menu-item-title' => __($title),
        'menu-item-classes' => 'home',
        'menu-item-url' => $url,
        'menu-item-status' => 'publish',
        'menu-item-parent-id' => 0,
    ));
}

function create_nav_sub_menu($menu, $parent, $title, $url)
{
    return wp_update_nav_menu_item($menu->term_id, 0, array(
        'menu-item-title' => __($title),
        'menu-item-classes' => 'home',
        'menu-item-url' => $url,
        'menu-item-status' => 'publish',
        'menu-item-parent-id' => $parent,
    ));
}

function make_default_all_navigation_menu()
{
    $name = 'All Navigation';
    $all_menu_id = wp_create_nav_menu($name);
    $menu = get_term_by('name', $name, 'nav_menu');

    $locations = get_theme_mod('nav_menu_locations');
    $locations['main-menu'] = $menu->term_id;
    set_theme_mod('nav_menu_locations', $locations);

    $top_menu_about = create_nav_menu($menu, 'About', 'https://limestonetech.com/about-limestone-technologies-2/');
    {
        create_nav_sub_menu($menu, $top_menu_about, 'Testimonials', 'https://limestonetech.com/testimonials-2/');
        create_nav_sub_menu($menu, $top_menu_about, 'Frequently Asked Questions', 'https://limestonetech.com/frequently-asked-questions/');
    }


    $top_menu_polygraph_pro = create_nav_menu($menu, 'Polygraph Pro Suite Products', 'https://limestonetech.com/polygraph-pro-suite-products/');
    {
//			Sub Menu
        $sub_menu_polygraph_accessories = create_nav_sub_menu($menu, $top_menu_polygraph_pro, 'Polygraph Accessories', '#');
        // Sub Sub Menu
        {
            create_nav_sub_menu($menu, $sub_menu_polygraph_accessories, 'Total Care Packages', 'https://limestonetech.com/total-care-packages/');
            create_nav_sub_menu($menu, $sub_menu_polygraph_accessories, 'MMS Accessories', 'https://limestonetech.com/mms-accessories/');
            create_nav_sub_menu($menu, $sub_menu_polygraph_accessories, 'Additional Accessories', 'https://limestonetech.com/additional-accessories/');
            create_nav_sub_menu($menu, $sub_menu_polygraph_accessories, 'Paragon Accessories', 'https://limestonetech.com/paragon-accessories/');
            create_nav_sub_menu($menu, $sub_menu_polygraph_accessories, 'DataPac Accessories', 'https://limestonetech.com/datapac-accessories/');
            create_nav_sub_menu($menu, $sub_menu_polygraph_accessories, 'Examination Chairs', 'https://limestonetech.com/polygraph-examination-chairs/');
        }

        create_nav_sub_menu($menu, $top_menu_polygraph_pro, 'Limestone Instrument Training', 'https://limestonetech.com/limestone-instrument-training/');

    }

    $top_menu_about = create_nav_menu($menu, 'Sex Offender Management Products', 'https://limestonetech.com/sex-offender-management-products/');
    {
        create_nav_sub_menu($menu, $top_menu_about, 'PrefTest Pro Suite Accessories', 'https://limestonetech.com/preftest-pro-suite-accessories/');
        create_nav_sub_menu($menu, $top_menu_about, 'Sex Offender Management Training', 'https://limestonetech.com/sex-offender-management-training/');
        create_nav_sub_menu($menu, $top_menu_about, 'Resources', 'https://limestonetech.com/resources-2/');
    }


    create_nav_menu($menu, 'Backster School of lie Detection', 'https://backster.net/');
    create_nav_menu($menu, 'Pre-employment screening', 'https://recruitrite.org/');
    create_nav_menu($menu, 'Custom Solutions', 'https://limestonetech.com/custom-solutions/');
    create_nav_menu($menu, 'Contact Us', 'https://limestonetech.com/contact-us/');


//      Default Menu Location
    $locations = get_theme_mod('nav_menu_locations');
    $locations['menu-1'] = $all_menu_id;
    set_theme_mod('nav_menu_locations', $locations);
}

function make_short_navigation()
{
    $name = 'Short Navigation';
    $menu_id = wp_create_nav_menu($name);
    $menu = get_term_by('name', $name, 'nav_menu');

    create_nav_menu($menu, 'Online Chaperone Training Program', 'https://members.limestonetech.com/');
    create_nav_menu($menu, 'Software Updates', 'https://members.limestonetech.com/software-updates/');
}

$run_once = get_option('menu_check');

//if (!$run_once) {
add_action('init', 'make_default_all_navigation_menu');
add_action('init', 'make_short_navigation');

update_option('menu_check', true);
//}