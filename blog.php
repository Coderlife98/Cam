<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
  <?php include("./includes/link.php");?>
  <style>
    .shad-sun {
       box-shadow: none;
       transition: all .2s ease-in-out;
    }

    .shad-sun:hover {
       box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
       transform: scale(0.8);
    }

    .add-desi-head {
       color: black;
       text-shadow: 2px 2px grey;
       font-weight: 900;
    }

    @media (min-width:0px) and (max-width:576px) {
       .hov-eff {
          display: flex;
          justify-content: center;
          margin: 10px 0px;
       }

       iframe {
          width: 300px;
          height: 200px;
       }
    }

    @media (min-width:576px) and (max-width:768px) {
       .hov-eff {
          display: flex;
          justify-content: center;
          margin: 10px 0px;
       }

       iframe {
          width: 350px;
          height: 250px;
       }
    }

    @media (min-width:768px) and (max-width:992px) {
       .hov-eff {
          display: flex;
          justify-content: center;
          margin: 10px 0px;
       }

       iframe {
          width: 300px;
          height: 250px;
       }
    }

    @media (min-width:992px) {
       iframe {
          width: 350px;
          height: 250px;
       }

    }
 </style>
</head>
<body>
<?php include("./includes/header.php");?>
    <!-- hero section start -->
    <div class="container-fluid set-blog-hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-8 ">
                    <div class="head-bannnn-blog">
                        <h2 class="text-white set-head-sot fw-bolder ">Blogs:</h2>
                        <div>
                            <p class="text-white set-para-sot-blog">Our thought and perspective </p>
                            <button><a href="./about.php" class="text-white">Read More</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero section end -->
<!-- section 1 start -->
<div class="container-fluid blog_mart">
<div class="container py-2 py-lg-5 ">
    <div class="row">
        <div class="col-12 col-lg-8 pe-lg-5 ">
            <h2 class="set-head-in fw-bolder smm-txt-center py-3 ">Welcome to <span class="text-warning">Camwel Solution</span></h2>
            <div class="para-blog ">
                <p class="text-justify text-slate">We are the experienced company in software industry. Here we provide Software Development for Banking, <b><a href="./nidhi_company_registration.php">Nidhi Company</a></b>,<b> Microfinance</b>, <b><a href="./nbfc.php">NBFC</a></b>, <b><a href="./chitfund_software.php">Chitfund</a></b>, <b><a href="./binary_plan_software.php">MLM</a></b>, <b>Network Marketing</b>, <b>Transportation booking</b>, <b>Block chain and School Management</b>.</p>
            </div>
            <div class="why-blog mt-4 ">
                <h3 class="set-head-in smm-txt-center">Why we choose Camwel Solution</h3>
                <p class="text-justify text-slate">As in today market people are thinking for trust and reliability in business. When we look in market we find many companies who develop software in fewer prices but as process start we will come to know the loop fall and many other hidden charges, which will affect in new company stability and in financial growth. There is more issue occurred regarding calculation and reporting which effect customer in their business. Therefore we recommend choosing Camwel Solution for person who knows the market well and for person who is new in this field. Here we guide the customer in every step to make things better; we give proper guideline, reports, assurance, support, trust and more important value for money.</p>
                <p class="text-justify text-slate">We have worked with make client in growing their business and always found 100% customer satisfaction.</p>
            </div>
        </div>
        <div class="col-12 col-lg-4  position-relative  ">
            <div class="">
                <img src="./assets/blog_1.png" class="above-back-border" alt="@dued">
            </div>
            <div class="">
                <img src="./assets/circle_color.png" width="400px" class="above-back-border2" alt="@dued">
            </div>
        </div>
       
    </div>
