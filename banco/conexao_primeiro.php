<?php

try {
    $pdo = new PDO('mysql:host=156.67.72.151;dbname=u626289327_sysauto', "u626289327_sysauto", "Fr4xx$12");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

