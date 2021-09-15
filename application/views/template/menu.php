<?php
    if(!isset($active_class)){
        if(!isset($_GET["active_class"])){
            $active_class = "";
        }else{
            $active_class = $_GET["active_class"];
        }
    }
?>
<style>
    .active_menu{
        background-color: #2937f0;
        color: white !important;
        border-radius: 50rem;
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container px-5">
        <a class="navbar-brand fw-bold" href="home">Prekocy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                <li class="nav-item"><a class="nav-link me-lg-3 <?php if($active_class == "home") echo "active_menu"?>" href="<?php echo base_url()?>beranda">Beranda</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3 <?php if($active_class == "howTo") echo "active_menu"?>" href="<?php echo base_url()?>cara_penggunaan">Cara Penggunaan</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3 <?php if($active_class == "komentar") echo "active_menu"?>" href="<?php echo base_url()?>prediksi/kalimat">Prediksi Komentar</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3 <?php if($active_class == "file") echo "active_menu"?>" href="<?php echo base_url()?>prediksi/file">Prediksi File</a></li>
            </ul>
        </div>
    </div>
</nav>