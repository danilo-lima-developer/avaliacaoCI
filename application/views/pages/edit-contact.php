

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $title ?></h1>
      </div>

			<div class="col-md-12">
				<form action="<?= base_url() ?>contacts/update/<?= $contact["id_contato"] ?>" method="post">
				
				<div class ="row">

					<div class="col-md-3">
						<div class="form-group">
							<label for="inputNome">NOME</label>
							<input type="text" class="form-control" name="inputNome" id="inputNome" value="<?= $contact["nomeContato"] ?>" required>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="inputEmail">E-MAIL</label>
							<input type="email" class="form-control" name="inputEmail" id="inputEmail" value="<?= $contact["emailContato"] ?>" required>
						</div>
					</div>

                    <div class="col-md-3">
						<div class="form-group">
							<label for="inputFone">Fone</label>
							<input type="text" class="form-control" name="inputFone" id="inputFone" placeholder="inputFone" value="<?= $contact["celularContato"] ?>">
						</div>
					</div>


				</div>

				<div class="row">

                <div class="col-md-3">
						<div class="form-group">
							<label for="inputEmpresa">EMPRESA CONTATO</label>
							<input type="text" class="form-control" name="inputEmpresa" id="inputEmpresa" value="<?= $contact["empresaContato"] ?>" required>
						</div>
					</div>

                    <div class="col-md-3">
						<div class="form-group">
							<label for="inputCargo">CARGO CONTATO</label>
							<input type="text" class="form-control" name="inputCargo" id="inputCargo" value="<?= $contact["cargoContato"] ?>" required>
						</div>
					</div>


				</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-secondary"><i class="fa fa-check" aria-hidden="true"></i> ATUALIZAR</button>
							<a href="<?= base_url() ?>contacts" class="btn btn-secondary"><i class="fa fa-undo" aria-hidden="true"></i>
 VOLTAR</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
