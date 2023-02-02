$(document).ready(function () {
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  /* When click show user */
  $('body').on('click', '#btnEdit', function () {
    var kodeSapi = $(this).data('id');
    $.get('/cows/'+ kodeSapi +'/edit', function (data) {
          console.log(data);
        $('#jk').html(data.jenis_kelamin);
        $('#umur').val(data.umur);
        $('#bobot').val(data.bobot);
        $('#tgl_lahir').val(data.tgl_lahir);
        $('#edit-form').attr('action', '/cows/'+data.kode_sapi);
    })
  });

});