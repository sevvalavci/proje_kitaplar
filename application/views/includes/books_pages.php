<?php $this->load->view("includes/proje_css.php"); ?>
<?php $this->load->view("includes/navbar.php"); ?>

<!DOCTYPE html>
<html lang="tr">

<head>

</head>

<body>
    <br><br><br><br> <br><br><br><br>
    <br><br><br><br>



    <div class="row featurette col-12">
        <div class="col-md-9 ti-align-center">
            <h2 class="featurette-heading">Kürt Mantolu Madonna <span class="text-muted">Sait Faik Abasıyanık</span>
            </h2>
            <p class="lead">“Göreceksiniz ya, ben dünyadan ziyade kafamın içinde yaşayan bir insanım... Hakiki hayatım
                benim için can sıkıcı bir rüyadan başka bir şey değildir...”

                - Sabahattin Ali -

                Yaşamak nefes almayı gerektirir, nefes nefese geçen bir aşk üzerine yazılmış bu romanda ise nefes almak,
                yaşamak için yeterli değildir. Bazen sizi görmeyen gözlere dalmak, yalnızca sizin duyacağınız sözlere
                kulak vermek ve aşkı hayallerinizde yaşamak, aşkların en gerçeğine bir adım daha yaklaşmaktır. Aşk,
                yaşanılan mı, yoksa yaşatılan mıdır?

                Almanca, Fransızca, Rusça, Hırvatça, Arapça, Arnavutça, İspanyolca gibi birçok farklı dile çevrilen ve
                2016 yılında Madonna in a Fur Coat adıyla Penguin Classics tarafından Büyük Britanya’da da basılan Kürk
                Mantolu Madonna, çeşitli ülkelerde birçok okurla buluşmaya devam ediyor.</p>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Satın Al
            </button>

            <!-- SATIN AL Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Fiyat</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            150 TL
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal</button>
                            <button type="button" class="btn btn-primary">Satın al</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                style="width: 600px; height: 600px;" src="<?php echo base_url("assets/"); ?>images/kürtmantolu.jpg"
                data-holder-rendered="true">
        </div>
    </div>
    <br><br><br><br> <br><br><br><br>
    <br><br><br><br>
</body>

</html>

<?php $this->load->view("includes/footer.php"); ?>

<?php $this->load->view("includes/proje_script.php"); ?>