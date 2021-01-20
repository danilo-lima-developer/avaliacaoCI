<?php if($this->session->userdata('perfil') != 'ADMINISTRADOR') {
	redirect('mainpage');
}	
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg px-5">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?= $title ?></h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url() ?>admusers/new" class="btn btn-sm btn-secondary"><i class="fa fa-plus-square" aria-hidden="true"></i>
</i> NOVO USUÁRIO</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th id="thazul">#</th>
					<th id="thazul">NOME</th>
					<th id="thazul">E-MAIL</th>
					<th id="thazul">CPF</th>
                    <th id="thazul">FONE</th>
					<th id="thazul">PERFIL</th>
					<th id="thazul">AÇÃO</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user) : ?>
					<tr>
						<td><?= $user["id_usuario"] ?></td>
						<td><?= $user["nome"] ?></td>
						<td><?= $user["email"] ?></td>
						<td><?= $user["cpf"] ?></td>
                        <td><?= $user["fone"] ?></td>
						<td><?= $user["perfil"] ?></td>
                        						<td>
							<a href="<?= base_url() ?>admusers/edit/<?= $user["id_usuario"] ?>" class="btn btn-secondary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i>

</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</main>

  
