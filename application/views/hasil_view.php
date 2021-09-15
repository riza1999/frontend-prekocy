<!-- Basic features section-->
<script>
    const site_url = "<?php echo site_url() ?>"
    var kalimat = "<?php if (isset($_GET["kalimat"])) echo($_GET["kalimat"]); ?>"
    var id_upload = "<?php if (isset($_GET["id_upload"])) echo($_GET["id_upload"]); ?>"
    var arr = ["Bullying","Non-Bullying"]

    $(function() {
        $("#textPrediksi").html(kalimat);
        if(kalimat || kalimat.length != 0 || kalimat != ""){
            $.ajax({
                url: 'https://prekocy-api.herokuapp.com/api/sentence?text='+kalimat,
                async: false,
                cache: false
            }).done(function (response) {
                var ctrBullying = 0;
                var ctrNonBullying = 0;
                if(response.prediction == 0) ctrBullying++;
                else ctrNonBullying++;

                // nanti buat looping disini untuk print berdasarkan file uploade by id, di backend tinggal akses db dan frontend tinggal kirim upload idnya saja
                var row = "<tr>"+
                            "<th scope='row'>1</th>"+
                            "<td>"+kalimat+"</td>"+
                            "<td>"+arr[response.prediction]+"</td>"+
                          "</tr>"
                $("#tableBody").append(row);
                
                // code for print
                $("#ctrBullying").html(ctrBullying);
                $("#ctrNonBullying").html(ctrNonBullying);

                $("#loading").hide();
                $("#scorePrediksi").show();
                $("#tabelPrediksi").show();
            })
        }else if(id_upload || kalimat.length != 0 || id_upload != 0){
            $.ajax({
                url: site_url+`index.php/Prediksi/getKomentars/`+id_upload,
                async: false,
                cache: false
            }).done(function (response) {
                var resp = JSON.parse(response);
                var data_komentar = [];

                resp.komentars.forEach((element,index) => {
                    data_komentar.push(element.komentar);
                });

                var sendReq = {
                    data: data_komentar 
                }

                $.ajax({
                url: 'https://prekocy-api.herokuapp.com/api/file',
                async: false,
                cache: false,
                method: 'POST',
                dataType: 'json',
                contentType: 'application/json',
                data: JSON.stringify(sendReq)
                }).done(function (resp) {
                    var ctrBullying = 0;
                    var ctrNonBullying = 0;

                    for (i=0;i<resp.prediction.length;i++){
                        if(resp.prediction[i] == 0) ctrBullying++;
                        else ctrNonBullying++;

                        var row = "<tr>"+
                                    "<th scope='row'>"+(i+1)+"</th>"+
                                    "<td>"+resp.text[i]+"</td>"+
                                    "<td>"+arr[resp.prediction[i]]+"</td>"+
                                  "</tr>"
                        $("#tableBody").append(row);
                    }

                    // code for print
                    $("#ctrBullying").html(ctrBullying);
                    $("#ctrNonBullying").html(ctrNonBullying);

                    $("#loading").hide();
                    $("#scorePrediksi").show();
                    $("#tabelPrediksi").show();
                })
            })
        }
    });
</script>
<body>
    <section class="bg-light content">
        <div class="container px-5 pt-5">
            <div class="row gx-5 justify-content-center pt-5" id="scorePrediksi" style="display:none">
                <div class="col-xl-6 pt-5">
                    <h1 class="text-center" id="ctrBullying">0</h1>
                    <h2 class="text-center">Bullying</h2>
                </div>
                <div class="col-xl-6 pt-5">
                    <h1 class="text-center" id="ctrNonBullying">0</h1>
                    <h2 class="text-center">Non-Bullying</h2>
                </div>
            </div>
            <div class="row gx-5 justify-content-center pt-5" id="tabelPrediksi" style="display:none">
                <div class="col-xl-10 pt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Komentar</th>
                            <th scope="col">Prediksi</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <!-- to be added by javascript -->
                    </tbody>
                </table>
                </div>
            </div>
            <div class="row gx-5 justify-content-center pt-5" id="loading">
                <div class="col-xl-2 pt-5">
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        <span class="sr-only">Loading...</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>