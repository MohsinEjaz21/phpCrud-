<?php
$pdo = new PDO('mysql:host=localhost;dbname=misc;port=3306', 'root', '1234');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
