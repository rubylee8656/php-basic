<?php
$p = '1234567';



echo password_verify($p,'$2y$10$db48gbwKJZu2Wm1sXKNGF.PnwgD9SrsijjpekT2Oz2TvbXIioZhZ2') ? 'yes':'no';