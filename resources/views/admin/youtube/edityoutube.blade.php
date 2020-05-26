@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">แก้ไขข้อมูล</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">แก้ไขข้อมูล</li>
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
          <a href="{{url('/youtube')}}" class="btn btn-info">ย้อนกลับ<a/>
          </div>
        </div>
    </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                    แก้ไขข้อมูล

                </h3>
                <!-- tools box -->
                <div class="card-tools">

                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
              <form action="{{route('youtube.update',$youtube->id)}}"  method="POST">
                  @csrf
                  @method('PUT')

              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <label>Link youtube:</label>
                    <input type="text" class="form-control"  id="linkyoutube" name="linkyoutube"   value="{{$youtube->linkyoutube}}"  required/>
                    </div>
                  </div>

              </div>

            <input type="submit"  class="btn btn-success"  value="บันทึก">
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
