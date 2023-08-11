<?php
function get_field($key, $page_id = 0)
{
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
}
function the_field($key, $page_id = 0)
{
    echo get_field($key, $page_id);
}


// Home Page
add_action('cmb2_admin_init', 'cmb2_fields_home');
add_action('cmb2_admin_init', 'cmb2_fields_food_menu_2');
function cmb2_fields_home()
{

    $cmb = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Food Menu 1',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Title',
        'id' => 'title1',
        'type' => 'text',
    ]);

    $dishes = $cmb->add_field([
        'name' => 'Dishes',
        'id' => 'dishes',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Dishe {#}',
            'add_button' => 'Add More',
            'remove_button' => 'Remove',
            'sortable' => true,
        ],
    ]);

    $cmb->add_group_field($dishes, [
        'name' => 'Name',
        'id' => 'name',
        'type' => 'text',
    ]);

    $cmb->add_group_field($dishes, [
        'name' => 'Description',
        'id' => 'description',
        'type' => 'text',
    ]);

    $cmb->add_group_field($dishes, [
        'name' => 'Price',
        'id' => 'price',
        'type' => 'text_money',
    ]);
}

function cmb2_fields_food_menu_2()
{
    $cmb = new_cmb2_box([
        'id' => 'food_menu_2_box',
        'title' => 'Food Menu 2',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Title',
        'id' => 'title2',
        'type' => 'text',
    ]);

    $meats = $cmb->add_field([
        'name' => 'Meats',
        'id' => 'meats',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Meat {#}',
            'add_button' => 'Add More',
            'remove_button' => 'Remove',
            'sortable' => true,
        ],
    ]);

    $cmb->add_group_field($meats, [
        'name' => 'Name',
        'id' => 'meat_name',
        'type' => 'text',
    ]);

    $cmb->add_group_field($meats, [
        'name' => 'Description',
        'id' => 'meat_description',
        'type' => 'text',
    ]);

    $cmb->add_group_field($meats, [
        'name' => 'Price',
        'id' => 'meat_price',
        'type' => 'text_money',
    ]);
}

// About Page
add_action('cmb2_admin_init', 'cmb2_fields_about');
function cmb2_fields_about() {
    $cmb = new_cmb2_box([
        'id' => 'about_box',
        'title' => 'About Section',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-sobre.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Title',
        'id' => 'titleAbout',
        'type' => 'text',
    ]);
}

?>