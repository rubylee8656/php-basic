<?php
session_start(); // 啟用 session 依樣放最前面 因為有可能會設定cookie

if(! $_SESSION['user']){
    $_SESSION['user'] = 0;
}

$_SESSION['你好'] = '<h2>Hello</h2>';

$_SESSION['user']++;

echo $_SESSION['user'];