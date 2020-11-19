
<?php
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
	echo "Necessário informar nome";
	return;
}
/*strlen verifica a quantidade de caracteres que astring possui, pode ser usada
para limitar a quantidade de caracteres a ser inseridos, informando um numero minimo
ou um número maximo.*/
if(strlen($nome) < 3) {
	echo " O nome deve conter mais de 3 caracteres";
	return;
}
if(strlen($nome) > 32) {
	echo " O nome é muito extenso";
	return;
}

if(!is_numeric($idade)) {
	echo "Informe um número para idade.";
	return;
}





if($idade >=6 && $idade <= 12) {

	for($i = 0; $i <= count($categorias); $i++) {
		if($categorias[$i] == 'infantil')
			echo "O nadador " . $nome. " compete na categoria " .$categorias[$i];
	}
	

}else if($idade >= 13 && $idade <= 18) {

	for($i = 0; $i <= count($categorias); $i++) {
		if($categorias[$i] == 'adolescente')
			echo "O nadador " . $nome. " compete na categoria adolescente";
	}
}else{
	
	for($i = 0; $i <= count($categorias); $i++) {
		if($categorias[$i] == 'adulto')
			echo "O nadador " . $nome. " compete na categoria adulto";
	}

}



?>
