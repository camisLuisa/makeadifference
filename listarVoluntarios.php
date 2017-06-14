<?php include("cabecalho.php");?>

<?php

$conexao = mysqli_connect('localhost', 'root', '', 'make_a_difference');

$query = $query = sprintf("SELECT cod_voluntario, nome_voluntario, telefone_voluntario FROM voluntario");
if(mysqli_query($conexao, $query)){ 
	$dados = mysql_query($query, $con) or die(mysql_error());
	// transforma os dados em um array
	$linha = mysql_fetch_assoc($dados);
	// calcula quantos dados retornaram
	$total = mysql_num_rows($dados);

	<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
			<p>nome: <?=$linha['nome']?></p>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if 
	}
?>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>



 } else {
	
}
?>


<?php include("rodape.php");?>