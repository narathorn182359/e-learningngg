$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
  });

  $('body').on('click','.showx',function(){

    $('#show').modal('show');

  });

})
