<?php

$ar4 = [
    'name' => '小新',
    'age' => 12,
];

echo json_encode($ar4, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);