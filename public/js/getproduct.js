var url_produc = document.querySelector('input[name=url_produc]').value;




$("#product").DataTable({
    language: {
        loadingRecords: '<span style="width:100%;" > <img src="../loading/loading.gif"></span>'
    },
    ajax: {
        url: url_produc,
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

        }
        ,
        {
            data: "code_",

        }
        ,
        {
            data: "id",
            render: function (data) {

                return '<a href="/grouplear/'+data+'/edit" class="btn btn-info btn-xs " >จัดการกลุ่มเรียน</a> <a href="/settest/'+data+'/edit" class="btn btn-success btn-xs " >จัดการข้อสอบ</a>   <a href="/produc/'+data+'/edit" class="btn btn-warning  btn-xs" >แก้ไข</a>   <a class="btn btn-danger  btn-xs  deleteProduct" data-id="'+data+'" href="javascript:void(0)">ลบ</a>'
            }


        }
    ]
});











