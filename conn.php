<?php
$host = 'localhost';
$user = 'root';
$pswd = '';
$dbname = 'student'; #nama database

$conn = new mysqli($host, $user, $pswd, $dbname);
session_start();