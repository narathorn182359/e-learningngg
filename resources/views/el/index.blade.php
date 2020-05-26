<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/Logo-NGG.jpg" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>NGG</title>

    <!-- Icon css link -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css" rel="stylesheet">
    <link href="{{asset('EL/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('EL/vendors/line-icon/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{asset('EL/vendors/elegant-icon/style.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('EL/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.min.css')}}" rel="stylesheet">
    <!-- Rev slider css -->
    <link href="{{asset('EL/vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('EL/vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('EL/vendors/revolution/css/navigation.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset('EL/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('EL/vendors/bootstrap-selector/css/bootstrap-select.min.css')}}" rel="stylesheet">

    <link href="{{asset('EL/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('EL/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=1974759742767293&autoLogAppEvents=1"></script>
<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
      {{--   <script type="text/javascript" src="./mainin.js"></script>
        <script type="text/javascript" src="./mainin2.js"></script>
        <script type="text/javascript" src="./mainbanner.js"></script>
        <script type="text/javascript" src="./mainbannerrec.js"></script>
        <script type="text/javascript" src="./mainbannerrecyou.js"></script>
        <!-- <script type="text/javascript" src="./mainbannerrecyouvicha.js"></script> -->
        <script type="text/javascript" src="./mainbannerrecyouknow.js"></script>
        <script type="text/javascript" src="./mainbannerrecyousinka.js"></script>
        <script type="text/javascript" src="./mainbannerpro.js"></script> --}}
</head>







<style>



.text22 {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 3; /* number of lines to show */
   -webkit-box-orient: vertical;
}
.text23 {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 1; /* number of lines to show */
   -webkit-box-orient: vertical;
}

body {
        font-family: 'Prompt', sans-serif !important;
    }
</style>
<style>
    .fooM {
        display: none;
    }

    .fooW {
        display: flex;
    }

    .topM {
        display: none;
    }

    .topW {
        display: flex;
    }

    .topNav {
        display: flex;
    }
    @media only screen and (max-width: 800px) {


   .topM {
       display: flex;
   }

   .topW {
       display: none;
   }

   .topNav {
       display: none;
   }
}


</style>




