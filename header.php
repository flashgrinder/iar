<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
    <meta name="theme-color" content="#ffffff"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class('page bg--white'); ?>>

    <!-- Modal -->
    <div class="modal js-modal" data-modal="modal-form">
        <div class="modal__body bg--white">
            <div class="modal__close">
                <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L12 12M12 1L1 12" stroke="#121212" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="modal__logo modal__field--anim center">
                <img src="<?php echo STANDART_DIR; ?>img/logo-header.png" alt="Логотип" class="modal__img-logo">
            </div>
            <h3 class="modal__title modal__field--anim title title--medium title--dark-gray title--w-normal center">
                Форма обратной связи
            </h3>
            <?php echo do_shortcode('[contact-form-7 id="9" title="Контактная форма" html_class="modal__form"]'); ?>
            <div class="modal__policy text text--small text--w-light center modal__field--anim">
                Ваши данные находятся под защитой
                <br>
                <a href="" class="modal__link-policy text text--small text--w-light center" target="_blank">
                    Политика конфиденциальности
                </a>
            </div>
        </div>
    </div>
    <!-- /. Modal -->

    <!-- Button-to-top -->
    <div class="button-to-top">
        <svg class="button-to-top__svg" width="22" height="14" viewBox="0 0 22 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 13L10.2318 1.92186C10.6316 1.44211 11.3684 1.44211 11.7682 1.92187L21 13" stroke="#FEFEFE" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
    </div>
    <!-- /. Button-to-top -->

    <!-- Header -->
    <header class="header bg--white">
        <div class="header__body container">
            <div class="header__top">
                <a href="<?php echo home_url(); ?>" class="header__logo">
                    <?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
                    <?php if( !empty($custom_logo__url[0])) : ?>
                        <img src="<?php echo $custom_logo__url[0]; ?>" alt="Логотип" class="header__logo-img">
                    <?php else : ?>
                        <img src="<?php echo STANDART_DIR; ?>img/logo-header.png" alt="Логотип" class="header__logo-img">
                    <?php endif; ?>
                </a>
                <div class="header__wrapp">
                    <address class="header__address hide-mobile-xs">
                        <a href="tel:+74994506070" class="header__phone header__info text text--normal text--dark-gray text--w-thin">
                            <span class="header__icon-info">
                                <svg class="header__svg-info" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.21222 4.76105C3.09222 6.4905 4.51 7.90216 6.23944 8.78827L7.58389 7.44383C7.74889 7.27883 7.99333 7.22383 8.20722 7.29716C8.89167 7.52327 9.63111 7.6455 10.3889 7.6455C10.725 7.6455 11 7.9205 11 8.25661V10.3894C11 10.7255 10.725 11.0005 10.3889 11.0005C4.65055 11.0005 0 6.34994 0 0.611607C0 0.275496 0.275 0.000495872 0.611111 0.000495872H2.75C3.08611 0.000495872 3.36111 0.275496 3.36111 0.611607C3.36111 1.3755 3.48333 2.10883 3.70944 2.79327C3.77667 3.00716 3.72778 3.2455 3.55667 3.41661L2.21222 4.76105ZM10.4867 0.422163L10.0528 -0.00561523L6.11111 3.84439V1.22272H5.5V4.88939H9.16667V4.27827H6.63056L10.4867 0.422163Z" fill="#555555"/>
                                </svg>
                            </span>
                            <span class="header__text-address">+7-499-450-60-70</span>
                        </a>
                        <div class="header__mail header__info text text--normal text--dark-gray text--w-thin">
                            <span class="header__icon-info">
                                <svg class="header__svg-info" width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.5 0C2.01214 0 0 1.878 0 4.2C0 5.244 0.321428 6.222 0.906428 7.104C1.51714 8.028 2.32071 8.82 2.93786 9.744C3.24 10.194 3.45857 10.614 3.69 11.1C3.85714 11.43 3.99214 12 4.5 12C5.00786 12 5.14286 11.43 5.30357 11.1C5.54143 10.614 5.75357 10.194 6.05571 9.744C6.67286 8.826 7.47643 8.034 8.08714 7.104C8.67857 6.222 9 5.244 9 4.2C9 1.878 6.98786 0 4.5 0ZM4.5 5.85C4.07376 5.85 3.66498 5.69196 3.36358 5.41066C3.06218 5.12936 2.89286 4.74782 2.89286 4.35C2.89286 3.95218 3.06218 3.57064 3.36358 3.28934C3.66498 3.00804 4.07376 2.85 4.5 2.85C4.92624 2.85 5.33502 3.00804 5.63642 3.28934C5.93782 3.57064 6.10714 3.95218 6.10714 4.35C6.10714 4.74782 5.93782 5.12936 5.63642 5.41066C5.33502 5.69196 4.92624 5.85 4.5 5.85V5.85Z" fill="#555555"/>
                                </svg>
                            </span>
                            <span class="header__text-address">Москва, Бережковская набережная, д. 20, стр. 9</span>
                        </div>
                    </address>
                    <div class="header__action hide-mobile">
                        <a href="javascript:;" class="header__btn button button--blue" data-modal-trigger="modal-form">
                            Перезвоните мне
                        </a>
                    </div>
                    <div class="header__burger-menu burger-menu js-burger">
                        <span class="burger-menu__line"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__outer-menu js-menu">
            <div class="header__inner">
                <?php
                    wp_nav_menu([
                        'theme_location'  => 'header-menu',
                        'container'       => 'nav',
                        'container_class' => 'header__menu-nav menu',
                        'menu_class'      => '',
                        'items_wrap'      => '<ul class="%2$s header__menu-list menu__list ">%3$s</ul>'
                    ]);
                ?>
            </div>
        </div>
    </header>
    <!-- /. Header -->

    <!-- MAIN -->
    <main class="main page__container">