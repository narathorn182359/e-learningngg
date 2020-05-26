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
            <h1 class="m-0 text-dark">เพิ่มวิชา</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">เพิ่มวิชา</li>
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
          <a href="{{url('/produc')}}" class="btn btn-info">ย้อนกลับ<a/>
          </div>
        </div>
    </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                    เพิ่มวิชา

                </h3>
                <!-- tools box -->
                <div class="card-tools">

                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
              <form  action="{{route('produc.store')}}"   method="POST"   enctype="multipart/form-data">
@csrf


              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <label>ชื่อวิชา:</label>
                     <input type="text" class="form-control"  id="name_" name="name_"  required/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                     <label>รหัสวิชา:</label>
                     <input type="text" class="form-control"  id="code_" name="code_"  required/>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   <label>หมวดหมู่:</label>
                  <select class="form-control" id="paped" name="paped" required>
                <option value="">เลือก</option>
                  @foreach ($category as $item)
                  <option value="{{$item->name_}}">{{$item->name_}}</option>
                  @endforeach
                  </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                   <label>หลักสูตรวิชา:</label>

                   <select  class="form-control"  id="mm" name="mm"  required>
                    <option value="">เลือก</option>
                    @foreach ($subcategory as $item)
                    <option value="{{$item->name_}}">{{$item->name_}}</option>
                    @endforeach

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

                    <input type="file" id="image"  required>
                    </div>
                  </div>
                </div>
         <input type="hidden" name="img_" value="" id="img_">

            </div>
                <div class="mb-3">
                  <textarea   id="des_"  name="des_"   class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
