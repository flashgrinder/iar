<?php get_header(); ?>

<!-- 404 -->
<section class="page-404 block-padding">
    <div class="page-404__body container">
        <h1 class="page-404__heading title title--white title--w-normal title--uppercase">
            Страница не найдена
        </h1>
        <h3 class="page-404__num title title--white title--w-black title--uppercase">
            404
        </h3>
        <div class="page-404__action">
            <a href="<?php echo home_url(); ?>" class="button button--blue">
                Вернуться на главную
            </a>
        </div>
    </div>
</section>
<!-- /. 404 -->

<?php get_footer(); ?>