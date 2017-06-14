<?php include("cabecalho.php");?>

<?php
$nome = $_GET["nome"];
$idade = $_GET["idade"];
$cpf = $_GET["cpf"];
$telefone = $_GET["telefone"];
$descricao = $_GET["descricao"];
$email = $_GET["email"];
$conexao = mysqli_connect('localhost', 'root', '', 'make_a_difference');

$query = "INSERT INTO voluntario (nome_voluntario,email_voluntario,cpf,idade,telefone_voluntario,descricao_voluntario) values ('{$nome}', '{$email}','{$cpf}', '{$idade}', '{$telefone}', '{$descricao}')";
if(mysqli_query($conexao, $query)){ ?>
	<p class="alert-success">
	Usuario <?=$nome;?> adicionado com sucesso!
	</p>	 
<?php } else { ?>
	<p class="aleert-danger">O usuario <?= $nome ?> nao foi adicionado.</p>
<?php 
}
?>

<?php include("rodape.php");?>