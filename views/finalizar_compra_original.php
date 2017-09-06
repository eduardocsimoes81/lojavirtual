<h1>Finalizar Compra</h1>

<form method="POST">
	<?php if(!empty($erro)){ ?>
		<div class="erro"><?php echo $erro; ?></div>
	<?php } ?>

	<fieldset>
		<legend>Informações do Usuário</legend>
		Nome:<br>
		<input type="text" name="nome"><br><br>

		E-mail:<br>
		<input type="email" name="email"><br><br>

		Senha:<br>
		<input type="password" name="senha"><br><br>
	</fieldset>
	<br>
	<fieldset>
		<legend>Informações de Endereço</legend>

		<textarea name="endereco"></textarea>
	</fieldset>
	<br>
	<fieldset>
		<legend>Resumo da Compra</legend>

		Total a Pagar: R$ <?php echo $valor_carrinho['valor_total']; ?>		
	</fieldset>
	<br>
	<fieldset>
		<legend>Informações de Pagamento</legend>

		<?php foreach($pagamentos as $pagamento){ ?>
			<input type="radio" name="pagamento" value="<?php echo $pagamento['id'] ?>"><?php echo $pagamento['nome']; ?><br><br>
		<?php } ?>
	</fieldset>
	<br>
	<input type="submit" value="Efetuar Pagamento">
</form>