<?php
$host = 'localhost';
$user = 'root';
$pswd = ''; # sepasang single quotes
$dbname = 'coding_login';

$conn = new mysqli($host, $user, $pswd, $dbname); session_start();