<?php

$connect = mysqli_connect('localhost', 'root', '', 'doctors');
if(!$connect){
    die('Ошибка: Произошла ошибка подключения к базе данных!');
}