// $(document).ready(function () {
  var header = document.getElementById("sidebarnav");
  var li = header.getElementsByClassName("sidebar-item");
  for (var i = 0; i < li.length; i++) {
    li[i].addEventListener("click", function () {
      var current = document.getElementsByClassName("selected");
      current[0].className = current[0].className.replace(" selected", " ");
      this.className += " selected";
    });
  }

  // $("#rupiah").keyup(function (event) {
  //   var rupiah = formatRupiah($("#rupiah").val());
  //   console.log(rupiah);
  // });
  $("input #rupiah").keyup(function () {
    var text = $(this).text();
    // $("input #rupiah").val(formatRupiah(text, 'Rp. '));
    console.log(text);
  });
var rupiah = document.getElementById('#jum_debet');
  rupiah.addEventListener('keyup', function (e) {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah.value = formatRupiah(this.value, 'Rp. ');
  });

  /* Fungsi formatRupiah */
  function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  }
// });
