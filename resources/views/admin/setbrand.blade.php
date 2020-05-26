@extends('layouts.app')

@section('js')

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
            <h1 class="m-0 text-dark">จัดการ brand</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">จัดการ brand</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="row">
            <div class="form-group">
            <div class="col-md-12">
          <a href="{{url('/grouplear/'.$idd)}}" class="btn btn-info">ย้อนกลับ<a/>
          </div>
        </div>
    </div>
  <div class="container-fluid">
     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title"></h3>
              </div>
            </div>
            <div class="card-body">

                <div class="form-group clearfix">
                    <div class="icheck-danger d-inline">
                      <input type="checkbox" id="all" onclick="toggle(this);">
                      <label for="all">
                         เลือกทั้งหมด
                      </label>
                    </div>
                  </div>
                <form action="{{url('save_brand_set')}}" method="POST">
                @csrf
                <input  type="hidden"  name="id_position" id="id_position"  value="{{$id}}">
                <input  type="hidden"  name="id_vichar" id="id_vichar"  value="{{$idd}}">
                <div class="row" >
                @isset($brand_r)
                <?php  $i =0; ?>
                @foreach ($brand_r as $item)
                <div class="col-md-4">
                    <div class="form-group clearfix">
                        <div class="icheck-danger d-inline">
                        <input type="checkbox" id="brand{{$i}}"  name="brand[]" value="{{$item}}"   >
                          <label for="brand{{$i}}">
                          BRAND    {{$item}}
                          </label>
                        </div>
                      </div>
                    </div>
                     <?php  $i++;  ?>
                    @endforeach
                @endisset
                @isset($brand_r2)
                <?php  $i =0; ?>
                @foreach ($brand_r2 as $item)
                <div class="col-md-4">
                    <div class="form-group clearfix">
                        <div class="icheck-danger d-inline">
                            <input type="checkbox" id="brand{{$i}}"  name="brand[]" value="{{$item['brand']}}"   {{$item['checked']}}>
                              <label for="brand{{$i}}">
                              BRAND   {{$item['brand']}}
                              </label>
                            </div>
                      </div>
                    </div>
                     <?php  $i++;  ?>
                    @endforeach
                @endisset


            </div>
            <input type="submit"  class="btn btn-success" value="บันทึก">
        </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
@endsection
