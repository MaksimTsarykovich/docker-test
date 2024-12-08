<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=app', "user", "password");
} catch (PDOException $e) {
    echo ''. $e->getMessage();
}