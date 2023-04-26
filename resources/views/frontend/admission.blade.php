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
        <div class="intro-textAll">
            <h1 class="fw-bold sm-title-head text-capitalize"><strong style="color:rgb(25, 153, 5)">Steps</strong> To Apply</h1>
            <img src="images/banners/hero2.jpg"  alt="Contact Us">
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

    <div class="container my-4">
        <div class="row my-2 py-3 shadow text-center text-sm-start">
            <div class="col-lg-12 text-center">
                <p class="fw-300">
                    Steps <strong>Of Application</strong>
                </p>


            </div>

        </div>
        <div class="row my-2 py-3 shadow text-start text-lg-center">
            <div class="col-lg-6  text-lg-center">
                <p class="fw-300 ">
                    <strong>Step 1: </strong> Register Gardian/ Parent
                </p>

            </div>
            <div class="col-lg-6 text-lg-center">

                <p class="fw-300 ">
                    <strong>Step 2: </strong> Fill Application Form
                </p>

            </div>


        </div>
        <div class="row my-5 shadow">
            <div class="col-lg-6 p-5">
                <form action="" method="post">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Parent/Gardian Eamil address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Parent/Gardian Email Address">
                      </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password"  class="form-control" id="exampleFormControlInput1" placeholder="Enter Your password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                        <input type="password"  class="form-control" id="exampleFormControlInput1" placeholder="Enter confirm password">
                    </div>



                      <div class="mb-3">
                        <button class="btn bg-green-tab">Register</button>
                      </div>

                </form>
            </div>
            <div class="col-lg-6 p-5">
                <form action="" method="post">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Parent/Gardian Eamil address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Parent/Gardian Email Address">
                      </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password"  class="form-control" id="exampleFormControlInput1" placeholder="Enter Your password">
                    </div>



                      <div class="mb-3">
                        <button class="btn bg-green-tab">Log In</button>
                      </div>

                </form>
            </div>

        </div>

    </div>




  </main>


@endsection
@push('footer-script')

@endpush
