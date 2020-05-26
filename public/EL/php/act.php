<?php
session_start();

if($_SESSION["admin"] == null){

    echo " You not have permission to access this page";
    ?>
    <meta http-equiv="refresh" content="0;url=logina.php" />

    <?
}
else{



?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>NGG</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <link href="assets/css/paper-dashboard.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">





    <style>
        .modal-backdrop {
            position: unset !important;
        }

        h1,
        h2,
        h3,
        h4,
        a,
        p,
        td,
        tr,
        th {
            font-family: 'Prompt', sans-serif !important;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            <div class="sidebar-wrapper">
                <div class="logo">
                     <a href="" class="simple-text">
                        <img style="width: 60%;"  src="assets/img/NGG_Logo_Red.png" />
                    </a>
                </div>


                <ul class="nav">
                    <li>
                        <a href="produc.php">
                            <i class="ti-panel"></i>
                            <p style="font-size:16px">จัดการวิชา</p>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="user.php">
                            <i class="ti-user"></i>
                            <p style="font-size:16px">ผู้ดูแลระบบ</p>
                        </a>
                    </li> -->
                    <li >
                        <a href="category.php">
                            <i class="ti-view-list-alt"></i>
                            <p style="font-size:16px">จัดการหมวดหมู่</p>
                        </a>
                    </li>
                    <li class="">
                        <a href="subcategory.php">
                            <i class="ti-view-list-alt"></i>
                            <p style="font-size:16px">จัดการหลักสูตร</p>
                        </a>
                    </li>
                    <li>
                        <a href="article.php">
                            <i class="ti-text"></i>
                            <p style="font-size:16px">จัดการบทความ</p>
                        </a>
                    </li>
                    <li>
                        <a href="newsinka.php">
                            <i class="ti-text"></i>
                            <p style="font-size:16px">จัดการสินค้า</p>
                        </a>
                    </li>
                    <li >
                        <a href="job.php">
                            <i class="ti-text"></i>
                            <p style="font-size:16px">สมัครงาน</p>
                        </a>
                    </li>
                    <li >
                        <a href="sinka.php">
                            <i class="ti-text"></i>
                            <p style="font-size:16px">กิจกรรม</p>
                        </a>
                    </li>
                    <li >
                        <a href="producX.php">
                            <i class="ti-text"></i>
                            <p style="font-size:16px">คลาสเรียน</p>
                        </a>
                    </li>
                    <li >
                        <a href="emppp.php">
                            <i class="ti-text"></i>
                            <p style="font-size:16px">จัดการพนักงาน</p>
                        </a>
                    </li>
                    <li >
                        <a href="youtube.php">
                            <i class="ti-text"></i>
                            <p style="font-size:16px">youtube หน้าแรก</p>
                        </a>
                    </li>
                   
                    <li >
                        <a href="cpa.php">
                            <i class="ti-text"></i>
                            <p style="font-size:16px">ผู้ดูแลระบบ</p>
                        </a>
                    </li>
                    <li >
                        <a href="logout.php">
                            <i class="ti-text"></i>
                            <p style="font-size:16px">ออกจากระบบ</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">ผลการทำงาน</h4>
                    </div>
                    <div class="modal-body">
                        <div id="mdr" style="text-align:center"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">ตกลง</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">ดูภาพในอัลบัม</h4>
                    </div>
                    <div class="modal-body">
                        <div class="content">
                            <form>

                                <div class="row">
                              
                                </div>
                                <div class="row" id= "myCarouselbbc2" style="overflow-x: scroll; justify-content:space-around;">
                              

        


                                   
                                </div>
                                <div class="row">
                                   
                                </div>
                                <div class="text-center">
                                   
                                  </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">เพิ่มกิจกรรม</h4>
                    </div>
                    <div class="modal-body">
                        <div class="content">
                            <form>

                                <div class="row">
                                    
                                <input type="text" id="namealblum"   placeholder="ชื่อกิจกรรม" style="width:90%; margin-left:5%"/><br/>
                                </div>
                                <div class="row">
                                    
                                    <input type="text" id="desalblum"   placeholder="รายละเอียด" style="width:90%; margin-left:5%"/><br/>
                                    </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div style="text-align:center">
                                            <strong>ภาพกิจกรรม</strong>
                                            <br/>
                                            <input type="file" id="upload">
                                            <br/>
                                            <!-- <button class="ui primary button upload-result">Upload Image</button> -->
                                            <div id="upload-demo" style="    margin-left: -20px;padding:none"></div>
                                        </div>


                                    </div>
                                </div>
                                <div class="row" id= "myCarouselbbc" style="overflow-x: scroll; justify-content:space-around;">
                              

        


                                   
                                </div>
                                <div class="text-center">
                                    <span id="eee" style="color:red;display:none">กรุณากรอกข้อมูลให้ครบ และถูกต้อง
                                        <br>
                                    </span>
                                    <button type="button" onclick="save()" style="background-color:teal;" class="btn btn-info btn-fill btn-wd">อัพโหลดภาพ</button>
                                    <button type="button" onclick="save2()" style="background-color:teal;" class="btn btn-info btn-fill btn-wd">บันทึก</button>
                                
                                
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only"></span>
                            <span class="icon-bar bar1">
                                <button onclick="resd()" type="button" style="background-color:royalblue;" class="btn btn-info btn-fill btn-wd" data-toggle="modal" data-target="#myModal">เพิ่มกิจกรรม</button>
                            </span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">จัดการกิจกรรม/ข่าวสาร</a>
                    </div>

                </div>
            </nav>


            <div class="content">

                <div class="container-fluid">
                    <div id="iwat"></div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">

                    <div class="copyright pull-right">
                        &copy; NGG
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-notify.js"></script>
<script src="assets/js/paper-dashboard.js"></script>

<link href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" rel="stylesheet" />
<script src="http://cdn.datatables.net/1.10.1/js/jquery.dataTables.min.js"></script>

<link href="http://cdn.datatables.net/1.10.1/css/jquery.dataTables.css" rel="stylesheet" />
<script src="http://cdn.datatables.net/responsive/1.0.0/js/dataTables.responsive.js"></script>

<link href="http://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css" rel="stylesheet" />


<script>
var IDE 
    var arract = []
    var arractreal = []


    function resd(){
        console.log("reset")
        $("#myCarouselbbc").empty()
        $("#namealblum").val("")
        arract = []
    }
    function fetch() {

        $.ajax({
            type: 'GET',
            url: "./itrytoshowact.php",
            data: '',
            success: function (data) {
                //console.log(data)
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')


                    var content = '<table id="example" class="row-border" cellspacing="0" width="100%" style="background-color: #60b0f4;color: white;">'
                    content += '<thead>'
                    content += '<tr>'
                    content += '   <th>ลำดับ</th>'
                    content += '   <th>ภาพหน้าปก</th>'
                    content += '   <th>ชื่อกิจกรรม</th>'
                    content += '   <th>จัดการ</th>'


                    content += '  </tr>'
                    content += '    </thead>'


                    content += '    <tbody>'

                    for (var i = 0; i < allData.length - 1; i++) {
                        console.log("----", allData[i])
                        //$allHTML."".$row["id"].",".$row["username"].",".$row["name_"].",".$row["surname"].",".$row["password_"].",".$row["email"]
                        var _f = allData[i].split("|||")
                        var j = i + 1

                        arractreal.push(_f[3])

                        content += '<tr style="color:black">'
                        content += '  <td>' + j + '</td>'
                        content += '  <td><span id="img_' + _f[0] + '"><img src="upload/' + _f[2] + '" style="width:20%"/></span></td>'
                        content += '  <td><span>' + _f[1] + '</span></td>'
                        content += '  <td> <button type="button"  onclick="passclick(' + i +","+_f[0]+')"  style="background-color:teal;" class="btn btn-fill ">แก้ไขข้อมูล</button></td>'
                        content += '  <td> <button type="button"  onclick="lob('+_f[0]+')"  style="background-color:teal;" class="btn btn-fill ">ลบ</button></td>'
                       
                        content += '</tr>'

                    }
                    content += '</tbody>'
                    content += '</table>'
                    $('#iwat').append(content);
                    $('#example').DataTable({
                        responsive: true,
                        "oLanguage": {

                            "sSearch": "ค้นหา"

                        }
                    });
                }
                else {
                    console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });

    }
    function lob(id) {
        $.ajax({
                    url: "ajaxpro9lob.php",
                    type: "POST",
                    data: { "id": id },
                    success: function (data) {
                        
                       alert("ลบข้อมูลกิจกรรมเรียบร้อย")
                       window.location.reload();

                    }
                });

    }

    function passclick(res,id) {

        IDE = id

        

        $('#doornotdo').val("NO");

        var id = res
        console.log("passclick ", id)
        console.log("passclick ", IDE)

        var allol = arractreal[res].split("xolox")
        var htmlinject = ''
        for(var i = 0; i< allol.length ;i++){


            if(allol[i] && allol[i]!='no' && allol[i].length>0)
            htmlinject+='			<img src="./upload/'+allol[i]+'"  style="max-width: 20%;max-height: 20%;display: inline-block;">'
    
        }
                       


        $('#myCarouselbbc2').append(htmlinject)
                        



        $('#myModal3').modal();
        $('#myModal3').show();
        $('#pass_older_id').val(IDE);
 

    }
    function pass() {

        var id_e = $('#pass_older_id').val();


    
       


        if (1<1) {
            //console.log("ข้อมูลไรหัสไม่ถูกต้อง")
            $('#yyy').css("display", "");
        }
        else {
            $('#yyy').css("display", "none");
           


            var doooo = $('#doornotdo').val();
          


            $uploadCrop_.croppie('result', {
                type: 'canvas',
                size: 'original'
            }).then(function (resp) {
                console.log("resp ",resp,id_e)

            });


        }


    }


    function edit(id) {
        //console.log("edit ", id)
        var id_e = id;
        var dataString = 'name=' + $('#name_f_' + id_e).val()
            + '&surname=' + $('#surname_f_' + id_e).val()
            + '&user=' + $('#user_f_' + id_e).val()
            + '&pass=' + $('#pass_f_' + id_e).val()
            + '&email=' + $('#email_f_' + id_e).val()
            + '&id=' + id_e
        var a = $('#name_f_' + id_e).val()
        var b = $('#surname_f_' + id_e).val()
        var c = $('#user_f_' + id_e).val()
        var d = $('#pass_f_' + id_e).val()
        var e = $('#email_f_' + id_e).val()

        if (a.length < 1 || b.length < 1 || c.length < 1 || d.length < 1 || e.length < 1) {
            //console.log("กรอกไม่ครบ")
            $('#xxx').css("display", "");
        }
        else {
            $('#xxx').css("display", "none");
            //console.log(dataString)

            $.ajax({
                type: 'POST',
                url: "./itrytoup.php",
                data: dataString,
                success: function (data) {
                    //console.log("Goooooo==>", data)
                    if (data.indexOf('successfully') > 0) {
                        $('#iwat').empty();
                        $('#mdr').empty();

                        //reload();
                        $('#myModal2').modal();
                        $('#myModal2').show();
                        $('#mdr').append(

                            "<span style='color:green'> อัพเดตสำเร็จ </span>"
                        )

                        fetch();


                    }

                    else {

                        $('#myModal2').modal();
                        $('#myModal2').show();
                        $('#mdr').empty();
                        $('#mdr').append(

                            "<span style='color:red'> ไม่สามารถอัพเดตข้อมูลได้ รหัสผ่านไม่ถูกต้อง</span>"
                        )
                    }

                },
                failure: function (errMsg) {
                    //console.log("fail ", errMsg)

                    $('#myModal2').modal();
                    $('#myModal2').show();
                    $('#mdr').empty();
                    $('#mdr').append(

                        "<span style='color:red'> ไม่สามารถเพิ่มข้อมูลได้กรุณาติดต่อผู้พัฒนา </span>"
                    )
                }
            });

        }


    }


    function save2() {

var nnn = $('#namealblum').val()
var dess = $('#desalblum').val()
if(nnn && nnn.length>0){

if (1 < 1) {
    //console.log("กรอกไม่ครบ")
    $('#eee').css("display", "");
}
else {
    $('#eee').css("display", "none");
    //console.log(dataString)
   

        var p1 = arract[0] ? arract[0] : "no" 
        var p2 = arract[1] ? arract[1] : "no" 
        var p3 = arract[2] ? arract[2] : "no" 
        var p4 = arract[3] ? arract[3] : "no" 
        var p5 = arract[4] ? arract[4] : "no" 
        var p6 = arract[5] ? arract[5] : "no" 
        var p7 = arract[6] ? arract[6] : "no" 
        var p8 = arract[7] ? arract[7] : "no" 
        var p9 = arract[8] ? arract[8] : "no" 
        var p10 = arract[9]  ? arract[9] : "no" 
        var p11 = arract[10] ? arract[10] : "no" 
        var p12 = arract[11] ? arract[11] : "no" 

    
    
        var dataString = 'name=' + $('#namealblum').val()
            + '&p1=' + p1
            + '&p2=' + p2
            + '&p3=' + p3
            + '&p4=' + p4
            + '&p5=' + p5
            + '&p6=' + p6
            + '&p7=' + p7
            + '&p8=' + p8
            + '&p9=' + p9
            + '&p10=' + p10
            + '&p11=' + p11
            + '&p12=' + p12
            + '&pok=' + p1
            + '&des=' + dess


           
     

    $.ajax({
        type: 'POST',
        url: "./itrytocreatedact.php",
        data: dataString,
        success: function (data) {
            console.log(data)
            if (data.indexOf('successfully') > 0) {
                $('#iwat').empty();
                $('#mdr').empty();
                $('#myModal').hide();
                //reload();
                $('#myModal2').modal();
                $('#myModal2').show();
                $('#mdr').append(

                    "<span style='color:green'> เพิ่มข้อมูลกิจกรรมสำเร็จ </span>"
                )

                fetch();


            }
            else {
                $('#myModal').hide();
                $('#myModal2').modal();
                $('#myModal2').show();
                $('#mdr').empty();
                $('#mdr').append(

                    "<span style='color:red'> ไม่สามารถเพิ่มข้อมูลได้กรุณาติดต่อผู้พัฒนา </span>"
                )
            }

        },
        failure: function (errMsg) {
            console.log("fail ", errMsg)
            $('#myModal').hide();
            $('#myModal2').modal();
            $('#myModal2').show();
            $('#mdr').empty();
            $('#mdr').append(

                "<span style='color:red'> ไม่สามารถเพิ่มข้อมูลได้กรุณาติดต่อผู้พัฒนา </span>"
            )
        }
    });


}
}
else{
alert("กรุณาป้อนชื่อกิจกรรมก่อนทำการบันทึก")
}

}

    function save() {
       
        var nnn = $('#namealblum').val()
       if(nnn && nnn.length>0){

        if (1 < 1) {
            //console.log("กรอกไม่ครบ")
            $('#eee').css("display", "");
        }
        else {
            $('#eee').css("display", "none");
            //console.log(dataString)
           

            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'original'
            }).then(function (resp) {

                //console.log(resp)


            
            
          

           
                $.ajax({
                    url: "ajaxpro9.php",
                    type: "POST",
                    data: { "image": resp },
                    success: function (data) {

                        if(arract.length<12){
                        arract.push(data)
                        var htmlinject = ''
                    

htmlinject+='			<img src="./upload/'+data+'"  style="max-width: 20%;max-height: 20%;display: inline-block;">'



$('#myCarouselbbc').append(htmlinject)
                        }

                        else{
                            alert("สามารถอัพโหลดได้สูงสุด 12 ภาพต่อ 1 กิจกรรมเท่านั้น")
                        }
                       
                    }
                });
            });

            // $.ajax({
            //     type: 'POST',
            //     url: "./itrytocreatedtype.php",
            //     data: dataString,
            //     success: function (data) {
            //         //console.log(data)
            //         if (data.indexOf('successfully') > 0) {
            //             $('#iwat').empty();
            //             $('#mdr').empty();
            //             $('#myModal').hide();
            //             //reload();
            //             $('#myModal2').modal();
            //             $('#myModal2').show();
            //             $('#mdr').append(

            //                 "<span style='color:green'> เพิ่มข้อมูลกิจกรรมสำเร็จ </span>"
            //             )

            //             fetch();


            //         }
            //         else {
            //             $('#myModal').hide();
            //             $('#myModal2').modal();
            //             $('#myModal2').show();
            //             $('#mdr').empty();
            //             $('#mdr').append(

            //                 "<span style='color:red'> ไม่สามารถเพิ่มข้อมูลได้กรุณาติดต่อผู้พัฒนา </span>"
            //             )
            //         }

            //     },
            //     failure: function (errMsg) {
            //         //console.log("fail ", errMsg)
            //         $('#myModal').hide();
            //         $('#myModal2').modal();
            //         $('#myModal2').show();
            //         $('#mdr').empty();
            //         $('#mdr').append(

            //             "<span style='color:red'> ไม่สามารถเพิ่มข้อมูลได้กรุณาติดต่อผู้พัฒนา </span>"
            //         )
            //     }
            // });

        }
    }
    else{
        alert("กรุณาป้อนชื่อกิจกรรมก่อนทำการอัพโหลด")
    }

    }
    $(document).ready(function () {
         arract = []
         arractreal = []

        fetch();
        $('#example').DataTable({
            responsive: true
        });






    });
</script>
<script src="croppie.js"></script>
<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
<script type="text/javascript">
    $uploadCrop = $('#upload-demo').croppie({
        enableExif: true,
        viewport: {
            width: 500,
            height: 300,
            type: 'rectangle'
        },
        boundary: {
            width: 500,
            height: 400
        },

    });


    $('#upload').on('change', function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $uploadCrop.croppie('bind', {
                url: e.target.result
            }).then(function () {
                console.log('jQuery bind complete');
            });

        }
        reader.readAsDataURL(this.files[0]);
    });

    $uploadCrop_ = $('#upload-demo_').croppie({
        enableExif: true,
        viewport: {
            width: 500,
            height: 300,
            type: 'rectangle'
        },
        boundary: {
            width: 500,
            height: 400
        },
        

    });


    $('#upload_').on('change', function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $uploadCrop_.croppie('bind', {
                url: e.target.result
            }).then(function () {
                console.log('jQuery bind complete');

                $('#doornotdo').val("DO");
            });

        }
        reader.readAsDataURL(this.files[0]);
    });



    $('.upload-result').on('click', function (ev) {
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'original',
            
        }).then(function (resp) {


            $.ajax({
                url: "ajaxpro6.php",
                type: "POST",
                data: { "image": resp },
                success: function (data) {
                    // html = '<img src="' + resp + '" />';
                    // $("#upload-demo-i").html(html);
                    console.log(data)
                }
            });
        });
    });


</script>


</html>

<?  } ?>