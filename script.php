
<?php
session_start();
/*A session deve vir no inicio do script, antes de qualquer código, se não pode não pegar algum dado
em consequencia causando erros.*/
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';



$nome = $_POST['nome'];
$idade = $_POST['idade'];

/*Inserindo metodos de segurança com especificações e limitações para o melhor 
uso do formulario, evitando informações desnecessárias*/

if(empty($nome)) {
	$_SESSION{"mensagem-de-erro"} = "O nome não pode ser vazio, por favor preencha-o novamente.";
 	header("location: index.php");
 	return;
}
/*strlen verifica a quantidade de caracteres que astring possui, pode ser usada
para limitar a quantidade de caracteres a ser inseridos, informando um numero minimo
ou um número maximo.*/
else if(strlen($nome) < 3) {
	$_SESSION{"mensagem-de-erro"} = " O nome deve conter mais de 3 caracteres";
	header("location: index.php");
	return;
}
else if(strlen($nome) > 32) {
	$_SESSION{"mensagem-de-erro"} =  " O nome é muito extenso";
	header("location: index.php");
	return;
}

else if(!is_numeric($idade)) {
	$_SESSION{"mensagem-de-erro"} =  "Informe um número para idade.";
	header("location: index.php");
	return;
}





if($idade >=6 && $idade <= 12) {

	for($i = 0; $i <= count($categorias); $i++) {
		if($categorias[$i] == 'infantil')
		$_SESSION["mensagem-de-sucesso"] = "O nadador " . $nome. "compete na categoria " .$categorias[$i];
		header("location: index.php");
		return;	
	}
	

}else if($idade >= 13 && $idade <= 18) {

	for($i = 0; $i <= count($categorias); $i++) {
		if($categorias[$i] == 'adolescente')
		$_SESSION["mensagem-de-sucesso"] = "O nadador " . $nome. "compete na categoria adolescente";
	}	header("location: index.php");
		return;
}else{
	
	for($i = 0; $i <= count($categorias); $i++) {
		if($categorias[$i] == 'adulto')
		$_SESSION["mensagem-de-sucesso"] = "O nadador " . $nome. "compete na categoria adulto";
	}	header("location: index.php");
		return;

}



?>
