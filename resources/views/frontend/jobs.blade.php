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
            <h1 class="fw-bold sm-title-head text-capitalize"><strong style="color:rgb(25, 153, 5)">Career</strong> Opertunity</h1>
            <img src="images/banners/hero3.jpg"  alt="Contact Us">
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
                    “If you are prepared, you will be confident, and will do the job.” <strong>– Tom Landry</strong>
                </p>

            </div>

        </div>
        <div class="row my-5 shadow">
            <div class="col-lg-12 p-5">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
                      </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email Address">
                      </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="number" min="0" class="form-control" id="exampleFormControlInput1" placeholder="Enter Phone Number">
                      </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Last Qualification</label>
                        <input type="text" min="0" class="form-control" id="exampleFormControlInput1" placeholder="Enter last qualification">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Year of Completion</label>
                        <input type="date"  class="form-control" id="exampleFormControlInput1" placeholder="Enter year of degree completion">
                      </div>

                      <div class="mb-3">
                        <label for="formFile" class="form-label">Upload CV/ Resume</label>
                        <input class="form-control" type="file" id="formFile">
                        </div>
                      <div class="mb-3">
                        <button class="btn bg-green-tab">Submit</button>
                      </div>

                </form>
            </div>

        </div>

    </div>




  </main>


@endsection
@push('footer-script')

@endpush
