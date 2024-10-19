window.onload = function() {
    const today = new Date();
    const dayOfMonth = today.getDate();
    const songSource = document.getElementById('songSource');

    // Assuming the songs are named as song1.mp3, song2.mp3, ..., song31.mp3
    songSource.src = `songs/song${dayOfMonth}.mp3`;
    document.getElementById('dailySong').load();
};
