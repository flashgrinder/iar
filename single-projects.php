<?php get_header(); ?>

<?php the_post(); ?>

<!-- Head-screen -->
<section class="head-screen" <?php $project_img_site = get_field('project_img_site'); if( !empty( $project_img_site ) ): ?> style="background-image: url('<?php echo esc_url($project_img_site['url']); ?>');" <?php endif; ?>>
    <div class="head-screen__body container">
        <div class="head-screen__left-side">
            <h1 class="head-screen__heading title title--huge title--white title--w-bold">
                <?php the_title(); ?>
            </h1>
            <div class="head-screen__pic head-screen__pic--mobile">
                <?php 
                    $project_img_notebook = get_field('project_img_notebook');
                    if( !empty( $project_img_notebook ) ): ?>
                        <img class="head-screen__img" src="<?php echo esc_url($project_img_notebook['url']); ?>" alt="<?php echo esc_attr($project_img_notebook['alt']); ?>" />
                <?php endif; ?>
            </div>
            <p class="head-screen__descr text text--large text--white text--w-light">
                <?php the_field('project_descr'); ?>
            </p>
            <div class="head-screen__action">
                <a href="<?php the_field('project_link'); ?>" class="head-screen__btn button button--blue button--icon" target="_blank">
                    Перейти на сайт
                    <span class="button__icon--right">
                        <svg class="button__svg-icon" width="23" height="11" viewBox="0 0 23 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 4.875C1.15482 4.875 0.875 5.15482 0.875 5.5C0.875 5.84518 1.15482 6.125 1.5 6.125V4.875ZM21.9419 5.94194C22.186 5.69786 22.186 5.30214 21.9419 5.05806L17.9645 1.08058C17.7204 0.836505 17.3247 0.836505 17.0806 1.08058C16.8365 1.32466 16.8365 1.72039 17.0806 1.96447L20.6161 5.5L17.0806 9.03553C16.8365 9.27961 16.8365 9.67534 17.0806 9.91942C17.3247 10.1635 17.7204 10.1635 17.9645 9.91942L21.9419 5.94194ZM1.5 6.125H21.5V4.875H1.5V6.125Z"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="head-screen__right-side">
            <div class="head-screen__pic head-screen__pic--desctop">
                <?php 
                    $project_img_notebook = get_field('project_img_notebook');
                    if( !empty( $project_img_notebook ) ): ?>
                        <img class="head-screen__img" src="<?php echo esc_url($project_img_notebook['url']); ?>" alt="<?php echo esc_attr($project_img_notebook['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- /. Head-screen -->
<?php if( have_rows('content-blocks')): ?>
    <?php while( have_rows('content-blocks')) : the_row(); ?>

        <?php if( get_row_layout() == 'content-block_squad' ): ?>
            <!-- Squad -->
            <section class="squad bg--white block-padding">
                <div class="squad__body container">
                    <h2 class="squad__heading title title--big title--dark-gray title--w-normal title--uppercase title--indent">
                        Наша команда
                    </h2>
                    <?php if( have_rows('squad') ): ?>
                    <div class="squad__items">
                        <?php while( have_rows('squad') ): the_row();

                            $squad_photo = get_sub_field('squad_photo');
                            $squad_name = get_sub_field('squad_name');
                            $squad_descr = get_sub_field('squad_descr');

                        ?>
                            <article class="squad__card">
                                <div class="squad__pic">
                                    <?php if( !empty( $squad_photo ) ): ?>
                                        <img src="<?php echo esc_url($squad_photo['url']); ?>" alt="<?php echo esc_attr($squad_photo['alt']); ?>" class="squad__photo">
                                    <?php endif; ?>
                                </div>
                                <h3 class="squad__name title title--medium title--white title--w-normal">
                                    <?php echo $squad_name; ?>
                                </h3>
                                <p class="squad__descr bg--white text text--large text--dark-gray text--w-light">
                                    <?php echo $squad_descr; ?>
                                </p>
                            </article>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <div class="squad__action center">
                        <a href="javascript:;" class="squad__btn button button--blue" data-modal-trigger="modal-form">
                            Начать сотрудничество
                        </a>
                    </div>
                </div>
            </section>
            <!-- /. Squad -->
        <?php endif; ?>

        <?php if( get_row_layout() == 'content-block_dev-goals' ): ?>
            <!-- Dev-goals -->
            <section class="dev-goals block-padding bg--white">
                <div class="dev-goals__body container">
                    <div class="dev-goals__items">
                    <?php if( have_rows('dev-goals') ): ?>
                        <?php while( have_rows('dev-goals') ): the_row();

                            $dev_goals_img = get_sub_field('dev-goals_img');

                        ?>
                        <div class="dev-goals__item">
                            <div class="dev-goals__pic">
                                <?php if( !empty( $dev_goals_img ) ): ?>
                                    <img src="<?php echo esc_url($dev_goals_img['url']); ?>" alt="<?php echo esc_attr($dev_goals_img['alt']); ?>" class="dev-goals__img">
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                        <div class="dev-goals__item dev-goals__item--more" data-modal-trigger="modal-form">
                            <div class="dev-goals__item-text text text--big text--blue text--w-light">
                                Узнать подробнее
                            </div>
                            <div class="dev-goals__item-icon">
                                <svg class="dev-goals__item-svg" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12.9266" cy="13.1478" r="12.3632" fill="#2F89DF"/>
                                    <path d="M6.38135 12.4205C5.9797 12.4205 5.6541 12.7461 5.6541 13.1477C5.6541 13.5494 5.9797 13.8749 6.38135 13.8749V12.4205ZM19.986 13.6619C20.27 13.3779 20.27 12.9175 19.986 12.6335L15.3578 8.00531C15.0738 7.7213 14.6134 7.7213 14.3294 8.00531C14.0453 8.28932 14.0453 8.74978 14.3294 9.03379L18.4433 13.1477L14.3294 17.2616C14.0453 17.5456 14.0453 18.0061 14.3294 18.2901C14.6134 18.5741 15.0738 18.5741 15.3578 18.2901L19.986 13.6619ZM6.38135 13.8749H19.4717V12.4205H6.38135V13.8749Z" fill="#FEFEFE"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /. Dev-goals -->
        <?php endif; ?>

        <?php if( get_row_layout() == 'content-block_our-mission' ): ?>
            <!-- Our-mission -->
            <section class="our-mission bg--white block-padding">
                <div class="our-mission__body container">
                    <div class="our-mission__inner">
                        <div class="our-mission__left-side">
                            <div class="our-mission__pic">
                                <?php $our_mission_img = get_sub_field('our-mission_img'); ?>
                                <?php if( !empty( $our_mission_img ) ): ?>
                                    <img src="<?php echo esc_url($our_mission_img['url']); ?>" alt="<?php echo esc_attr($our_mission_img['alt']); ?>" class="our-mission__img">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="our-mission__right-side">
                            <h3 class="our-mission__headline title title--big title--dark-gray title--w-normal title--uppercase">
                                <?php echo get_sub_field('our-mission_title'); ?>
                            </h3>
                            <div class="our-mission__text text text--large text--dark-gray text--w-light wysiwyg">
                                <?php echo get_sub_field('our-mission_text'); ?>
                            </div>
                            <div class="our-mission__action">
                                <button class="our-mission__btn button button--blue" data-modal-trigger="modal-form">
                                    Присоединиться
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /. Our-mission -->
        <?php endif; ?>

    <?php endwhile ?>
<?php endif ?>

<?php get_footer(); ?>