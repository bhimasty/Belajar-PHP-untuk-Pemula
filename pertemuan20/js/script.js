$(document).ready(function () {

  // hilangkan tombol cari
  $('#tombolCari').hide();

  // event ketika keyword ditulis
  $('#keyword').on('keyup', function () {
    $('.loader').show();

    // $.get
    $.get('ajax/buku.php?keyword=' + $('#keyword').val(), function (data) {
      $('#container').html(data);
      $('.loader').hide();
    });

    // ajax menggunakan load
    // $('#container').load('ajax/buku.php?keyword=' + $('#keyword').val());
  });

});
