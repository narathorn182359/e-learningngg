$('body').on('click', '.show_score_test', function () {
    var Id = $(this).data('id');

    $.getJSON("/get_score_test/"+Id, function (data) {
        $('#score_tes').trigger("reset");
        $('#target').empty();
        $('#score_test').modal('show');
        $('#name_vichar').html(data.name.name_)
console.log(data.name.name_)
        for(var i =0; i<= data.score.length; i++){

            if(data.score[i].score >= 8){
                $('#target').append('<div> คะแนนครั้งที่ '+ i +'  <b>'+  data.score[i].score  +'/'+ data.score[i].full_score +' <span class="text-success"> ผ่าน</span> </b></div>')
            }else{
                $('#target').append('<div> คะแนนครั้งที่ '+ i +'  <b>'+  data.score[i].score  +'/'+ data.score[i].full_score +' <span class="text-danger" >ไม่ผ่าน</span></b></div>')
            }

          }
    })
});
