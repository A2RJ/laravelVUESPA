// $("#selectAktivitas").click(function(){
//     const aktivitas = $("#selectAktivitas").val();
//     $("#selectAkun").empty();
//     $("#selectAkun").append('<option value="">Pilih Akun</option>');
//     $.get( "/api/jurnals/akun/"+aktivitas, function( data ) {
//         var i;
//         for (i = 0; i < data.length; i++) {
//             $('#selectAkun').append($("<option value="+ data[i]['id'] +"></option>").text(data[i]['no_akun'] + " " + data[i]['akun']));
//         }
//     });
// });

// $("#selectAktivitas").click(function(){
//     const aktivitas = $("#selectAktivitas").val();
//     $("#selectWaktu").empty();
//     $("#selectWaktu").append('<option value="">Pilih Waktu</option>');
//     $.get( "/api/jurnals/waktu/"+aktivitas, function( data ) {
//         var i;
//         for (i = 0; i < data.length; i++) {
//             $('#selectWaktu').append($("<option value="+ data[i]['id'] +"></option>").text(data[i]['jangka_waktu']));
//         }
//     });
// });
// $("li").click(function(){
//     $("li").addClass("selected")
// })


var header = document.getElementById("sidebarnav");
var li = header.getElementsByClassName("sidebar-item");
for (var i = 0; i < li.length; i++) {
  li[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("selected");
  current[0].className = current[0].className.replace(" selected", "");
  this.className += " selected";
  });
}
