<?php
    include ("header.php");
?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5 js-scrollbar1">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/logo1.png" alt="JokerLogo" width="50%">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="row">
                                     <div class="form-group col-sm-6">
                                        <label>Nome completo</label>
                                        <input class="au-input au-input--full" type="text" name="username" placeholder="Digite seu nome completo">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Nickname</label>
                                        <input class="au-input au-input--full" type="text" name="nickname" placeholder="Digite seu nickname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Email</label>
                                        <input class="au-input au-input--full" type="email" name="email" placeholder="Digite seu Email">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>16Personalidades</label>
                                        <input class="au-input au-input--full" type="email" name="email" placeholder="XXXX-X">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Projetos</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Estrutura de Dados I
                                              </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Matemática Discreta I
                                            </label>
                                        </div>
                                 </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Senha</label>
                                        <input class="au-input au-input--full" type="password" name="senha" placeholder="*********">
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label>Confirmação de senha</label>
                                        <input class="au-input au-input--full" type="password" name="confirmacaosenha" placeholder="*********">
                                    </div>
                                </div>

                                <a href="index0.php" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Cadastrar</a>
                            </form>
                            <div class="register-link">
                                <p>
                                    Já tem cadastro?
                                    <a href="login.php">Faça login aqui!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
    include ("footer.php");
?>