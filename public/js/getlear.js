var url_lear = document.querySelector('input[name=url_lear]').value;
$("#lear").DataTable({
    language: {
        loadingRecords: '<span style="width:100%;" > <img src="../loading/loading.gif"></span>'
    },
    ajax: {
        url: url_lear,
        dataSrc: ""
    },
    columns: [
        {
            data: "name_posi",

        }
    ]
});
