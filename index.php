<?php
// M3U8 dosyasının URL'si
$url = "https://u0.b4c8d3e9f1a2b7c5d70.cfd/yayinzirve.m3u8";

// cURL kullanarak içeriği al
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

// Sonucu ekrana yazdır
if ($response) {
    header("Content-Type: text/plain"); // İçeriğin doğru şekilde görüntülenmesi için
    echo $response;
} else {
    echo "M3U8 dosyası alınamadı.";
}
?>