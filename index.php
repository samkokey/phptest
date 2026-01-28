<?php
// CORS İzinleri (Tarayıcıdan gelen isteklere izin ver)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=UTF-8");

// "Preflight" isteğini yönet (Bazı tarayıcılar önce OPTIONS isteği atar)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Verileri al (React uygulamasındaki URLSearchParams güncellemesi sayesinde $_POST çalışır)
$username = isset($_POST['username']) ? $_POST['username'] : '';
$code = isset($_POST['code']) ? $_POST['code'] : '';

// ... Kod kontrol işlemleriniz ...

// Cevabı JSON olarak döndür
echo json_encode([
    "success" => true, // veya false
    "message" => "İşlem başarılı",
    "followerCount" => 100,
    "packageName" => "Start Pack",
    "description" => "Açıklama"
]);
?>
