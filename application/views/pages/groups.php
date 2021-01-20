
<main role="main" class="col-md-9 ml-sm-auto col-lg px-5">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?= $title ?></h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url() ?>groups/new" class="btn btn-sm btn-secondary"><i class="fa fa-plus-square" aria-hidden="true"></i>
				</i> NOVO GRUPO</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th id="thazul">NOME</th>
					<th id="thazul">CATEGORIA</th>
					<th id="thazul"></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($groups as $contact) : ?>
					<tr>
						<td><?= $contact["nomeGrupo"] ?></td>
						<td><?= $contact["categoriaGrupo"] ?></td>

						<td>
							<a href="<?= BASE_URL()?>groups/edit/<?= $contact['id_grupo']?>" class="btn btn-secondary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i>
							<a href="javascript:goDelete(<?= $contact['id_grupo'] ?>)" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</main>

<script>
	function goDelete(id) {
		if (confirm("Deseja apagar esta ocorrência?")) {
			window.location.href = 'groups/destroy/' + id;
			redirect("groups");
		}
	}
</script>