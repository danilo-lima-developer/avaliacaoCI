<style>
  .box-zodiacoperation {


    padding: 40px;
    text-align: center;
    margin: 15px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    font-size: 18px;
    border-radius: .8rem;

    background: #F8F9FA;
    transition: background-color .2s;
  }

  .box-zodiacoperation:hover {
    background: #D3D3D3;
    color: black;
  }

  img {
    width: 60px;

  }
</style>

<main >
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  

  </div>

  <div class="container">
    <div class="row">


      <div class="col-sm box-zodiacoperation">
      <img src="assets/imagens/contact.png">
        <a href="<?= BASE_URL() ?>contacts">Meus Contatos</a>

      </div>
      <div class="col-sm box-zodiacoperation">
      <img src="assets/imagens/group.png">
        <a href="<?= BASE_URL() ?>groups">Meus Grupos</a>
      </div>

   


    </div>
  </div>

</main>