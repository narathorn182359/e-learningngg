var url_article = document.querySelector('input[name=url_article]').value;
$("#article").DataTable({
    language: {
        loadingRecords: '<span style="width:100%;" > <img src="/loading/loading.gif"></span>'
    },
    ajax: {
        url: url_article,
        dataSrc: ""
    },
    columns: [
        {
            data: "img_",
            render: function (data) {
                  return '<img src="/upload/'+data+'" alt="Smiley face" height="50" width="50">'
             }


        },
        {
            data: "name_",

        }
        ,
        {
            data: "des_",

        } ,
        {
            data: "type_",

        }

        ,
        {
            data: "id",
            render: function (data) {
                return '<a href="/article/'+data+'/edit" class="btn btn-warning " >แก้ไข</a> <a class="btn btn-danger   deleteArticle" data-id="'+data+'" href="javascript:void(0)">ลบ</a>'
            }


        }
    ]
});
