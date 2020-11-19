<?php
session_start();
/*A session deve vir no inicio do script, antes de qualquer cÃ³digo, se nÃ£o pode nÃ£o pegar algum dado
em consequencia causando erros.*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset=" utf-8"/>
	<title>Formulárioo de Inscrição</title>
	<meta nome="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width-device-width, initial-scale-1">
</head>

<body>
	<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
	<form action="script.php" method="post">
		<?php
		$mensaagemDeSucesso = isset($_SESSION["mensagem-de-sucesso"]) ? $_SESSION["mensagem-de-sucesso"] : "";
		if(!empty($mensaagemDeSucesso)) {
			echo $mensaagemDeSucesso;
		}

		$mensaagemDeErro = isset($_SESSION["mensagem-de-erro"]) ? $_SESSION["mensagem-de-erro"] : "";
		if(!empty($mensaagemDeErro)) {
			echo $mensaagemDeErro;
		}
		?>

		<p>Seu Nome: <input type="text" name="nome"/></p>
		<p>Sua Idade: <input type="text" name="idade"/></p>
		<p><input type="submit" value="Enviar dados do competidor"/></p>
	</form>

</body>

</html>
