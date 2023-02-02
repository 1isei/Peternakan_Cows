function getAge(dateString) {
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}

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
          console.log(data.tgl_lahir);
        $('#umuran').val(data.umur);
        $('#bobot').val(data.bobot);
        $('#jk').html(data.jenis_kelamin);
        $('#tgl_lahiran').val(data.tgl_lahir);
        $('#edit-form').attr('action', '/cows/'+data.kode_sapi);
    })
  });

});


$('body').on('change', '#tgl_lahir', function(e) {
  const val = parseInt(getAge($(this).val()));
  const umur = document.getElementById('umur');
  umur.value = val;
  console.log(val);
  // $('#umur').html(val);


});