<!-- Mashead header-->
<header class="masthead">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3">Cara Penggunaan</h1>
                    <!-- <p class="lead fw-normal text-muted mb-5">Sebuah aplikasi web yang dapat melakukan prediksi komentar cyberbullying</p> -->
                </div>
            </div>
            <div class="col-lg-2 offset-lg-2">
                <div class="row mb-3">
                    <button id="btnKomentar" class="btn active_menu">Prediksi Komentar</button>
                </div>
                <div class="row">
                    <button id="btnFile" class="btn">Prediksi File</button>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Jika button yang diclick komentar-->
<div id="komentar">
    <section id="komentar-1">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-lg-12 mb-5">
                                <div class="text-center">
                                    <h1 class="text-gradient d-block font-alt">1</h1>
                                    <h3 class="font-alt">Prediksi Menggunakan Komentar</h3>
                                    <p class="text-muted mb-0">Kamu dapat memasukkan komentar yang ingin diprediksi kedalam form yang telah disediakan seperti gambar disamping. Kemudian kamu dapat menekan tombol Prediksi untuk mulai memprediksi komentar tersebut</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-0">
                    <div class="features-device-mockup">
                        <img class="img-fluid" src="<?php echo base_url()?>assets/img/komentar-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light" id="komentar-2">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-0 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-lg-12 mb-5">
                                <div class="text-center">
                                    <h1 class="text-gradient d-block font-alt">2</h1>
                                    <h3 class="font-alt">Hasil Prediksi</h3>
                                    <p class="text-muted mb-0">Halaman ini menampilkan informasi terkait hasil prediksi beserta komentar yang telah dimasukkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="features-device-mockup">
                        <img class="img-fluid" src="<?php echo base_url()?>assets/img/komentar-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Jika button yang diclick file-->
<div id="file" style="display:none;">
    <section id="file-1">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-lg-12 mb-5">
                                <div class="text-center">
                                    <h1 class="text-gradient d-block font-alt">1</h1>
                                    <h3 class="font-alt">Prediksi Menggunakan File</h3>
                                    <p class="text-muted mb-0">Kamu dapat memasukkan komentar-komentar yang ingin diprediksi kedalam format excel yang telah disediakan <a href="<?php echo base_url();?>beranda/download/template_excel.xlsx">disini</a>. Kemudian kamu pilih file tersebut lalu tekan tombol Upload</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-0">
                    <div class="features-device-mockup">
                        <img class="img-fluid" src="<?php echo base_url()?>assets/img/file-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light" id="file-2">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-0 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-lg-12 mb-5">
                                <div class="text-center">
                                    <h1 class="text-gradient d-block font-alt">2</h1>
                                    <h3 class="font-alt">Pratinjau</h3>
                                    <p class="text-muted mb-0">Halaman ini menampilkan komentar-komentar yang di-import dari excel yang telah di-upload. Terdapat 2 buah tombol yaitu tombol Kembali dan tombol Prediksi, tekan tombol Kembali jika komentar tidak sesuai, tekan tombol Prediksi jika ingin melanjutkan proses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="features-device-mockup">
                        <img class="img-fluid" src="<?php echo base_url()?>assets/img/file-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="file-3">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-lg-12 mb-5">
                                <div class="text-center">
                                    <h1 class="text-gradient d-block font-alt">3</h1>
                                    <h3 class="font-alt">Hasil Prediksi</h3>
                                    <p class="text-muted mb-0">Halaman ini menampilkan informasi terkait hasil prediksi beserta komentar yang telah dimasukkan. Halaman ini juga menampilkan jumlah komentar yang masuk kedalam kategori bullying dan non-bullying</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-0">
                    <div class="features-device-mockup">
                        <img class="img-fluid" src="<?php echo base_url()?>assets/img/file-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $("#btnKomentar").click(function() {
        $("#file").hide();
        $("#komentar").show();
        $("#btnFile").removeClass("active_menu");
        $("#btnKomentar").addClass("active_menu");
    });
    $("#btnFile").click(function() {
        $("#komentar").hide();
        $("#file").show();
        $("#btnFile").addClass("active_menu");
        $("#btnKomentar").removeClass("active_menu");
    });
</script>