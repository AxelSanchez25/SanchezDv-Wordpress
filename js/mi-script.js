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




// JS: Control personalizado musica
// JS: Control básico
const audio = document.getElementById('audio');
const trackName = document.getElementById('track-name');
const canvas = document.getElementById('visualizer');
const ctx = canvas.getContext('2d');

function togglePlay() {
    const icon = document.getElementById('play-icon');
    if (audio.paused) {
        audio.play();
        icon.src = "/wp-content/themes/SanchezDv/iconos/pausa.png";
        icon.alt = "Pause";
    } else {
        audio.pause();
        icon.src = "/wp-content/themes/SanchezDv/iconos/tocar.png";
        icon.alt = "Play";
    }
}

const tracks = [
    {
        name: "Eye of the Tiger",
        src: "/wp-content/themes/SanchezDv/musica/bso rocky - eye of the tiger.mp3"
    },
    {
        name: "Sway",
        src: "/wp-content/themes/SanchezDv/musica/michael buble - sway.mp3"
    }
];

let currentTrack = 0;

function loadTrack(index) {
    audio.src = tracks[index].src;
    trackName.textContent = tracks[index].name;
    audio.load(); // solo carga, no reproduce
}

function nextTrack() {
    currentTrack = (currentTrack + 1) % tracks.length;
    loadTrack(currentTrack);
}

function prevTrack() {
    currentTrack = (currentTrack - 1 + tracks.length) % tracks.length;
    loadTrack(currentTrack);
}

// Carga inicial sin reproducir
loadTrack(currentTrack);


// Visualización reactiva
const audioCtx = new (window.AudioContext || window.webkitAudioContext)();
const analyser = audioCtx.createAnalyser();
const source = audioCtx.createMediaElementSource(audio);
source.connect(analyser);
analyser.connect(audioCtx.destination);

function resizeCanvas() {
    canvas.width = document.getElementById('floating-player').offsetWidth;
    canvas.height = document.getElementById('floating-player').offsetHeight;
}
window.addEventListener('resize', resizeCanvas);
resizeCanvas(); // inicial



function drawBars() {
    requestAnimationFrame(drawBars);
    const data = new Uint8Array(analyser.frequencyBinCount);
    analyser.getByteFrequencyData(data);
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    const barCount = Math.floor(canvas.width / 4); // 4px por barra + espacio
    for (let i = 0; i < barCount; i++) {
        const barHeight = data[i] / 2;
        ctx.fillStyle = '#68aa94';
        ctx.fillRect(i * 4, canvas.height - barHeight, 3, barHeight);
    }
}

audio.onplay = () => {
    if (audioCtx.state === 'suspended') {
        audioCtx.resume();
    }
    drawBars();
};

/* carrusel de proyectos */
const data = [
    {
        img: "/wp-content/themes/SanchezDv/img/JoseCarlos.png",
        title: "jose carlos herrera",
        text: "   web realizada con WordPress, HTML y CSS. Integré la estructura de la Front Page, diseñé un slider animado para comentarios con desplazamiento en hover, desarrollé la barra de navegación personalizada y dos cartas enlazadas a cursos. También implementé la portada con reproducción automática de video y un botón de control de sonido. Además, construí una galería de imágenes con estilo de costura, optimizada para resaltar detalles visuales de prendas y procesos creativos.",
        link: "https://josecarlosherrera.com/"
    },
    {
        img: "/wp-content/themes/SanchezDv/img/Susanitaurban.png",
        title: "susanita urban",
        text: "La web de Susanita Urban se desarrolló con un tema personalizado en WordPress, utilizando WooCommerce para integrar funcionalidades de tienda online. Aunque no participé directamente en su construcción, estudié su estructura y enfoque para comprender la implementación de comercio electrónico en entornos WordPress.",
        link: "https://susanitaurban.com/"
    },

];

document.querySelectorAll('.trigger').forEach(trigger => {
    trigger.addEventListener('click', () => {
        const index = trigger.dataset.index;
        const section = document.querySelector('.hero-section');
        section.querySelector('.hero-background img').src = data[index].img;
        section.querySelector('.hero-overlay h1').textContent = data[index].title;
        section.querySelector('.hero-overlay p').textContent = data[index].text;
        section.querySelector('.hero-overlay a').href = data[index].link;
    });
});

let currentIndex = 0;

function showProject(index) {
    const section = document.querySelector('.hero-section');
    section.querySelector('.hero-background img').src = data[index].img;
    section.querySelector('.hero-overlay h1').textContent = data[index].title;
    section.querySelector('.hero-overlay p').textContent = data[index].text;
    section.querySelector('.hero-overlay a').href = data[index].link;
}

setInterval(() => {
    currentIndex = (currentIndex + 1) % data.length;
    showProject(currentIndex);
}, 8000); // cambia cada 5 segundos


function showProject(index) {
    const section = document.querySelector('.hero-section');
    const img = section.querySelector('.hero-background img');
    const title = section.querySelector('.hero-overlay h1');
    const text = section.querySelector('.hero-overlay p');
    const link = section.querySelector('.hero-overlay a');

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

        void title.offsetWidth; // reinicia animación
        void text.offsetWidth;
        void link.offsetWidth;

        title.style.animation = 'fadeUp 0.6s ease forwards';
        text.style.animation = 'fadeUp 0.6s ease forwards';
        link.style.animation = 'fadeUp 0.6s ease forwards';
    }, 400);
}

/* cursor */
if (!document.querySelector('.cursor')) {
    const cursor = document.createElement('div');
    cursor.className = 'cursor';
    document.body.appendChild(cursor);
}

const cursor = document.querySelector('.cursor'); // Usa el ya creado

// Movimiento suave
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

// Efecto hover
const addHoverEvents = () => {
    const hoverEls = document.querySelectorAll("a, button, .hover-target");
    hoverEls.forEach(el => {
        el.addEventListener("mouseenter", () => cursor.classList.add("hovered"));
        el.addEventListener("mouseleave", () => cursor.classList.remove("hovered"));
    });
};
window.addEventListener("load", addHoverEvents);



