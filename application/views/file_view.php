<!-- Basic features section-->
<body>
    <section class="bg-light content">
        <div class="container px-5 pt-5">
            <div class="row gx-5 justify-content-center pt-5">
                <div class="col-xl-8 pt-5">
                    <?php echo form_open_multipart('Prediksi/importExcel'); ?>
                    <div class="h2 fs-1 text-black mb-5 text-center">Masukkan komentar yang ingin diprediksi!</div>
                    <button class="btn btn-primary mx-auto d-block rounded-pill px-4" id="btnDownload" >Download</button>
                    <div class="input-group mb-4 px-5">
                        <input id="inputFile" type="file" class="form-control rounded-pill" name="upload_file">
                    </div>
                    <button type="submit" class="btn btn-primary mx-auto d-block rounded-pill px-4" id="btnUpload" >Upload</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    var BASE_URL = "<?php echo base_url()?>"
</script>