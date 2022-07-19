<?php

add_action('cmb2_init', 'cmb2_add_imageinfo_metabox');
function cmb2_add_imageinfo_metabox()
{

    $prefix = '_divdev_';

    $cmb = new_cmb2_box(array(
        'id'           => $prefix . 'image_information',
        'title'        => __('Image Information', 'divdev'),
        'object_types' => array('post'),
        'context'      => 'normal',
        'priority'     => 'default',
    ));

    $cmb->add_field(array(
        'name' => __('Camera Model', 'divdev'),
        'id' => $prefix . 'camera_model',
        'type' => 'text',
        'default' => 'canon',
    ));

    $cmb->add_field(array(
        'name' => __('Location', 'divdev'),
        'id' => $prefix . 'location',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Date', 'divdev'),
        'id' => $prefix . 'date',
        'type' => 'text_date',
    ));

    $cmb->add_field(array(
        'name' => __('Licensed', 'divdev'),
        'id' => $prefix . 'licensed',
        'type' => 'checkbox',
    ));

    $cmb->add_field(array(
        'name' => __('License Information', 'divdev'),
        'id' => $prefix . 'license_information',
        'type' => 'textarea',
        'attributes' => array(
            'data-conditional-id' => $prefix . 'licensed',
        ),

    ));
    $cmb->add_field(array(
        'name' => __('Image', 'divdev'),
        'id' => $prefix . 'image',
        'type' => 'file',
    ));
    $cmb->add_field(array(
        'name' => __('Upload Resume', 'divdev'),
        'id' => $prefix . 'resume',
        'type' => 'file',
        'text' => array(
            'add_upload_file_text' => __('Upload PDF', 'divdev'),
        ),
        'query_arg' => array(
            'add_upload_file_text' => __('Upload PDF', 'divdev'),
        ),
        'query_args' => array(
            'type' => 'application/pdf',
        ),
        'preview_size' => 'large',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ));
}




function divdev_pricing_table()
{

    $prefix = '_divdev_pt_';

    $cmb = new_cmb2_box(array(
        'id'           => $prefix . 'pricing_table_mb',
        'title'        => __('Pricing Table', 'divdev'),
        'object_types' => array('page'),
        'context'      => 'normal',
        'priority'     => 'default',
    ));

    $group = $cmb->add_field(array(
        'name' => __('Pricing Table', 'divdev'),
        'id' => $prefix . 'pricing_table',
        'type' => 'group',

    ));

    $cmb->add_group_field($group, array(
        'name' => __('Package Name', 'divdev'),
        'id' => $prefix . 'package_name',
        'type' => 'text',

    ));
    $cmb->add_group_field($group, array(
        'name' => __('Pricing Option', 'divdev'),
        'id' => $prefix . 'pricing_option',
        'type' => 'text',
        'repeatable' => true,
    ));
    $cmb->add_group_field($group, array(
        'name' => __('Pricing', 'divdev'),
        'id' => $prefix . 'pricing',
        'type' => 'text',
    ));
}

add_action('cmb2_init', 'divdev_pricing_table');
