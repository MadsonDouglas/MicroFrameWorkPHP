
<div class="container">
    <div class="row my-5">
    <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <h3 class="card-header info-color white-text text-center py-4">
                    <strong>Cadastre-se</strong>
                </h3>
                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">
                    <!-- Form -->
                    <form class="text-center" style="color: #757575;">
                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormFirstName" class="form-control">
                                    <label for="materialRegisterFormFirstName">Nome</label>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Last name -->
                                <div class="md-form">
                                    <input type="email" id="materialRegisterFormLastName" class="form-control">
                                    <label for="materialRegisterFormLastName">Sobrenome</label>
                                </div>
                            </div>
                        </div>
                        <!-- E-mail -->
                        <div class="md-form mt-0">
                            <input type="email" id="materialRegisterFormEmail" class="form-control">
                            <label for="materialRegisterFormEmail">E-mail</label>
                        </div>
                        <!-- Password -->
                        <div class="md-form">
                            <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                            <label for="materialRegisterFormPassword">Senha</label>
                            <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-3">
                                
                            </small>
                        </div>
                        <div class="md-form">
                            <input type="password" id="confirmarSenha" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                            <label for="confirmarSenha">Confirmar senha</label>
                            <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted">As senhas devem conter no minimo 8 caracteres</small>
                        </div>
                        <!-- Phone number -->
                        <div class="md-form">
                            <input type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                            <label for="materialRegisterFormPhone">Phone number</label>
                            <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">

                            </small>
                        </div>
                        <!-- Newsletter -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Eu aceito os termos de uso</label>
                        </div>
                        <!-- Sign up button -->

                        <button type="button" class="btn btn-info my-4" data-toggle="modal" data-target="#alertCadastro">Cadastrar</button>

                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" id="alertCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header success-color">
                                <h5 class="modal-title text-white" id="exampleModalLabel">Mensagem</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2>Você foi cadastrado com sucesso!</h2>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
                    <!-- Form -->
                </div>
            </div>
    <div class="col-md-3"></div>
    </div>
</div>