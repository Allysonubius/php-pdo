<?php
/**Created by Visual Studio Code
 * Name: Allyson
 * Date: 10/05/2020
 * PHP Version 7.4
*/
//Declaração de segurança
declare(strict_types=1);
//Connection ..
$pdo = require 'connect.php';
//Inserção de produtos
$sql = 'insert into produtos(id,descricao) values(?,?)';
//Manuseio de QUERY com PDO para SQL
$prepare = $pdo -> prepare($sql);
//Uso PDO contra SQL inject maliciosos
$prepare -> bindParam(1, $_GET('id'));
//Uso PDO contra SQL inject maliciosos
$prepare -> bindParam(2, $_GET['descricao']);
//Metodo executar
$prepare -> execute();
//Metodo de linhas afetadas
echo $prepare -> rowCount();