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
                        <img style="width:80%" src="assets/img/NGG_Logo_Red.png" />
                    </a>
                </div>


                <ul class="nav">
                    <li >
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
                    <li>
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
                            <p style="font-size:16px">แบนเนอร์</p>
                        </a>
                    </li>
                    <li >
                        <a href="producX.php">
                            <i class="ti-text"></i>
                            <p style="font-size:16px">คลาสเรียน</p>
                        </a>
                    </li>

                    <li class="active">
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


        <div class="modal fade" id="myModal3344" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">จัดการกลุ่มผู้เรียน</h4>
                    </div>
                    <div class="modal-body">
                        <div class="content" >
<div id="depdep" style="width:100%">
                      
    </div>
                                    <div class="text-center">
                                    <button type="button" id="gujasave" style="background-color:teal;" class="btn btn-info btn-fill btn-wd">ปรับปรุงข้อมูล</button>
                                </div>
                                </div>
                        </div>
                    </div>

                </div>
            </div>

        <div class="modal fade" id="myModal33" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">สร้างแบบทดสอบ</h4>
                    </div>
                    <div class="modal-body">
                        <div class="content">

                        <form >

                                   
                                   
                                    <input type="text" name="q1"   placeholder="คำถามข้อที่ 1"/><br/>
                                    <input type="text" name="aq1"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" name="bq1"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" name="cq1" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" name="dq1"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" name="ansq1"  placeholder="เฉลย"/>
                                    <br/><br/>

                                    <input type="text" name="q2"   placeholder="คำถามข้อที่ 2"/><br/>
                                    <input type="text" name="aq2"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" name="bq2"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" name="cq2" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" name="dq2"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" name="ansq2"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" name="q3"   placeholder="คำถามข้อที่ 3"/><br/>
                                    <input type="text" name="aq3"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" name="bq3"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" name="cq3" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" name="dq3"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" name="ansq3"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" name="q4"   placeholder="คำถามข้อที่ 4"/><br/>
                                    <input type="text" name="aq4"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" name="bq4"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" name="cq4" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" name="dq4"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" name="ansq4"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" name="q5"   placeholder="คำถามข้อที่ 5"/><br/>
                                    <input type="text" name="aq5"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" name="bq5"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" name="cq5" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" name="dq5"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" name="ansq5"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" name="q6"   placeholder="คำถามข้อที่ 6"/><br/>
                                    <input type="text" name="aq6"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" name="bq6"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" name="cq6" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" name="dq6"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" name="ansq6"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" name="q7"   placeholder="คำถามข้อที่ 7"/><br/>
                                    <input type="text" name="aq7"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" name="bq7"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" name="cq7" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" name="dq7"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" name="ansq7"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" name="q8"   placeholder="คำถามข้อที่ 8"/><br/>
                                    <input type="text" name="aq8"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" name="bq8"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" name="cq8" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" name="dq8"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" name="ansq8"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" name="q9"   placeholder="คำถามข้อที่ 9"/><br/>
                                    <input type="text" name="aq9"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" name="bq9"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" name="cq9" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" name="dq9"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" name="ansq9"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" name="q10"   placeholder="คำถามข้อที่ 10"/><br/>
                                    <input type="text" name="aq10"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" name="bq10"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" name="cq10" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" name="dq10"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" name="ansq10"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    </form>
                                    <div class="text-center">
                                    <button type="button" onclick="savepdf()" style="background-color:teal;" class="btn btn-info btn-fill btn-wd">อัพโหลด</button>
                                </div>
                                <!-- <form action="upload.php" enctype="multipart/form-data" method="POST">

                                    <input type="hidden" name="MAX_FILE_SIZE" value="35000000" />
                                   
                                  
                                   
                                    <input type="file" name="file_upload" />
                                    <input type="hidden" name="keyoffile" id="keyoffile"/>
                                   
                                    <input type="submit" name="submit" value="Upload" />
                                   
                                    </form> -->
                            <!-- <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>กรุณาเลือกไฟล์</label>
                                            <input id="pass_older" type="text" class="form-control border-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" onclick="savepdf()" style="background-color:teal;" class="btn btn-info btn-fill btn-wd">อัพโหลด</button>
                                </div>
                                <div class="clearfix"></div>
                            </form> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <div class="modal fade" id="myModal3" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">แก้ไขข้อมูลจัดการพนักงาน</h4>
                        </div>
                        <div class="modal-body">
                            <div class="content">
                            <form>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>รหัสพนักงาน</label>
            <input id="idemp_old" type="text" class="form-control border-input" placeholder="1234">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>เลขบัตรปชช</label>
            <input id="citiemp_old" type="text" class="form-control border-input" placeholder="1212312121">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>คำนำหน้า</label>
            <input id="titleemp_old" type="text" class="form-control border-input" placeholder="นาย">
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>ชื่อ</label>
            <input id="nameemp_old" type="text" class="form-control border-input" placeholder="สมชาย">
        </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
            <label>นามสกุล</label>
            <input id="suremp_old" type="text" class="form-control border-input" placeholder="เข็มกลัด">
        </div>
    </div>
    <div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label> ตำแหน่ง</label>
            <input id="depemp_old" type="text" class="form-control border-input" placeholder="การเงิน">

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label> แผนก</label>
            <input id="depemp_old2" type="text" class="form-control border-input" placeholder="การเงิน">

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>วันเริ่มงาน</label>
            <input id="startemp_old" type="text" class="form-control border-input" placeholder="1/12/2018">

        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>วันเกิด</label>
            <input id="compemp_old" type="text" class="form-control border-input" placeholder="AAA">

        </div>
    </div>
