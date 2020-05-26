@extends('layouts.app')


@section('css')


<link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/{version}/croppie.min.css">
 <!-- iCheck for checkboxes and radio inputs -->
 <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@endsection

@section('js')

<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/croppie/{version}/croppie.min.js')}}"></script>
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
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
            <h1 class="m-0 text-dark">   เพิ่มผู้เรียน {{$product->name_}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">   เพิ่มผู้เรียน {{$product->name_}}</li>
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
          <a href="{{url('/grouplear/'.$product->id.'/edit')}}" class="btn btn-info">ย้อนกลับ<a/>
          </div>
        </div>
    </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                    เพิ่มผู้เรียน {{$product->name_}}

                </h3>
                <!-- tools box -->
                <div class="card-tools">

                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
                <div class="form-group clearfix">
                    <div class="icheck-danger d-inline">
                      <input type="checkbox" id="all" onclick="toggle(this);">
                      <label for="all">
                         เลือกทั้งหมด
                      </label>
                    </div>

                  </div>
              <form  action="{{route('grouplear.store')}}"   method="POST"   enctype="multipart/form-data">
                  @csrf


              <input type="hidden"  value="{{$product->id}}" name="id_vichar"  id="id_vichar">
                  <div class="row">
                      @isset($position)
                      @foreach ($position as $item)

                      <div class="col-md-4">
                          <div class="form-group clearfix">
                              <div class="icheck-danger d-inline">
                                <input type="checkbox" id="position{{$item['id']}}"  name="position[]" value="{{$item['id']}}"   {{$item['checked']}}>
                                <label for="position{{$item['id']}}">
                                    {{$item['name_posi']}}
                                </label>
                              </div>
                              @if($item['checked'] != '')
                                <a href="{{url('/set_brand/'.$item['id'].'/'.$product->id)}}"  >เพิ่มแบน</a>
                                @else
                                <a href="{{url('/set_brand/'.$item['id'].'/'.$product->id)}} " hidden >เพิ่มแบน</a>
                                @endif
                            </div>
                          </div>

                          @endforeach
                      @endisset

                @isset($position_2)
                      @foreach ($position_2 as $item)

                      <div class="col-md-4">
                          <div class="form-group clearfix">
                              <div class="icheck-danger d-inline">
                                <input type="checkbox" id="position{{$item->id}}"  name="position[]" value="{{$item->id}}"   >
                                <label for="position{{$item->id}}">

                                    {{$item->name_posi}}
                                </label>
                              </div>

                            </div>
                          </div>
                          @endforeach
                      @endisset
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
