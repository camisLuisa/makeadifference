<?php include("cabecalho.php") ?>
	<h1>Formulário de cadastro Voluntário</h1>
	<div class="form-group">
		<form action="volunteer.php">
			Nome: <input type="text" name="nome" required><br>
			Idade: <input type="number" name="idade" required><br>
			CPF: <input type="number" name="cpf" required><br>
			telefone: <input type="text" name="telefone" required><br>
			descrição: <input type="text" name="descricao" required><br>
			email: <input type="email" name="email" required><br>

			<input type="submit" name="adicionar">
		</form>
	</div>
<?php include("rodape.php"); ?>
