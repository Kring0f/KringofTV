<?php
$url = "https://u0.b4c8d3e9f1a2b7c5d70.cfd/yayinzirve.m3u8";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

if ($response) {
    header("Content-Type: text/plain");
    echo $response;
} else {
    echo "M3U8 dosyası alınamadı.";
}
?>