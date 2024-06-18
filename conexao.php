<?php

    $banco = new mysqli("localhost:3306" , "root" , "" , "cinema_db");
    if ($banco->error) {
        die("Falha ao conectar ao banco de dados: " . $banco->error);
    }

?>