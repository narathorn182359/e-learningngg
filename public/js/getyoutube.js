var url_youtube = document.querySelector('input[name=url_youtube]').value;




$("#youtube").DataTable({
    language: {
        loadingRecords: '<span style="width:100%;" > <img src="../loading/loading.gif"></span>'
    },
    ajax: {
        url: url_youtube,
        dataSrc: ""
    },
    columns: [

       {
            data: "linkyoutube",
            ender: function (data) {
                return ' <iframe frameborder="0" src="'+data+'" width="640" height="360" class="note-video-clip"></iframe>'
            }

        }

        ,
        {
            data: "id",
            render: function (data) {
                return '<a href="/youtube/'+data+'/edit" class="btn btn-warning " >แก้ไข</a>   <a class="btn btn-danger   deleteYoutube" data-id="'+data+'" href="javascript:void(0)">ลบ</a>'
            }


        }
    ]
});
