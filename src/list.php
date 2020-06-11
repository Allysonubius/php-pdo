<?php
/**Created by Visual Studio Code
 * Name: Allyson
 * Date: 10/05/2020
 * PHP Version 7.4
*/
declare(strict_types=1);
//Conexao com connect
$pdo = require 'connect.php';
//QUERY
$sql = 'select * from produtos';
//Cabeçalho
echo '<h3>Produtos: </h3>';
//Busca do QuerySQL
foreach ($pdo -> query($sql) as $key => $value) {//METODO foreach
	echo 'id: '.$value['id'].'<br> Descrição: '.$value['descrição'].'<hr>';//chamada
}
?>