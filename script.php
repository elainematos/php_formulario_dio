
<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';



$nome = $_POST['nome'];
$idade = $_POST['idade'];

/*Inserindo metodos de seguran�a com especifica��es e limita��es para o melhor 
uso do formulario, evitando informa��es desnecess�rias*/

if(empty($nome)) {
	echo "Necess�rio informar nome";
	return;
}
/*strlen verifica a quantidade de caracteres que astring possui, pode ser usada
para limitar a quantidade de caracteres a ser inseridos, informando um numero minimo
ou um n�mero maximo.*/
if(strlen($nome) < 3) {
	echo " O nome deve conter mais de 3 caracteres";
	return;
}
if(strlen($nome) > 32) {
	echo " O nome � muito extenso";
	return;
}

if(!is_numeric($idade)) {
	echo "Informe um n�mero para idade.";
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
