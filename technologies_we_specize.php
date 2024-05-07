<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Technologies_we_specize</title>
    <?php include("./includes/link.php"); ?>
    <style>
        .card{
            transition: 0.9s;
        }
        .card:hover{
            transform: translateY(-20px);
        }
    </style>
  </head>
  <body>
  <?php include("./includes/header.php");?>
    <!-- hero section start -->
    <div class="container-fluid set-bg-specize">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="text-white spe_head">
              Software Solutions Development With <br />
              The Latest Technologies
            </h3>
          </div>
        </div>
      </div>
    </div>
    <!-- hero section end -->
    <!-- card section start -->
    <div class="container my-3 my-lg-5">
      <div class="row">
        <div class="col-12">
            <h3 class="fw-bolder ">Software and web solutions powered by the latest technology</h3>
            <p>From manufacturing line to meeting room, our software development solutions will help you elevate your Enterprise Core and overcome the challenges of technological transformation both in daily and large-scale operations.</p>
        </div>
      </div>
    </div>
    <!-- card section end -->
    <!-- card row 1 start -->
    <div class="container my-2 my-lg-5 ">
<div class="row">
    <div class="col-12 col-lg-3">
        <div class="card" style="width: 17rem; background: lavender;">
            <img src="./assets/cloud.png" class="card-img-top" alt="@skull">
            <div class="card-body" >
              <h6 class="card-title">Cloud Computing</h6>
              <p class="card-text">Use Cloud Computing Solution to Create a Scale-able,Security ,flexible and connected environment.</p>
            
            </div>
          </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card" style="width: 17rem; background: lavender;">
            <img src="./assets/block.png" class="card-img-top" alt="@skull">
            <div class="card-body" >
              <h6 class="card-title">Block-Chain Development</h6>
              <p class="card-text">Introduce the highest level of security and automate your operations with our blockchain solutions.</p>
            
            </div>
          </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card" style="width: 17rem; background: lavender;">
            <img src="./assets/aug.png" class="card-img-top" alt="@skull">
            <div class="card-body" >
              <h6 class="card-title">Augmented Reality Solutions</h6>
              <p class="card-text">Build better prototypes, improve the user experience, and lower costs with AR solutions.</p>
            
            </div>
          </div>

    </div>
    <div class="col-12 col-lg-3">
        <div class="card" style="width: 17rem; background: lavender;">
            <img src="./assets/iot.png" class="card-img-top" alt="@skull">
            <div class="card-body" >
              <h6 class="card-title">Internet Of Things</h6>
              <p class="card-text">Secure IoT solutions will let you gather Big Data, optimize key processes, and improve decision-making.</p>
            </div>
          </div>
    </div>
</div>
    </div>
    <!-- card row 1 end -->
    <?php include("./includes/footer.php");?>
    <?php include("./includes/script.php");?>
  </body>
</html>
