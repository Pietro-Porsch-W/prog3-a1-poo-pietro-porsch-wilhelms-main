<?php
// tabela com dados falsos para exbicição
require_once 'classes/Sessao.php';
Sessao::iniciar();
if (!Sessao::get('usuario')) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estoque</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Estoque dos Produtos</h1>
    <table>
        <thead>
        <tr><th>Produto</th><th>Quantia</th></tr>
        </thead>
        <tbody>
            <tr><td>Notebook</td><td>13</td></tr>
            <tr><td>Monitor Oled</td><td>30</td></tr>
            <tr><td>Monitor 27"</td><td>2</td></tr>
            <tr><td>Teclado de Membrana</td><td>3</td></tr>
            <tr><td>SSD NVME 1TB</td><td>25</td></tr>
            <tr><td>Controle Xbox</td><td>18</td></tr>
            <tr><td>Webcam</td><td>22</td></tr>
            <tr><td>Fone Bluetooth</td><td>4</td></tr>
            <tr><td>Controle InfraVermelho</td><td>5</td></tr>
            <tr><td>Cadeira de escritorio</td><td>4</td></tr>
        </tbody>
    </table>
    <br><a class="btn" href="dashboard.php">Voltar ao Painel</a>
</div>
</body>
</html>
