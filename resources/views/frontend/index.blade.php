@extends('frontend.layouts.front-layout')
@section('content')

<div class="container-fluid bg-green-tab">

    <div class="row py-4 flex align-items-center">

         <div class="col-md-12 text-center">

         </div>
    </div>
</div>

  <main>
    <!-- ---------------=FOR BANNER=============== -->
    <section class="banner">
      <div class="banner-box">
        <div class="intro-text">
            <h1 class="fw-bold sm-title-head text-capitalize"><strong style="color:rgb(25, 153, 5)">جامع تعلیم الدین </strong> ایجوکیشن سسٹم   مقصد
               
            </h1>
            <p class="hero-para my-5">مسلمانوں کے سنہری دور کے درس و تدریس اور تربیت کے نظام کو

              زندہ کرنا اور علم اور ہنر کی تعلیم ہر کسی کے لیے آسان بنانا۔</p>
            <p class="hero-para my-5">جامع تعلیم الدین  ایجوکیشن سسٹم کا مقصد رائج عصری تعلیم نظام کو اختیار کئے

              بغیر اُس سے بہتر نتائج حاصل کیے جائیں۔ 
              </p>
            <p class="hero-para my-5">مادی علوم و فنون کی اس سطح کو حاصل کرنے میں سہولت پیدا کرنا جو

              معاش میں خود کفیل ہونے کا سبب ہو۔
              </p>
            <p class="hero-para my-5">تعلیم و تجارت کو عام کر کے سود سے بچنے اور معاش کے حصول کو

              آسان کرنے کے اسباب پیدا کیے جائیں۔ 
              </p>
            <p class="hero-para my-5">ایک ایسے مسلمان معاشرے کو تشکیل دینا جس کے افراد بغیر

              رنگ، نسل یا مذہب کی تفریق کے یوری انسانیت کے لیے 
              
              خیر اور بھلائی کا ذریعہ ہوں۔
              </p>
            <p class="hero-para my-5"> جامع تعلیم الدین  ایجوکیشن سسٹم  کے ذریعے اس بات کے تعاثر کو ختم کرنا

              ہے کہ دنیاوی تعلیم حاصل کرنے کے لیے انگریزوں کے دور کی طرز -
              
              پر چلنے والے عصری تعلیمی اداروں کا رخ کرناضروری ہے۔</p>
            

        </div>

      </div>
    </section>

    <!-- =================FOR OUR COURSES============ -->
    <div class="container-fluid bg-green-tab">
      <div class="row py-4 flex align-items-center">

           <div class="col-md-12 text-center">

           </div>
      </div>
    </div>

    <div class="container mt-5">
        <div class="text-center">
          <h1 class="text-uppercase font-weight-bold"style="cursor: default;">Latest News</h1>
          <hr class="bg-successedHR mb-2 mt-0  mx-auto" >
          <div class="container">
            <div class="row my-5">
                <div class="col-lg-4 col-md-12 my-4">
                    <div class="card border-0 shadow" >
                        <img src="images/layouts/bg1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title fw-bold">New Admission Started</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn bg-green-tab">Read More</a>
                        </div>
                      </div>

                </div>
                <div class="col-lg-4 col-md-12 my-4">
                    <div class="card border-0 shadow" >
                        <img src="images/layouts/bg2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title fw-bold">New Jobs</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn bg-green-tab">Read More</a>
                        </div>
                      </div>

                </div>
                <div class="col-lg-4 col-md-12 my-4">
                    <div class="card border-0 shadow" >
                        <img src="images/layouts/bg3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title fw-bold">Sport week</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn bg-green-tab">Read More</a>
                        </div>
                      </div>

                </div>
            </div>

          </div>
        </div>

      </div>



    {{-- ================our cources-------------- --}}
    <div class="container mt-5 ">
      <div class="text-center">
        <h1 class="text-uppercase font-weight-bold"style="cursor: default;">Our Courses</h1>
        <hr class="bg-successedHR mb-2 mt-0  mx-auto" >
        <div class="container">
          <!-- ==================carousal for text==================== -->

         <div class="containerOfcourseShown" style="width:60%;margin:300px auto;">
          <div id="circles-container-text">
              <div id="main-circle-content-text"></div>
                <div id="circle-text">
                 <div class="min-circle" data-inside="min-circle">
                  <a href="" class="text-dark"  style="display:block;width:80%;margin:30% 10%;height:40%;text-align:center;font-size:1.2em;">
                    Hifz-ul-Quran
                  </a>
                  <div class="content-text">
                    <h2 class="course-circle-heading">Hifz-ul-Quran</h2>
                    <p class="course-circle-para">we are always keep for nice idea about sun and other copleted jobs about us.</p>
                    <div class="lg-show">
                        <img src="images/layouts/m3.jpg" alt="" style="width:20%;height:20%;float:left;">
                        <p class="course-circle-para"><em>EM</em> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, sequi!</p>

                    </div>

                  </div>
                 </div>

                <div class="min-circle" data-inside="min-circle">
                  <a href="" class="text-dark" style="display:block;width:80%;margin:30% 10%;height:40%;text-align:center;font-size:1.2em;">
                    Nazara
                  </a>
                  <div class="content-text">
                    <h2 class="course-circle-heading">Nazara</h2>
                    <p class="course-circle-para">we are always keep for nice idea about sun and other copleted jobs about us.</p>
                    <div class="lg-show">
                        <img src="images/layouts/m4.png" alt="" style="width:20%;height:20%;float:left;">
                        <p class="course-circle-para" ><em>EM</em> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, sequi!</p>

                    </div>
                  </div>
                </div>

                <div class="min-circle" data-inside="min-circle">
                  <a href="" class="text-dark"  style="display:block;width:80%;margin:30% 10%;height:40%;text-align:center;font-size:1.2em;">
                    School
                  </a>
                  <div class="content-text">
                    <h2 class="course-circle-heading">School</h2>
                    <p class="course-circle-para">we are always keep for nice idea about sun and other copleted jobs about us.</p>
                    <div class="lg-show">
                        <img src="images/layouts/m3.jpg" alt="" style="width:20%;height:20%;float:left;">
                        <p  class="course-circle-para" ><em>EM</em> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, sequi!</p>

                    </div>
                  </div>
                </div>

                <div class="min-circle" data-inside="min-circle">
                  <a href="" class="text-dark"  style="display:block;width:80%;margin:30% 10%;height:40%;text-align:center;font-size:1.2em;">
                    Computer
                  </a>
                  <div class="content-text">
                    <h2 class="course-circle-heading">Computer</h2>
                    <p class="course-circle-para">we are always keep for nice idea about sun and other copleted jobs about us.</p>
                    <div class="lg-show">
                        <img src="images/layouts/m4.png" alt="" style="width:20%;height:20%;float:left;">
                        <p  class="course-circle-para"><em>EM</em> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, sequi!</p>

                    </div>
                  </div>
                </div>

                <div class="min-circle" data-inside="min-circle">
                  <a href="" class="text-dark"  style="display:block;width:80%;margin:30% 10%;height:40%;text-align:center;font-size:1.2em;">
                    Army
                  </a>
                  <div class="content-text">
                    <h2 class="course-circle-heading">Army</h2>
                    <p class="course-circle-para">we are always keep for nice idea about sun and other copleted jobs about us.</p>
                    <div class="lg-show">
                        <img src="images/layouts/m4.png" alt="" style="width:20%;height:20%;float:left;">
                        <p  class="course-circle-para"><em>EM</em> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, sequi!</p>

                    </div>
                  </div>
                </div>


              </div>
          </div>
         </div>



        </div>
      </div>

    </div>

    <!-- ----==============bg fixed====== -->
    <div class="backAttached"></div>
      <!-- <div class="content"> -->
        <!-- content -->
        <!-- <h1>test</h1>
      </div> -->

    <!-- ===========FOR GALLERY============ -->
    <div class="container">
      <div class="row py-5 flex align-items-center">

           <div class="col-md-12 text-center">

           </div>
      </div>

    <div class="container shadow p-5">
      <div class="text-center">
        <h1 class="text-uppercase font-weight-bold"style="cursor: default;">
          Gallery</h1>
        <hr class="bg-successedHR mb-2 mt-0  mx-auto" >
      </div>
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/layouts/bg1.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="images/layouts/bg2.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="images/layouts/bg3.jpg" class="d-block w-100" alt="">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>


    <!-- ================FOR TEAM=================== -->

    <div class="container my-4 shadow p-5">
      <div class="row py-5 flex align-items-center">

           <div class="col-md-12 text-center">

           </div>
      </div>
    <div class="container">
      <div class="text-center">
        <h1 class="text-uppercase font-weight-bold"style="cursor: default;">
          Our Team</h1>
        <hr class="bg-successedHR mb-2 mt-0  mx-auto" >
      </div>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/teachers/t1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption bg-emp-slider d-none d-md-block">
              <h5 class="text-dark fw-bolder">CEO</h5>
              <p class="text-dark">Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/teachers/t2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none  bg-emp-slider  d-md-block">
              <h5 class="text-dark fw-bolder">Qari</h5>
              <p class="text-dark">Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/teachers/t3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none  bg-emp-slider  d-md-block">
              <h5 class="text-dark fw-bolder">Science Teacher</h5>
              <p class="text-dark">Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

  </main>


@endsection
@push('footer-script')
<script src="{{asset('js/jCircle.min.js')}}"></script>
<script src="{{asset('js/all.js')}}"></script>

@endpush
