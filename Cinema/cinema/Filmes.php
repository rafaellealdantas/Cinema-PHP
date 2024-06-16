<?php

require_once("conexao.php");
if(!isset($_SESSION)){
    session_start();
}    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="bg-dark text-white py-5">        
<div class="container text-center">
    <h1>filmes</h1>
        <div class="row align-items-start">
            <div class="col">
                <a href="filmes/badboys.php">
                    <img src="https://br.web.img3.acsta.net/img/b0/17/b0173047cc91f385964595cc30cbb975.jpg" class="img-fluid rounded" alt="...">
                    <h1>Bad Boys: Até o Fim</h1>
                </a>                
            </div>
            <div class="col">
                <a href="filmes/planeta_dos_macacos.php">
                    <img src="https://ingresso-a.akamaihd.net/prd/img/movie/planeta-dos-macacos-o-reinado/667088c0-e297-4c2e-b30b-eba3922a8cf3.webp" class="img-fluid rounded" alt="...">
                    <h1>Planeta dos Macacos: O Reinado</h1>
                </a>
            </div>
            <div class="col">
                <a href="filmes/divertidamente.php">
                    <img src="https://ingresso-a.akamaihd.net/prd/img/movie/divertida-mente-2/61ac248d-e3e6-4e33-9515-8ce0621a32fa.webp" class="img-fluid rounded" alt="">
                    <h1>Divertidamente 2</h1>
                </a>
            </div>
        </div>

        <div class="row align-items-start">
            <div class="col">
                <a href="filmes/malvado_favorito.php">
                    <img src="https://ingresso-a.akamaihd.net/prd/img/movie/meu-malvado-favorito-4/4d756249-3b88-4b59-baa2-527f5e3d4c3e.webp" class="img-fluid rounded" alt="...">
                    <h1>Meu Malvado Favorito 4</h1>
                </a>                
            </div>
            <div class="col">
                <a href="filmes/semente_do_mal.php">
                    <img src="https://maceioshopping.com/app/uploads/2024/06/semente-do-mal-poster.png" class="img-fluid rounded" alt="...">
                    <h1>Semente do Mal</h1>
                </a>
            </div>
            <div class="col">
                <a href="filmes/amigos_imaginarios.php">
                    <img src="https://ingresso-a.akamaihd.net/prd/img/movie/amigos-imaginarios/9ac26dbc-867c-4e6b-9347-a3e751e52dce.webp" class="img-fluid rounded" alt="">
                    <h1>Amigos Imaginários</h1>
                </a>
            </div>
        </div>
</div>
    
    
</body>
</html>