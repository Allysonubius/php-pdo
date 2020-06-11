<?php
/**Created by Visual Studio Code
 * Name: Allyson
 * Date: 10/05/2020
 * PHP Version 7.4
*/
//Declaração de segurança
declare(strict_types=1);
//Connection...
$pdo = require 'connect.php';
//Update 
$sql = 'update produtos set descricao = ? where id = ?';
//Manuseio de QUERY com PDO para SQL
$prepare = $pdo -> prepare ($sql);
//manuseio de conteudo
$prepare -> bindParam(1, $_GET['descricao']);
//Manuseio de conteudo
$prepare -> bindParam(2, $_GET['id']);
//execução
$prepare -> execute();
//PRINT
echo $prepare -> rowCount();
?>