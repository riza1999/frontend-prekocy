var arr = ["Bullying","Bukan Bullying"]

$(function() {
    $("#textPrediksi").html(kalimat);
    if(kalimat || kalimat.length != 0 || kalimat == ""){
        $.ajax({
            url: 'https://prekocy-api.herokuapp.com/api/sentence?text='+kalimat,
            async: false,
            cache: false
        }).done(function (response) {
            $("#hasilPrediksi").html(arr[response.prediction]);
        })
    }
})