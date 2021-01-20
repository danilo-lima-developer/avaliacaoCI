


<main role="main" class="col-md-9 ml-sm-auto col-lg px-5">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?= $title ?></h1>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th id="thazul">NOME</th>
					<th id="thazul">E-MAIL</th>
                    <th id="thazul">FONE</th>
                    <th id="thazul">perfil</th>
					<th id="thazul">EDITAR</th>
				</tr>
			</thead>
			<tbody>
				
					<tr>
						<td><?= $users["nome"] ?></td>
						<td><?= $users["email"] ?></td>
                        <td><?= $users["fone"] ?></td> 
                        <td><?= $users["perfil"] ?></td> 
                        						<td>
							<a href="<?= base_url() ?>users/edituserself" class="btn btn-secondary btn-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i>

</a>
						</td>
					</tr>
				
			</tbody>
		</table>
	</div>
</main>

  
