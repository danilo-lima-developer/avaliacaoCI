
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>

    <link rel="shortcut icon" href="<?=  BASE_URL()?>assets/imagens/favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="<?= BASE_URL() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Desenvolvido por GACE -->
    <!-- Hospedado por ATI -->


    <style>
      footer {
        width: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
        background-color: #e6f6ff;
        color: #245d87;
        font-size: 10pt;  
        
      }

      body{
        background-color: #FAFAFA;
      }

      .footerbrasao{
        width: 200px;

      }
      
    .login-form {
        width: 340px;
        margin: 50px auto;
    }
    .login-form form {
      margin-top: 100px;
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 1px 7px 5px rgba(29, 140, 231, 0.45);
        padding: 30px;        
    }


    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
      
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>

<nav class="navbar navbar-dark fixed-top bg-ligth flex-md-nowrap p-0 shadow" style="background-color: #2E2E2E;">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">CONTACTBOOK</a>
</nav>

  <body class="text-center">
    <div class="login-form">
    <form class="form-signin" method="post" action="<?= base_url() ?>login/store">

  <img class="mb-4" src="<?= base_url() ?>assets/imagens/contactbooklogo.png" alt="" width="200" height="200">


  <label for="inputLogin" class="sr-only">Login</label>
  <input type="email" name="inputLogin" id="inputLogin" class="form-control" placeholder="E-mail" required autofocus>



  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Senha" required>

	
  <button class="btn btn-lg btn-primary btn-block" type="submit">ENTRAR</button>
  
  <p>
		<a href="<?= base_url() ?>register">Não tem uma conta?</a>
	</p>
</form>

</div>

<footer>
<strong>Desenvolvido por DANILO LIMA</strong>
<img id="footerbrasao" src="<?= base_url() ?>assets/imagens/danilodev4.png" alt="Governo de Pernambuco" style="height: 42px;">

<footer>
</body>
</html>
