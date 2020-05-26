@extends('layouts.app')


@section('css')


<link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.css')}}">


@endsection

@section('js')
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
      // Summernote
      $('.textarea').summernote()
    })
  </script>

<script type="text/javascript">



var resize = $('#upload-demo').croppie({
        enableExif: true,
        enableOrientation: true,
        viewport: { // Default { width: 100, height: 100, type: 'square' }
            width: 445,
            height: 307,
            type: 'square' //square
        },
        boundary: {
            width: 500,
            height: 400
        }
    });

    $('#image').on('change', function () {
      var reader = new FileReader();
        reader.onload = function (e) {
          resize.croppie('bind',{
            url: e.target.result
          }).then(function(){
            console.log('jQuery bind complete');
          });
        }
        reader.readAsDataURL(this.files[0]);


    });


    </script>

<script>
    function mycroppie() {
        resize.croppie('result', {
        type: 'canvas',
        size: 'viewport'
      }).then(function (img) {
        document.getElementById("img_").value = img;
        console.log(img)

      });

    }
    </script>













@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">แก้ไขบทความ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">แก้ไขบทความ</li>
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
          <a href="{{url('/article')}}" class="btn btn-info">ย้อนกลับ<a/>
          </div>
        </div>
    </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                    แก้ไขบทความ

                </h3>
                <!-- tools box -->
                <div class="card-tools">

                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
                <form  action="{{route('article.update',$article->id)}}"   method="POST"   enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <label>ชื่อบทความ:</label>
                    <input type="text" class="form-control"  id="name_" name="name_"  value="{{$article->name_}}" required/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                     <label>ประเภท:</label>
                    <select class="form-control" id="type_" name="type_" required>
                    <option value="{{$article->type_}}">{{$article->type_}}</option>
                      <option value="ความเชื่อ/การรักษา">ความเชื่อ/การรักษา</option>
                      <option value="เกร็ดความรู้">เกร็ดความรู้</option>
                      <option value="กิจกรรม">กิจกรรม</option>
                    </select>
                    </div>
                  </div>
              </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                     <label>รูปภาพ พรีวิวิ:</label>
                     <div class="col-md-4 text-center">
                      <div id="upload-demo" ></div>
                      </div>
                      <div class="col-md-4" style="padding:5%;">
                      <strong>Select image to crop:</strong>

                      <input type="file" id="image" name="img_" >
                      </div>
                    </div>
                  </div>
           <input type="hidden" name="img" value="" id="img_">
                <div class="col-md-6">
                    <div class="form-group">
                     <label>รูปภาพเดิม:</label>
                    <img src="{{url('/upload/'.$article->img_)}}"  width="345"  height="207" >
                    </div>
                  </div>
            </div>
                <div class="mb-3">
                  <textarea   id="des_"  name="des_"   class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                            {{$article->des_}}
                        </textarea>
                </div>


                <input type="submit" class="btn btn-success" value="บันทึก"  onclick="mycroppie()" />
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
