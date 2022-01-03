<?php
$host = 'localhost';
$user = 'root';
$pswd = '';
$dbname = 'student';

$conn = new mysqli($host, $user, $pswd, $dbname);
session_start();