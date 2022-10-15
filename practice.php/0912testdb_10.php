<?php
header('Content-Type: text/plain'); // 一般文字內容

require __DIR__. '/parts/0912connect_db.php';

$stmt = $pdo->query("SELECT * FROM categories");

while( $r = $stmt->fetch() ) {
    print_r($r);
}

?>