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

                    <li class="active">
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
        <div class="modal fade" id="myModal3355" role="dialog" >
            <div class="modal-dialog">
                <div class="modal-content" style="width:800px">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">อนุมัติการขอเข้าเรียน</h4>
                        <button id="jajob" type="button" onclick="jobjobjob()" style="background-color:orange;" class="btn btn-info btn-fill btn-wd">จบการสอน</button>
                        <h4 id="jajob2" style="display:none" class="modal-title">รายวิชานี้ได้สิ้นสุดการเรียนการสอนไปแล้ว</h4>    
                    </div>
                    <div class="modal-body">
                        <div class="content" >
                        <h4 class="modal-title">รายชื่อผู้ร้องขอเข้าเรียน</h4>
<div id="makopolo" style="width:100%" class="">
                      
    </div>
    
    <div id="makopolo2" style="width:100%;margin-left:10px" class="">
                      
    </div>
                                   
                                </div>
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
                            <h4 class="modal-title">แก้ไขข้อมูลจัดการคลาสเรียน</h4>
                        </div>
                        <div class="modal-body">
                            <div class="content">
                                <form>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ชื่อคลาสเรียน</label>
                                                <input id="pass_older" type="text" class="form-control border-input">
                                                <input id="pass_older_id" type="hidden">
                                                <input id="doornotdo" type="hidden">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>รหัสคลาสเรียน</label>
                                                <input id="cat_new_id_old" type="text" class="form-control border-input" placeholder="ชื่อจัดการคลาสเรียน">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>หมวดหมู่วิชา</label>
                                                <div id="papeds_old"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group" style="margin-left: 10px;">
                                                    <label>หลักสูตรวิชา</label>
                                                    <div id="laksoodold"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> สถานที่เรียน</label>
                                                    <input id="place_old" type="text" class="form-control border-input" placeholder="อาคาร A">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group" style="margin-left: 10px;">
                                                    <label>วันที่เรียน</label>
                                                    <input id="day_old" type="text" class="form-control border-input" placeholder="01/12/2562">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> เวลาเรียน</label>
                                                    <input id="time_old" type="text" class="form-control border-input" placeholder="18.30">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group" style="margin-left: 10px;">
                                                    <label>จำนวนที่นั่ง</label>
                                                    <input id="number_old" type="text" class="form-control border-input" placeholder="20">
                                               </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> ผู้สอน</label>
                                                    <input id="lectureold" type="text" class="form-control border-input" placeholder="อาจารย์ A">
                                                </div>
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
                                        <button type="button" onclick="pass()" style="background-color:teal;" class="btn btn-info btn-fill btn-wd">แก้ไขจัดการคลาสเรียน</button>
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
                            <h4 class="modal-title">เพิ่มคลาสเรียน</h4>
                        </div>
                        <div class="modal-body">
                            <div class="content">
                                <form>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>ชื่อคลาสเรียน</label>
                                                <input id="cat_new" type="text" class="form-control border-input" placeholder="ชื่อจัดการคลาสเรียน">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>รหัสคลาสเรียน</label>
                                                <input id="cat_new_id" type="text" class="form-control border-input" placeholder="ชื่อจัดการคลาสเรียน">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>หมวดหมู่วิชา</label>
                                                <div id="papeds"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group" style="margin-left: 10px;">
                                                    <label>หลักสูตรวิชา</label>
                                                    <div id="laksoodnew"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> สถานที่เรียน</label>
                                                    <input id="place_" type="text" class="form-control border-input" placeholder="อาคาร A">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group" style="margin-left: 10px;">
                                                    <label>วันที่เรียน</label>
                                                    <input id="day_" type="text" class="form-control border-input" placeholder="01/12/2562">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> เวลาเรียน</label>
                                                    <input id="time_" type="text" class="form-control border-input" placeholder="18.30">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group" style="margin-left: 10px;">
                                                    <label>จำนวนที่นั่ง</label>
                                                    <input id="number_" type="text" class="form-control border-input" placeholder="20">
                                               </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> ผู้สอน</label>
                                                    <input id="lecture" type="text" class="form-control border-input" placeholder="อาจารย์ A">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="text-align:center">
                                                <strong>ภาพประกอบจัดการคลาสเรียน</strong>
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
                                        <button type="button" onclick="save()" style="background-color:teal;" class="btn btn-info btn-fill btn-wd">เพิ่มคลาสเรียน</button>
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
                                        data-target="#myModal">เพิ่มคลาสเรียน</button>
                                </span>
                                <span class="icon-bar bar2"></span>
                                <span class="icon-bar bar3"></span>
                            </button>
                            <a class="navbar-brand" href="#">จัดการคลาสเรียน</a>
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


