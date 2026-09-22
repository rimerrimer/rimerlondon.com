<?php
$dir    = __DIR__ . '/videos/';
$output = __DIR__ . '/videos_scanned.json';
$videos = [];

if (is_dir($dir)) {
    $files = scandir($dir);
    rsort($files);
    foreach ($files as $file) {
        if (!preg_match('/\.(mp4|webm|mov)$/i', $file)) continue;
        $title = preg_replace('/\.(mp4|webm|mov)$/i', '', $file);
        $videos[] = [
            'file'  => $file,
            'title' => $title,
            'info'  => ''
        ];
    }
}

file_put_contents($output, json_encode($videos, JSON_PRETTY_PRINT));
echo '<pre>' . htmlspecialchars(file_get_contents($output)) . '</pre>';
echo '<p>Done — <a href="videos_scanned.json">view videos_scanned.json</a>. Delete this file when finished.</p>';
