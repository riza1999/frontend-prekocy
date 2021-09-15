<!-- Basic features section-->
<body>
    <section class="bg-light content">
        <div class="container px-5 pt-5">
            <div class="row gx-5 justify-content-center pt-5">
                <div class="col-xl-8 pt-5">
                    <div class="h2 fs-1 text-black mb-5 text-center">Masukkan komentar yang ingin diprediksi!</div>
                    <div class="input-group mb-4 px-5">
                        <input id="kalimat" type="text" class="form-control rounded-pill" placeholder="Komentar" aria-label="Komentar" aria-describedby="basic-addon1">
                    </div>
                    <button type="submit" class="btn btn-primary mx-auto d-block rounded-pill px-4" id="btnPrediksi">Prediksi</button>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    var BASE_URL = "<?php echo base_url()?>"
    $(function() {
        $("#btnPrediksi").click(function(){
            var kalimat = $("#kalimat").val();
            window.location.replace(BASE_URL+"prediksi/hasil?kalimat="+kalimat+"&active_class=komentar");
        })
    });
</script>