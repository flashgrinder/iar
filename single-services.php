<?php get_header(); ?>

<?php the_post(); ?>

<!-- Service -->
<section class="service bg--white block-padding">
    <div class="service__body container">
        <div class="service__inner">
            <div class="service__left-column">
                <div class="service__heading">
                    <div class="service__pic">
                    <?php 
                        $service_icon = get_field('service_icon');
                        if( !empty( $service_icon ) ): ?>
                            <img class="service__icon" src="<?php echo esc_url($service_icon['url']); ?>" alt="<?php echo esc_attr($service_icon['alt']); ?>" />
                    <?php endif; ?>
                    </div>
                    <h1 class="service__title title title--big title--dark-gray title--uppercase">
                        <?php the_title(); ?>
                    </h1>
                </div>
                <p class="service__descr text text--large text--dark-gray text--w-light">
                    <?php echo the_field('service_descr'); ?>
                </p>
                <div class="service__price">
                    <span class="service__new-price text text--normal text--dark-gray text--w-light">
                        От <span class="service__new-price-num text text--big text--dark-gray text--w-regular" data-old-price="<?php the_field('service_old-price'); ?>"><?php the_field('service_new-price'); ?></span> рублей
                    </span>
                </div>
                <div class="service__actions">
                    <button class="service__btn button button--blue button--sale" data-modal-trigger="modal-form">
                        Заказать
                    </button>
                </div>
            </div>
            <div class="service__right-column">
                <div class="service__pic">
                <?php
                    $default_attr = [
                        'class'	=> "service__img",
                        'alt'   => get_the_title()
                    ];
                    
                    echo get_the_post_thumbnail( $post->ID, 'full', $default_attr ) ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /. Service -->

<?php get_footer(); ?>