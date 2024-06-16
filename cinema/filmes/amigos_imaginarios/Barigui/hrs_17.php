<?php

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
    <style>
        .container
        {
            max-width: 800px;
            margin: 20px auto;
            background-color: #e7f0ff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        } 
        td {            
            height: 90px;
            padding: 0px;
            text-align: center;
            position: relative;            
            border-radius: 100%;
            background-color: #6699ff;              
        }
        td:hover {
            background-color: #90ee90;
        }
        td:last-child {
        border-right: none; /* remover borda direita do último td em cada linha */
    }
    .indisponivel
    {
        background-color: #aaaaaa;
        cursor: not-allowed;
    }
    .indisponivel:hover
    {
        background-color: #ab2e46;
        cursor: not-allowed;
    }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>TELA</h1>
        <table>
            <tr>
                <td class="disponivel" id="a1">A1</td>
                <td class="disponivel" id="a2">A2</td>
                <td class="indisponivel" id="a3">A3</td>
                <td class="disponivel" id="a4">A4</td>
                <td class="disponivel" id="a5">A5</td>
                <td class="disponivel" id="a6">A6</td>
            </tr>
            <tr>
                <td class="disponivel" id="b1">B1</td>
                <td class="indisponivel" id="b2">B2</td>
                <td class="disponivel" id="b3">B3</td>
                <td class="disponivel" id="b4">B4</td>
                <td class="disponivel" id="b5">B5</td>
                <td class="disponivel" id="b6">B6</td>
            </tr>
            <tr>
                <td class="disponivel" id="c1">C1</td>
                <td class="disponivel" id="c2">C2</td>
                <td class="disponivel" id="c3">C3</td>
                <td class="disponivel" id="c4">C4</td>
                <td class="disponivel" id="c5">C5</td>
                <td class="disponivel" id="c6">C6</td>
            </tr>
            <tr>
                <td class="disponivel" id="d1">D1</td>
                <td class="disponivel" id="d2">D2</td>
                <td class="disponivel" id="d3">D3</td>
                <td class="disponivel" id="d4">D4</td>
                <td class="disponivel" id="d5">D5</td>
                <td class="disponivel" id="d6">D6</td>
            </tr>
        </table>
    </div>
</body>
</html>