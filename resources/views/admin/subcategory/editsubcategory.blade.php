@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">เพิ่มหลักสูตร</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">เพิ่มหลักสูตร</li>
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
          <a href="{{url('/subcategory')}}" class="btn btn-info">ย้อนกลับ<a/>
          </div>
        </div>
    </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                    เพิ่มหลักสูตร

                </h3>
                <!-- tools box -->
                <div class="card-tools">

                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('subcategory.update',$subcategory->id)}}"  method="POST">
                    @csrf
                    @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                       <label>ชื่อประเภท:</label>
                       <input type="text" class="form-control"  id="name_" name="name_" value="{{$subcategory->name_}}" required/>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                       <label>หมวดหมู่:</label>
                      <select class="form-control" id="catsub" name="catsub"   required>
                    <option value="{{$subcategory->catsub}}">{{$subcategory->catsub}}</option>
                      @foreach ($category as $item)
                      <option value="{{$item->name_}}">{{$item->name_}}</option>
                      @endforeach
                      </select>
                      </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <label>รายละเอียดโดยย่อ:</label>
                     <input type="text" class="form-control"  id="des_" name="des_"   value="{{$subcategory->des_}}" required/>
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
