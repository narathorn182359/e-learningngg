var url_subcategory = document.querySelector('input[name=url_subcategory]').value;
$("#subcategory").DataTable({
    language: {
        loadingRecords: '<span style="width:100%;" > <img src="../loading/loading.gif"></span>'
    },
    ajax: {
        url:url_subcategory,
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
            data: "catsub",

        }
        ,
        {
            data: "id",
            render: function (data) {
                return '<a href="/subcategory/'+data+'/edit" class="btn btn-warning " >แก้ไข</a> <a class="btn btn-danger   deleteSubcategory" data-id="'+data+'" href="javascript:void(0)">ลบ</a>'
            }


        }
    ]
});
