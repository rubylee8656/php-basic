<?php 
require __DIR__ . '/parts/admin-require.php';
require __DIR__ . '/parts/connect_db.php'; 

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

$sql = "DELETE FROM `address_book` WHERE sid={$sid}";

$pdo->query($sql);

// header('Location: list.php');
$come_from = 'list.php';
if(! empty($_SERVER['HTTP_REFERER'])){
    $come_from = $_SERVER['HTTP_REFERER'];
}
header("Location: {$come_from}");