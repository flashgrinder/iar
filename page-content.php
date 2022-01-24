<?php /* Template Name: Шаблон: Конентная страница */?>
<?php get_header(); ?>

<?php the_post(); ?>
<!-- Content -->
<section class="content bg--dark block-padding">
    <div class="content__body container">
        <h1 class="content__heading title title--big title--dark-gray title--w-normal title--indent">
            <?php the_title(); ?>
        </h1>
        <div class="content__wysiwyg wysiwyg wysiwyg--content">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<!-- /. Content -->

<?php get_footer(); ?>