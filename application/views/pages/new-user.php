<?php if ($this->session->userdata('perfil') != 'ADMINISTRADOR') {
	redirect('mainpage');
}
?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#inputCpf').mask('000.000.000-00', {
			placeholder: '999.999.999-99'
		});
	});


	function validar() {
		var cpf = $('#inputCpf').val().replace('.', '').replace('.', '').replace('-', '')
		$.ajax({
			url: "<?php echo base_url() ?>admusers/Ajaxvalidar",
			dataType: 'json',
			type: 'post',
			data: {
				cpf: cpf
			},
			cache: false,
			success: function(data) {
				if (!data) {
					$('#inputCpf').val($('#inputCpf').val().replace('.', '').replace('.', '').replace('-', ''));
					document.getElementById("enviar_form").submit();
				} else {
					$('#div_alert_cpf').html('');
					$('#div_alert_cpf').append('<div class="col-md-12"><p style="color: red;"> CPF já cadastrado!</p></div>');
					setTimeout(function() {
						$('#div_alert_cpf').html('');
					}, 5 * 1000);
				}

			},
			error: function(d) {

				return false;
			}
		});
	}
</script>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?= $title ?></h1>
	</div>

	<div class="col-md-12">
		<form action="<?= base_url() ?>admusers/store" onsubmit="validar();return false;" id="enviar_form" name="enviar_form" method="post">
		<div class="row" id="div_alert_cpf"></div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="inputName">NOME</label>
						<input type="text" class="form-control" name="inputName" id="inputName" placeholder="NOME" required>
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label for="inputEmail">E-MAIL</label>
						<input type="text" class="form-control" name="inputEmail" id="inputEmail" placeholder="E-MAIL">
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label for="inputCpf">CPF</label>
						<input type="text" class="form-control" name="inputCpf" id="inputCpf" placeholder="CPF" maxlength="11" required>
					</div>
				</div>

			</div>

			<div class="row">

			<div class="col-md-2">
					<div class="form-group">
						<label for="inputPassword">SENHA</label>
						<input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="SENHA" required>
					</div>
				</div>

				
				<div class="col-md-2">
					<div class="form-group">
						<label for="inputTelephone">FONE</label>
						<input type="text" class="form-control" name="inputTelephone" id="inputTelephone" placeholder="FONE">
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label for="inputPerfil">PERFIL</label>
						<select class="form-control" id="inputPerfil" name="inputPerfil" required>
							<option selected disabled>Selecionar...</option>
							<option value="USUÁRIO">USUÁRIO</option>
							<option value="ADMINISTRADOR">ADMINISTRADOR</option>
						</select>
					</div>

				</div>

			</div>

			<div class="col-md-6">
				<button type="submit" class="btn btn-secondary btn-xs"><i class="fa fa-check" aria-hidden="true"></i> CRIAR</button>
				<a href="<?= base_url() ?>admusers" class="btn btn-secondary btn-xs"><i class="fa fa-times" aria-hidden="true"></i> CANCELAR</a>
			</div>
	</div>
	</form>
	</div>

</main>
</div>
</div>