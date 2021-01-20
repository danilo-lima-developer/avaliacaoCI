<?php if ($this->session->userdata('perfil') != 'ADMINISTRADOR') {
	redirect('mainpage');
}
?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?= $title ?></h1>
	</div>

	<div class="col-md-12">
		<form action="<?= base_url() ?>admusers/update/<?= $user["id_usuario"] ?>" id="enviar_form" name="enviar_form" method="post">
		<div class="row" id="div_alert_cpf"></div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="name">Nome</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= $user["nome"] ?>">
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="text" class="form-control" name="email" id="email" placeholder="E-mail" value="<?= $user["email"] ?>">
					</div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<label for="cpf">CPF</label>
						<input type="text" class="form-control" name="inputCpf" id="inputCpf" placeholder="cpf" value="<?= $user["cpf"] ?>" disabled>
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-md-2">
					<div class="form-group">
						<label for="fone">Fone</label>
						<input type="text" class="form-control" name="fone" id="fone" placeholder="fone" value="<?= $user["fone"] ?>">
					</div>
				</div>

			</div>


			<div class="col-md-6">
				<button type="submit" class="btn btn-secondary"><i class="fa fa-check" aria-hidden="true"></i> ATUALIZAR</button>
				<a href="<?= base_url() ?>admusers" class="btn btn-secondary"><i class="fa fa-undo" aria-hidden="true"></i>
					VOLTAR</a>
			</div>
	</div>
	</form>
	</div>

</main>
</div>
</div>