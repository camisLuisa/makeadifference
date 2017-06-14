<?php include("cabecalho.php") ?>
	<h1>Formulário de cadastro de Instituição</h1>
	<div class="form-group">
		<form action="modelOng.php">
			Nome: <input type="text" name="nome" required><br>
			CNPJ: <input type="number" name="cnpj" required><br>
			telefone: <input type="text" name="telefone" required><br>
			descrição: <input type="text" name="descricao" required><br>
			email: <input type="email" name="email" required><br>
			rua: <input type="text" name="rua" required><br>
			numero: <input type="number" name="numero" required><br>
			bairro: <input type="text" name="bairro" required><br>
			cidade: <input type="text" name="cidade" required><br>
			UF: <input type="text" name="uf" required><br>

			<input type="submit" name="adicionar">
		</form>
	</div>
<?php include("rodape.php"); ?>