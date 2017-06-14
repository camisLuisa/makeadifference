<?php include("cabecalho.php");?>

<?php
$nome = $_GET["nome"];
$cnpj = $_GET["cnpj"];
$telefone = $_GET["telefone"];
$descricao = $_GET["descricao"];
$email = $_GET["email"];
$rua = $_GET["rua"];
$numero = $_GET["numero"];
$bairro = $_GET["bairro"];
$cidade = $_GET["cidade"];
$uf = $_GET["uf"];
$conexao = mysqli_connect('localhost', 'root', '', 'make_a_difference');

$query = "INSERT INTO instituicao (nome_instituicao,email,telefone_instituicao,descricao,cnpj,rua,numero,bairro,cidade,estado) values ('{$nome}', '{$email}', '{$telefone}', '{$descricao}', '{$cnpj}', '{$rua}', '{$numero}', '{$bairro}', '{$cidade}', '{$uf}')";
if(mysqli_query($conexao, $query)){ ?>
	<p class="alert-success">
	Usuario <?=$nome;?> adicionado com sucesso!
	</p>	 
<?php } else { ?>
	<p class="aleert-danger">O usuario <?= $nome ?> nao foi adicionado.</p>
<?php 
}
?>

?>

<?php include("rodape.php");?>