require('./bootstrap');

$("#selectAktivitas").click(function(){
    const aktivitas = $("#selectAktivitas").val();
    $("#selectAkun").empty();
    $.get( "/jurnals/akun/"+aktivitas, function( data ) {
        var i;
        for (i = 0; i < data.length; i++) {
            $('#selectAkun').append($("<option value="+ data[i]['id_akun'] +"></option>").text(data[i]['no_akun'] + " " + data[i]['akun']));
        }
        }
    )
});

$("#selectAktivitas").click(function(){
    const aktivitas = $("#selectAktivitas").val();
    $("#selectWaktu").empty();
    $.get( "/jurnals/waktu/"+aktivitas, function( data ) {
        var i;
        for (i = 0; i < data.length; i++) {
            $('#selectWaktu').append($("<option value="+ data[i]['id'] +"></option>").text(data[i]['jangka_waktu']));
        }
        // if (Array.isArray(data) === "") 
            // $('#selectWaktu option').attr("disabled", true);
        }
    )
});
