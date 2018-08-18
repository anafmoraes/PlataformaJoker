<?php
    include ("header.php");
?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/logo1.png" alt="JokerLogo" width="50%">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="index0.php" method="post">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Digite seu email">
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="*********">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <button type="button" class="link" data-toggle="modal" data-target="#modalSenha">Esqueceu sua senha?</button> 
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Entrar</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Ainda não tem registro?
                                    <a href="cadastro.php">Cadastre-se agora!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- The Modal -->
<div class="modal" id="modalSenha">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Recuperação de senha</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="senha-form">
            <form action="" method="post">
                <div class="form-group">
                    <label>Email</label>
                    <input class="au-input au-input--full" type="email" name="email" placeholder="Digite seu email">
                </div>
            </form>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" type="submit" class="au-btn au-btn--green m-b-20" data-dismiss="modal">Recuperar senha</button>
      </div>

    </div>
  </div>
</div>



<?php
    include ("footer.php");
?>