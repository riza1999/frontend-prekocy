<!-- Basic features section-->
<style>
    .btn-customGray{
        background-color: #6C757D;
        border-color: #6C757D;
        color:white;
    }

    .btn-customGray:hover{
        background-color: #5b6269;
        color:white;
    }
</style>
<script>
    const site_url = "<?php echo site_url() ?>"
    var BASE_URL = "<?php echo base_url()?>"
    var id_upload = "<?php if (isset($_GET["id_upload"])) echo($_GET["id_upload"]); ?>"

    $(function() {
        $.ajax({
            url: site_url+`index.php/Prediksi/getKomentars/`+id_upload,
            async: false,
            cache: false
        }).done(function (response) {
            var resp = JSON.parse(response);
            var data_komentar = [];

            resp.komentars.forEach((element,index) => {
                data_komentar.push(element.komentar);
                var row = "<tr>"+
                            "<th scope='row'>"+(index+1)+"</th>"+
                            "<td>"+element.komentar+"</td>"+
                          "</tr>"
                $("#tableBody").append(row);
            });
        })

        $("#btnPrediksi").click(function(){
            var kalimat = $("#kalimat").val();
            window.location.replace(BASE_URL+"prediksi/hasil?id_upload="+id_upload+"&active_class=file");
        })

        $("#btnKembali").click(function(){
            window.location.replace(BASE_URL+"prediksi/file");
        })
    });
</script>
<body>
    <section class="bg-light content">
        <div class="container px-5 pt-5">
            <div class="row gx-5 justify-content-center pt-5">
                <div class="col-xl-4 pt-5">
                    <button type="back" class="btn btn-customGray mx-auto d-block rounded-pill px-4" id="btnKembali">Kembali</button>
                </div>
                <div class="col-xl-4 pt-5">
                    <button type="submit" class="btn btn-primary mx-auto d-block rounded-pill px-4" id="btnPrediksi">Prediksi</button>
                </div>
            </div>
            <div class="row gx-5 justify-content-center pt-5">
                <div class="col-xl-10 pt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Komentar</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <!-- to be added by javascript -->
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
</body>