function anumat(id,index,ki) {

IDE = id
//fetchAnu()
//console.log("KIKI ",ki)

var requesttoaccept = (dataAllFext[index].w).split("xox")
var requesttoaccept2 = (dataAllFext[index].a).split("xox")


fetchInsider(requesttoaccept,ki)
fetchInsider2(requesttoaccept2)

$('#myModal3355').modal();
$('#myModal3355').show();
$('#keyoffile').val(id)

if(ki==0){
            $('#jajob').css("display","");
            $('#jajob2').css("display","none");
        }
        else{
            $('#jajob').css("display","none");
            $('#jajob2').css("display","");
        }
       
IDE = id
////console.log("ID ",id)
}

function addGroup(id) {
        fetchDep()
$('#myModal3344').modal();
$('#myModal3344').show();
$('#keyoffile').val(id)
IDE = id
////console.log("ID ",id)

}

var IDE 
    function savepdf(){
        ////console.log("Key == ",IDE)


        


    }


        function fetchtypesub() {
        ////console.log("WTF")
        $('#laksoodnew').empty();
       // $('#laksoodold').empty();
        $.ajax({
            type: 'GET',
            url: "./itrytoshowtypesub.php",
            data: '',
            success: function (data) {
                ////console.log("kokokokoko", data)
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')


                    var content = '<div class="form-group">'

                    content += '<select class="form-control" id="lak1">'



                    for (var i = 0; i < allData.length - 1; i++) {
                      //  ////console.log("----", allData[i])
                        //$allHTML."".$row["id"].",".$row["username"].",".$row["name_"].",".$row["surname"].",".$row["password_"].",".$row["email"]
                        var _f = allData[i].split("|||")
                        var j = i + 1



                        content += '<option>' + _f[1] + '</option>'

                    }
                    content += '  </select>'
                    content += '   </div>'
                    $('#laksoodnew').append(content);
                  //  $('#laksoodold').append(content);
                    //$('#laksood').append(content);

                }
                else {
                    ////console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });

    }


    function fetchtypesub() {
        ////console.log("WTF")
        $('#laksoodnew').empty();
       // $('#laksoodold').empty();
        $.ajax({
            type: 'GET',
            url: "./itrytoshowtypesub.php",
            data: '',
            success: function (data) {
                ////console.log("kokokokoko", data)
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')


                    var content = '<div class="form-group">'

                    content += '<select class="form-control" id="lak1">'



                    for (var i = 0; i < allData.length - 1; i++) {
                      //  ////console.log("----", allData[i])
                        //$allHTML."".$row["id"].",".$row["username"].",".$row["name_"].",".$row["surname"].",".$row["password_"].",".$row["email"]
                        var _f = allData[i].split("|||")
                        var j = i + 1



                        content += '<option>' + _f[1] + '</option>'

                    }
                    content += '  </select>'
                    content += '   </div>'
                    $('#laksoodnew').append(content);
                  //  $('#laksoodold').append(content);
                    //$('#laksood').append(content);

                }
                else {
                    ////console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });

    }
    function fetchDep() {
        $('#depdep').empty();
        $.ajax({
            type: 'GET',
            url: "./itrytoshowdep.php",
            data: '',
            success: function (data) {
                ////console.log("kokokokoko", data)
                if (data.indexOf('alladmin_') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('|||')


                    var content = '<form>'

                

                    for (var i = 0; i < allData.length - 1; i++) {
                      //  ////console.log("----", allData[i])
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
                url: "./itrytoupdepc.php",
                data: dataStringmm,
                success: function (data) {
                    ////console.log(data)
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
                    //////console.log("fail ", errMsg)

                    $('#yyy').css("display", "");
                }
            });


            //alert("My favourite sports are: " + alla);
        });

                }
                else {
                    ////console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });

    }

    function fetchtype() {
        ////console.log("WTF")
        $('#papeds').empty();
       // $('#papeds_old').empty();
        



        $.ajax({
            type: 'GET',
            url: "./itrytoshowtype.php",
            data: '',
            success: function (data) {
                ////console.log("kokokokoko", data)
                fetchtypesub()
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')


                    var content = '<div class="form-group">'

                    content += '<select class="form-control" id="sel1">'



                    for (var i = 0; i < allData.length - 1; i++) {
                      //  ////console.log("----", allData[i])
                        //$allHTML."".$row["id"].",".$row["username"].",".$row["name_"].",".$row["surname"].",".$row["password_"].",".$row["email"]
                        var _f = allData[i].split("|||")
                        var j = i + 1



                        content += '<option>' + _f[1] + '</option>'

                    }
                    content += '  </select>'
                    content += '   </div>'
                    $('#papeds').append(content);
                  //  $('#papeds_old').append(content);

                }
                else {
                    ////console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });

    }



    function fetchInsider2(datain) {
        $('#makopolo2').empty()
       // dataAllFextrequesttoaccept = datain
       
                ////console.log(datain)
                   // var alladmin_ = data.split('alladmin_')[1]
                    var ran = Math.floor((Math.random(10)*1000));

                    var idf = "exampleY"+ran


                    var content = '<br/><h4> ผู้ได้รับการอนุมัติแล้ว</h4> <br/><table id="'+idf+'" class="row-border" cellspacing="0" width="100%" style="color: white;">'
                    content += '<thead>'
                    content += '<tr>'
                    content += '   <th>ลำดับ</th>'
                    content += '   <th>รหัส พนง</th>'
                    content += '   <th>เลขที่ ปชช</th>'
                    content += '   <th>ชื่อสกุล</th>'
                    content += '   <th>แผนก</th>'
                    // content += '   <th>บริษัท</th>'

                  




                    content += '   <th>อนุมัติการลงทะเบียน</th>'


                    content += '  </tr>'
                    content += '    </thead>'


                    content += '    <tbody>'

                    // '<input type="text"  id="youtube_' + _f[0] + '" value= "' + _f[6] + '"/>' +
                    //      '<input type="text"  id="gdrive_' + _f[0] + '" value= "' + _f[7] + '" />' +

                    for (var i = 1; i < datain.length ; i++) {
                        var allData = datain[i].split('xyx')

                        content += '<tr style="color:black">'
                        content += '  <td>' + (i) + '</td>'
                        content += '  <td><span id="empid2_' + i + '">' + allData[4] + '</span></td>'
                        content += '  <td><span id="empcity2_' + i + '">' + allData[0] + '</span></td>'
                        content += '  <td><span id="empname2_' + i + '">' + allData[1] + '</span></td>'
                        content += '  <td><span id="empdep2_' + i + '">' + allData[2] + '</span></td>'
                        // content += '  <td><span id="empcomp2_' + i + '">' + allData[3] + '</span></td>'
                       
                        content += '  <td><span id="empopopp_' + i + '">อนุมัติแล้ว</span></td>'
                        
                        content += '</tr>'

                    }
                    content += '</tbody>'
                    content += '</table>'
                    
                        
                    $('#makopolo').append(content);
                    // $('#exampleY'+ran).DataTable({
                    //     responsive: true,
                        
                    // });
              
       

    }



    function fetchInsider(datain,ki) {

       
        $('#makopolo').empty()
        dataAllFextrequesttoaccept = datain

        ////console.log("kokoko inside",dataAllFextrequesttoaccept)
       
                ////console.log(datain)
                   // var alladmin_ = data.split('alladmin_')[1]
                    var ran = Math.floor((Math.random(10)*1000));

                    var idf = "exampleX"+ran


                    var content = '<table id="'+idf+'" class="row-border" cellspacing="0" width="100%" style="background-color: #60b0f4;color: white;">'
                    content += '<thead>'
                    content += '<tr>'
                    content += '   <th>ลำดับ</th>'
                    content += '   <th>รหัส พนง</th>'
                    content += '   <th>เลขที่ ปชช</th>'
                    content += '   <th>ชื่อสกุล</th>'
                    content += '   <th>แผนก</th>'
                    // content += '   <th>บริษัท</th>'

                  




                    content += '   <th>อนุมัติการลงทะเบียน</th>'


                    content += '  </tr>'
                    content += '    </thead>'


                    content += '    <tbody>'

                    // '<input type="text"  id="youtube_' + _f[0] + '" value= "' + _f[6] + '"/>' +
                    //      '<input type="text"  id="gdrive_' + _f[0] + '" value= "' + _f[7] + '" />' +

                    for (var i = 1; i < datain.length ; i++) {
                        var allData = datain[i].split('xyx')

                        content += '<tr style="color:black">'
                        content += '  <td>' + (i) + '</td>'
                        content += '  <td><span id="empid_' + i + '">' + allData[4] + '</span></td>'
                        content += '  <td><span id="empcity_' + i + '">' + allData[0] + '</span></td>'
                        content += '  <td><span id="empname_' + i + '">' + allData[1] + '</span></td>'
                        content += '  <td><span id="empdep_' + i + '">' + allData[2] + '</span></td>'
                        // content += '  <td><span id="empcomp_' + i + '">' + allData[3] + '</span></td>'
                       
                     if(ki==0)   content += '  <td> <button type="button"  onclick="approve(' + i + ')"  style="background-color:teal;" class="btn btn-fill ">อนุมัติ</button></td>'
                        
                        content += '</tr>'

                    }
                    content += '</tbody>'
                    content += '</table>'
                    
                        
                    $('#makopolo').append(content);
                    $('#exampleX'+ran).DataTable({
                        responsive: true,
                        "oLanguage": {

                            "sSearch": "ค้นหา"

                        }
                    });
              
       

    }


    function fetch() {
        dataAllFext = []
        $.ajax({
            type: 'GET',
            url: "./itrytoshowproX.php",
            data: '',
            success: function (data) {
                ////console.log(data)
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')


                    var content = '<table id="example" class="row-border" cellspacing="0" width="100%" style="background-color: #60b0f4;color: white;">'
                    content += '<thead>'
                    content += '<tr>'
                    content += '   <th>ลำดับ</th>'
                    content += '   <th>ชื่อคลาสเรียน</th>'
                    content += '   <th>รหัสคลาสเรียน</th>'
                    content += '   <th>หลักสูตรวิชา</th>'
                    content += '   <th>รายละเอียดโดยย่อ</th>'
                    content += '   <th>ภาพประกอบ</th>'

                    content += '   <th>หลักสูตร</th>'
                    content += '   <th>วัน</th>'
                    content += '   <th>เวลา</th>'
                    content += '   <th>สถานที่</th>'
                    content += '   <th>จำนวนที่รับ</th>'
                    content += '   <th>สมัครแล้ว</th>'
                    content += '   <th>ครู</th>'

                    content += '   <th>ผู้ที่ต้องเรียน</th>'




                    content += '   <th>จัดการ</th>'
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
                      //  ////console.log("----", allData[i])
                        //$allHTML."".$row["id"].",".$row["username"].",".$row["name_"].",".$row["surname"].",".$row["password_"].",".$row["email"]
                        var _f = allData[i].split("^")
                        var j = i + 1

                        var wa = "0"
                        var ap = "0"
                        var fh = "0"
                        if(_f[14])  wa = ""+_f[14]
                        if(_f[15])  ap = ""+_f[15]
                        if(_f[16])  fh = ""+_f[16]
                       
                        ////console.log("wa ",wa)
                        ////console.log("ap ",ap)
                        ////console.log("fh ",fh)

                        var ind = {w:wa,a:ap,f:fh }
                        
                        dataAllFext.push(ind)

                        content += '<tr style="color:black">'
                        content += '  <td>' + j + '</td>'
                        content+= '<td style="display:none"><span id="youtube_' + _f[0] + '">' + _f[6] + '</span></td>'
                        content+= '<td style="display:none"><span id="gdrive_' + _f[0] + '">' + _f[7] + '</span></td>'
                        content += '  <td><span id="cat_' + _f[0] + '">' + _f[1] + '</span></td>'
                        content += '  <td><span id="catid_' + _f[0] + '">' + _f[4] + '</span></td>'
                        content += '  <td><span id="paped_' + _f[0] + '">' + _f[5] + '</span></td>'
                        content += '  <td><span>' + _f[2].substring(0, 20) + '...</span><div style="display:none" id="des_' + _f[0] + '">' + _f[2] + '...</div></td>'
                        content += '  <td><span id="img_' + _f[0] + '"><img src="upload/' + _f[3] + '" style="width:30%"/></span></td>'
                    

                        content += '  <td><span id="laksood_' + _f[0] + '">' + _f[6] + '</span></td>'
                        content += '  <td><span id="day_' + _f[0] + '">' + _f[7] + '</span></td>'
                        content += '  <td><span id="time_' + _f[0] + '">' + _f[8] + '</span></td>'
                        content += '  <td><span id="place_' + _f[0] + '">' + _f[9] + '</span></td>'
                        content += '  <td><span id="number_' + _f[0] + '">' + _f[10] + '</span></td>'
                        content += '  <td><span id="reserved_' + _f[0] + '">' + _f[11] + '</span></td>'
                        content += '  <td><span id="lecture_' + _f[0] + '">' + _f[12] + '</span></td>'
                        content += '  <td><span id="gg_' + _f[0] + '">' + _f[13] + '</span></td>'
                        content += '  <td> <button type="button"  onclick="addGroup(' + _f[0] + ')"  style="background-color:teal;" class="btn btn-fill ">จัดการกลุ่มเรียน</button></td>'
                        
                        var ki = 0
                        if(_f[17]=="close") ki = 1
                        content += '  <td> <button type="button"  onclick="anumat(' + _f[0]+","+i+","+ki+')"  style="background-color:teal;" class="btn btn-fill ">อนุมัติ</button></td>'

                        content += '  <td> <button type="button"  onclick="passclick(' + _f[0] + ')"  style="background-color:teal;" class="btn btn-fill ">แก้ไขข้อมูล</button></td>'
                        
                        content += '</tr>'

                    }
                    content += '</tbody>'
                    content += '</table>'
                    
                        
                    $('#iwat').append(content);
                    $('#example').DataTable({
                        
                        "oLanguage": {

                            "sSearch": "ค้นหาจัดการคลาสเรียน"

                        }
                    });
                }
                else {
                    ////console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });

    }

    function addPDF(id) {

        $('#myModal33').modal();
        $('#myModal33').show();
        $('#keyoffile').val(id)
        IDE = id
        ////console.log("ID ",id)

    }

    function jobjobjob(){

//console.log(IDE+"move this one to approved ")
var dataStringmm = 'id=' + IDE
   

    $.ajax({
        type: 'POST',
        url: "./itrytoupapprovedfin.php",
        data: dataStringmm,
        success: function (data) {
            ////console.log(data)
            if (data.indexOf('successfully') > 0) {
                $('#iwat').empty();
                $('#mdr').empty();

                //reload();
                $('#myModal3355').hide();
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
            //////console.log("fail ", errMsg)

            $('#yyy').css("display", "");
        }
    });



}

    function approve(key){

        //console.log(key+"move this one to approved ",dataAllFextrequesttoaccept[key])
        var dataStringmm = 'id=' + IDE
            + '&alla=' + dataAllFextrequesttoaccept[key]
           

            $.ajax({
                type: 'POST',
                url: "./itrytoupapproved.php",
                data: dataStringmm,
                success: function (data) {
                    ////console.log(data)
                    if (data.indexOf('successfully') > 0) {
                        $('#iwat').empty();
                        $('#mdr').empty();

                        //reload();
                        $('#myModal3355').hide();
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
                    //////console.log("fail ", errMsg)

                    $('#yyy').css("display", "");
                }
            });



    }


    function passclick(res) {

        $('#doornotdo').val("NO");

        var id = res
        var cat = $('#cat_' + id).text();
        var des = $('#des_' + id).html();
        var code = $('#catid_' + id).text();
        var pppp = $('#paped_' + id).text();
        
        var laksood = $('#laksood_' + id).text();
        var day_ = $('#day_' + id).text();
        var time_ = $('#time_' + id).text();
        var place_ = $('#place_' + id).text();
        var number_ = $('#number_' + id).text();
        var reserved = $('#reserved_' + id).text();
        var lecture = $('#lecture_' + id).text();
     
        ////console.log("passclick ", id)
        ////console.log("passclick ", cat)
        ////console.log("passclick ", des)
        ////console.log("passclick ", code)

        $('#myModal3').modal();
        $('#myModal3').show();
        $('#pass_older_id').val(id);
        $('#pass_older').val(cat);
        $('#pass_newer').val(des);
        $('#cat_new_id_old').val(code);

        

        //$('#laksoodold').val(laksood);
        $('#day_old').val(day_);
        $('#time_old').val(time_);
        $('#place_old').val(place_);
        $('#number_old').val(number_);
     //   $('#reserved').val(reserved);
        $('#lectureold').val(lecture);
        
        // $('#paped_new').val(pppp);


        $('#papeds_old').empty();
        $.ajax({
            type: 'GET',
            url: "./itrytoshowtype.php",
            data: '',
            success: function (data) {
               
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')

                   
                    var content = '<div class="form-group">'

                    content += '<select class="form-control" id="sel11">'



                    for (var i = 0; i < allData.length - 1; i++) {
                      //  ////console.log("----", allData[i])
                        //$allHTML."".$row["id"].",".$row["username"].",".$row["name_"].",".$row["surname"].",".$row["password_"].",".$row["email"]
                        var _f = allData[i].split("|||")
                        var j = i + 1

                        

                        content += '<option>' + _f[1] + '</option>'

                    }
                    content += '  </select>'
                    content += '   </div>'
                    $('#papeds_old').append(content);

                }
                else {
                    ////console.log("no data")
                }
            },
            failure: function (errMsg) {

            }
        });


        $('#laksoodold').empty();
        $.ajax({
            type: 'GET',
            url: "./itrytoshowtypesub.php",
            data: '',
            success: function (data) {
              //  console.log("kokokokoko", data)
                if (data.indexOf('0000000000') > 0) {
                    var alladmin_ = data.split('alladmin_')[1]
                    var allData = alladmin_.split('0000000000')


                    var content = '<div class="form-group">'

                    content += '<select class="form-control" id="lak11">'



                    for (var i = 0; i < allData.length - 1; i++) {
                      //  ////console.log("----", allData[i])
                        //$allHTML."".$row["id"].",".$row["username"].",".$row["name_"].",".$row["surname"].",".$row["password_"].",".$row["email"]
                        var _f = allData[i].split("|||")
                        var j = i + 1

                        content += '<option>' + _f[1] + '</option>'

                    }
                    content += '  </select>'
                    content += '   </div>'
                  //  $('#laksood').append(content);
                  console.log(content)
                    $('#laksoodold').append(content);
                    //$('#laksood').append(content);

                }
                else {
                    ////console.log("no data")
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
        var code = $('#cat_new_id_old').val()
        var pppp = $('#lak11').val()

        var youtube = $('#you_tubex').val()
        var gdrive = $('#g_drivex').val()

        //alert(pppp)


        var a = $('#pass_older').val()
        var b = $('#pass_newer').val()
        var c = $('#cat_new_id_old').val()

        
         var laksood = $('#sel11').val()
         var day_ = $('#day_old').val()
         var time_ = $('#time_old').val()
         var place_ =$('#place_old').val()
         var number_ = $('#number_old').val()
        // var reserved = $('#reservedold').val()
         var lecture = $('#lectureold').val()


        if (a.length < 1 || b.length < 1 || c.length < 1) {
            //////console.log("ข้อมูลไรหัสไม่ถูกต้อง")
            $('#yyy').css("display", "");
        }
        else {
            $('#yyy').css("display", "none");
            //////console.log(dataString)


            var doooo = $('#doornotdo').val();




            $uploadCrop_.croppie('result', {
                type: 'canvas',
                size: 'original'
            }).then(function (resp) {

      
                $.ajax({
                    url: "ajaxpro7.php",
                    type: "POST",
                    data: { "image": resp, "cat": cat, "des": des, "doooo": doooo, "id": id_e, "code": code, "paped": pppp,
                        "day_":day_,
                        "time_":time_ ,
                        "place_":place_,
                        "number_":number_ ,
                        "laksood":laksood ,
                        "lecture":lecture 
                    
                    },
                    success: function (data) {
                        // html = '<img src="' + resp + '" />';
                        // $("#upload-demo-i").html(html);
                        ////console.log(data)

                        if (data.indexOf('successfully') > 0) {
                            $('#iwat').empty();
                            $('#mdr').empty();
                            $('#myModal3').hide();
                            //reload();
                            $('#myModal2').modal();
                            $('#myModal2').show();
                            $('#mdr').append(

                                "<span style='color:green'> แก้ไขข้อมูลคลาสเรียนสำเร็จ </span>"
                            )

                            fetch();


                        }
                        else {
////console.log(data)

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
        //////console.log("edit ", id)
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
            //////console.log("กรอกไม่ครบ")
            $('#xxx').css("display", "");
        }
        else {
            $('#xxx').css("display", "none");
            //////console.log(dataString)

            $.ajax({
                type: 'POST',
                url: "./itrytoup.php",
                data: dataString,
                success: function (data) {
                    //////console.log("Goooooo==>", data)
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
                    //////console.log("fail ", errMsg)

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

        ////console.log("slectpr  ", $('#sel1').val())
        var dataString = 'cat=' + $('#cat_new').val()
            + '&des=' + $('#cat_des_new').val()
            var youtube = $('#you_tube').val()
        var gdrive = $('#g_drive').val()

        var cat = $('#cat_new').val()
        var cat_id = $('#cat_new_id').val()
        var des = $('#cat_des_new').val()
        var paped = $('#sel1').val()


        var a = $('#cat_new').val();
        var b = $('#cat_new_id').val()
        var c = $('#cat_des_new').val()


        var laksood = $('#lak1').val()
         var day_ = $('#day_').val()
         var time_ = $('#time_').val()
         var place_ =$('#place_').val()
         var number_ = $('#number_').val()
       //  var reserved = $('#reserved').val()
         var lecture = $('#lecture').val()

         ////console.log("WTFUCKKKK1111111 ",paped)
         ////console.log("WTFUCKKKK2222222 ",laksood)


        if (a.length < 1 || b.length < 1 || c.length < 1) {
            ////console.log("กรอกไม่ครบ" ,a)
            ////console.log("กรอกไม่ครบ" ,b)
            ////console.log("กรอกไม่ครบ" ,c)
            $('#eee').css("display", "");
        }
        else {
            $('#eee').css("display", "none");
            //////console.log(dataString)


            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'original'
            }).then(function (resp) {


                $.ajax({
                    url: "ajaxpro8.php",
                    type: "POST",
                    data: { "image": resp, "cat": cat, "des": des, "catid": cat_id, "paped": paped,
                        "day_":day_,
                        "time_":time_ ,
                        "place_":place_,
                        "number_":number_ ,
                      "laksood":laksood,
                        "lecture":lecture 
                     },
                    success: function (data) {
                        // html = '<img src="' + resp + '" />';
                        // $("#upload-demo-i").html(html);
                        ////console.log(data)

                        if (data.indexOf('successfully') > 0) {
                            $('#iwat').empty();
                            $('#mdr').empty();
                            $('#myModal').hide();
                            //reload();
                            $('#myModal2').modal();
                            $('#myModal2').show();
                            $('#mdr').append(

                                "<span style='color:green'> เพิ่มข้อมูลจัดการคลาสเรียนสำเร็จ </span>"
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
            //         //////console.log(data)
            //         if (data.indexOf('successfully') > 0) {
            //             $('#iwat').empty();
            //             $('#mdr').empty();
            //             $('#myModal').hide();
            //             //reload();
            //             $('#myModal2').modal();
            //             $('#myModal2').show();
            //             $('#mdr').append(

            //                 "<span style='color:green'> เพิ่มข้อมูลจัดการคลาสเรียนสำเร็จ </span>"
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
            //         //////console.log("fail ", errMsg)
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
    $(document).ready(function () {
        var dataAllFextrequesttoaccept = []

        var dataAllFext = []

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
                ////console.log('jQuery bind complete');
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
                ////console.log('jQuery bind complete');

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
                    ////console.log(data)
                }
            });
        });
    });


</script>


</html>

<? } ?>