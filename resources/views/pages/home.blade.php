@extends('layout.app')
@section('hr')
<hr class="nav_border">
@endsection
@section('content_home')
<div class=" container-fluid home2">
<div class="row sm_flex">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex flex-column  align-items-center">
    <div class="home_left">
    <h1 class="home_left_heading">
     The Most Exciting Journey
    </h1> 
    <p class="home_left_para"> 
     Together we can make a peaceful & harmonious cyber space.
     <br>
     Be a part of the change
      
    </p> 
    <div class="home_button">
        <a href="#" class="btn btn-primary btn-lg blue2"> <i class="icon-angle-right"></i> Join Us!</a>
    </div>
    </div>
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 test_border_right home_right">
 
<img src="../img/black-bg-home.png" class="img-fluid shadow1" alt="Responsive image">

</div>
</div>
@endsection
@section('hr_home')
<hr class="nav_border">
@endsection
@section('content_about')
 <div class="about container-fluid">
        <div class="row test_border_left container-fluid">
            
            <div class="col-md-6 p-0">
                <div class="row about_left">
                    <div class="col-md-6 p-0">
                      <div class="box_size about_left_box01 d-flex flex-column align-items-center justify-content-center">
                          
                              <div class="large_font_42"> Become a</div> 
                              <div class="sub_heading_font_30">cyber peace corps</div>
                    
                      </div>
                       <div class="box_size about_left_box02 about_boxes d-flex flex-column align-items-center justify-content-center">
                           <div class="box02_heading">
                             Member
                          </div>
                          <div class="after"></div>
                      </div>
                    </div>
                    <div class="col-md-6 p-0">
                      <div class=" box_size about_left_box03 about_boxes d-flex flex-column align-items-center justify-content-center">
                          <div class="box03_heading">
                             Certified
                          </div>
                          <div class="after"></div> 
                      </div>
                       <div class=" box_size about_left_box04 about_boxes d-flex flex-column align-items-center justify-content-center">
                           <div class="box04_heading">
                             Volunteer
                          </div>
                          <div class="after"></div>
                      </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6 about_right d-flex flex-column justify-content-center align-items-center">
                <h1>Why Cyber Peace Corps </h1>
                <p>Cyber Peace Corps is envisioned to be a coalition of citizens,volunteers,experts who come together for the cause of cyber peace across the world. 
                    The world needs the interest to be peaceful,trustworthy and safe enough for its users.Unfortunately, various short comings in technology,law,awareness 
                    and international co operation have been widening the gap altogether and there is no answer to the growing cyber threats to nations today. </p>

             {{-- <div class="about_heading">
                 Why Cyber Peace
             </div>
              <div class="about_content">
                  
                  <br>
                  <br>
                  
              </div> --}}
                
            </div>
        </div>
 </div>


@endsection
@section('hr_about')
<hr class="nav_border">
@endsection
@section('content_what')
<div class="head_section_exclusive">
<div class="container head_section_what d-flex justify-content-center">
    <h1 class="Sec_heading">Our Exclusive </h1>
</div>

<div class="row">
    <div class="col-md-4 why_box">
        <div class="why_box_heading">
                Volunteer
            </div>
            <div class="why_image_content_box">
                 <div class="why_box_img">
                        <img src="https://res.cloudinary.com/aarav/image/upload/v1544654805/page3box1_g960le.jpg">
                 </div>
                 <div class="why_box_para">
                  Annual Events, Year Long Events Resources Magazines Journals Article Forum. Earn Badges.
                  </div>
        </div>
    </div>

 <div class="col-md-4">
  
        <div class="why_box_heading">
                Opportunities
            </div>
            <div class="why_image_content_box">
                 <div class="why_box_img">
                 <img src="https://res.cloudinary.com/aarav/image/upload/v1544650637/Box_2_Page_3_stmtn7.jpg">
                 </div>
                 <div class="why_box_para">
                        Conduct Technical Training, contribute to Awareness Program Digital Literacy 
                        Assistance Counceiling Article & Blogging, Charity Bounty.
                  </div>
        </div>

 </div>

    <div class="col-md-4">

            <div class="why_box_heading">
                    Add ons
                </div>
                <div class="why_image_content_box">
                     <div class="why_box_img">
                     <img src="https://res.cloudinary.com/aarav/image/upload/v1544650638/Box_3_Page_3_c7hcfr.jpg">
                     </div>
                     <div class="why_box_para">
                            Cyber peace Corps kit Mugs Tshirt BAdges Certificates Hall of Frame Awards.
                      </div>
            </div>

    </div>
</div>
</div> 
@endsection


