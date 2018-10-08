<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<header>
		<h1>Formulário Contato</h1>
	</header>
    <?php
    if (isset($_GET['success']) && $_GET['success']) {
        echo '<h3>Mensagem enviada com sucesso</h3>';
    }
    ?>
	<form action="src/send.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="formtype" value="contato/arquiteto">
        <input type="hidden" name="MAX_FILE_SIZE" value="300" />

		<div>
			<label>Nome</label>
			<input name="nome" type="text">
		</div>

		<div class="email">
	    	<label>Email</label>
	    	<input name="Email"  type="email">
	    </div>

		<div class="telefone">
	    	<label>Telefone</label>
	    	<input name="tel"  type="text" maxlength="14" >
	    </div>
		
		<div class="cpf">
			<label>CPF</label>
			<input name="cpf"  type="text" maxlength="14" >
		</div>

		<div class="rg">
			<label>RG</label>
			<input name="rg"  type="text" maxlength="14" >
		</div>

		<div class="cep">
			<label>CEP</label>
			<input name="cep"  type="text" maxlength="10" >
		</div>

		<div>
			<label>Assunto</label>
			<input name="assunto" type="text">
		</div>

		<div>
			<label>Mensagem</label>
			<textarea name="mensagem" cols="30" rows="10"></textarea>
		</div>

		<div>
			<input type="submit" value="Enviar">
		</div>


	</form>
	<script src="main.js"></script>
</body>
</html>