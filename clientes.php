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
    <title>Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Lista de Clientes</h1>
    <table>
        <thead>
            <tr><th>Nome</th><th>CPF</th><th>Telefone</th></tr>
        </thead>
        <tbody>
            <tr><td>Cliente 01</td><td>111.111.111-11</td><td>(00) 90000-0001</td></tr>
            <tr><td>Cliente 02</td><td>222.222.222-22</td><td>(00) 90000-0002</td></tr>
            <tr><td>Cliente 03</td><td>333.333.333-33</td><td>(00) 90000-0003</td></tr>
            <tr><td>Cliente 04</td><td>444.444.444-44</td><td>(00) 90000-0004</td></tr>
            <tr><td>Cliente 05</td><td>555.555.555-55</td><td>(00) 90000-0005</td></tr>
            <tr><td>Cliente 06</td><td>666.666.666-66</td><td>(00) 90000-0006</td></tr>
            <tr><td>Cliente 07</td><td>777.777.777-77</td><td>(00) 90000-0007</td></tr>
            <tr><td>Cliente 08</td><td>888.888.888-88</td><td>(00) 90000-0008</td></tr>
            <tr><td>Cliente 09</td><td>999.999.999-99</td><td>(00) 90000-0009</td></tr>
            <tr><td>Cliente 10</td><td>000.000.000-00</td><td>(00) 90000-0010</td></tr>

            </tbody>
        </table>
        <br><a class="btn" href="dashboard.php">Voltar ao Painel</a>
    </div>
</body>
</html>
