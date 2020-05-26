var url_newsinka = document.querySelector('input[name=url_newsinka]').value;




$("#newsinka").DataTable({
    language: {
        loadingRecords: '<span style="width:100%;" > <img src="../loading/loading.gif"></span>'
    },
    ajax: {
        url: url_newsinka,
        dataSrc: ""
    },
    columns: [

        {
            data: "img_",
            render: function (data) {
                  return '<img src="/upload/'+data+'" alt="Smiley face" height="50" width="50">'
             }


        }, {
            data: "name_",

        }, {
            data: "des_",

        },{
            data: "type_",
        }
        ,
        {
            data: "id",
            render: function (data) {
                return '<a href="/newsinka/'+data+'/edit" class="btn btn-warning " >แก้ไข</a>   <a class="btn btn-danger   deleteiNewsinka" data-id="'+data+'" href="javascript:void(0)">ลบ</a>'
            }


        }
    ]
});












