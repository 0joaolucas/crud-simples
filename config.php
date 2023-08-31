<?php
//Interação com banco de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'cadastro');

$conn = new MySQLi(HOST, USER, PASS, BASE);
$conn->set_charset("utf8");