</div>
</div>
<div class="row">
                                        <div class="col-md-12">
                                            <div style="text-align:center">
                                                <strong>เปลี่ยนภาพ</strong>
                                                <br/>
                                                <input id="pap2" type="text" class="form-control border-input" placeholder="url imge">

                                            </div>


                                        </div>
                                    </div>
<div class="row">
    <div class="col-md-12">
        <div style="text-align:center">
        </div>


    </div>
</div>
<div class="row">
    <div class="col-md-12">
       
    </div>
</div>

<div class="text-center">
    <span id="eee" style="color:red;display:none">กรุณากรอกข้อมูลให้ครบ และถูกต้อง
        <br>
    </span>
    <button type="button" onclick="pass()" style="background-color:teal;" class="btn btn-info btn-fill btn-wd">แก้ไขข้อมูลพนักงาน</button>
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
                            <h4 class="modal-title">เพิ่มพนักงาน</h4>
                        </div>
                        <div class="modal-body">
                            <div class="content">
                                <form>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>รหัสพนักงาน</label>
                                                <input id="idemp" type="text" class="form-control border-input" placeholder="1234">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>เลขบัตรปชช</label>
                                                <input id="citiemp" type="text" class="form-control border-input" placeholder="1212312121">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>คำนำหน้า</label>
                                                <input id="titleemp" type="text" class="form-control border-input" placeholder="นาย">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>ชื่อ</label>
                                                <input id="nameemp" type="text" class="form-control border-input" placeholder="สมชาย">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                                <label>นามสกุล</label>
                                                <input id="suremp" type="text" class="form-control border-input" placeholder="เข็มกลัด">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> ตำแหน่ง</label>
                                                <input id="depemp" type="text" class="form-control border-input" placeholder="การเงิน">

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> แผนก</label>
                                                <input id="depemp2" type="text" class="form-control border-input" placeholder="การเงิน">

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>วันเริ่มงาน</label>
                                                <input id="startemp" type="text" class="form-control border-input" placeholder="1/12/2018">

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>วันเกิด</label>
                                                <input id="compemp" type="text" class="form-control border-input" placeholder="AAA">

                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="text-align:center">
                                                <strong>ภาพ พนง</strong>
                                                <br/><input id="pap" type="text" class="form-control border-input" placeholder="url of image">

                                            </div>


                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="text-align:center">
                                            </div>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                           
                                        </div>
                                    </div>
                                   
                                    <div class="text-center">
                                        <span id="eee" style="color:red;display:none">กรุณากรอกข้อมูลให้ครบ และถูกต้อง
                                            <br>
                                        </span>
                                        <button type="button" onclick="save()" style="background-color:teal;" class="btn btn-info btn-fill btn-wd">เพิ่มพนักงาน</button>
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
                                    <button onclick="fetchtype()" type="button" style="background-color:royalblue;" class="btn btn-info btn-fill btn-wd" data-toggle="modal"
                                        data-target="#myModal">เพิ่มพนักงาน</button>
                                </span>
                                <span class="icon-bar bar2"></span>
                                <span class="icon-bar bar3"></span>
                            </button>
                            <a class="navbar-brand" href="#">จัดการพนักงาน</a>
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
<script src="./assets/js/jquery-1.10.2.js" type="text/javascript"></script>
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
    function savepdf(){
        //console.log("Key == ",IDE)


        


    }


    function fetchDep() {
        //$('#papeds').empty();
        $.ajax({
            type: 'GET',
            url: "./itrytoshowdep.php",
            data: '',
            success: function (data) {
                //console.log("kokokokoko", data)
                if (data.indexOf('alladmin_') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('|||')


                    var content = '<form>'

                

                    for (var i = 0; i < allData.length - 1; i++) {
                      //  //console.log("----", allData[i])
                        //$allHTML."".$row["id"].",".$row["username"].",".$row["name_"].",".$row["surname"].",".$row["password_"].",".$row["email"]
                        var _f = allData[i]
                        var j = i + 1



                        content += '  <label><input type="checkbox" value="'+_f+'" name="depa"> '+_f+'</label><br/>'

                    }
                    content += '<br>'
                  //  content += '  <button type="button">Get Values</button>'
                    content += '  </form>'
                    
                    $('#depdep').append(content);
                    $("#gujasave").click(function(){
            var favorite = [];
            var alla = ""
            $.each($("input[name='depa']:checked"), function(){            
                favorite.push($(this).val());
                alla = alla + ""+$(this).val()+","
            });
            var dataStringmm = 'id=' + IDE
            + '&alla=' + alla
           

            $.ajax({
                type: 'POST',
                url: "./itrytoupdep.php",
                data: dataStringmm,
                success: function (data) {
                    //console.log(data)
                    if (data.indexOf('successfully') > 0) {
                        $('#iwat').empty();
                        $('#mdr').empty();

                        //reload();
                        $('#myModal3344').hide();
                        $('#myModal2').modal();
                        $('#myModal2').show();
                        $('#mdr').append(

                            "<span style='color:green'> อัพเดตสำเร็จ </span>"
                        )

                        fetch();


                    }

                    else {

                        $('#yyy').css("display", "");
                    }

                },
                failure: function (errMsg) {
                    ////console.log("fail ", errMsg)

                    $('#yyy').css("display", "");
                }
            });


            //alert("My favourite sports are: " + alla);
        });

                }
                else {
                    //console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });

    }

    function fetchtype() {
        $('#papeds').empty();
        $.ajax({
            type: 'GET',
            url: "./itrytoshowtype.php",
            data: '',
            success: function (data) {
                //console.log("kokokokoko", data)
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')


                    var content = '<div class="form-group">'

                    content += '<select class="form-control" id="sel1">'



                    for (var i = 0; i < allData.length - 1; i++) {
                      //  //console.log("----", allData[i])
                        //$allHTML."".$row["id"].",".$row["username"].",".$row["name_"].",".$row["surname"].",".$row["password_"].",".$row["email"]
                        var _f = allData[i].split("|||")
                        var j = i + 1



                        content += '<option>' + _f[1] + '</option>'

                    }
                    content += '  </select>'
                    content += '   </div>'
                    $('#papeds').append(content);

                }
                else {
                    //console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });

    }
    function fetch() {

        $.ajax({
            type: 'GET',
            url: "./itrytoshowemp.php",
            data: '',
            success: function (data) {
                //console.log(data)
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')
// $ses_id =  $row["id"];   
// $emp_id = $row["emp_id"];   
// $emp_idcard =  $row["emp_idcard"];   
// $name_title =  $row["name_title"];   
// $name =  $row["name"];   
// $last_name =  $row["last_name"];   
// $department =  $row["department"];   
// $position =  $row["company"];   
// $start_work =  $row["start_work"];   


                    var content = '<table id="example" class="row-border" cellspacing="0" width="100%" style="background-color: #60b0f4;color: white;">'
                    content += '<thead>'
                    content += '<tr>'
                    content += '   <th>ลำดับ</th>'
                    content += '   <th>รหัส พนง</th>'
                    content += '   <th>รหัส ปชช</th>'
                    content += '   <th>คำนำหน้า</th>'
                    content += '   <th>ชื่อ</th>'
                    content += '   <th>สกุล</th>'
                    content += '   <th>ตำแหน่ง</th>'
                    content += '   <th>แผนก</th>'
                    content += '   <th>วันเกิด</th>'
                    content += '   <th>เริ่มงาน</th>'
                    content += '   <th>รูป</th>'
                    content += '   <th>จัดการ</th>'


                    content += '  </tr>'
                    content += '    </thead>'


                    content += '    <tbody>'

                    // '<input type="text"  id="youtube_' + _f[0] + '" value= "' + _f[6] + '"/>' +
                    //      '<input type="text"  id="gdrive_' + _f[0] + '" value= "' + _f[7] + '" />' +

                    for (var i = 0; i < allData.length - 1; i++) {
                        //console.log("----", allData[i])
                        //$allHTML."".$row["id"].",".$row["username"].",".$row["name_"].",".$row["surname"].",".$row["password_"].",".$row["email"]
                        console.log("----",allData[i])
                        var _f = allData[i].split("^")
                        var j = i + 1

                        //console.log("----",_f[9])

                        content += '<tr style="color:black">'
                        content += '  <td>' + j + '</td>'
    
                        content += '  <td><span id="empid_' + _f[0] + '">' + _f[1] + '</span></td>'
                        content += '  <td><span id="empciti_' + _f[0] + '">' + _f[2] + '</span></td>'
                        content += '  <td><span id="emptitle_' + _f[0] + '">' + _f[3] + '</span></td>'
                        content += '  <td><span id="empname_' + _f[0] + '">' + _f[4] + '</span></td>'
                        content += '  <td><span id="emplast_' + _f[0] + '">' + _f[5] + '</span></td>'
                        content += '  <td><span id="empdep_' + _f[0] + '">' + _f[6] + '</span></td>'
                        content += '  <td><span id="empdep2_' + _f[0] + '">' + _f[10] + '</span></td>'
                        content += '  <td><span id="empcomp_' + _f[0] + '">' + _f[7] + '</span></td>'
                        content += '  <td><span id="empstart_' + _f[0] + '">' + _f[8] + '</span></td>'

                        content += '  <td><img style= "width:20%" id="emppic__' + _f[0] + '" src="'+_f[9]+'"></img><span  style="display:none" id="emppic_' + _f[0] + '">' + _f[9] + '</span></td>'
                        
                        content += '  <td> <button type="button"  onclick="passclick(' + _f[0] + ')"  style="background-color:teal;" class="btn btn-fill ">แก้ไขข้อมูล</button></td>'
                        content += '</tr>'

                    }
                    content += '</tbody>'
                    content += '</table>'
                    
                        
                    $('#iwat').append(content);
                    $('#example').DataTable({
                        responsive: true,
                        "oLanguage": {

                            "sSearch": "ค้นหาจัดการพนักงาน"

                        }
                    });
                }
                else {
                    //console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });

    }
    function addGroup(id) {
        fetchDep()
$('#myModal3344').modal();
$('#myModal3344').show();
$('#keyoffile').val(id)
IDE = id
//console.log("ID ",id)

}


    function addPDF(id) {

        $('#myModal33').modal();
        $('#myModal33').show();
        $('#keyoffile').val(id)
        IDE = id
        //console.log("ID ",id)

    }


    function passclick(res) {

        $('#doornotdo').val("NO");

        
        //console.log("emppic_ ",$('#emppic_'+id).text())
        
        
        
        var id = res
        IDE = id




                        var a1 = $('#empciti_'+id).text();
                        var a2 = $('#emptitle_'+id).text();
                        var a3 = $('#empname_'+id).text();
                        var a4 = $('#emplast_'+id).text();
                        var a5 = $('#empdep_'+id).text();
                        var a6 = $('#empcomp_'+id).text();
                        var a7 = $('#empstart_'+id).text();
                        var a8 = $('#empid_'+id).text();
                        var oldpap = $('#emppic_'+id).text();

                        var a5po = $('#empdep2_'+id).text();
//console.log("A1" ,id)

        $('#myModal3').modal();
        $('#myModal3').show();

        
        $('#idemp_old').val(a8);
        $('#citiemp_old').val(a1);
        $('#titleemp_old').val(a2);
        $('#nameemp_old').val(a3);

        $('#depemp_old').val(a5);
        $('#depemp_old2').val(a5po);
        $('#compemp_old').val(a6);
        $('#suremp_old').val(a4);
        $('#startemp_old').val(a7);
        $('#pap2').val(oldpap);
        // $('#paped_new').val(pppp);


      



    }
    function pass() {



        var idemp_old = $('#idemp_old').val()
        var citiemp_old = $('#citiemp_old').val()
        var titleemp_old = $('#titleemp_old').val()
        var nameemp_old = $('#nameemp_old').val()

        var depemp_old = $('#depemp_old').val()
        var depemp_old2 = $('#depemp_old2').val()
        var compemp_old = $('#compemp_old').val()

        //alert(idemp_old)
var resp = $('#pap2').val()

        var suremp_old = $('#suremp_old').val()
        var startemp_old = $('#startemp_old').val()

        if (idemp_old.length < 1 || depemp_old.length < 1 ) {
            ////console.log("ข้อมูลไรหัสไม่ถูกต้อง")
            $('#yyy').css("display", "");
        }
        else {
            $('#yyy').css("display", "none");
            ////console.log(dataString)


            var doooo = $('#doornotdo').val();
            
            // $uploadCrop_.croppie('result', {
            //     type: 'canvas',
            //     size: 'original'
            // }).then(function (resp) {


                $.ajax({
                    url: "ajaxpro4emp.php",
                    type: "POST",
                    data: { "id":IDE,"emp_id": idemp_old, "emp_idcard": citiemp_old, "name_title": titleemp_old, "name": nameemp_old, 
                        "department": depemp_old,"company": compemp_old,"last_name" : suremp_old,"start_work" : startemp_old, "pic":resp,"posi": depemp_old2},
                   
                    success: function (data) {
                        // html = '<img src="' + resp + '" />';
                        // $("#upload-demo-i").html(html);
                        //console.log(data)

                        if (data.indexOf('successfully') > 0) {
                            $('#iwat').empty();
                            $('#mdr').empty();
                            $('#myModal3').hide();
                            //reload();
                            $('#myModal2').modal();
                            $('#myModal2').show();
                            $('#mdr').append(

                                "<span style='color:green'> แก้ไขข้อมูลพนักงานสำเร็จ </span>"
                            )

                            fetch();


                        }
                        else {
                            $('#myModal3').hide();
                            $('#myModal2').modal();
                            $('#myModal2').show();
                            $('#mdr').empty();
                            $('#mdr').append(

                                "<span style='color:red'> ไม่สามารถแก้ไขข้อมูลได้กรุณาติดต่อผู้พัฒนา </span>"
                            )
                        }
                    }
                });
           
//});

        }


    }


    function edit(id) {
        ////console.log("edit ", id)
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
            ////console.log("กรอกไม่ครบ")
            $('#xxx').css("display", "");
        }
        else {
            $('#xxx').css("display", "none");
            ////console.log(dataString)

            $.ajax({
                type: 'POST',
                url: "./itrytoup.php",
                data: dataString,
                success: function (data) {
                    ////console.log("Goooooo==>", data)
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
                    ////console.log("fail ", errMsg)

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

    function save() {

        //console.log("slectpr  ", $('#sel1').val())
        var dataString = 'cat=' + $('#cat_new').val()
            + '&des=' + $('#cat_des_new').val()
            var youtube = $('#you_tube').val()
        var gdrive = $('#g_drive').val()




        var emp_id = $('#idemp').val()
        var emp_idcard = $('#citiemp').val()
        var name_title = $('#titleemp').val()
        var name = $('#nameemp').val()


        var department = $('#depemp').val();
        var posi = $('#depemp2').val();
        var company = $('#compemp').val()
        var last_name = $('#suremp').val()
        var start_work = $('#startemp').val()

        var resp = $('#pap').val()

       


        if (emp_id.length < 1 || department.length < 1 ) {
            ////console.log("กรอกไม่ครบ")
            $('#eee').css("display", "");
        }
        else {
            $('#eee').css("display", "none");
            ////console.log(dataString)


           
//                 $emp_id = $_POST['emp_id'];
// $emp_idcard = $_POST['emp_idcard'];
// $name_title = $_POST['name_title'];
// $name = $_POST['name'];
// $department = $_POST['department'];
// $company = $_POST['company'];
// $last_name = $_POST['last_name'];
// $start_work = $_POST['start_work'];
// // $id_admin = $_POST['id'];
// $uploadCrop.croppie('result', {
//                 type: 'canvas',
//                 size: 'original'
//             }).then(function (resp) {

                $.ajax({
                    url: "ajaxpro3emp.php",
                    type: "POST",
                    data: { "emp_id": emp_id, "emp_idcard": emp_idcard, "name_title": name_title, "name": name, 
                        "department": department,"company": company,"last_name" : last_name,"start_work" : start_work,'pic':resp, 'posi':posi },
                    success: function (data) {
                        // html = '<img src="' + resp + '" />';
                        // $("#upload-demo-i").html(html);
                        //console.log(data)

                        if (data.indexOf('successfully') > 0) {
                            $('#iwat').empty();
                            $('#mdr').empty();
                            $('#myModal').hide();
                            //reload();
                            $('#myModal2').modal();
                            $('#myModal2').show();
                            $('#mdr').append(

                                "<span style='color:green'> เพิ่มข้อมูลจัดการพนักงานสำเร็จ </span>"
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
                    }
                });
           // });


        }


    }
    $(document).ready(function () {

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
            width: 300,
            height: 300,
            type: 'rectangle'
        },
        boundary: {
            width: 400,
            height: 400
        },

    });


    $('#upload').on('change', function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $uploadCrop.croppie('bind', {
                url: e.target.result
            }).then(function () {
                //console.log('jQuery bind complete');
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
            height: 500
        },

    });


    $('#upload_').on('change', function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $uploadCrop_.croppie('bind', {
                url: e.target.result
            }).then(function () {
                //console.log('jQuery bind complete');

                $('#doornotdo').val("DO");
            });

        }
        reader.readAsDataURL(this.files[0]);
    });



    $('.upload-result').on('click', function (ev) {
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'original'
        }).then(function (resp) {


            $.ajax({
                url: "ajaxpro.php",
                type: "POST",
                data: { "image": resp },
                success: function (data) {
                    // html = '<img src="' + resp + '" />';
                    // $("#upload-demo-i").html(html);
                    //console.log(data)
                }
            });
        });
    });


</script>


</html>

<? } ?>