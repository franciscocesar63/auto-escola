<?php

class ClassConexao {

    public function conectaDB() {
        try {
            $pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DB . '', USER, PASS);
//            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            return 'ERROR: ' . $e->getMessage();
        }
    }

}
