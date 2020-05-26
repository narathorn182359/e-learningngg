@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">เพิ่มชุดข้อสอบ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item active">เพิ่มชุดข้อสอบ</li>
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
                    ชุดข้อสอบ

                </h3>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
            <form  action="{{route('settest.store')}}"   method="POST"   enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_vichar"   value="{{$id}}">


           @forelse ($test as $item)
           <input type="text"    name="question[]"    value="{{$item->question}}"    id="q1"   placeholder="คำถามข้อที่ 1"  required/><br/>
           <input type="text"    name="ch1[]"  value="{{$item->choice1}}"     id="aq1"  placeholder="ตัวเลือกที่ 1" required/>
           <input type="text"    name="ch2[]"   value="{{$item->choice2}}"   id="bq1"  placeholder="ตัวเลือกที่ 2" required/><br/>
           <input type="text"    name="ch3[]"   value="{{$item->choice3}}"   id="cq1" placeholder="ตัวเลือกที่ 3" required/>
           <input type="text"    name="ch4[]"   value="{{$item->choice4}}"   id="dq1"  placeholder="ตัวเลือกที่ 4" required/><br/>
           <input type="text"    name="aw[]"   value="{{$item->answer}}"   id="ansq1"  placeholder="เฉลย" required/>
           <br/><br/>



           @empty
           <input type="text"    name="question[]"    value=""    id="q1"   placeholder="คำถามข้อที่ 1"  required/><br/>
           <input type="text"    name="ch1[]"  value=""     id="aq1"  placeholder="ตัวเลือกที่ 1" required/>
           <input type="text"    name="ch2[]"   value=""   id="bq1"  placeholder="ตัวเลือกที่ 2" required/><br/>
           <input type="text"    name="ch3[]"   value=""   id="cq1" placeholder="ตัวเลือกที่ 3" required/>
           <input type="text"    name="ch4[]"   value=""   id="dq1"  placeholder="ตัวเลือกที่ 4" required/><br/>
           <input type="text"    name="aw[]"   value=""   id="ansq1"  placeholder="เฉลย" required/>
           <br/><br/>

           <input type="text"    name="question[]"    value=""    id="q1"   placeholder="คำถามข้อที่ 2"  required/><br/>
           <input type="text"    name="ch1[]"  value=""     id="aq1"  placeholder="ตัวเลือกที่ 1" required/>
           <input type="text"    name="ch2[]"   value=""   id="bq1"  placeholder="ตัวเลือกที่ 2" required/><br/>
           <input type="text"    name="ch3[]"   value=""   id="cq1" placeholder="ตัวเลือกที่ 3" required/>
           <input type="text"    name="ch4[]"   value=""   id="dq1"  placeholder="ตัวเลือกที่ 4" required/><br/>
           <input type="text"    name="aw[]"   value=""   id="ansq1"  placeholder="เฉลย" required/>
           <br/><br/>


           <input type="text"    name="question[]"    value=""    id="q1"   placeholder="คำถามข้อที่ 3"  required/><br/>
           <input type="text"    name="ch1[]"  value=""     id="aq1"  placeholder="ตัวเลือกที่ 1" required/>
           <input type="text"    name="ch2[]"   value=""   id="bq1"  placeholder="ตัวเลือกที่ 2" required/><br/>
           <input type="text"    name="ch3[]"   value=""   id="cq1" placeholder="ตัวเลือกที่ 3" required/>
           <input type="text"    name="ch4[]"   value=""   id="dq1"  placeholder="ตัวเลือกที่ 4" required/><br/>
           <input type="text"    name="aw[]"   value=""   id="ansq1"  placeholder="เฉลย" required/>
           <br/><br/>

           <input type="text"    name="question[]"    value=""    id="q1"   placeholder="คำถามข้อที่ 4"  required/><br/>
           <input type="text"    name="ch1[]"  value=""     id="aq1"  placeholder="ตัวเลือกที่ 1" required/>
           <input type="text"    name="ch2[]"   value=""   id="bq1"  placeholder="ตัวเลือกที่ 2" required/><br/>
           <input type="text"    name="ch3[]"   value=""   id="cq1" placeholder="ตัวเลือกที่ 3" required/>
           <input type="text"    name="ch4[]"   value=""   id="dq1"  placeholder="ตัวเลือกที่ 4" required/><br/>
           <input type="text"    name="aw[]"   value=""   id="ansq1"  placeholder="เฉลย" required/>
           <br/><br/>

           <input type="text"    name="question[]"    value=""    id="q1"   placeholder="คำถามข้อที่ 5"  required/><br/>
           <input type="text"    name="ch1[]"  value=""     id="aq1"  placeholder="ตัวเลือกที่ 1" required/>
           <input type="text"    name="ch2[]"   value=""   id="bq1"  placeholder="ตัวเลือกที่ 2" required/><br/>
           <input type="text"    name="ch3[]"   value=""   id="cq1" placeholder="ตัวเลือกที่ 3" required/>
           <input type="text"    name="ch4[]"   value=""   id="dq1"  placeholder="ตัวเลือกที่ 4" required/><br/>
           <input type="text"    name="aw[]"   value=""   id="ansq1"  placeholder="เฉลย" required/>
           <br/><br/>

           <input type="text"    name="question[]"    value=""    id="q1"   placeholder="คำถามข้อที่ 6"  required/><br/>
           <input type="text"    name="ch1[]"  value=""     id="aq1"  placeholder="ตัวเลือกที่ 1" required/>
           <input type="text"    name="ch2[]"   value=""   id="bq1"  placeholder="ตัวเลือกที่ 2" required/><br/>
           <input type="text"    name="ch3[]"   value=""   id="cq1" placeholder="ตัวเลือกที่ 3" required/>
           <input type="text"    name="ch4[]"   value=""   id="dq1"  placeholder="ตัวเลือกที่ 4" required/><br/>
           <input type="text"    name="aw[]"   value=""   id="ansq1"  placeholder="เฉลย" required/>
           <br/><br/>

           <input type="text"    name="question[]"    value=""    id="q1"   placeholder="คำถามข้อที่ 7"  required/><br/>
           <input type="text"    name="ch1[]"  value=""     id="aq1"  placeholder="ตัวเลือกที่ 1" required/>
           <input type="text"    name="ch2[]"   value=""   id="bq1"  placeholder="ตัวเลือกที่ 2" required/><br/>
           <input type="text"    name="ch3[]"   value=""   id="cq1" placeholder="ตัวเลือกที่ 3" required/>
           <input type="text"    name="ch4[]"   value=""   id="dq1"  placeholder="ตัวเลือกที่ 4" required/><br/>
           <input type="text"    name="aw[]"   value=""   id="ansq1"  placeholder="เฉลย" required/>
           <br/><br/>


           <input type="text"    name="question[]"    value=""    id="q1"   placeholder="คำถามข้อที่ 8"  required/><br/>
           <input type="text"    name="ch1[]"  value=""     id="aq1"  placeholder="ตัวเลือกที่ 1" required/>
           <input type="text"    name="ch2[]"   value=""   id="bq1"  placeholder="ตัวเลือกที่ 2" required/><br/>
           <input type="text"    name="ch3[]"   value=""   id="cq1" placeholder="ตัวเลือกที่ 3" required/>
           <input type="text"    name="ch4[]"   value=""   id="dq1"  placeholder="ตัวเลือกที่ 4" required/><br/>
           <input type="text"    name="aw[]"   value=""   id="ansq1"  placeholder="เฉลย" required/>
           <br/><br/>


           <input type="text"    name="question[]"    value=""    id="q1"   placeholder="คำถามข้อที่ 9"  required/><br/>
           <input type="text"    name="ch1[]"  value=""     id="aq1"  placeholder="ตัวเลือกที่ 1" required/>
           <input type="text"    name="ch2[]"   value=""   id="bq1"  placeholder="ตัวเลือกที่ 2" required/><br/>
           <input type="text"    name="ch3[]"   value=""   id="cq1" placeholder="ตัวเลือกที่ 3" required/>
           <input type="text"    name="ch4[]"   value=""   id="dq1"  placeholder="ตัวเลือกที่ 4" required/><br/>
           <input type="text"    name="aw[]"   value=""   id="ansq1"  placeholder="เฉลย" required/>
           <br/><br/>

           <input type="text"    name="question[]"    value=""    id="q1"   placeholder="คำถามข้อที่ 10"  required/><br/>
           <input type="text"    name="ch1[]"  value=""     id="aq1"  placeholder="ตัวเลือกที่ 1" required/>
           <input type="text"    name="ch2[]"   value=""   id="bq1"  placeholder="ตัวเลือกที่ 2" required/><br/>
           <input type="text"    name="ch3[]"   value=""   id="cq1" placeholder="ตัวเลือกที่ 3" required/>
           <input type="text"    name="ch4[]"   value=""   id="dq1"  placeholder="ตัวเลือกที่ 4" required/><br/>
           <input type="text"    name="aw[]"   value=""   id="ansq1"  placeholder="เฉลย" required/>
           <br/><br/>

           @endforelse

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
