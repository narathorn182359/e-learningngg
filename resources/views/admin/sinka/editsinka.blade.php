@extends('layouts.app')


@section('css')


<link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/{version}/croppie.min.css">

@endsection

@section('js')

<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/croppie/{version}/croppie.min.js')}}"></script>
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
      // Summernote
      $('.textarea').summernote()
    })
  </script>

@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">เพิ่มแบนเนอร์</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">เพิ่มแบนเนอร์</li>
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
          <a href="{{url('/sinka')}}" class="btn btn-info">ย้อนกลับ<a/>
          </div>
        </div>
    </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                    เพิ่มแบนเนอร์

                </h3>
                <!-- tools box -->
                <div class="card-tools">

                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
            <form  action="{{route('sinka.update',$sinka->id)}}"   method="POST"   enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <label>Link:</label>
                    <input type="text" class="form-control"  id="link" name="link" value="{{$sinka->link}}"  required/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                     <label>ประเภท:</label>
                    <select class="form-control" id="type_" name="type_"  required>
                      <option value="{{$sinka->type_}}">{{$sinka->type_}}</option>
                      <option value="สินค้า">สินค้า</option>
                      <option value="บทความ">บทความ</option>
                      <option value="กิจกรรม">กิจกรรม</option>
                      <option value="สมัครงาน">สมัครงาน</option>
                    </select>
                    </div>
                  </div>
              </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <label>รูปภาพ:</label>
                  <input type="file"    id="img_" name="img_"  required>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                     <label>รูปภาพเดิม:</label>
                    <img src="{{url('/upload/'.$sinka->img_)}}"  height="100"  width="100">
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
