<?php

setcookie('mycookie','abcd', time()+20); //設定  必須放在所有主體html之前

echo $_COOKIE['mycookie'];  //讀取

//cookie 針對整個瀏覽器的過程
//session storage 針對整個視窗的過程