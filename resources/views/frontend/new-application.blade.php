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
            <h1 class="fw-bold sm-title-head text-capitalize"><strong style="color:rgb(25, 153, 5)">Student</strong> Registration</h1>
            <img src="images/banners/apply.jpg"  alt="Contact Us">
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
                    Onine <strong>Application Form</strong>
                </p>

            </div>

        </div>
        <div class="row my-5 shadow">
            <div class="col-lg-12 p-5">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Parent/Gardian Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Relation With Student</label>
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                            <option selected>Open this select relation</option>
                            <option value="1">Father</option>
                            <option value="1">Mother</option>
                            <option value="1">Brother</option>
                            <option value="1">Sister</option>
                            <option value="1">Uncle</option>
                            <option value="1">Aunt</option>
                          </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="number" min="0" class="form-control" id="exampleFormControlInput1" placeholder="Enter Phone Number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Profession</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter profession">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                        <input type="text" min="0" class="form-control" id="exampleFormControlInput1" placeholder="Enter Student Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Student Gender</label>
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                            <option selected>Open this select gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Student Date Of Birth</label>
                        <input type="date"  class="form-control" id="exampleFormControlInput1" placeholder="Enter student DOB">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Father Name</label>
                        <input type="text" min="0" class="form-control" id="exampleFormControlInput1" placeholder="Enter Father Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Student Cnic/Form-B</label>
                        <input type="number" min="0" class="form-control" id="exampleFormControlInput1" placeholder="Enter Student Cnic/Form-B">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Father CNIC</label>
                        <input type="number" min="0" class="form-control" id="exampleFormControlInput1" placeholder="Enter Father Cnic/Form-B">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Select Province</label>
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                            <option selected>Open this select province</option>
                            <option value="1">KPK</option>
                            <option value="1">Panjab</option>
                            <option value="1">Sindh</option>
                            <option value="1">Balochistan</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">City Name</label>
                        <input type="text"  class="form-control" id="exampleFormControlInput1" placeholder="Enter Your City Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Student address here!" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Apply For:</label>
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                            <option selected>Open this select</option>
                            <option value="1">Nazara</option>
                            <option value="1">Hifz-ul-Quran</option>
                            <option value="1">School</option>
                          </select>
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