<style>
    .swiper-container {
      width: 100%;
      height: 400px;
    }

    .swiper-slide {


      background: #fff;


      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>

<body>

    <!--================Top Header Area =================-->
    <div class="header_top_area topW">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-6"
                    style="display:flex;justify-content:center;align-items:center;flex-direction:column">
                    <div class="top_header_middle">
                        <a href="#" style="font-family:Prompt ; font-size: 18px ; color:#999"><i
                                class="fa fa-phone" style="color:#444"></i>
                            Call Us: <span style="font-size:15px">065-871-7999</span></a>
                        <a href="#" style="font-family:Prompt ; font-size: 18px ; color:#999"><i
                                class="fa fa-envelope" style="color:#444"></i> Email: <span
                                style="font-size:15px">hrd3@ciengems.com</span></a>
                    </div>
                    <img  id="NGG_Logo" class="blur" src="img/NGG_Logo_Red.png" alt="" style="width:20%;margin-top: 20px">
                </div>
                <div class="col-lg-3">
                    <div class="top_right_header">
                        <ul class="header_social">
                            <div style="display: flex;justify-content:center;align-items: center;margin-top: 10px">
                                <a href="https://www.facebook.com/WeareNGG/"><img src="img/social/Facebook.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                                <a href="https://www.instagram.com/wearengg/?hl=th"><img src="img/social/Instagram.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                                <a href="https://www.youtube.com/channel/UCfQWkZzFaqPOn22wZ0_a8aA?view_as=subscriber"><img src="img/social/Youtube.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                                <a href="https://twitter.com/ngg_we"><img src="img/social/Twitter.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                                <a href="https://line.me/R/ti/p/%40idi6214g"><img src="img/social/Call.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                            </div>
                        </ul>
                        <ul class="top_right" style="display:flex;justify-content: center ; align-items: center">
                            <li class="user">

                                 @if(Auth::user())

                                    <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();"  style="font-size:12px; height: 50px;display:flex;justify-content: center ; align-items: center">
                                        <span>ออกจากระบบ</span>
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>




                                 @else

                                 <a href="{{url('/loginuser')}}"
                                 style="font-size:12px; height: 50px;display:flex;justify-content: center ; align-items: center">
                                 <span>เข้าสู่ระบบ</span>
                             </a>


                                 @endif










                            </li>

                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="header_top_area topM">
        <div class="container">
            <div class="row">
                <div class="">
                    <nav role="navigation">
                        <div id="menuToggle" style="position:absolute ;top:20px ;left:20px">
                            <input type="checkbox" onclick="closeMenu()"/>
                            <span></span>
                            <span></span>
                            <span></span>
                            <ul id="menu">
                                <a href="{{url('profile')}}">
                                    <li style="font-size:20px ;font-family : Prompt;color: #000 ">หลักสูตรของฉัน
                                    </li>
                                </a>
                              <a href="{{url('/')}}">
                                    <li style="font-size:20px ;font-family : Prompt;color: #e02a2a ">หน้าหลัก</li>
                                </a>
                                <a onclick="readMenu()">
                                    <li style="font-size:20px ;font-family : Prompt;color: #000 ">หลักสูตร</li>
                                </a>
                                <div id='menuRead' style="margin-left:30px ;display: none">
                                    <a href="{{url('learningOnline')}}">
                                        <li style="font-size:20px ;font-family : Prompt;color: #000 ">
                                            เรียนออนไลน์</li>
                                    </a>

                                        <li style="font-size:20px ;font-family : Prompt;color: #000 ">ห้องเรียน
                                        </li>
                                 </a>
                                </div>
                                <a href="{{url('knowledge')}}">
                                    <li style="font-size:20px ;font-family : Prompt;color: #000 ">คลังความรู้
                                    </li>
                                </a>
                                <a href="{{url('/product')}}">
                                    <li style="font-size:20px ;font-family : Prompt;color: #000 ">สินค้า/โปรโมชั่น</li>
                                </a>
                                <a href="{{url('/activity')}}">
                                    <li style="font-size:20px ;font-family : Prompt;color: #000 ">กิจกรรม/ข่าวสาร</li>
                                </a>
                                <a href="{{url('/contact')}}">
                                    <li style="font-size:20px ;font-family : Prompt;color: #000 ">ติดต่อเรา</li>
                                </a>

                                @if(Auth::user())

                                    <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();"  >
                              <li style="font-size:20px ;font-family : Prompt;color: #000 ">ออกจากระบบ</li>
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>




                                 @else

                                 <a href="{{url('/loginuser')}}"
                                >
                                 <li style="font-size:20px ;font-family : Prompt;color: #000 ">เข้าสู่ระบบ</li>
                             </a>


                                 @endif

                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-6"
                    style="display:flex;justify-content:center;align-items:center;flex-direction:column">
                    <div class="top_header_middle">
                        <a href="#" style="font-family:Prompt ; font-size: 18px ; color:#999"><i
                                class="fa fa-phone" style="color:#444"></i>
                            Call Us: <span style="font-size:15px">065-871-7999</span></a>
                        <a href="#" style="font-family:Prompt ; font-size: 18px ; color:#999"><i
                                class="fa fa-envelope" style="color:#444"></i> Email: <span
                                style="font-size:15px">hrd3@ciengems.com</span></a>
                    </div>
                    <img src="img/NGG_Logo_Red.png" alt="" style="width:20%;margin-top: 20px">
                </div>
                <div class="col-lg-3">
                    <div class="top_right_header">
                        <ul class="header_social">
                            <div style="display: flex;justify-content:center;align-items: center;margin-top: 10px">
                                <a href="https://www.facebook.com/WeareNGG/"><img src="img/social/Facebook.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                                <a href="https://www.instagram.com/wearengg/?hl=th"><img src="img/social/Instagram.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                                <a href="https://www.youtube.com/channel/UCfQWkZzFaqPOn22wZ0_a8aA?view_as=subscriber"><img src="img/social/Youtube.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                                <a href="https://twitter.com/ngg_we"><img src="img/social/Twitter.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                                <a href="https://line.me/R/ti/p/%40idi6214g"><img src="img/social/Call.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                            </div>
                        </ul>
                         <ul class="top_right" style="display:flex;justify-content: center ; align-items: center">
                            <li class="user">
                                @if(Auth::user())

                                <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"  >
                          <li style="font-size:20px ;font-family : Prompt;color: #000 ">ออกจากระบบ</li>
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>

                             @else

                             <a href="{{url('/loginuser')}}"
                            >
                             <li style="font-size:20px ;font-family : Prompt;color: #000 ">เข้าสู่ระบบ</li>
                         </a>
                             @endif

                            </li>

                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Top Header Area =================-->




    <!--================Menu Area =================-->
    <header class="shop_header_area topNav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav categories" style="width:15%">

                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{url('profile')}}"
                            style="font-family : Prompt ;font-size: 18px">หลักสูตรของฉัน</a>
                       </li>
                        <li class="nav-item dropdown submenu active">
                            <a class="nav-link" href="{{url('/')}}" role="button"
                                aria-haspopup="true" aria-expanded="false"
                                style="font-family : Prompt ;font-size: 18px">
                                หน้าหลัก
                            </a>

                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                style="font-family : Prompt ;font-size: 18px">
                                หลักสูตร
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('learningOnline')}}"
                                        style="font-family : Prompt ;font-size: 18px">เรียนออนไลน์</a>
                                </li>
                            <li class="nav-item"><a class="nav-link" href="{{url('learningRoom')}}"
                                        style="font-family : Prompt ;font-size: 18px">ห้องเรียน</a>
                                </li><? } ?>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{url('knowledge')}}" role="button"
                                aria-haspopup="true" aria-expanded="false"
                                style="font-family : Prompt ;font-size: 18px">
                                คลังความรู้
                            </a>
                        </li>
                        <li class="nav-item ">
                             <a class="nav-link" href="{{url('product')}} " role="button"
                                aria-haspopup="true" aria-expanded="false"
                                style="font-family : Prompt ;font-size: 18px">
                                สินค้า/โปรโมชั่น
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{url('activity')}}"
                                style="font-family : Prompt ;font-size: 18px">กิจกรรม/ข่าวสาร</a></li>
                        <li class="nav-item ">
                            <a class="nav-link " href="{{url('/contact')}}" role="button"
                                aria-haspopup="true" aria-expanded="false"
                                style="font-family : Prompt ;font-size: 18px">
                                ติดต่อเรา
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <!--================Slider Area =================-->
    <section class="container"  style="z-index:0;">

         <div id="myCarousel" class="carousel slide" data-ride="carousel">

             <ol class="carousel-indicators">

                @for($i=0;$i<count($sinka);$i++)
                @if ($i == 0)
                <li data-target="#myCarousel" data-slide-to="{{$sinka[$i]->id}}" class="active">
                @else
                <li data-target="#myCarousel" data-slide-to="{{$sinka[$i]->id}}"  >
                @endif
                           </li>
                @endfor
            </ol>

            <div class="carousel-inner">
            @for($i=0;$i<count($sinka);$i++)
            @if ($i == 0)
                <div class="item active">
            @else
            <div class="item">
            @endif
            <img src="upload/{{$sinka[$i]->img_}}" alt="Los Angeles" style="width:100%;">
                </div>
            @endfor


            </div>

            <button class="w3-button w3-display-left w3-gray" href="#myCarousel" data-slide="prev"
                style="height:100px;opacity: 0.6;">&#10094;</button>
            <button class="w3-button w3-display-right w3-gray" href="#myCarousel" data-slide="next"
                style="height:100px;opacity: 0.6;">&#10095;</button>
        </div>
    </section>
    <!--================End Slider Area =================-->

    <!--================Feature Add Area =================-->
    <section class="feature_add_area">
        <div class="container">
            <div class="s_m_title">
                        <h2 style="font-family : Prompt">วิชามาใหม่ที่น่าสนใจ</h2>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            @foreach ($vicha as $item)
                            <div class="swiper-slide">
                            <a href="{{url('knowledge/'.$item->id)}}">

                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image ">
                                        <img   id="img_vichar{{$item->img_}}"   class="blur"       src="{{url('/upload/'.$item->img_)}}" alt="Placeholder image">
                                        </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                       <div class="media-left">
                                           <figure class="image is-48x48">
                                              <img  id="img_vichar_etc{{$item->img_}}"    class="blur"        src="{{url('/upload/'.$item->img_)}}" alt="Placeholder image">
                                           </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 text23"><?php  echo htmlspecialchars_decode($item->name_)          ?></p>
                                         <p class="subtitle is-6">@NGG E-Learning</p>
                                      </div>
                                   </div>
                                <div class="content text22">
                                       <a href="{{url('knowledge/'.$item->id)}}" class="text22">

                                        รายละเอียดเพิ่มเติ่ม
                                      </a>

                                            <br>
                                            <p class="text23">{{$item->paped}}</p>
                                              </div>
                                         </div>
                                      </div>

                                </a>
                            </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                      </div>
        </div>
    </section>

    <section class="feature_add_area">
        <div class="container">
            <div class="s_m_title">
            <h2 style="font-family : Prompt">คลังความรู้มาใหม่   <a href="{{url('knowledge')}}" style="color: #e02a2a">ดูทั้งหมด</a></h2>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($article as $item)
                            <div class="swiper-slide">
                        <a href="{{url('article_l/'.$item->id)}}">


                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image">
                                        <img  id="img_articel{{$item->img_}}"   class="blur"      width="100%"      src="{{url('/upload/'.$item->img_)}}" alt="Placeholder image">
                                        </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                       <div class="media-left">
                                           <figure class="image is-48x48">
                                           <img id="img_articel_etc{{$item->img_}}"      id="img_list{{$item->id}}"  width="100%"  src="{{url('/upload/'.$item->img_)}}" alt="Placeholder image">
                                           </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 text23">{{$item->name_}}</p>
                                         <p class="subtitle is-6">@NGG E-Learning</p>
                                      </div>
                                   </div>
                                <div class="content">
                                       <a href="{{url('article_l/'.$item->id)}}" class="text22">
                                        รายละเอียดเพิ่มเติ่ม
                                      </a>
                                            <br>
                                                    <time >{{$item->type_}}</time>
                                              </div>
                                         </div>
                                      </div>


                                </a>
                            </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                </div>
        </div>
    </section>

    <section class="feature_product_area">

    <div class="container">
    <div class="f_p_inner"></div>
    </div>

    </section>
    <section class="feature_big_add_area" >
        <div class="container">
            <div class="s_m_title" style="text-align:left">
                <h2 style="font-family : Prompt">วีดีโอและสื่ออื่นๆ</h2>
            </div>

            <div class="container wrapper" style="margin-top:15px">
                <div class="row">
                    <div class="col-lg-8" id="myCarouselXY">

                    <iframe src="{{$youtube->linkyoutube}}" style="height:100%;width:100%"></iframe>



                    </div>
                    <div class="col-lg-4">
                            <div class="fb-page" data-href="https://www.facebook.com/WeareNGG/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/nggjewellery" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/nggjewellery">NGG Jewellery</a></blockquote></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================End Feature Big Add Area =================-->



    <!--================Featured Product Area =================-->
    <section class="feature_product_area">
        <div class="container">
            <div class="f_p_inner">
                <div class="s_m_title">
                    <h2 style="font-family : Prompt">สินค้าแนะนำ</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="width: 100% ; display: flex;justify-content: flex-end;align-items: center">
                            </div>
                            <div id="myCarousel99" class="carousel slide" data-ride="carousel">
                                <div class="item active">
                                    <img src="{{url('/upload/'.$sinka_2->img_)}}" alt="Los Angeles" style="width:100%;">
                                </div>
                            </div>
                            <div class="row feature_inner" style="margin-top:20px" id="sinkanew">

                                @foreach ($newsinka as $item)
                                <a href="{{url('/detailsinka/'.$item->id)}}">
                                 <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-image">
                                            <figure class="image ">
                                            <img   id="img_vichar{{$item->img_}}"   class="blur"        src="{{url('/upload/'.$item->img_)}}" alt="Placeholder image">
                                            </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                           <div class="media-left">
                                               <figure class="image is-48x48">
                                                  <img  id="img_vichar_etc{{$item->img_}}"    class="blur"        src="{{url('/upload/'.$item->img_)}}" alt="Placeholder image">
                                               </figure>
                                    </div>
                                    <div class="media-content">
                                  {{--       <p class="title is-4 text23"><?php  echo htmlspecialchars_decode($item->name_)          ?></p> --}}
                                             <p class="subtitle is-6">@NGG E-Learning</p>
                                          </div>
                                       </div>
                                    <div class="content text22">
                                         {{--   <a href="#" class="text22">

                                             {{  htmlspecialchars_decode($item->des_)     }}
                                          </a> --}}

                                                <br>

                                                  </div>
                                             </div>
                                          </div>
                                        </div>
                                    </a>
                                @endforeach











                            </div>
                        </div>
                        <!-- <div class="col-lg-3">
                            <img class="img-fluid" src="img/product/main/help.jpg" alt=""
                                style="width: 100%;height: 100%">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--================End Featured Product Area =================-->
    <section class="feature_product_area">
        <div class="container">
            <div class="f_p_inner">
                <div class="row">

                    <div class="col-lg-12">
                    <div id="myCarouselX" class="carousel slide" data-ride="carousel">
                        <div class="item active">
                            <img src="{{url('/upload/'.$sinka_3->img_)}}" alt="Los Angeles" style="width:100%;">
                        </div>
       <!-- <ol class="carousel-indicators">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
       </ol>

       <div class="carousel-inner">
           <div class="item active">
               <img src="img/banner/Banner-1.jpg" alt="Los Angeles" style="width:100%;">
           </div>
           <div class="item">
               <img src="img/banner/Banner-2.jpg" alt="Chicago" style="width:100%;">
           </div>
       </div>

       <button class="w3-button w3-display-left w3-gray" href="#myCarousel" data-slide="prev"
           style="height:100px;opacity: 0.6;">&#10094;</button>
       <button class="w3-button w3-display-right w3-gray" href="#myCarousel" data-slide="next"
           style="height:100px;opacity: 0.6;">&#10095;</button>
   </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--================Footer Area =================-->
    <footer class="footer_area fooW">
        <div class="container">
            <div class="footer_widgets">
                <div class="row" style="text-align:center">
                    <div class="col-lg-12 col-md-12 col-12" style="text-align:center">
                        <span style="text-align:center;font-size:25px ; text-align: left ; color: #000 ;font-family : Prompt">NGG
                            Group</span><br/>
                        <span
                            style="font-family : Prompt; text-align: center ; width:85% ; line-height: 25px ; color: #7b7b7b">

                            ศูนย์รวมเครื่องประดับทอง เพชร อัญมณี นาฬิกา เสื้อผ้าส่งออก และน้ำแร่ธรรมชาติ
                            ที่มีประสบการณ์มากกว่า 30 ปี ได้รับการยอมรับที่ดีเลิศจากลูกค้าและสังคม
                            ในความเป็นมืออาชีพระดับสากล ในปัจจุบันบริษัทมีสาขาทั้งหมด 60 สาขา แบ่งเป็นร้านทอง 14
                            สาขาและร้านนาฬิกาอีก 56 สาขา และขยายสาขาเพิ่มมากขึ้น เพื่อก้าวสู่สากล</span>
                        <ul class="header_social">
                            <div style="display: flex;justify-content:center;align-items: center;margin-top: 10px">
                                <a href="https://www.facebook.com/WeareNGG/"><img src="img/social/Facebook.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                                <a href="https://www.instagram.com/wearengg/?hl=th"><img src="img/social/Instagram.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                                <a href="https://www.youtube.com/channel/UCfQWkZzFaqPOn22wZ0_a8aA?view_as=subscriber"><img src="img/social/Youtube.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                                <a href="https://twitter.com/ngg_we"><img src="img/social/Twitter.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                                <a href="https://line.me/R/ti/p/%40idi6214g"><img src="img/social/Call.png" alt=""
                                        style="width: 25px;margin-left: 5px;margin-right: 5px"></a>
                            </div>
                        </ul>
                    </div>


                    <!-- <div class="col-lg-1 col-md-4 col-6">
                    </div> -->
                    <!-- <div class="col-lg-3 col-md-4 col-6"
                        style="display:flex;justify-content:center;align-items:center;flex-direction: column">
                        <img class="img-fluid" src="img/Logo-NGG.jpg" alt="" style="">
                        <p style="margin-top:20px ;font-family : Prompt">www.hrd3@ciengems.com</p>
                    </div> -->

                </div>
            </div>
            <div class="footer_copyright" style="font-family : Prompt">
                Copyright @ {{ now()->year }} NGG Group | All Rights Reserved
                </h5>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->


    <script src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script>

        function readMenu() {
            $('#menuRead').css("display", "")
        }
        function closeMenu() {
            $('#menuRead').css("display", "none")
        }
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('EL/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('EL/js/popper.min.js')}}"></script>
    <script src="{{asset('EL/js/bootstrap.min.js')}}"></script>
    <!-- Rev slider js -->
    <script src="{{asset('EL/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('EL/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('EL/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('EL/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('EL/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('EL/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('EL/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('EL/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <!-- Extra plugin css -->
    <script src="{{asset('EL/vendors/counterup/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('EL/vendors/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('EL/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('EL/vendors/bootstrap-selector/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('EL/vendors/image-dropdown/jquery.dd.min.js')}}"></script>
    <script src="{{asset('EL/js/smoothscroll.js')}}"></script>
    <script src="{{asset('EL/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('EL/vendors/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('EL/vendors/magnify-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('EL/vendors/vertical-slider/js/jQuery.verticalCarousel.js')}}"></script>
    <script src="{{asset('EL/vendors/jquery-ui/jquery-ui.js')}}"></script>

    <script src="{{asset('EL/js/theme.js')}}"></script>
    <script src="{{asset('js/swiper.min.js')}}"></script>
<script>
	$(document).ready(function () {
        var imglength = document.images.length;
        console.log(imglength)
for (var i = 0; i < 3; i++) {
var image = document.images[i]

var id = document.images[i].id
console.log(id)
console.log(image)
imageoptions(image, id)
}


function imageoptions(image, id) {
var bigImage = document.createElement("img")
var imgsrc = document.getElementById(id).src;
//console.log(imgsrc);
bigImage.onload = function () {
image.src = this.src
image.className = "noblur";
}

setTimeout(function () {
bigImage.src = imgsrc;
}, 100)
}




    });



</script>



  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      }
    });
  </script>

<script>
    var swiper = new Swiper('.swiper-container_2', {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      pagination: {
        el: '.swiper-pagination_2',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      }
    });
  </script>

</body>

</html>
