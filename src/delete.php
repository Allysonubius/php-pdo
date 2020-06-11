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
//Metodo de remoção de id
$sql = 'delete from produtos where id = ?';
//Manuseio QUERY de PDO e SQL
$prepare = $pdo -> prepare($sql);
//Paramentro ID
$prepare -> bindParam(1, $_GET['id']);
//Executar
$prepare -> execute();
//PRINT
echo $prepare -> rowCount();