<?php

try {
    $connection = new PDO('mysql:host=localhost;dbname=Rativtsi', 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Cannot connect to database: ' . $e->getMessage();
}
return $connection;
?>
