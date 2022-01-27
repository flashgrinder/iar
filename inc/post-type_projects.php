<?php

    add_action('init', function(){ 
        register_post_type('projects', [
            'labels' => [
                'name'               => 'Проекты',
                'singular_name'      => 'Проекты',
                'add_new'            => 'Добавить новый проект',
                'add_new_item'       => 'Добавить новый проект',
                'edit_item'          => 'Редактировать проект',
                'new_item'           => 'Новый проект',
                'view_item'          => 'Посмотреть проект',
                'search_items'       => 'Найти проекты',
                'not_found'          => 'Проектов не найдено',
                'not_found_in_trash' => 'В корзине не найдено проектов',
                'parent_item_colon'  => '',
                'menu_name'          => 'Проекты'
            ],
            'public'             => true,
            'show_ui'            => true,
            'show_in_rest'       => true,
            'menu_position'      => 4,
            'menu_icon'          => 'dashicons-buddicons-activity',
            'supports'           => ['title', 'author', 'custom-fields'],
            'has_archive'        => false,
            'hierarchical'        => false,
            'rewrite'             => array('slug' => 'proekty', 'with_front' => false),
            'query_var'           => true
        ]);
    
    });