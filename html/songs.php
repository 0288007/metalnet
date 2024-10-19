<?php
// This PHP script can be used to serve the audio files if needed
$day = date('j'); // Get the current day of the month
$songFile = "songs/song{$day}.mp3";

if (file_exists($songFile)) {
    header('Content-Type: audio/mpeg');
    readfile($songFile);
} else {
    echo "Song not found.";
}
?>