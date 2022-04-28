<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h2>Giris</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('login/girisdata'); ?>" method="POST" class="row">

                    <div class="col-12">
                        <input type="email" class="form-control mb-3" id="eposta" name="eposta" placeholder="E-Posta">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="sifre" name="sifre" placeholder="Şifre">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Giriş</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>