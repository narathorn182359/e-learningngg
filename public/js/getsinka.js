var url_sinka = document.querySelector('input[name=url_sinka]').value;




$("#sinka").DataTable({
    language: {
        loadingRecords: '<span style="width:100%;" > <img src="../loading/loading.gif"></span>'
    },
    ajax: {
        url: url_sinka,
        dataSrc: ""
    },
    columns: [

        {
            data: "img_",
            render: function (data) {
                  return '<img src="/upload/'+data+'" alt="Smiley face" height="50" width="50">'
             }


        }, {
            data: "type_",

        }
        ,
        {
            data: "id",
            render: function (data) {
                return '<a href="/sinka/'+data+'/edit" class="btn btn-warning " >แก้ไข</a>   <a class="btn btn-danger   deleteiSinka" data-id="'+data+'" href="javascript:void(0)">ลบ</a>'
            }


        }
    ]
});











