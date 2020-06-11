<?php
/**Created by Visual Studio Code in Sublime Text
 * Name: Allyson
 * Date: 10/05/2020
 * PHP Version 7.4
*/
//Declaração de segurança
declare(strict_types=1);
//Classe
class Produto
{
	/**
	*	@var PDO //classe PDO implementada !
	*/
	private $conexao;

	public function __construct()
	{
		try{
			$this -> conexao = new PDO('mysql:host=mysql ; dbname=exemplo' , 'root' , '123456');//execução do banco de dados
		}catch(Exception $e){
			echo $e -> getMessage();
			die();
		}
	}
//METODOS DE IMPLEMENTAÇÂO
	public function list() : array
	{
		$sql = 'select * from produtos';
		//Array
		$produtos = [];
		//Busca do QuerySQL
		foreach ($this -> conexao -> query($sql) as $key => $value) {//METODO foreach
			array_push($produtos, $value);//chamada
    	}
    	return $produtos;
    }

	public function insert(string $descricao) : void
	{
		$sql = 'insert into produtos(id,descricao) values(?,?)';
		//Manuseio de QUERY com PDO para SQL
		$prepare = $this -> conexao -> prepare($sql);
		//Uso PDO contra SQL inject maliciosos
		$prepare -> bindParam(1, $descricao);
		//Uso PDO contra SQL inject maliciosos
		$prepare -> bindParam(2, $descricao);
		//Metodo executar
		$prepare -> execute();
		//Metodo de linhas afetadas
		echo $prepare -> rowCount();
	}

	public function update(string $descricao,int $id) : void
	{
		$sql = 'update produtos set descricao = ? where id = ?';
		//Manuseio de QUERY com PDO para SQL
		$prepare = $this -> conexao -> prepare ($sql);
		//manuseio de conteudo
		$prepare -> bindParam(1, $descricao);
		//Manuseio de conteudo
		$prepare -> bindParam(2, $id);
		//execução
		$prepare -> execute();
		//PRINT
		echo $prepare -> rowCount();
	}

	public function delete(int $id) : void
	{
		$sql = 'delete from produtos where id = ?';
		//Manuseio QUERY de PDO e SQL
		$prepare = $this -> conexao -> prepare($sql);
		//Paramentro ID
		$prepare -> bindParam(1, $id);
		//Executar
		$prepare -> execute();
		//PRINT
		echo $prepare -> rowCount();
	}

}
