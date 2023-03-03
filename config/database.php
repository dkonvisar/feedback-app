<?php
const DB_HOST = 'localhost';
const DB_USER = 'denis';
const DB_PASS = 'denis';
const DB_NAME = 'php_dev';

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) die('Connection Failed ' . $conn->connect_error);