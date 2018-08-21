<?php include ("header.php"); ?>
<?php include ("menu.php"); ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="col-lg-8 offset-md-2">
                    <div class="card">
                                    <div class="card-header">
                                        <strong>Meu Perfil</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Nome completo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Suzan Gomes</p>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nickname</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="Nickname" class="form-control">
                                                    <small class="help-block form-text">Digite seu nickname</small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email-input" placeholder="Email" class="form-control">
                                                    <small class="help-block form-text">Digite seu email</small>
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Senha</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input" name="password-input" placeholder="Senha" class="form-control">
                                                    <small class="help-block form-text">DIgite sua senha</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Checkboxes</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="checkbox">
                                                            <label for="checkbox1" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Option 1
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="checkbox2" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Option 2
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label for="checkbox3" class="form-check-label ">
                                                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Option 3
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>
<?php
    include ("footer.php");
?>