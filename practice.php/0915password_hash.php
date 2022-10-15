<?php
$p = '123456';

echo sha1($p). "<br>";

echo password_hash($p,PASSWORD_DEFAULT);