<?php get_header() ?>

<main>
    <section>
        <article>
            
        </article>

    </section>
    <section class="cartas">
        <div class="contenedor-cartas">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="carta-entrada">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="carta-img">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="carta-contenido">
                                <h2><?php the_title(); ?></h2>
                                <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                                <div class="boton-ir">Ir</div>
                            </div>
                        </a>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </section>
</main>

<?php get_footer() ?>