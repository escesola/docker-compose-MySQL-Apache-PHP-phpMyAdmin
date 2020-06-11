<?php
$pdo = new PDO('mysql:host=192.168.99.101;port=3306;dbname=biblioteca','root','Admin12345');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 ?>