</div>
</div>
<!-- section 1 end -->
<!-- section 2 start -->
<div class="container py-2 py-md-5">
    <div class="row">
        <div class="col-12">
            <h3>Below mention are the services which Camwel Solution Provides</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12  col-md-6 col-xl-4 my-2 ">
          <div class="out-blo-box p-2  d-flex align-items-center justify-content-evenly ">
            <div class="img-software-blog w-25 d-flex align-items-center justify-content-evenly">
                <img src="./assets/bs.png" class="img-rad" alt="@dued">
            </div>
            <div class="head-blo w-75 d-flex align-items-center justify-content-evenly">
                <h6 class="text-white ">SOFTWARE DEVELOPMENT</h6>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-2 ">
            <div class="out-blo-box p-2  d-flex align-items-center justify-content-evenly ">
                <div class="img-software-blog w-25 d-flex align-items-center justify-content-evenly">
                    <img src="./assets/webb2.png" class="img-rad" alt="@dued">
                </div>
                <div class="head-blo w-75 d-flex align-items-center justify-content-evenly">
                    <h6 class="text-white ">WEBSITE DEVELOPMENT</h6>
                </div>
              </div>
          
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-2 ">
            <div class="out-blo-box p-2  d-flex align-items-center justify-content-evenly ">
                <div class="img-software-blog w-25">
                    <img src="./assets/blb.png" class="img-rad" alt="@dued">
                </div>
                <div class="head-blo w-75 d-flex align-items-center justify-content-evenly">
                    <h6 class="text-white ">BLOCKCHAIN TECHNOLOGY</h6>
                </div>
              </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-2 my-2 ">
            <div class="out-blo-box p-2  d-flex align-items-center justify-content-evenly ">
                <div class="img-software-blog w-25 d-flex align-items-center justify-content-evenly">
                    <img src="./assets/mobb.png" class="img-rad" alt="@dued">
                </div>
                <div class="head-blo w-75 d-flex align-items-center justify-content-evenly">
                    <h6 class="text-white ">MOBILE APPS DEVELOPMENT</h6>
                </div>
              </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-2 ">
            <div class="out-blo-box p-2  d-flex align-items-center justify-content-evenly ">
                <div class="img-software-blog w-25 d-flex align-items-center justify-content-evenly">
                    <img src="./assets/webp.png" class="img-rad" alt="@dued">
                </div>
                <div class="head-blo w-75 d-flex align-items-center justify-content-evenly">
                    <h6 class="text-white ">PORTAL DEVELOPMENT</h6>
                </div>
              </div>
          
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-2">
            <div class="out-blo-box p-2  d-flex align-items-center justify-content-evenly ">
                <div class="img-software-blog w-25 d-flex align-items-center justify-content-evenly">
                    <img src="./assets/wbs.png" class="img-rad" alt="@dued">
                </div>
                <div class="head-blo w-75 d-flex align-items-center justify-content-evenly">
                    <h6 class="text-white ">WEBSITE DESIGN</h6>
                </div>
              </div>
           
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-2 ">
            <div class="out-blo-box p-2  d-flex align-items-center justify-content-evenly ">
                <div class="img-software-blog w-25 d-flex align-items-center justify-content-evenly">
                    <img src="./assets/dig.png" class="img-rad" alt="@dued">
                </div>
                <div class="head-blo w-75 d-flex align-items-center justify-content-evenly">
                    <h6 class="text-white ">DIGITAL MARKETING</h6>
                </div>
              </div>
         
        </div>
    </div>
</div>
<!-- section 2 end -->
<!-- section 2 start -->
 <!-- ------------------sunny changes start -->
 <div class="container">
    <div class="row">
       <div class="col-12  ">
          <h2 class="add-desi-head text-center">Our Playlists</h2>
       </div>
    </div>
 </div>
 <!-- sunny youtube playlist section END -->
 <div class="container">
    <div class="row  ">
    <div class="col-12 col-md-6 col-xl-4  hov-eff  ">
          <!-- 2 -->
          <iframe src="https://www.youtube.com/embed/videoseries?list=PLMIoPCFjpYM7j-BUwB9tR5T_ZWl-i28jC" class="shad-sun"
             title="YouTube video player" frameborder="0"
             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
             allowfullscreen></iframe>
       </div>
       <div class="col-12 col-md-6 col-xl-4 hov-eff  ">
          <!-- 3 -->
          <iframe src="https://www.youtube.com/embed/videoseries?list=PLMIoPCFjpYM5gQYQbRqUoMPQBREuF9tD4" class="shad-sun"
             title="YouTube video player" frameborder="0"
             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
             allowfullscreen></iframe>
       </div>
      
       <div class="col-12 col-md-6 col-xl-4 hov-eff  ">
          <!-- 1 -->
          <iframe src="https://www.youtube.com/embed/videoseries?list=PLMIoPCFjpYM52uS0L2POafZyV6fcJRBtR" class=" shad-sun"
             title="YouTube video player" frameborder="0"
             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
             allowfullscreen></iframe>

       </div>
       <div class="col-12 col-md-6 col-xl-4 hov-eff ">
          <!-- 4 -->
          <iframe src="https://www.youtube.com/embed/videoseries?list=PLMIoPCFjpYM51nRN_LNgdwRQb6lW0zKP_" class="shad-sun"
             title="YouTube video player" frameborder="0"
             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
             allowfullscreen></iframe>
        
        

       </div>
       <div class="col-12 col-md-6 col-xl-4 hov-eff  ">
          <!-- 5 -->
          <iframe class="shad-sun" src="https://www.youtube.com/embed/videoseries?list=PLMIoPCFjpYM7zFDVqrwydDTCZBberzpDg"
             title="YouTube video player" frameborder="0"
             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
             allowfullscreen></iframe>
        

         

       </div>
       <div class="col-12 col-md-6 col-xl-4 hov-eff  ">
          <!-- 6 -->
          <iframe src="https://www.youtube.com/embed/videoseries?list=PLMIoPCFjpYM5nfplPRpttGIx3Ue1DchV8" class="shad-sun"
             title="YouTube video player" frameborder="0"
             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
             allowfullscreen></iframe>
         
       </div>
       <div class="col-12 col-md-6 col-xl-4 hov-eff  ">
          <!-- 5 -->
          <iframe src="https://www.youtube.com/embed/videoseries?list=PLMIoPCFjpYM5tAenJQ7mlDi3kTrWFZocv" class="shad-sun"
             title="YouTube video player" frameborder="0"
             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
             autoplay allowfullscreen></iframe>
       </div>
       <div class="col-12 col-md-6 col-xl-4 hov-eff">
       <iframe class="shad-sun" src="https://www.youtube.com/embed/videoseries?list=PLMIoPCFjpYM6QitmNFhAJ2yxVFE8DM9Dg"
             title="YouTube video player" frameborder="0"
             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
             allowfullscreen></iframe>
       </div>
       <!-- edit -->
    </div>
 </div>
 
<!-- section 2 end -->


    <?php include("./includes/footer.php");?>
    <?php include("./includes/script.php");?>
</body>
</html>