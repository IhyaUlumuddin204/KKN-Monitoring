<?php

$pages = [
    'index.php' => 'index.html',
    'profil.php' => 'profil.html',
    'umkm.php' => 'umkm.html',
    'produk.php' => 'produk.html',
    'dokumentasi.php' => 'dokumentasi.html',
    'peta-potensi.php' => 'peta-potensi.html',
    'monitoring.php' => 'monitoring.html',
    'kontak.php' => 'kontak.html',
];

foreach ($pages as $source => $target) {
    $html = render_page(__DIR__ . DIRECTORY_SEPARATOR . $source);
    $html = convert_links_to_static($html, $pages);

    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . $target, $html);
    echo "Generated {$target}" . PHP_EOL;
}

function render_page(string $path): string
{
    ob_start();
    require $path;

    return ob_get_clean();
}

function convert_links_to_static(string $html, array $pages): string
{
    foreach ($pages as $source => $target) {
        $html = str_replace('href="' . $source . '"', 'href="' . $target . '"', $html);
        $html = str_replace("href='" . $source . "'", "href='" . $target . "'", $html);
        $html = str_replace('href="' . $source . '#', 'href="' . $target . '#', $html);
        $html = str_replace("href='" . $source . "#", "href='" . $target . "#", $html);
    }

    return $html;
}
