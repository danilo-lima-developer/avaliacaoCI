<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand"href="<?= base_url() ?>mainpage">CONTACTBOOK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>contacts">Contatos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>groups">Grupos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>users/myuser">Meu Perfil</a>
      </li>

      <?php if ($this->session->userdata('perfil') == 'ADMINISTRADOR') { ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Painel Administrador
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url() ?>admusers">Usuários</a>
        </div>
      </li>
      <?php } ?>

      
        
    </ul>
    <span style="color: white;">OLÁ, <?php echo $this->session->userdata('usuario_nome'); ?></span>
    <a class="nav-link" href="<?= base_url() ?>login/logout"> <i class="fa fa-sign-out" aria-hidden="true" ></i>
        SAIR</a>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
