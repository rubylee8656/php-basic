<?php
header('Content-Type: application/json');

require __DIR__. '/parts/0912connect_db.php';

$stmt = $pdo->query("SELECT * FROM categories");

echo json_encode($stmt->fetchAll(), JSON_UNESCAPED_UNICODE);