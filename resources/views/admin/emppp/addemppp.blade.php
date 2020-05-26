@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">เพิ่มพนักงาน</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">เพิ่มพนักงาน</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="form-group">
            <div class="col-md-12">
          <a href="{{url('/emppp')}}" class="btn btn-info">ย้อนกลับ<a/>
          </div>
        </div>
    </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                    เพิ่มหมวดหมู่

                </h3>
                <!-- tools box -->

                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="{{route('emppp.store')}}"  method="POST"   enctype="multipart/form-data">
               @csrf
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <label>รหัสพนักงาน:</label>
                     <input type="text" class="form-control"  id="emp_id" name="emp_id"  required/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                     <label>รหัส ปชช:</label>
                     <input type="text" class="form-control"  id="emp_idcard" name="emp_idcard"  required/>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <label>คำนำหน้า:</label>
                   <input type="text" class="form-control"  id="name_title" name="name_title"  required/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                   <label>ชื่อ:</label>
                   <input type="text" class="form-control"  id="name" name="name"  required/>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <label>สกุล:</label>
                   <input type="text" class="form-control"  id="last_name" name="last_name"  required/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                   <label>ตำแหน่ง:</label>
                   <input type="text" class="form-control"  id="department" name="department"  required/>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <label>แผนก:</label>
                   <input type="text" class="form-control"  id="position" name="position"  required/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                   <label>วันเริ่มงาน:</label>
                   <input type="text" class="form-control"  id="start_work" name="start_work"  required/>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <label>วันเกิด:</label>
                   <input type="text" class="form-control"  id="company" name="company"  required/>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                     <label>รูป:</label>
                     <input type="file"   id="pic"  name="pic"  required>
                    </div>
                  </div>
            </div>
              <input type="submit" class="btn btn-success" value="บันทึก"  />
            </form>
              </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
      </section>
<!-- /.content -->
</div>





@endsection
