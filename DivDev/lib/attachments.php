<?php

define('ATTACHMENTS_SETTINGS_SCREEN', false);
add_filter('attachments_default_instance', '__return_false');


function divdev_register($attachments)
{
    $fields = array(
        array(
            'name' => 'title',
            'type' => 'text',
            'label' => __('Title', 'divdev'),
        ),

    );

    $args = array(
        'label'         => 'Featured Slider',
        'post_type'     => array('post'), // all post types to utilize in post or page
        'filetype'      => array('image'),
        'note'          => 'Add Slider Images',
        'button_text'   => __('Attach Files', 'divdev'),
        'fields'        => $fields,
    );
    $attachments->register('slider', $args);
}
add_action('attachments_register', 'divdev_register');


function divdev_testimonial_register($attachments)
{
    $fields = array(
        array(
            'name' => 'name',
            'type' => 'text',
            'label' => __('Name', 'divdev'),
        ),
        array(
            'name' => 'position',
            'type' => 'text',
            'label' => __('Position', 'divdev'),
        ),
        array(
            'name' => 'company',
            'type' => 'text',
            'label' => __('Company', 'divdev'),
        ),
        array(
            'name' => 'testimonial',
            'type' => 'textarea',
            'label' => __('Testimonial', 'divdev'),
        )

    );

    $args = array(
        'label'         => 'Testimonials',
        'post_type'     => array('page'), // all post types to utilize in post or page
        'filetype'      => array('image'),
        'note'          => 'Add Testimonial',
        'button_text'   => __('Attach Files', 'divdev'),
        'fields'        => $fields,
    );
    $attachments->register('testimonials', $args);
}

add_action('attachments_register', 'divdev_testimonial_register');

function divdev_team_register($attachments)
{
    $fields = array(
        array(
            'name' => 'name',
            'type' => 'text',
            'label' => __('Name', 'divdev'),
        ),
        array(
            'name' => 'email',
            'type' => 'text',
            'label' => __('Email', 'divdev'),
        ),
        array(
            'name' => 'position',
            'type' => 'text',
            'label' => __('Position', 'divdev'),
        ),
        array(
            'name' => 'company',
            'type' => 'text',
            'label' => __('Company', 'divdev'),
        ),
        array(
            'name' => 'bio',
            'type' => 'textarea',
            'label' => __('Bio', 'divdev'),
        )

    );

    $args = array(
        'label'         => 'Team Members',
        'post_type'     => array('page'), // all post types to utilize in post or page
        'filetype'      => array('image'),
        'note'          => 'Add a team member',
        'button_text'   => __('Attach Files', 'divdev'),
        'fields'        => $fields,
    );
    $attachments->register('team', $args);
}

add_action('attachments_register', 'divdev_team_register');
