<?php
/**Created by Visual Studio Code
 * Name: Allyson
 * Date: 10/05/2020
 * PHP Version 7.4
*/
//Declaração
declare(strict_types=1);
//connection
$pdo = null;
//Metodo try, catch
try{
    $pdo = new PDO('mysql:host=mysql ; dbname=exemplo' , 'root' , '123456');//execução do banco de dados
}catch(Exception $e){//Excessão
    echo $e -> getMessage();
    die();//fim 
}
return $pdo;
?>