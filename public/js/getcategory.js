var url_category = document.querySelector('input[name=url_category]').value;
$("#category").DataTable({
    language: {
        loadingRecords: '<span style="width:100%;" > <img src="../loading/loading.gif"></span>'
    },
    ajax: {
        url: url_category,
        dataSrc: ""
    },
    columns: [
        {
            data: "name_",

        }
        ,
        {
            data: "des_",

        }
        ,
        {
            data: "id",
            render: function (data) {
                return '<a href="/article/'+data+'/edit" class="btn btn-warning " >แก้ไข</a> <a class="btn btn-danger   deleteCategory" data-id="'+data+'" href="javascript:void(0)">ลบ</a>'
            }


        }
    ]
});
