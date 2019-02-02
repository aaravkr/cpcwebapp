@extends('layout.app')

@section('hr')
<hr class="nav_border mt-2">
@endsection

@section('content_home')
<section class="Home_content heading_first d-flex flex-column justify-content-left align-items-center pt-7">
<h1 class="heading_light">Together we create a </h1>
<h1 class="heading_blod">Peaceful & Harmonious </h1>
<h1 class="heading_blod ">CyberSpace</h1>
<p class="join_para"> Join Cyber Peace Corps Today!</p>
{{-- <button class="btn btn-primary"> Join us</button> --}}
<p class="mt-2">
    <a class="register_button join_us_button rounded mt-4" href="#">Join Us</a>
</p>
</section>
@endsection

{{-- @section('hr_home')
<hr>
@endsection --}}

@section('content_about')
<section class="about">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-6 p-2 about_left">
        <img src="https://res.cloudinary.com/aarav/image/upload/v1545718983/stat_d0j0sz.png" class="img-responsive">
        </div>

        <div class="col-md-6 about_right">
            <h1 class="mb-2 dark_blue heading_light"> Why Cyber Peace Corps? </h1>
            <p> Cyber Peace Corps is envisioned to be a coalition of citizens, volunteers, experts who come together for the cause of cyber peace across the world. 
                    The world needs the internet to be peaceful, trustworthy and safe enough for its users. Unfortunately, various short comings in technology, law, awareness 
                    and international co operation have been widening the gap altogether and there is no answer to the growing cyber threats to nations today.</p>

            <div>
                <img src="https://res.cloudinary.com/aarav/image/upload/v1545718983/stat_2_qk8lkf.png" class="img-responsive">
            </div>
        </div>

    </div>
    </div>
</section>
{{-- img link
https://res.cloudinary.com/aarav/image/upload/v1545718983/stat_2_qk8lkf.png
https://res.cloudinary.com/aarav/image/upload/v1545718983/stat_d0j0sz.png --}}
@endsection

@section('hr_about')
<hr>
@endsection


@section('Get_involve')
    <div class="Involve_head_section">
        <div class="container ">
        <div class="row mb-2">
            <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 dark_blue"> Get Involved </h1>
        <p class=" px-30 text-center lh"> Play a powerful role in helping your local community be safer and 
            more secure online. Commit 16 Hours a month to the cause 
            and become a cyber peace corps 
        </p>
        </div>
        </div>
<div class="row">
    <div class="col-md-4">
        <div class="Involve_Inner_boxes">
            <h5 class="involve_heading mb-3 dark_blue">At Home</h5>
            <p class="involve_para"> Easy ways to talk with your family and friends about ways to stay safe online.
                Educate your family members about security tip or help to build a blog</p>
        </div>
    </div>
    <div class="col-md-4">
            <div class="Involve_Inner_boxes">
                    <h5 class="involve_heading mb-3 dark_blue">At School/College</h5>
                    <p class="involve_para"> Help others learn about cybersecurity, online safety and being
                        a good digital citizen with our lesson plans, classroom materials and other resources.
                    </p>
                </div>
        </div>
        <div class="col-md-4">
                <div class="Involve_Inner_boxes">
                        <h5 class="involve_heading mb-3 dark_blue">In The Community</h5>
                        <p class="involve_para"> Things you can do to help your local community be safer and more secure online</p>
                    </div>
              </div>
         </div>
    </div>
</div>
@endsection

@section('hr_involve')
<hr>
@endsection


@section('Subscribe')
<div class="subscribe">
  <div class="container ">
    <div class="row">
      <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
            <h1 class="display-4 dark_blue mt-5">Subscribe</h1>
           <p class="text-center mb-3">Sign up with your email address to recieve news and update 
           </p>
      </div>
 </div>
  <div class="row subscribe-row-name align-items-center">
      <div class="col-md-4">
         <form>
                <div class="form-group">
                        
                        <input type="text" class="form-control" placeholder="First Name">
                </div>
         </form>
      </div>
      <div class="col-md-4">
        <form>
                <div class="form-group">
                        
                        <input type="text" class="form-control" placeholder="Last Name">
                      </div>
        </form>
      </div>
      <div class="col-md-4">
            <form>
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                 </div>
             </form>
      </div>
  </div>
  <div class="row subscribe-row-button">
        <div class="col-md-12 d-flex justify-content-center align-items-center">
            
                <a class="register_button subscribe_button rounded" href="#">Subscribe</a>
            
        </div>  
  </div>
 </div>
</div>    
@endsection


@section('footer')

@endsection