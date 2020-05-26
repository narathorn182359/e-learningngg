var url_job = document.querySelector('input[name=url_job]').value;
$("#job").DataTable({
    language: {
        loadingRecords: '<span style="width:100%;" > <img src="../loading/loading.gif"></span>'
    },
    ajax: {
        url: url_job,
        dataSrc: ""
    },
    columns: [
        {
            data: "name_",

        },
        {
            data: "type_",

        }
        ,
        {
            data: "des_",

        },
        {
            data: "img_",
            render: function (data) {
                  return '<img src="/learning/upload/'+data+'" alt="Smiley face" height="50" width="50">'
             }

        }
        ,
        {
            data: "id",
            render: function (data) {
                return '<a href="/job/'+data+'/edit" class="btn btn-warning " >แก้ไข</a> <a class="btn btn-danger   deleteJob" data-id="'+data+'" href="javascript:void(0)">ลบ</a>'
            }


        }
    ]
});
