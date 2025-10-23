<?php get_header() ?>

<main>
    <section class="portada">
        <div class="panel-presentacion">
            <div class="texto">
                <h2>Hola, bienvenido, soy </h2>
                <h1>Axel Sánchez</h1>
                <p>Desarrollador Web Front-End</p>
                <a>Disponible para trabajar</a>
                <div class="portada-iconos">
                    <div>
                        <a href="">
                            <img src="/wp-content/themes/SanchezDv/iconos/instagram (1).png" alt="" class="iconos">
                        </a>
                        <a href="">
                            <img src="/wp-content/themes/SanchezDv/iconos/github.png" alt="" class="iconos"> </a>
                    </div>
                    <div>
                        <a href="" class="botones">Conóceme mejor</a>
                        <a href="" class="botones">cv</a>
                    </div>
                </div>
            </div>
            <div class="avatar">
                <video autoplay muted loop playsinline>
                    <source src="/wp-content/themes/SanchezDv/avatar/avatar.webm" type="video/webm">
                </video>
            </div>

        </div>
        <div id="floating-player">
            <canvas id="visualizer"></canvas>
            <div class="left-controls">
                <a onclick="togglePlay()" id="play-button">
                    <img id="play-icon" src="/wp-content/themes/SanchezDv/iconos/tocar.png" alt="Play" / class="btn-reproductor">
                </a>
            </div>

            <div class="center-info">
                <a onclick="prevTrack()"><img src="/wp-content/themes/SanchezDv/iconos/angulo-izquierdo.png" alt="" class="btn-reproductor"></a>
                <span id="track-name">eye of the tiger</span>
                <a onclick="nextTrack()">
                    <img src="/wp-content/themes/SanchezDv/iconos/angulo-derecho.png" alt="" class="btn-reproductor">
                </a>

            </div>
            <div class="right-visualizer">

            </div>
            <audio id="audio" preload="auto"></audio>

        </div>
    </section>
    <section class="cartas">

        <article class="cartas-contenido">
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
        </article>
    </section>
    <section class="Proyectos">
        <!-- Imagen fija inicial -->
        <article class="hero-section expanded">
            <div class="hero-background">
                <img src="/wp-content/themes/SanchezDv/img/JoseCarlos.png" alt="JoseCarlosHerrera">
            </div>
            <div class="hero-overlay">
                <h1>jose carlos herrera</h1>
                <p> web realizada con WordPress, HTML y CSS. Integré la estructura de la Front Page, diseñé un slider animado para comentarios con desplazamiento en hover,
                    desarrollé la barra de navegación personalizada y dos cartas enlazadas a cursos. También implementé la portada con reproducción
                    automática de video y un botón de control de sonido. Además, construí una galería de imágenes con estilo de costura, optimizada para resaltar detalles visuales de prendas y procesos creativos.</p>
                <a href="https://josecarlosherrera.com/" class="botones" target="_blank">mostrar</a>
            </div>
        </article>

        <!-- Carrusel de miniaturas -->
        <div class="hero-carousel">
            <img src="/wp-content/themes/SanchezDv/img/JoseCarlos.png" class="trigger" data-index="0" alt="JoseCarlosHerrera">
            <img src="/wp-content/themes/SanchezDv/img/Susanitaurban.png" class="trigger" data-index="1" alt="SusanitaUrban">

        </div>
    </section>
    <section class="Tecnologias-blog">
        <article class="tecnologias">

        </article>
        <article class="blog">

        </article>

    </section>


</main>

<?php get_footer() ?>