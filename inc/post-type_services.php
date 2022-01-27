<?php

    add_action('init', function(){ 
        register_post_type('services', [
            'labels' => [
                'name'               => 'Услуги',
                'singular_name'      => 'Услуги',
                'add_new'            => 'Добавить новую услугу',
                'add_new_item'       => 'Добавить новую услугу',
                'edit_item'          => 'Редактировать услугу',
                'new_item'           => 'Новый услугу',
                'view_item'          => 'Посмотреть услугу',
                'search_items'       => 'Найти услуги',
                'not_found'          => 'Услуг не найдено',
                'not_found_in_trash' => 'В корзине не найдено услуг',
                'parent_item_colon'  => '',
                'menu_name'          => 'Услуги'
            ],
            'public'             => true,
            'show_ui'            => true,
            'show_in_rest'       => true,
            'menu_position'      => 4,
            'menu_icon'          => 'dashicons-money',
            'supports'           => ['title','thumbnail','author','custom-fields', 'excerpt'],
            'has_archive'        => false,
            'hierarchical'        => false,
            'rewrite'             => array('slug' => 'uslugi', 'with_front' => false),
            'query_var'           => true
        ]);
    
    });