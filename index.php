<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");


$data = json_decode(file_get_contents('php://input'), true);

echo "{ "success": true, "message": "İşlem Başarılı", "followerCount": 100, "packageName": "Start", "description": "..." }";
?>
