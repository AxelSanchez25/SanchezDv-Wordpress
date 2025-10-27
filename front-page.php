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
                        <a href="https://www.instagram.com/sanchez_axel7?igsh=MWtjbnV5dXR3YnpkZQ%3D%3D&utm_source=qr" target="_blank">
                            <img src="/wp-content/themes/SanchezDv/iconos/instagram (1).png" alt="IconosInstagram" class="iconos">
                        </a>
                        <a href="https://github.com/AxelSanchez25" target="_blank">
                            <img src="/wp-content/themes/SanchezDv/iconos/github.png" alt="IconosGithub" class="iconos"> </a>
                    </div>
                    <div>
                        <a href="<?php echo site_url('/sobre-mi'); ?>" class="botones">Conóceme mejor</a>
                        <a href="" class="botones">cv</a>
                    </div>
                </div>
            </div>
            <div class="avatar">
                <video autoplay muted loop playsinline>
                    <source src="/wp-content/themes/SanchezDv/avatar/avatar.webm" type="video/webm">
                </video>
            </div>
            <div class="portada-anime">
                <a href="#cartas" class="scroll-down">↓</a>
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
    <section class="cartas" id="cartas">

        <article class="cartas-servicio-contenido">
            <div class="cartas-titulo">
                <h1>Diseño páginas web personalizadas para marcas, emprendedores y creativos</h1>
                <p>“Cada web que diseño es una experiencia única. Trabajo contigo desde la idea hasta la ejecución,
                    combinando narrativa visual, estructura modular y precisión técnica para que tu proyecto no solo se vea bien, sino que funcione”</p>
            </div>
            <div class="cartas-sc">
                <div class="carta-servicios">
                    <img src="/wp-content/themes/SanchezDv/iconos/diseno.png" alt="">
                    <h2>Diseño web personalizado (WordPress, HTML/CSS/JS)</h2>
                </div>
                <div class="carta-servicios">
                    <img src="/wp-content/themes/SanchezDv/iconos/cerebro.png" alt="">
                    <h2>UI/UX con enfoque narrativo y emocional</h2>
                </div>
                <div class="carta-servicios">
                    <img src="/wp-content/themes/SanchezDv/iconos/animar.png" alt="">
                    <h2>Integración de video, audio y animaciones</h2>
                </div>
                <div class="carta-servicios">
                    <img src="/wp-content/themes/SanchezDv/iconos/ingenieria.png" alt="">
                    <h2>Automatización y estructura modular</h2>
                </div>
                <div class="carta-servicios">
                    <img src="/wp-content/themes/SanchezDv/iconos/optimizacion-movil.png" alt="">
                    <h2>Optimización para móviles y velocidad</h2>
                </div>
                <div class="carta-servicios">
                    <img src="/wp-content/themes/SanchezDv/iconos/verificado.png" alt="">
                    <h2>Buenas prácticas de seguridad y control</h2>
                </div>
            </div>

        </article>
    </section>

    <section class="Proyectos">
        <!-- Imagen fija inicial -->
        <article class="hero-section expanded">
            <div class="hero-background">
                <img src="/wp-content/themes/SanchezDv/img/JoseCarlos.png" alt="JoseCarlosHerrera">
            </div>
            <div class="hero-proyectos">
                <h1>producción</h1>
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
        <article class="tecnologias">
            <div class="slider-container">
                <div class="slider-track">
                    <div class="slide"><img src="/wp-content/themes/SanchezDv/iconos/php (1).png" alt=""></div>
                    <div class="slide"><img src="/wp-content/themes/SanchezDv/iconos/js.png" alt=""></div>
                    <div class="slide"><img src="/wp-content/themes/SanchezDv/iconos/github.png" alt=""></div>
                    <div class="slide"><img src="/wp-content/themes/SanchezDv/iconos/wordpress.png" alt=""></div>
                    <div class="slide"><img src="/wp-content/themes/SanchezDv/iconos/visual-basic.png" alt=""></div>
                    <div class="slide"><img src="/wp-content/themes/SanchezDv/iconos/trello.png" alt=""></div>
                    <!-- Clones para efecto infinito -->
                    <div class="slide"><img src="/wp-content/themes/SanchezDv/iconos/php (1).png" alt=""></div>
                    <div class="slide"><img src="/wp-content/themes/SanchezDv/iconos/js.png" alt=""></div>
                    <div class="slide"><img src="/wp-content/themes/SanchezDv/iconos/github.png" alt=""></div>
                    <div class="slide"><img src="/wp-content/themes/SanchezDv/iconos/wordpress.png" alt=""></div>
                    <div class="slide"><img src="/wp-content/themes/SanchezDv/iconos/visual-basic.png" alt=""></div>
                    <div class="slide"><img src="/wp-content/themes/SanchezDv/iconos/trello.png" alt=""></div>
                </div>
            </div>
        </article>
    </section>
    <section class="preguntas-frecuentes">
        <article class="preguntas-f">
            <div class="faq-section">
                <h2>Preguntas Frecuentes </h2>

                <div class="faq-item">
                    <button class="faq-question">¿Qué tipo de páginas web diseñas? <span class="faq-icon">+</span></button>
                    <div class="faq-answer">
                        <p>Diseño webs personalizadas para marcas, emprendedores y creativos. Desde portfolios visuales hasta sitios funcionales con blog, tienda o integración multimedia.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">¿Qué significa “estética cinematográfica” en una web? <span class="faq-icon">+</span></button>

                    <div class="faq-answer">
                        <p>Tu web no solo informa: emociona. Uso ritmo visual, transiciones suaves, tipografía con intención y estructura narrativa para que cada visitante viva una experiencia.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">¿Qué tecnologías usas? <span class="faq-icon">+</span></button>

                    <div class="faq-answer">
                        <p>HTML, CSS, JavaScript, WordPress, Figma, Adobe XD. También implemento soluciones modulares para escalabilidad y mantenimiento fácil.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">¿Mi web será responsive? <span class="faq-icon">+</span></button>

                    <div class="faq-answer">
                        <p>Sí. Todas las webs se adaptan a móviles, tablets y pantallas grandes. La experiencia debe ser fluida sin importar el dispositivo.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">¿Puedo actualizar mi web después? <span class="faq-icon">+</span></button>

                    <div class="faq-answer">
                        <p>Claro. Te entrego una estructura modular que puedes actualizar tú mismo o con mi soporte. También ofrezco mantenimiento si lo necesitas.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">¿Cuánto tarda el proceso? <span class="faq-icon">+</span></button>

                    <div class="faq-answer">
                        <p>Depende del proyecto, pero en promedio entre 2 y 4 semanas. Si necesitas algo urgente, podemos adaptarlo.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">¿Cómo empezamos? <span class="faq-icon">+</span></button>

                    <div class="faq-answer">
                        <p>Escríbeme desde el formulario de contacto o por WhatsApp. Agendamos una reunión breve, definimos tus necesidades y te presento una propuesta clara.</p>
                    </div>
                </div>
            </div>

        </article>
    </section>


    <section class="section-blog">
        <article class="cartas-entradas">
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
        <article class="blog">
            <div class="blog-contenido">
                <div class="cartas-blog">

                </div>
            </div>

        </article>

    </section>


</main>

<?php get_footer() ?>