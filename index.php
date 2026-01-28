<?php
// Gelen JSON verisini oku
$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);

// Veriyi işle
$kullanici_adi = $data['code'] ?? 'Bilinmiyor';

// Bir yanıt hazırla
$response = [
    "message" => "Merhaba " . $kullanici_adi . ", verin başarıyla alındı!"
];

// Yanıtı JSON formatında gönder
header('Content-Type: application/json');
echo json_encode($response);
?>
