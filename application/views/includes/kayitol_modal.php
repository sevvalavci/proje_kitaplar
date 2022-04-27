<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Kayıt ol</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="<?php echo base_url("welcome/registerdata"); ?>" method="POST" class="row">

                        <div class="col-12">
                            <input type="text" class="form-control mb-3" name="kadi" placeholder="Kullanıcı adı">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" name="eposta" placeholder="E-posta">
                        </div>

                        <div class="col-12">
                            <input type="password" class="form-control mb-3" name="sifre" placeholder="Şifre">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Kayıt ol</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>