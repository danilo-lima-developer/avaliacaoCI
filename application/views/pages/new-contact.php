<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-2">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $title ?></h1>
    </div>

    <div class="col-md-12">
        <form action="<?= base_url() ?>contacts/submit" method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputNomeContato">NOME</label>
                        <input type="text" class="form-control" name="inputNomeContato" id="inputNomeContato" placeholder="NOME" maxlength="50" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputEmpresaContato">EMPRESA</label>
                        <input type="text" class="form-control" name="inputEmpresaContato" id="inputEmpresaContato" placeholder="EMPRESA" maxlength="40" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputCargoContato">CARGO</label>
                        <input type="text" class="form-control" name="inputCargoContato" id="inputCargoContato" placeholder="CARGO" maxlength="40" required>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="inputCelularContato">TELEFONE</label>
                        <input type="text" class="form-control" name="inputCelularContato" id="inputCelularContato" placeholder="CELULAR" maxlength="40" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputEmailContato">E-MAIL</label>
                        <input type="email" class="form-control" name="inputEmailContato" id="inputEmailContato" placeholder="E-MAIL" maxlength="40" required>
                    </div>
                </div>


            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-secondary btn-xs"><i class="fa fa-check" aria-hidden="true"></i> CRIAR</button>
                <a href="<?= base_url() ?>contacts" class="btn btn-secondary btn-xs"><i class="fa fa-times" aria-hidden="true"></i> CANCELAR</a>
            </div>
    </div>
    </form>
    </div>

</main>
</div>
</div>