<?php
/**
 * Created by PhpStorm.
 * User: dnajar
 * Date: 12/20/2018
 * Time: 1:54 PM
 */
$user_name = 'dmnhosti_bs_cms';
$db_name = 'dmnhosti_bs_cms';
$pass = '#@$Z!GoylVZJ';
$host = 'db4free.net';

$conn = new mysqli($host, $user_name, $pass, $db_name, 3306);

if($conn->errno){
    die(http_response_code(400));
}

