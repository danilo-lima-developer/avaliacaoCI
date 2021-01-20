<script>
    dados_tipos = [];
    contador = 0;



    function del_pessoasdetidas() {
        console.log(dados_tipos);
        dados_tipos = '';
        contador = 0;
        $("#tabela_pessoasdetidas tbody").html('');

    }

    function add_pessoasdetidas() {
        var nome_contato = $('#nome_contato').val();



        if (nome_contato == null) {} else {
            var event_data = '';
            dados_tipos[contador] = nome_contato;
            $('#div_pessoasdetidas').show();
            event_data += '<tr class="table-active">';
            event_data += '<input type="hidden" name="nome_contato_enviar[]" value="' + nome_contato + '">';

            event_data += '<th>' + nome_contato + '</th>';

            event_data += '</tr>';
            $("#tabela_pessoasdetidas tbody").append(event_data);
            contador++;
        }


    }

</script>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-2">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $title ?></h1>
    </div>

    <div class="col-md-12">
        <form action="<?= base_url() ?>groups/submit" method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputNomegrupo">NOME</label>
                        <input type="text" class="form-control" name="inputNomegrupo" id="inputNomegrupo" placeholder="NOME" maxlength="50" required>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="inputCaregoriagrupo">CATEGORIA</label>
                        <select class="form-control" id="inputCaregoriagrupo" name="inputCaregoriagrupo" required>
                            <option selected disabled>Selecionar...</option>
                            <option value="AMIGOS">AMIGOS</option>
                            <option value="DIVERSÃO">DIVERSÃO</option>
                            <option value="FAMÍLIA">FAMÍLIA</option>

                        </select>
                    </div>
                </div>

            </div>

            <div class="form-row align-items-center">
                <div class="col-lg-12">
                    <hr />
                    <h3 style="color: black;">CONTATOS</h3>
                </div>  
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nome_contatos"><i class="fa fa-user-circle" aria-hidden="true"></i>
                            CONTATOS</label>
                        <select class="form-control form-control-sm" id="nome_contato" name="nome_contato">
                            <option selected="selected">NENHUM</option>
                            <option value="1">DANILO</option>
                            <option value="2">SAMIRES</option>
                        </select>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="col-auto">
                        <button onclick="add_pessoasdetidas()" type="button" class="btn btn-danger btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i>

                            ADICIONAR</button>
                        <button onclick="del_pessoasdetidas()" type="button" class="btn btn-danger btn-sm"><i class="fa fa-times-circle" aria-hidden="true"></i>

                            LIMPAR</button>

                    </div>
                </div>
            </div>
            <div style="display: none" id="div_pessoasdetidas" class="col-lg-12">
                <div class="col-md-12">
                    <table id="tabela_pessoasdetidas" class="table  table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>CONTATO</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-secondary btn-xs"><i class="fa fa-check" aria-hidden="true"></i> CRIAR</button>
                <a href="<?= base_url() ?>groups" class="btn btn-secondary btn-xs"><i class="fa fa-times" aria-hidden="true"></i> CANCELAR</a>
            </div>
    </div>
    </form>
    </div>

</main>
</div>
</div>