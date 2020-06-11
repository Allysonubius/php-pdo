<?php
/**Created by Visual Studio Code in Sublime Text
 * Name: Allyson
 * Date: 10/05/2020
 * PHP Version 7.4
*/
//TRATAMENTO DA INFORMAÇÂO
require 'produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {
	
	case 'listagem':
			echo '<h3>Produtos: </h3>';
			
			foreach ($produto -> list() as $value) {//METODO foreach
				echo 'id: '.$value['id'].'<br> Descrição: '.$value['descrição'].'<hr>';//chamada
			
			}
			break;
	case 'insert':
		
			$status = $produto -> insert ('Produto teste do Allyson 01.');

			if(!$status){
				echo "Não foi possivel executar a operação!";
			}

			echo "Registro concluido com sucesso !";
		
			break;
	case 'update':
		
			$status = $produto -> update ('Produto alterado do Allyson 01.', 03);

			if(!$status){
				echo "Não foi possivel executar a operação!";
				return false;
			}

			echo "Registro atualizado com sucesso !";
		break;
	case 'delete':
			
			$status = $prodtuo -> delete(3);

			if(!$status){
				echo "Não foi possivel executar a operação!";
				return false;
			}

			echo "Registro removido com sucesso !";
		break;
}