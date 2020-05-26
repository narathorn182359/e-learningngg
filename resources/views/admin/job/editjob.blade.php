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
            <h1 class="m-0 text-dark">แก้ไขสมัครงาน</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">แก้ไขสมัครงาน</li>
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
          <a href="{{url('/job')}}" class="btn btn-info">ย้อนกลับ<a/>
          </div>
        </div>
    </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                    แก้ไขสมัครงาน

                </h3>
                <!-- tools box -->
                <div class="card-tools">

                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
              <form  action="{{route('job.update',$job->id)}}"   method="POST"   enctype="multipart/form-data">
                  @csrf
                 @method("PUT")

              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <label>ชื่องาน:</label>
                     <input type="text" class="form-control"  id="name_" name="name_"  value="{{$job->name_}}" required/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                     <label>แผนก:</label>
                     <input type="text" class="form-control"  id="type_" name="type_"  value="{{$job->type_}}" required/>
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
                     <label>รูปภาพ:</label>
                    <img src="{{url('/upload/'.$job->img_)}}"  width="100"  height="100">
                    </div>
                  </div>
            </div>
                <div class="mb-3">
                  <textarea   id="des_"  name="des_"   class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            {{$job->des_}}

                        </textarea>
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
