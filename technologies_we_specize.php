<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Technologies_we_specize</title>
  <?php include ("./includes/link.php"); ?>
  <style>
    .card {
      transition: 0.9s;
    }

    .card:hover {
      transform: translateY(-20px);
    }

    .testimonial{
            margin: 0 20px 40px;
        }
        .testimonial .testimonial-content{
            padding: 35px 25px 35px 50px;
            margin-bottom: 35px;
            background: #fff;
            position: relative;
            height: 200px;
        }
        .testimonial .testimonial-content:before{
            content: "";
            position: absolute;
            bottom: -30px;
            left: 0;
            border-top: 15px solid #718076;
            border-left: 15px solid transparent;
            border-bottom: 15px solid transparent;
        }
        .testimonial .testimonial-content:after{
            content: "";
            position: absolute;
            bottom: -30px;
            right: 0;
            border-top: 15px solid #718076;
            border-right: 15px solid transparent;
            border-bottom: 15px solid transparent;
        }
        .testimonial-content .testimonial-icon{
            width: 50px;
            height: 45px;
            background: #0CCA4A;
            text-align: center;
            font-size: 22px;
            color: #fff;
            line-height: 42px;
            position: absolute;
            top: 37px;
            left: -19px;
        }
        .testimonial-content .testimonial-icon:before{
            content: "";
            border-bottom: 16px solid #05A739;
            border-left: 18px solid transparent;
            position: absolute;
            top: -16px;
            left: 1px;
        }
        .testimonial .description{
            font-size: 15px;
            font-style: italic;
            color: #8a8a8a;
            line-height: 23px;
            margin: 0;
        }
        .testimonial .title{
            display: block;
            font-size: 18px;
            font-weight: 700;
            color: #525252;
            text-transform: capitalize;
            letter-spacing: 1px;
            margin: 0 0 5px 0;
        }
        .testimonial .post{
            display: block;
            font-size: 14px;
            color: #0CCA4A;
        }
        .owl-theme .owl-controls{
            margin-top: 20px;
        }
        .owl-theme .owl-controls .owl-page span{
            background: #ccc;
            opacity: 1;
            transition: all 0.4s ease 0s;
        }
        .owl-theme .owl-controls .owl-page.active span,
        .owl-theme .owl-controls.clickable .owl-page:hover span{
            background: #0CCA4A;
        }
  </style>
</head>

<body>
  <?php include ("./includes/header.php"); ?>
  <!-- hero section start -->
  <div class="container-fluid set-bg-specize">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="text-white spe_head animation-pos">
            Software Solutions Development With <br />
            The Latest Technologies
          </h3>
        </div>
      </div>
    </div>
  </div>
  <!-- hero section end -->
  <!-- card section start -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="fw-bolder text-familyM ">Software and web solutions powered by the latest technology</h3>
        <p class="left-tech-de">From manufacturing line to meeting room, our software development solutions will help
          you elevate your
          Enterprise Core and overcome the challenges of technological transformation both in daily and large-scale
          operations.</p>
      </div>
    </div>
  </div>
  <!-- card section end -->
  <!-- card row 1 start -->
  <div class="container my-2 my-lg-5 ">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3 my-2 d-flex justify-content-center" id="technologyBox1">
        <div class="card" style="width: 17rem; background: lavender;">
          <img src="./assets/cloud.png" class="card-img-top" alt="@skull">
          <div class="card-body">
            <h6 class="card-title">Cloud Computing</h6>
            <p class="card-text">Use Cloud Computing Solution to Create a Scale-able,Security ,flexible and connected
              environment.</p>

          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 my-2 d-flex justify-content-center" id="technologyBox2">
        <div class="card" style="width: 17rem; background: lavender;">
          <img src="./assets/block.png" class="card-img-top" alt="@skull">
          <div class="card-body">
            <h6 class="card-title">Block-Chain Development</h6>
            <p class="card-text">Introduce the highest level of security and automate your operations with our
              blockchain solutions.</p>

          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 my-2 d-flex justify-content-center" id="technologyBox3">
        <div class="card" style="width: 17rem; background: lavender;">
          <img src="./assets/aug.png" class="card-img-top" alt="@skull">
          <div class="card-body">
            <h6 class="card-title">Augmented Reality Solutions</h6>
            <p class="card-text">Build better prototypes, improve the user experience, and lower costs with AR
              solutions.</p>

          </div>
        </div>

      </div>
      <div class="col-12 col-md-6 col-lg-3 my-2 d-flex justify-content-center" id="technologyBox4">
        <div class="card" style="width: 17rem; background: lavender;">
          <img src="./assets/iot.png" class="card-img-top" alt="@skull">
          <div class="card-body">
            <h6 class="card-title">Internet Of Things</h6>
            <p class="card-text">Secure IoT solutions will let you gather Big Data, optimize key processes, and improve
              decision-making.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- card row 1 end -->
  <!-- Development Platforms, Technologies & Languages start -->
  <div class="container-fluid p-2 p-lg-3">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="fw-bolder">Development Platforms, Technologies & Languages</h3>
          <P class="text-justify">With over 5 years on the IT market, our experts are bringing you wide-ranging expertise in all the areas needed for a reliable software development solution that works across the board.</P>
        </div>
      </div>
    </div>
  </div>



