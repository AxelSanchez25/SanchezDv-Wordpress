<?php get_header(); ?>

<main class="contenedor-single">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="entrada">
            <h1><?php the_title(); ?></h1>
            <div class="contenido">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
