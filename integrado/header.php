<?php
$ejercicio = '';
if(isset($_GET['ejercicio'])) {
    $ejercicio = $_GET['ejercicio'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Jazmin De Stefano</title>
    <link rel="stylesheet" href="integrado.css">

</head>
<body>
    <div class="header-container">
        <h1 class="header-title">Jazmin De Stefano - Guia de Ejercicios :)</h1>
    </div>
    <nav>
        <ul>
            <li><a href="ejercicio1.php">Ejercicio 1</a></li>
            <li><a href="ejercicio2.php">Ejercicio 2</a></li>
            <li><a href="#">Ejercicio 3</a></li>
            <li><a href="#">Ejercicio 4</a></li>
            <li><a href="#">Ejercicio 5</a></li>
        </ul>
    </nav>

