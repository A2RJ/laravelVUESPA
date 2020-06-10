$("#selectAktivitas").click(function(){
    const aktivitas = $("#selectAktivitas").val();
    $("#selectAkun").empty();
    $.get( "/getAkun/"+aktivitas, function( data ) {
        var i;
        for (i = 0; i < data.length; i++) {
            $('#selectAkun').append($("<option value="+ data[i]['id_akun'] +"></option>").text(data[i]['no_akun'] + " " + data[i]['akun']));
        }
        }, "json"
    )
});

$("#selectAktivitas").click(function(){
    const aktivitas = $("#selectAktivitas").val();
    $("#selectWaktu").empty();
    $.get( "/getWaktu/"+aktivitas, function( data ) {
        var i;
        for (i = 0; i < data.length; i++) {
            $('#selectWaktu').append($("<option value="+ data[i]['id'] +"></option>").text(data[i]['jangka_waktu']));
        }
        // if (Array.isArray(data) === "") 
            // $('#selectWaktu option').attr("disabled", true);
        }, "json"
    )
});