<!-- adding swiper start -->


<div class="container-fluid add-bg-tecg-slide">
  <div class="container">
    <div class="row">
    <div class="swiper mySwiper ">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./assets/tech1.png" alt="@dued">
      </div>
    
      <div class="swiper-slide">
        <img src="./assets/ruby.png"  alt="@dued">
      </div>
      <div class="swiper-slide">
        <img src="./assets/techno7.png" width="150px"  alt="@dued">
      </div>
      <div class="swiper-slide">
        <img src="./assets/PYTHON.png" width="150px"  alt="@dued">
      </div>
      <div class="swiper-slide">
        <img src="./assets/angular.png" width="150px"  alt="@dued">
      </div>
      <div class="swiper-slide">
        <img src="./assets/REACTJS.png" width="150px"  alt="@dued">
      </div>
      <div class="swiper-slide">
        <img src="./assets/techno5.png" width="150px"  alt="@dued">
      </div>
      <div class="swiper-slide">
        <img src="./assets/nodejs.png" width="150px"  alt="@dued">
      </div>
      <div class="swiper-slide">
        <img src="./assets/jquery.png" width="150px"  alt="@dued">
      </div>
     
    </div>
    <div class="swiper-pagination"></div>
  </div>
    </div>
  </div>
</div>
<!-- adding swiper end -->
  <!-- Development Platforms, Technologies & Languages end -->

<!-- Our Clients start -->
<div class="container-fluid p-2 p-lg-4">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="fw-bolder">
        Our Clients
        </h2>
        <p>Fortune 500 Clients and many brands trust our custom software development solutions.</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="container">
  <div class="swiper mySwiper ">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./assets/t1.png" alt="@dued">
        <img src="./assets/t2.png"  alt="@dued">
      </div>
    
      <div class="swiper-slide">
      <img src="./assets/t3.png" width="150px"  alt="@dued">
      <img src="./assets/t4.png" width="150px"  alt="@dued">
      </div>
      <div class="swiper-slide">
      
      </div>
      <div class="swiper-slide">
      <img src="./assets/t5.png" width="150px"  alt="@dued">
      <img src="./assets/t6.png" width="150px"  alt="@dued">
      </div>
      <div class="swiper-slide">
      <img src="./assets/t7.png" width="150px"  alt="@dued">
      <img src="./assets/t8.png" width="150px"  alt="@dued">
      </div>
      <div class="swiper-slide">
      <img src="./assets/t9.png" width="150px"  alt="@dued">
      <img src="./assets/t10.png" width="150px"  alt="@dued">
      </div>
      <div class="swiper-slide">
      <img src="./assets/t11.png" width="150px"  alt="@dued">
      <img src="./assets/t12.png" width="150px"  alt="@dued">
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  </div>
</div>

<!-- Our Clients end -->
<!-- OUR SATISFIED CUSTOMERS start -->
<div class="container-fluid my-2 my-lg-4">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="fw-bolder">OUR SATISFIED CUSTOMERS</h2>
      </div>
    </div>
  </div>
</div>


<!-- OUR SATISFIED CUSTOMERS end -->
<div class="container-fluid set-testimonials-bsckground">
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                            “After co-founding the company in 2006 the group launched CAMWEL, the first digital marketplace which focused on rich multimedia web content” <br>
                           
                            </p>
                        </div>
                        <h3 class="title">Director of MGVNL  </h3>
                        <span class="post">Muzzafarpur Gramin Vikash Nidhi Ltd</span>
                    </div>

                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                            “After co-founding the company in 2006 the group launched CAMWEL, the first digital marketplace which focused on rich multimedia web content”
                            </p>
                        </div>
                        <h3 class="title"> Director of MGVNL</h3>
                        <span class="post">Muzzafarpur Gramin Vikash Nidhi Ltd</span>
                    </div>

                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                            “It was the smoothest implementation process I have ever been through with CAMWEL’s process and schedule.”
                            </p>
                        </div>
                        <h3 class="title">Varenyam Nidhi Ltd</h3>
                        <span class="post">Director of Varenyam Nidhi Ltd</span>
                    </div>

                    <div class="testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description">
                            “A system change is always stressful and CAMWEL did a great job of staying positive, helpful, and patient with us.”
                            </p>
                        </div>
                        <h3 class="title">Director of MGVNL</h3>
                        <span class="post">Muzzafarpur Gramin Vikash Nidhi Ltd</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






  <?php include ("./includes/footer.php"); ?>
  <?php include ("./includes/script.php"); ?>


</body>

</html>