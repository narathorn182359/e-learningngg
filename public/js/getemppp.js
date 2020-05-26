var url_emppp = document.querySelector('input[name=url_emppp]').value;




$("#emppp").DataTable({
    language: {
        loadingRecords: '<span style="width:100%;" > <img src="../loading/loading.gif"></span>'
    },
    ajax: {
        url: url_emppp,
        dataSrc: ""
    },
    columns: [

         {
            data: "emp_id",

        }, {
            data: "emp_idcard",

        },{
            data: "name_title",
        },{
            data: "name",
        },{
            data: "last_name",
        },{
            data: "department",
        }
        ,{
            data: "position",
        }
        ,{
            data: "start_work",
        }
        ,{
            data: "company",
        }

        ,{
            data: "pic",
            render: function (data) {
                  return '<img src="/img/'+data+'" alt="Smiley face" height="50" width="50">'
             }


        },


        {
            data: "id",
            render: function (data) {
                return '<a href="/emppp/'+data+'/edit" class="btn btn-warning " >แก้ไข</a>   <a class="btn btn-danger   deleteiEmppp" data-id="'+data+'" href="javascript:void(0)">ลบ</a>'
            }


        }
    ]
});












