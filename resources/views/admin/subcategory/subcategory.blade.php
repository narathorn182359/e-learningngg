@extends('layouts.app')

@section('css')


<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">


@endsection

@section('js')

<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('js/getsubcategory.js')}}"></script>
<script src="{{asset('js/subcategory.js')}}"></script>


@endsection




@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">จัดการหลักสูตร</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">จัดการหลักสูตร</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="form-group">
              <div class="col-md-12">
            <a href="{{route('subcategory.create')}}" class="btn btn-success">เพิ่มหลักสูตร<a/>
            </div>
           </div>
        </div>
           <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">หลักสูตร</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-1">

                      <input type="hidden"  value="{{url('/get_subcategory')}}" id="url_subcategory" name="url_subcategory" />
                        <table id="subcategory" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>ชื่อประเภท</th>
                            <th>หมวดหมู่</th>
                            <th>รายละเอียดโดยย่อ</th>
                            <th>เพิ่มเติม</th>
                          </tr>
                          </thead>
                          <tbody>

                          </tbody>
                          <tfoot>
                          <tr>
                            <th>ชื่อประเภท</th>
                            <th>หมวดหมู่</th>
                            <th>รายละเอียดโดยย่อ</th>
                            <th>เพิ่มเติม</th>
                          </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                <!-- /.card -->

                <!-- /.card -->
              </div>
              <!-- /.col-md-6 -->

              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
          </div>
      </div>
<!-- /.content -->
</div>
    @endsection

