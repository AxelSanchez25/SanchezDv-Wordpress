
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
