//nav 
//Axel Sanchez
//barra de navegacion 
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navBar');
    if (window.scrollY > 100) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
const scrollButton = document.querySelector('.scroll-down');

if (scrollButton) {
    scrollButton.addEventListener('click', function (e) {
        e.preventDefault(); // Evita el salto brusco

        const target = document.querySelector('#cartas');
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
}

/* ------------------------------------------------------------------------------------ */

/* carrusel de proyectos */
const data = [
    {
        img: "/wp-content/themes/SanchezDv/img/JoseCarlos.png",
        title: "jose carlos herrera",
        text: "web realizada con WordPress, HTML y CSS. Integré la estructura de la Front Page, diseñé un slider animado para comentarios con desplazamiento en hover,desarrollé la barra de navegación personalizada y dos cartas enlazadas a cursos. También implementé la portada con reproducción automática de video y un botón de control de sonido. Además, construí una galería de imágenes con estilo de costura, optimizada para resaltar detalles visuales de prendas y procesos creativos",
        link: "https://josecarlosherrera.com/"
    },
    {
        img: "/wp-content/themes/SanchezDv/img/Susanitaurban.png",
        title: "susanita urban",
        text: "La web de Susanita Urban se desarrolló con un tema personalizado en WordPress, utilizando WooCommerce para integrar funcionalidades de tienda online. Aunque no participé directamente en su construcción, estudié su estructura y enfoque para comprender la implementación de comercio electrónico en entornos WordPress.",
        link: "https://susanitaurban.com/"
    }
];

// ✅ Verifica que existan los triggers
const triggers = document.querySelectorAll('.trigger');
if (triggers.length > 0) {
    triggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const index = trigger.dataset.index;
            showProject(index);
        });
    });
}

let currentIndex = 0;

// ✅ Verifica que la sección exista antes de usarla
function showProject(index) {
    const section = document.querySelector('.hero-section');
    if (!section) return;

    const img = section.querySelector('.hero-background img');
    const title = section.querySelector('.hero-overlay h1');
    const text = section.querySelector('.hero-overlay p');
    const link = section.querySelector('.hero-overlay a');

    if (!img || !title || !text || !link) return;

    // Fade out imagen
    img.classList.add('fade-out');

    setTimeout(() => {
        img.src = data[index].img;
        img.classList.remove('fade-out');

        // Texto con animación
        title.textContent = data[index].title;
        text.textContent = data[index].text;
        link.href = data[index].link;

        // Reiniciar animación de texto
        title.style.animation = 'none';
        text.style.animation = 'none';
        link.style.animation = 'none';

        void title.offsetWidth;
        void text.offsetWidth;
        void link.offsetWidth;

        title.style.animation = 'fadeUp 0.6s ease forwards';
        text.style.animation = 'fadeUp 0.6s ease forwards';
        link.style.animation = 'fadeUp 0.6s ease forwards';
    }, 400);
}

// ✅ Solo activa el carrusel si existe la sección
if (document.querySelector('.hero-section')) {
    setInterval(() => {
        currentIndex = (currentIndex + 1) % data.length;
        showProject(currentIndex);
    }, 8000);
}

/* --------------------------------------------------------------------------------------------------------- */

/* cursor */
document.addEventListener("DOMContentLoaded", () => {
    let cursor = document.querySelector('.cursor');

    if (!cursor) {
        cursor = document.createElement('div');
        cursor.className = 'cursor';
        document.body.appendChild(cursor);
    }

    let mouseX = 0, mouseY = 0, posX = 0, posY = 0;

    document.addEventListener("mousemove", e => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    function updateCursor() {
        posX += (mouseX - posX) * 0.15;
        posY += (mouseY - posY) * 0.15;
        cursor.style.left = posX + "px";
        cursor.style.top = posY + "px";
        requestAnimationFrame(updateCursor);
    }

    updateCursor();
});
/* ------------------------------------------------------------------------------------------------------------------ */

// Efecto hover
// Cursor personalizado
const cursor = document.querySelector('.cursor');

const addHoverEvents = () => {
    if (!cursor) return; // Evita errores si no existe el cursor

    const hoverEls = document.querySelectorAll("a, button, .hover-target");
    hoverEls.forEach(el => {
        el.addEventListener("mouseenter", () => cursor.classList.add("hovered"));
        el.addEventListener("mouseleave", () => cursor.classList.remove("hovered"));
    });
};

window.addEventListener("load", addHoverEvents);

// Slider infinito: pausar al hacer hover
const track = document.querySelector('.slider-track');

if (track) {
    track.addEventListener('mouseenter', () => {
        track.classList.add('paused');
    });

    track.addEventListener('mouseleave', () => {
        track.classList.remove('paused');
    });
}



/* preguntas frecuentes */
const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
    const button = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    const icon = item.querySelector('.faq-icon');

    button.addEventListener('click', () => {
        const isActive = item.classList.contains('active');

        // Cierra todos los demás sin animación
        faqItems.forEach(i => {
            if (i !== item) {
                i.classList.remove('active');
                const otherIcon = i.querySelector('.faq-icon');
                if (otherIcon) otherIcon.textContent = '+';
            }
        });

        // Abre el actual con animación
        if (!isActive) {
            item.classList.add('active');
            if (icon) icon.textContent = '−';
        } else {
            item.classList.remove('active');
            if (icon) icon.textContent = '+';
        }
    });
});


/* termina aca preguntas frecuentes */