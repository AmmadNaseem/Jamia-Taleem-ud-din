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
            <h1 class="fw-bold sm-title-head text-capitalize"><strong style="color:rgb(25, 153, 5)">Our</strong> Course</h1>
            <img src="images/team/c2.jpg"  alt="Our courses">
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

    <div class="container p-5">
        <div class="row my-2 py-3 shadow text-center text-sm-start">
            <div class="col-lg-12 text-center">

                <p class="fw-300">
                   <strong>Prospectus<strong> 
                </p>

            </div>

        </div>
        <div class="row my-5 shadow">
            <div class="col-12 text-center">
              <embed class="embed-responsive " style="width: 100%"  src="images/pdf/TaleemUdDinProspectus.pdf" width="1000" height="1000" type="application/pdf"  >
                
            </div>
           
        </div>

    </div>




  </main>


@endsection
@push('footer-script')

@endpush
