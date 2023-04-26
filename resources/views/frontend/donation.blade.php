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
            <h1 class="fw-bold sm-title-head text-capitalize"><strong style="color:rgb(25, 153, 5)">Do</strong> Nation</h1>
            <img src="images/banners/hero8.jpg"  alt="Contact Us">
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
     
        <div class="row my-5 shadow">
            <div class="col-lg-4 p-2">
                <img src="images/banners/hero7.jpg"  class="img-fluid rounded " alt="Contact Us">
            </div>
            <div class="col-lg-8 bg-light p-5 rounded">
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
                        <label for="exampleFormControlTextarea1" class="form-label">Note</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter note here!" rows="5"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Amount</label>
                        <input type="number" min="0" class="form-control" id="exampleFormControlInput1" placeholder="Enter Phone Number">
                      </div>
                      <div class="mb-3">
                        <button class="btn bg-green-tab">Done</button>
                      </div>

                </form>


            </div>
        </div>

    </div>




  </main>


@endsection
@push('footer-script')

@endpush
