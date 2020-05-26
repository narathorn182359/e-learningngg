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
        h4 {
            font-weight: 0 !important;
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
                    <li class="active">
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

        <div class="modal fade" id="myModalscore" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">ผลคะแนนที่ผ่านมา</h4>
                    </div>
                    <div class="modal-body">
                        <div id="rescore" style="text-align:center"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="pcv()">ตกลง</button>
                    </div>
                </div>

            </div>
        </div>



        <div class="modal fade" id="myModal334466" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">รายงาน</h4>
                    </div>
                    <div class="modal-body">
                        <div class="content" style="height:100%">
                        <h4 class="modal-title">ผู้ที่กำลังเรียน</h4>
                        <br/>
<div id="still" style="width:100%">
<br/>

                                   
                                </div>
                                <br/>
                                <br/>
                                <h4 class="modal-title">ผู้ผ่านการทดสอบ</h4>
                                <br/>
<div id="stood" style="width:100%">
                      
    </div>

                        </div>
                    </div>

                </div>
            </div></div>


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

                                   
                                   
                                    <input type="text" id="q1"   placeholder="คำถามข้อที่ 1"/><br/>
                                    <input type="text" id="aq1"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" id="bq1"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" id="cq1" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" id="dq1"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" id="ansq1"  placeholder="เฉลย"/>
                                    <br/><br/>

                                    <input type="text" id="q2"   placeholder="คำถามข้อที่ 2"/><br/>
                                    <input type="text" id="aq2"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" id="bq2"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" id="cq2" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" id="dq2"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" id="ansq2"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" id="q3"   placeholder="คำถามข้อที่ 3"/><br/>
                                    <input type="text" id="aq3"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" id="bq3"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" id="cq3" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" id="dq3"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" id="ansq3"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" id="q4"   placeholder="คำถามข้อที่ 4"/><br/>
                                    <input type="text" id="aq4"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" id="bq4"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" id="cq4" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" id="dq4"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" id="ansq4"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" id="q5"   placeholder="คำถามข้อที่ 5"/><br/>
                                    <input type="text" id="aq5"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" id="bq5"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" id="cq5" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" id="dq5"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" id="ansq5"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" id="q6"   placeholder="คำถามข้อที่ 6"/><br/>
                                    <input type="text" id="aq6"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" id="bq6"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" id="cq6" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" id="dq6"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" id="ansq6"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" id="q7"   placeholder="คำถามข้อที่ 7"/><br/>
                                    <input type="text" id="aq7"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" id="bq7"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" id="cq7" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" id="dq7"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" id="ansq7"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" id="q8"   placeholder="คำถามข้อที่ 8"/><br/>
                                    <input type="text" id="aq8"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" id="bq8"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" id="cq8" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" id="dq8"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" id="ansq8"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" id="q9"   placeholder="คำถามข้อที่ 9"/><br/>
                                    <input type="text" id="aq9"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" id="bq9"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" id="cq9" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" id="dq9"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" id="ansq9"  placeholder="เฉลย"/>
                                    <br/><br/>
                                    <input type="text" id="q10"   placeholder="คำถามข้อที่ 10"/><br/>
                                    <input type="text" id="aq10"  placeholder="ตัวเลือกที่ 1"/>
                                    <input type="text" id="bq10"  placeholder="ตัวเลือกที่ 2"/><br/>
                                    <input type="text" id="cq10" placeholder="ตัวเลือกที่ 3"/>
                                    <input type="text" id="dq10"  placeholder="ตัวเลือกที่ 4"/><br/>
                                    <input type="text" id="ansq10"  placeholder="เฉลย"/>
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
                            <h4 class="modal-title">แก้ไขข้อมูลจัดการวิชา</h4>
                        </div>
                        <div class="modal-body">
                            <div class="content">
                                <form>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ชื่อวิชา</label>
                                                <input id="pass_older" type="text" class="form-control border-input">
                                                <input id="pass_older_id" type="hidden">
                                                <input id="doornotdo" type="hidden">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> รหัสวิชา</label>
                                                <input id="pass_older_code" type="text" class="form-control border-input">

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>หมวดหมู่</label>
                                                <div id="papedsyY"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>หลักสูตรวิชา</label>
                                                <div id="paped_new"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> VDO</label>
                                                <input id="you_tubex" type="text" class="form-control border-input">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> ชื่อ VDO</label>
                                                <input id="g_drivex" type="text" class="form-control border-input">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="text-align:center">
                                                <strong>ภาพประกอบเดิม</strong>
                                                <br/>
                                          <img style="width:30%" id="imgderm"/>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="text-align:center">
                                                <strong>เปลี่ยนภาพประกอบ</strong>
                                                <br/>
                                                <input type="file" id="upload_">
                                                <br/>
                                                <!-- <button class="ui primary button upload-result">Upload Image</button> -->
                                                <div id="upload-demo_" style="    margin-left: -20px;padding:none"></div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>รายละเอียด</label>
                                                <textarea rows="10" cols="100" id="pass_newer" type="text" class="form-control border-input"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                   
                                    <div class="text-center">
                                        <span id="yyy" style="color:red;display:none">กรุณาใส่ข้อมูลให้ครบ
                                            <br>
                                        </span>
                                        <button type="button" onclick="pass()" style="background-color:teal;" class="btn btn-info btn-fill btn-wd">แก้ไขจัดการวิชา</button>
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
                            <h4 class="modal-title">เพิ่มวิชา</h4>
                        </div>
                        <div class="modal-body">
                            <div class="content">
                                <form>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ชื่อวิชา</label>
                                                <input id="cat_new" type="text" class="form-control border-input" placeholder="ชื่อจัดการวิชา">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>รหัสวิชา</label>
                                                <input id="cat_new_id" type="text" class="form-control border-input" placeholder="ชื่อจัดการวิชา">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>หมวดหมู่</label>
                                                <div id="papedsxX"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>หลักสูตรวิชา</label>
                                                <div id="papeds"></div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> VDO</label>
                                                <input id="you_tube" type="text" class="form-control border-input" placeholder="ลิงค์ VDO ขั้นด้วย ,">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> ชื่อ VDO</label>
                                                <input id="g_drive" type="text" class="form-control border-input" placeholder="ชื่อ vdo ขั้นด้วย ,">

                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="text-align:center">
                                                <strong>ภาพประกอบจัดการวิชา</strong>
                                                <br/>
                                                <input type="file" id="upload">
                                                <br/>
                                                <!-- <button class="ui primary button upload-result">Upload Image</button> -->
                                                <div id="upload-demo" style="    margin-left: -20px;padding:none"></div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>รายละเอียด</label>
                                                <textarea rows="10" cols="100" id="cat_des_new" type="text" class="form-control border-input" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="text-center">
                                        <span id="eee" style="color:red;display:none">กรุณากรอกข้อมูลให้ครบ และถูกต้อง
                                            <br>
                                        </span>
                                        <button type="button" onclick="save()" style="background-color:teal;" class="btn btn-info btn-fill btn-wd">เพิ่มวิชา</button>
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
                                        data-target="#myModal">เพิ่มวิชา</button>
                                </span>
                                <span class="icon-bar bar2"></span>
                                <span class="icon-bar bar3"></span>
                            </button>
                            <a class="navbar-brand" href="#">จัดการวิชา</a>
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
var IDM
var arrofthem = []
var arrofthemfin = []
    function savepdf(){

 var q1  = $('#q1').val()
 var c1q1  = $('#aq1').val()
 var c2q1  = $('#bq1').val()
 var c3q1  = $('#cq1').val()
 var c4q1  = $('#dq1').val()
 var aq1  = $('#ansq1').val()

 var q2  = $('#q2').val()
 var c1q2  = $('#aq2').val()
 var c2q2 = $('#bq2').val()
 var c3q2  = $('#cq2').val()
 var c4q2  = $('#dq2').val()
 var aq2  = $('#ansq2').val()

 var q3  = $('#q3').val()
 var c1q3  = $('#aq3').val()
 var c2q3 = $('#bq3').val()
 var c3q3  = $('#cq3').val()
 var c4q3  = $('#dq3').val()
 var aq3  = $('#ansq3').val()

 var q4  = $('#q4').val()
 var c1q4  = $('#aq4').val()
 var c2q4 = $('#bq4').val()
 var c3q4  = $('#cq4').val()
 var c4q4  = $('#dq4').val()
 var aq4  = $('#ansq4').val()

 var q5  = $('#q5').val()
 var c1q5  = $('#aq5').val()
 var c2q5 = $('#bq5').val()
 var c3q5  = $('#cq5').val()
 var c4q5  = $('#dq5').val()
 var aq5  = $('#ansq5').val()

 var q6  = $('#q6').val()
 var c1q6  = $('#aq6').val()
 var c2q6 = $('#bq6').val()
 var c3q6  = $('#cq6').val()
 var c4q6  = $('#dq6').val()
 var aq6 = $('#ansq6').val()

 var q7  = $('#q7').val()
 var c1q7  = $('#aq7').val()
 var c2q7 = $('#bq7').val()
 var c3q7  = $('#cq7').val()
 var c4q7  = $('#dq7').val()
 var aq7  = $('#ansq7').val()

 var q8  = $('#q8').val()
 var c1q8  = $('#aq8').val()
 var c2q8 = $('#bq8').val()
 var c3q8  = $('#cq8').val()
 var c4q8  = $('#dq8').val()
 var aq8  = $('#ansq8').val()

 var q9  = $('#q9').val()
 var c1q9  = $('#aq9').val()
 var c2q9 = $('#bq9').val()
 var c3q9  = $('#cq9').val()
 var c4q9  = $('#dq9').val()
 var aq9  = $('#ansq9').val()


 var q10  = $('#q10').val()
 var c1q10  = $('#aq10').val()
 var c2q10 = $('#bq10').val()
 var c3q10  = $('#cq10').val()
 var c4q10  = $('#dq10').val()
 var aq10  = $('#ansq10').val()



if(q1.length > 0 && 
q2.length > 0 && 
q3.length > 0 && 
q4.length > 0 && 
q5.length > 0 && 
q6.length > 0 && 
q7.length > 0 && 
q8.length > 0 && 
q9.length > 0 && 
q10.length > 0 && 

c1q1.length > 0 && 
c1q2.length > 0 && 
c1q3.length > 0 && 
c1q4.length > 0 && 
c1q5.length > 0 && 
c1q6.length > 0 && 
c1q7.length > 0 && 
c1q8.length > 0 && 
c1q9.length > 0 && 
c1q10.length > 0 && 

c2q1.length > 0 && 
c2q2.length > 0 && 
c2q3.length > 0 && 
c2q4.length > 0 && 
c2q5.length > 0 && 
c2q6.length > 0 && 
c2q7.length > 0 && 
c2q8.length > 0 && 
c2q9.length > 0 && 
c2q10.length > 0 && 


c3q1.length > 0 && 
c3q2.length > 0 && 
c3q3.length > 0 && 
c3q4.length > 0 && 
c3q5.length > 0 && 
c3q6.length > 0 && 
c3q7.length > 0 && 
c3q8.length > 0 && 
c3q9.length > 0 && 
c3q10.length > 0 && 


c4q1.length > 0 && 
c4q2.length > 0 && 
c4q3.length > 0 && 
c4q4.length > 0 && 
c4q5.length > 0 && 
c4q6.length > 0 && 
c4q7.length > 0 && 
c4q8.length > 0 && 
c4q9.length > 0 && 
c4q10.length > 0 && 

aq1.length > 0 && 
aq2.length > 0 && 
aq3.length > 0 && 
aq4.length > 0 && 
aq5.length > 0 && 
aq6.length > 0 && 
aq7.length > 0 && 
aq8.length > 0 && 
aq9.length > 0 && 
aq10.length > 0 




){
    //console.log("ready to save")

    var dataString = 'q1=' + q1
            + '&q2=' + q2
            + '&q3=' + q3
            + '&q4=' + q4
            + '&q5=' + q5
            + '&q6=' + q6
            + '&q7=' + q7
            + '&q8=' + q8
            + '&q9=' + q9
            + '&q10=' + q10

            + '&c1q1=' + c1q1
            + '&c1q2=' + c1q2
            + '&c1q3=' + c1q3
            + '&c1q4=' + c1q4
            + '&c1q5=' + c1q5
            + '&c1q6=' + c1q6
            + '&c1q7=' + c1q7
            + '&c1q8=' + c1q8
            + '&c1q9=' + c1q9
            + '&c1q10=' + c1q10


            + '&c2q1=' + c2q1
            + '&c2q2=' + c2q2
            + '&c2q3=' + c2q3
            + '&c2q4=' + c2q4
            + '&c2q5=' + c2q5
            + '&c2q6=' + c2q6
            + '&c2q7=' + c2q7
            + '&c2q8=' + c2q8
            + '&c2q9=' + c2q9
            + '&c2q10=' + c2q10


            + '&c3q1=' + c3q1
            + '&c3q2=' + c3q2
            + '&c3q3=' + c3q3
            + '&c3q4=' + c3q4
            + '&c3q5=' + c3q5
            + '&c3q6=' + c3q6
            + '&c3q7=' + c3q7
            + '&c3q8=' + c3q8
            + '&c3q9=' + c3q9
            + '&c3q10=' + c3q10


            + '&c4q1=' + c4q1
            + '&c4q2=' + c4q2
            + '&c4q3=' + c4q3
            + '&c4q4=' + c4q4
            + '&c4q5=' + c4q5
            + '&c4q6=' + c4q6
            + '&c4q7=' + c4q7
            + '&c4q8=' + c4q8
            + '&c4q9=' + c4q9
            + '&c4q10=' + c4q10

            + '&aq1=' + aq1
            + '&aq2=' + aq2
            + '&aq3=' + aq3
            + '&aq4=' + aq4
            + '&aq5=' + aq5
            + '&aq6=' + aq6
            + '&aq7=' + aq7
            + '&aq8=' + aq8
            + '&aq9=' + aq9
            + '&aq10=' + aq10
            + '&id=' + IDE

    $.ajax({
                type: 'POST',
                url: "./itrytouptest.php",
                data: dataString,
                success: function (data) {
                    //console.log(data)
                    if (data.indexOf('successfully') > 0) {
                        $('#iwat').empty();
                        $('#mdr').empty();

                        //reload();
                        $('#myModal33').hide();
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



}

else{
    alert("ต้องกรอกให้ครบทุกช่อง")
}


                                

        //console.log("Key == ",IDE)


        


    }


    function fetchDep() {
        $('#depdep').empty();
        $.ajax({
            type: 'GET',
            url: "./itrytoshowdep.php",
            data: '',
            success: function (data) {
                //console.log("dep", data)
                if (data.indexOf('alladmin_') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('|||')


                    var content = '<form>'

                
                    content += ' <label> <input value="all" type="checkbox" name="select-all" id="select-all" />all</label></br>'
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

                    $('#select-all').click(function(event) {   
                        console.log("clice")
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;                       
        });
    }
});
                    $("#gujasave").click(function(){
            var favorite = [];
            var alla = ""
            $.each($("input[name='depa']:checked"), function(){            
                favorite.push($(this).val());
                alla = alla + ""+$(this).val()+","
            });


            console.log("alla ",alla)
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

    function lob(id) {
          //console.log("id ",id)
        $.ajax({
                    url: "ajaxpro9lobartvicha.php",
                    type: "POST",
                    data: { "id": id },
                    success: function (data) {
                        //console.log(data)
                       alert("ลบข้อมูลเรียบร้อย")
                       window.location.reload();

                    }
                });

    }

    function fetchtypeTop() {
        $('#papedsxX').empty();
        $('#papedsyY').empty();
       
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
                    var content2 = '<div class="form-group">'

                    content += '<select class="form-control" id="sel1x">'
                    content2 += '<select class="form-control" id="sel12y">'



                    for (var i = 0; i < allData.length - 1; i++) {
                      //  //console.log("----", allData[i])
                        //$allHTML."".$row["id"].",".$row["username"].",".$row["name_"].",".$row["surname"].",".$row["password_"].",".$row["email"]
                        var _f = allData[i].split("|||")
                        var j = i + 1

                      

                        content += '<option value="'+_f[1]+'">' + _f[1] + '</option>'
                        content2 += '<option value="'+_f[1]+'">' + _f[1] + '</option>'

                    }
                    content += '  </select>'
                    content += '   </div>'

                    content2 += '  </select>'
                    content2 += '   </div>'
                    $('#papedsxX').append(content);
                    $('#papedsyY').append(content2);

console.log("HERE")
                    
                    //$('#papedsyY').val(ttt)
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
            url: "./itrytoshowtypesub.php",
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
            url: "./itrytoshowpro.php",
            data: '',
            success: function (data) {
                //console.log(data)
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')


                    var content = '<table id="examplep" class="row-border" cellspacing="0" width="100%" style="background-color: #60b0f4;color: white;">'
                    content += '<thead>'
                    content += '<tr>'
                    content += '   <th>ลำดับ</th>'
                    content += '   <th>ชื่อวิชา</th>'
                    content += '   <th>รหัสวิชา</th>'
                    content += '   <th>หมวดหมู่</th>'
                    content += '   <th>หลักสูตรวิชา</th>'
                    content += '   <th>รายละเอียดโดยย่อ</th>'
                    content += '   <th>ภาพประกอบ</th>'
                    content += '   <th>ผู้ที่ต้องเรียน</th>'
                    content += '   <th>จัดการ</th>'

                    content += '   <th>-</th>'
                    content += '   <th>-</th>'
                    content += '   <th>-</th>'
                    content += '   <th>-</th>'
                    content += '   <th>-</th>'
                    content += '   <th>-</th>'


                    content += '  </tr>'
                    content += '    </thead>'


                    content += '    <tbody>'

                    // '<input type="text"  id="youtube_' + _f[0] + '" value= "' + _f[6] + '"/>' +
                    //      '<input type="text"  id="gdrive_' + _f[0] + '" value= "' + _f[7] + '" />' +

                    for (var i = 0; i < allData.length - 1; i++) {
                      //  //console.log("----", allData[i])
                        //$allHTML."".$row["id"].",".$row["username"].",".$row["name_"].",".$row["surname"].",".$row["password_"].",".$row["email"]
                        var _f = allData[i].split("^")
                        var j = i + 1
                        arrofthem.push(_f[9])
                        arrofthemfin.push(_f[10])


                        content += '<tr style="color:black">'
                        content += '  <td>' + j + '</td>'
                        content+= '<td style="display:none"><span id="youtube_' + _f[0] + '">' + _f[6] + '</span></td>'
                        content+= '<td style="display:none"><span id="gdrive_' + _f[0] + '">' + _f[7] + '</span></td>'
                       
                        content += '  <td><span id="cat_' + _f[0] + '">' + _f[1] + '</span></td>'
                        content += '  <td><span id="catid_' + _f[0] + '">' + _f[4] + '</span></td>'
                        content += '  <td><span id="cattop_' + _f[0] + '">' + _f[_f.length-1] + '</span></td>'
                        content += '  <td><span id="paped_' + _f[0] + '">' + _f[5] + '</span></td>'
                        content += '  <td><span style="font-size:12px; font-weight:0 !important">' + _f[2].substring(0, 20) + '...</span><div style="display:none" id="des_' + _f[0] + '">' + _f[2] + '...</div></td>'
                        content += '  <td><span id="img_' + _f[0] + '"><img src="upload/' + _f[3] + '" style="width:20%"/></span><div style="display:none" id="imge_' + _f[0] + '">' + _f[3] + '</div></td>'
                        content += '  <td><span id="xcvbn' + _f[0] + '">' + _f[8] + '</span></td>'
                        content += '  <td> <button type="button"  onclick="addPDF(' + _f[0] + ')"  style="background-color:teal;" class="btn btn-fill ">แบบทดสอบ</button></td>'
                        content += '  <td> <button type="button"  onclick="addGroup(' + _f[0] + ')"  style="background-color:teal;" class="btn btn-fill ">จัดการกลุ่มเรียน</button></td>'
                        content += '  <td> <button type="button"  onclick="cview(' + i +","+_f[0]+ ')"  style="background-color:teal;" class="btn btn-fill ">รายงาน</button></td>'

                        content += '  <td> <button type="button"  onclick="passclick(' + _f[0] + ')"  style="background-color:teal;" class="btn btn-fill ">แก้ไขข้อมูล</button></td>'
                        
                        content += '  <td> <button type="button"  onclick="lob(' + _f[0] + ')"  style="background-color:teal;" class="btn btn-fill ">ลบ</button></td>'
                        
                        
                        content += '</tr>'

                    }
                    content += '</tbody>'
                    content += '</table>'
                    
                        
                    $('#iwat').append(content);
                    $('#examplep').DataTable({
                        responsive: true,
                        "oLanguage": {

                            "sSearch": "ค้นหาจัดการวิชา"

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

    function pcv(){
        $('#myModal334466').show();
    }
    function checkpointer(idemp){
        console.log("idemp ",idemp)
       // alert("come "+idemp)
       var idvicha = IDE
        //console.log(idemp,idvicha)
        $('#myModal334466').hide();
        $('#myModalscore').modal();
         $('#myModalscore').show();
         $('#rescore').empty()
         $.ajax({
                type: 'POST',
                url: "./itrytoshowscore.php",
                data: {"idvicha":idvicha,"idemp":idemp },
                success: function (data) {
                    //console.log(data)
                    if (data.indexOf('alladmin_') > 0) {

                        var alladmin_ = data.split('alladmin_')[1]
                        var allData = alladmin_.split('|||')


                    
for(var i=0;i<allData.length-1;i++){
    
    $('#rescore').append(

'<span style="color:green"> สอบครั้งที่ '+(i+1)+'  '+allData[i]+'/10</span><br/>'
)
}
                  

                      // var _f = allData.split("|||")
                     
                       

                      


                    }

                    else {

                        $('#rescore').append(

"<span style='color:green'> ยังไม่เคยทำแบบทดสอบ </span>"
)
                    }

                },
                failure: function (errMsg) {
                    ////console.log("fail ", errMsg)

                    $('#yyy').css("display", "");
                }
            });


    }
    function cview(id,idx){
        $('#myModal334466').modal();
$('#myModal334466').show();
$('#keyoffile').val(id)
IDE = idx
//console.log("ID ",id,idx)


var arrstill = arrofthem[id].split('xox')
var arrstood = arrofthemfin[id].split('xox')

//console.log("IarrstillD ",arrstill)
//console.log("IarrstoodD ",arrstood)

var content = '<table style="float:left" class="table">'
content += '<tr>'
content += '<th>ลำดับ</th>'
content += ' <th>รหัส พนง</th>'
content += ' <th>ชื่อ-สกุล</th>'
content += ' <th>แผนก</th>'
// content += ' <th>บริษัท</th>'
content += '   </tr>'


var content2 = '<table style="float:left" class="table">'
content2 += '<tr>'
content2 += '<th>ลำดับ</th>'
content2 += ' <th>รหัส พนง</th>'
content2 += ' <th>ชื่อ-สกุล</th>'
content2 += ' <th>แผนก</th>'
// content2 += ' <th>บริษัท</th>'
content2 += '   </tr>'
$('#stood').empty()
$('#still').empty()



for(var h =1; h<arrstill.length; h++){


$.ajax({
            type: 'POST',
            url: "./itrytoshowuser2.php",
            async : false,
            data: 'idemp='+arrstill[h],
            success: function (data) {
                //console.log("kokokokoko", data)
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')[0]


                    

                  

                    var _f = allData.split(",")


                    //console.log("f[1] ",_f[1])
                    //console.log("IDE ",IDE)
                    //var bb = \''_f[1].toString()

                    content2 += '   <tr onClick="checkpointer(\'' + _f[1] + '\')">'
                    content2 += '     <td>'+h+'</td>'
                    content2 += '    <td>'+_f[1]+'</td>'
                    content2 += '    <td>'+_f[2]+" "+_f[3]+'</td>'
                    content2 += '    <td>'+_f[4]+'</td>'
                    // content2 += '    <td>'+_f[5]+'</td>'
                    content2 += ' </tr>'
                    

                   


                }
                else {
                    //console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });
    }

        content2 += '  </table>'
        $('#still').append(content2);


for(var h =1; h<arrstood.length; h++){
    console.log("arrstood", arrstood)

$.ajax({
            type: 'POST',
            url: "./itrytoshowuser.php",
            async : false,
            data: 'idemp='+arrstood[h],
            success: function (data) {
                
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')[0]


                    

                  

                    var _f = allData.split(",")

                    console.log("====>",_f)

                    content += '   <tr onClick="checkpointer(\'' + _f[1] + '\')">'
                    content += '     <td>'+h+'</td>'
                    content += '    <td>'+_f[1]+'</td>'
                    content += '    <td>'+_f[2]+" "+_f[3]+'</td>'
                    content += '    <td>'+_f[4]+'</td>'
                    // content += '    <td>'+_f[5]+'</td>'
                    content += ' </tr>'
                    

                   


                }
                else {
                    //console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });
    }

        content += '  </table>'
        $('#stood').append(content);


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


        $('#q1').val("")
                     $('#aq1').val("")
                    $('#bq1').val("")
                  $('#cq1').val("")
                    $('#dq1').val("")
                   $('#ansq1').val("")

                     $('#q2').val("")
                    $('#aq2').val("")
                     $('#bq2').val("")
                     $('#cq2').val("")
                   // var c4q2  = 
                    $('#dq2').val("")
                  //  var aq2  = 
                    $('#ansq2').val("")

                    //var q3  = 
                    $('#q3').val("")
                    // var c1q3  =
                     $('#aq3').val("")
                   // var c2q3 = 
                    $('#bq3').val("")
                  //  var c3q3  = 
                    $('#cq3').val("")
                 //   var c4q3  = 
                    $('#dq3').val("")
                 //   var aq3  = 
                    $('#ansq3').val("")

                 //   var q4  = 
                    $('#q4').val("")
                //    var c1q4  = 
                    $('#aq4').val("")
                //    var c2q4 = 
                    $('#bq4').val("")
               //     var c3q4  =
                     $('#cq4').val("")
                //    var c4q4  =
                     $('#dq4').val("")
                //    var aq4  = 
                    $('#ansq4').val("")

                //    var q5  = 
                    $('#q5').val("")
               //     var c1q5  = 
                    $('#aq5').val("")
               //     var c2q5 =
                     $('#bq5').val("")
               //     var c3q5  = 
                    $('#cq5').val("")
              //      var c4q5  = 
                    $('#dq5').val("")
               //     var aq5  = 
                    $('#ansq5').val("")

                //    var q6  =
                     $('#q6').val("")
               //     var c1q6  = 
                    $('#aq6').val("")
               //     var c2q6 =
                     $('#bq6').val("")
                //    var c3q6  = 
                    $('#cq6').val("")
                //    var c4q6  = 
                    
                    $('#dq6').val("")
                //    var aq6 = 
                    $('#ansq6').val("")

                //    var q7  = 
                    $('#q7').val("")
                //    var c1q7  = 
                    $('#aq7').val("")
                //    var c2q7 =
                     $('#bq7').val("")
                //    var c3q7  = 
                    $('#cq7').val("")
                //    var c4q7  = 
                    
                    $('#dq7').val("")
               //     var aq7  = 
                    $('#ansq7').val("")

                 //   var q8  = 
                    $('#q8').val("")
               //     var c1q8  = 
                    $('#aq8').val("")
               //     var c2q8 = 
                    $('#bq8').val("")
               //     var c3q8  = 
                    $('#cq8').val("")
               //     var c4q8  = 
                    
                    $('#dq8').val("")
                //    var aq8  = 
                    $('#ansq8').val("")

                 //   var q9  = 
                    $('#q9').val("")
               //     var c1q9  = 
                    $('#aq9').val("")
               //     var c2q9 = 
                    $('#bq9').val("")
              //      var c3q9  = 
                    $('#cq9').val("")
              //      var c4q9  = 
                    $('#dq9').val("")
             //       var aq9  = 
                    $('#ansq9').val("")

/
              //      var q10  = 
                    $('#q10').val("")
              //      var c1q10  = 
                    $('#aq10').val("")
             //       var c2q10 = 
                    
                    $('#bq10').val("")
             //       var c3q10  = 
                    $('#cq10').val("")
              //      var c4q10  = 
                    $('#dq10').val("")
             //       var aq10  = 
                    $('#ansq10').val("")

        $.ajax({
            type: 'POST',
            url: "./itrytoshowchoice.php",
            data: 'lim='+id,
            success: function (data) {
               // //console.log("kokokokoko", data)
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')[0]
                    var allData = allData.split('xolox')

                    //console.log(allData)
                    $('#q1').val(allData[0])
                     $('#aq1').val(allData[10])
                    $('#bq1').val(allData[20])
                  $('#cq1').val(allData[30])
                    $('#dq1').val(allData[40])
                   $('#ansq1').val(allData[50])

                     $('#q2').val(allData[1])
                    $('#aq2').val(allData[11])
                     $('#bq2').val(allData[21])
                     $('#cq2').val(allData[31])
                   // var c4q2  = 
                    $('#dq2').val(allData[41])
                  //  var aq2  = 
                    $('#ansq2').val(allData[51])

                    //var q3  = 
                    $('#q3').val(allData[2])
                    // var c1q3  =
                     $('#aq3').val(allData[12])
                   // var c2q3 = 
                    $('#bq3').val(allData[22])
                  //  var c3q3  = 
                    $('#cq3').val(allData[32])
                 //   var c4q3  = 
                    $('#dq3').val(allData[42])
                 //   var aq3  = 
                    $('#ansq3').val(allData[52])

                 //   var q4  = 
                    $('#q4').val(allData[3])
                //    var c1q4  = 
                    $('#aq4').val(allData[13])
                //    var c2q4 = 
                    $('#bq4').val(allData[23])
               //     var c3q4  =
                     $('#cq4').val(allData[33])
                //    var c4q4  =
                     $('#dq4').val(allData[43])
                //    var aq4  = 
                    $('#ansq4').val(allData[53])

                //    var q5  = 
                    $('#q5').val(allData[4])
               //     var c1q5  = 
                    $('#aq5').val(allData[14])
               //     var c2q5 =
                     $('#bq5').val(allData[24])
               //     var c3q5  = 
                    $('#cq5').val(allData[34])
              //      var c4q5  = 
                    $('#dq5').val(allData[44])
               //     var aq5  = 
                    $('#ansq5').val(allData[54])

                //    var q6  =
                     $('#q6').val(allData[5])
               //     var c1q6  = 
                    $('#aq6').val(allData[15])
               //     var c2q6 =
                     $('#bq6').val(allData[25])
                //    var c3q6  = 
                    $('#cq6').val(allData[35])
                //    var c4q6  = 
                    
                    $('#dq6').val(allData[45])
                //    var aq6 = 
                    $('#ansq6').val(allData[55])

                //    var q7  = 
                    $('#q7').val(allData[6])
                //    var c1q7  = 
                    $('#aq7').val(allData[16])
                //    var c2q7 =
                     $('#bq7').val(allData[26])
                //    var c3q7  = 
                    $('#cq7').val(allData[36])
                //    var c4q7  = 
                    
                    $('#dq7').val(allData[46])
               //     var aq7  = 
                    $('#ansq7').val(allData[56])

                 //   var q8  = 
                    $('#q8').val(allData[7])
               //     var c1q8  = 
                    $('#aq8').val(allData[17])
               //     var c2q8 = 
                    $('#bq8').val(allData[27])
               //     var c3q8  = 
                    $('#cq8').val(allData[37])
               //     var c4q8  = 
                    
                    $('#dq8').val(allData[47])
                //    var aq8  = 
                    $('#ansq8').val(allData[57])

                 //   var q9  = 
                    $('#q9').val(allData[8])
               //     var c1q9  = 
                    $('#aq9').val(allData[18])
               //     var c2q9 = 
                    $('#bq9').val(allData[28])
              //      var c3q9  = 
                    $('#cq9').val(allData[38])
              //      var c4q9  = 
                    $('#dq9').val(allData[48])
             //       var aq9  = 
                    $('#ansq9').val(allData[58])

/
              //      var q10  = 
                    $('#q10').val(allData[9])
              //      var c1q10  = 
                    $('#aq10').val(allData[19])
             //       var c2q10 = 
                    
                    $('#bq10').val(allData[29])
             //       var c3q10  = 
                    $('#cq10').val(allData[39])
              //      var c4q10  = 
                    $('#dq10').val(allData[49])
             //       var aq10  = 
                    $('#ansq10').val(allData[59])

                    //console.log(allData)


               

                }
                else {
                    //console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });


        $('#myModal33').modal();
        $('#myModal33').show();
        $('#keyoffile').val(id)
        IDE = id
        //console.log("ID ",id)

    }


    function passclick(res) {

IDM = res
console.log("HERE")
        $('#doornotdo').val("NO");

        var id = res
        var cat = $('#cat_' + id).text();
        var des = $('#des_' + id).html();
        var code = $('#catid_' + id).text();
        var pppp = $('#paped_' + id).text();
        var y = $('#youtube_' + id).text();
        var g = $('#gdrive_' + id).text();
        //console.log("passclick ", id)
        //console.log("passclick ", cat)
        //console.log("passclick ", des)
        //console.log("passclick ", code)

        imgedit = $('#imge_' + id).text();

        $("#imgderm").attr("src","upload/"+imgedit);

        $('#myModal3').modal();
        $('#myModal3').show();
        $('#pass_older_id').val(id);
        $('#pass_older').val(cat);
        $('#pass_newer').val(des);
        $('#pass_older_code').val(code);

        $('#you_tubex').val(y);
        $('#g_drivex').val(g);
        // $('#paped_new').val(pppp);


        $('#paped_new').empty();
        $.ajax({
            type: 'GET',
            url: "./itrytoshowtypesub.php",
            data: '',
            success: function (data) {
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')

                    //console.log("allData", allData)

                    var content = '<div class="form-group">'

                    content += '<select class="form-control" id="sel11">'

                  

                    for (var i = 0; i < allData.length - 1; i++) {
                        
                        //$allHTML."".$row["id"].",".$row["username"].",".$row["name_"].",".$row["surname"].",".$row["password_"].",".$row["email"]
                        var _f = allData[i].split("|||")
                        var j = i + 1

                    console.log("----", _f[1])

                        content += '<option value="'+_f[1]+'">' + _f[1] + '</option>'

                    }
                    content += '  </select>'
                    content += '   </div>'
                    $('#paped_new').append(content);

                    var mmm = "cattop_"+IDM
                    var mmm2 = "paped_"+IDM

                

                   
                    var catc = $('#'+mmm).text()
                    var catc2 = $('#'+mmm2).text()

                    console.log("catc ",catc)
                    console.log("catc2 ",catc2)
                    $("#sel12y").val(catc);$("#sel11").val(catc2);


                    // var mmm2 = "paped_"+IDM

                    // var  = $('#'+mmm2).text()
                    // console.log("catc2catc2catc2 ",catc2)
                    // $("#sel11").val(catc2);


                    
                    

                }
                else {
                    //console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });



    }
    function pass() {

        var id_e = $('#pass_older_id').val();


        var dataString = 'oldpass=' + $('#pass_older').val()
            + '&newpass=' + $('#pass_newer').val()
            + '&id=' + id_e


        var cat = $('#pass_older').val()
        var des = $('#pass_newer').val()
        var code = $('#pass_older_code').val()
        var pppp = $('#sel11').val()
        var s2x = $('#sel12y').val()
        

        var youtube = $('#you_tubex').val()
        var gdrive = $('#g_drivex').val()

        //alert(pppp)


        var a = $('#pass_older').val()
        var b = $('#pass_newer').val()
        var c = $('#pass_older_code').val()


        if (a.length < 1 || b.length < 1 || c.length < 1) {
            ////console.log("ข้อมูลไรหัสไม่ถูกต้อง")
            $('#yyy').css("display", "");
        }
        else {
            $('#yyy').css("display", "none");
            ////console.log(dataString)


            var doooo = $('#doornotdo').val();




            $uploadCrop_.croppie('result', {
                type: 'canvas',
                size: 'original'
            }).then(function (resp) {


                $.ajax({
                    url: "ajaxpro4.php",
                    type: "POST",
                    data: { "image": resp, "cat": cat, "des": des, "doooo": doooo, "id": id_e, "code": code, "paped": pppp,"youtube":youtube,"gdrive":gdrive,"s2x":s2x },
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

                                "<span style='color:green'> แก้ไขข้อมูลวิชาสำเร็จ </span>"
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
            });


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

        var cat = $('#cat_new').val()
        var cat_id = $('#cat_new_id').val()
        var des = $('#cat_des_new').val()
        var paped = $('#sel1').val()

        var s1x = $('#sel1x').val()


        var a = $('#cat_new').val();
        var b = $('#cat_new_id').val()
        var c = $('#cat_des_new').val()

       

        //console.log("YOUTUBE ",youtube)
        //console.log("gdrive ",gdrive)

        if (a.length < 1 || b.length < 1 || c.length < 1) {
            ////console.log("กรอกไม่ครบ")
            $('#eee').css("display", "");
        }
        else {
            $('#eee').css("display", "none");
            ////console.log(dataString)


            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'original'
            }).then(function (resp) {


                $.ajax({
                    url: "ajaxpro3.php",
                    type: "POST",
                    data: { "image": resp, "cat": cat, "des": des, "catid": cat_id, "paped": paped,"youtube": youtube,"gdrive" : gdrive,"s1x":s1x },
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

                                "<span style='color:green'> เพิ่มข้อมูลจัดการวิชาสำเร็จ </span>"
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
            });

            // $.ajax({
            //     type: 'POST',
            //     url: "http://mipathai.com/backend/itrytocreatedtype.php",
            //     data: dataString,
            //     success: function (data) {
            //         ////console.log(data)
            //         if (data.indexOf('successfully') > 0) {
            //             $('#iwat').empty();
            //             $('#mdr').empty();
            //             $('#myModal').hide();
            //             //reload();
            //             $('#myModal2').modal();
            //             $('#myModal2').show();
            //             $('#mdr').append(

            //                 "<span style='color:green'> เพิ่มข้อมูลจัดการวิชาสำเร็จ </span>"
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
            //         ////console.log("fail ", errMsg)
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
    imgedit = ''
    $(document).ready(function () {

        fetch();
        fetchtypeTop()
        $('#examplep').DataTable({
            responsive: true
        });


        $( "#sel1x" ).change(function() {
  alert( "Handler for .change() called."+$( "#sel1x" ).val() );
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
            height: 500
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