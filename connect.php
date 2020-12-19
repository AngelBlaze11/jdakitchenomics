<?php
// connect.php

define('DATABASE_HOST', '127.0.0.1');
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', 'secret123');
define('DATABASE_NAME', 'webdev1_db');

$connection = new mysqli(
	DATABASE_HOST,
	DATABASE_USER,
	DATABASE_PASSWORD,
	DATABASE_NAME
);

if (!$connection) exit('Fatal Error: a database connection error occured');
