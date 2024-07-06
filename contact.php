<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <?php include ("./includes/link.php"); ?>
</head>

<body style="background-color: black;">
  <?php include ("./includes/header.php"); ?>
  <!-- hero section start -->
  <div class="container-fluid set-contact-hero">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <div class="contact-hero-txt">
            <h2 class="text-white fw-bolder ">Contact us</h2>
            <p class="text-white">Let’s Create Something Awesome Together</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- hero section end -->
  <!-- contact section start -->
  <div class="container-fluid py-5 set_contact_top">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="Contact-us ">Our Branch</h3>
        </div>
        <div class="col-12 col-lg-3 my-3">
          <div class="address_box">
            <div>
              <h5 class="text-warning">Camwel Solution LLP</h5>
              <address>Janki Market,Bhagwat Nagar
                Kumhrar,Patna-800026,
                Bihar, India</address>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3 my-3">
          <div class="address_box">
            <div class="address_box_hover">
              <h5 class="text-warning">Camwel Solution LLP</h5>
              <address>Ground Floor,Opposite Puspanajli Hospital,
                Bhagwat Nagar Main Road, Kumhrar,
                Patna-800026, Bihar, India</address>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3 my-3">
          <div class="address_box">
            <div>
              <h5 class="text-warning">Camwel Solution LLP</h5>
              <address class="pb-lg-2 ">#240/A, 2nd Floor, 3rd Cross, Gokula,
                1st Stage, 1st Phase, Mathikere,
                Bangalore - 560 054, Karnataka, India.</address>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3 my-3">
          <div class="address_box">
            <div>
              <h5 class="text-warning">Camwel Solution LLP</h5>
              <address class="pb-lg-2 pb-xl-3">Office No. 05, Crystal Height Phase - 2,
                Near Horizon Society, Opp-Kasturi Appostrophe,
                Wakad, Pune - 411057, Maharashtra, India.</address>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="containe">
      <div class="row">
        <p class="col-12">
        <h3 class="text-info text-center">Start a Project</h3>
        <p class="text-center text-white">Discuss Your Project With Camwel to get things started or You have a quick
          question use the form below.</p>
        </p>
      </div>
    </div>
  </div>

  <!-- contact section 2 start -->
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 py-3">
          <div class="left-contact-main">
            <div class="p-3 d-flex hovering">

              <div class="bbbbb w-15">
                <i class="fa-solid fa-phone-volume text-white fs-3"></i>
              </div>
              <div class=" ps-3 w-85 d-flex flex-column justify-content-center">
                <span class="text-white">Call Us 24/7</span>
                <a href="tel:+91-9028388889, 9572852742, 9921177888, 9570444888" class="text-slate">+91-9028388889,
                  9572852742, 9921177888, 9570444888</a>
              </div>

            </div>
          </div>
          <div class="left-contact-main">
            <div class="p-3 d-flex hovering">
              <div class="bbbbb w-15">
                <i class="fa-solid fa-envelope text-white fs-3"></i>

              </div>
              <div class=" ps-3 w-85 d-flex flex-column justify-content-center">
                <span class="text-white">Mail Me</span>
                <a href="mailto:info@camwel.com"  class="text-slate">info@camwel.com</a>
              </div>
            </div>

          </div>
          <div class="left-contact-main">
            <div class="p-3 d-flex hovering">
              <div class="bbbbb w-15">
                <i class="fa-brands fa-whatsapp text-white fs-3"></i>
              </div>
              <div class=" ps-3 w-85 d-flex flex-column justify-content-center">
                <span class="text-white">What's app</span>
                <a href="https://wa.me/+919028388889" target="_blank" class="text-slate">+91-9028388889</a>
              </div>
            </div>

          </div>
          <div class="left-contact-main">
            <div class="p-3 d-flex hovering">
              <div class="bbbbb w-15">
                <i class="fa-solid fa-location-dot text-white fs-3"></i>
              </div>
              <div class=" ps-3 w-85 d-flex flex-column justify-content-center">
                <span class="text-white">Office Address</span>
                <address class="text-slate">Opposite Puspanajli Hospital, Bhagwat Nagar Main Road, Kumhrar</address>
              </div>
            </div>

          </div>
          <!-- <div class="d-flex justify-content-center">
            <img src="./assets/contact.png" alt="">
           </div> -->
        </div>
        <div class="col-12 col-md-6 my-3 d-flex justify-content-center">
          <div class="w-75">
            <form action="./formhandler_contact.php" method="post" class="text-white">
              <div class="d-flex flex-column">
                <label for="" class="labelcontact">Name</label>
                <input type="text" name="name" required class="py-1  tech-input input-bg px-2 " placeholder="Enter Name Here">
              </div>
              <div class="d-flex flex-column">
                <label for="" class="labelcontact">Email</label>
                <input type="email" required name="email" class="py-1 tech-input input-bg  px-2 " placeholder="Enter Email Here">
              </div>
              <div class="d-flex flex-column">
                <label for="" class="labelcontact">Number</label>
                <input type="text" required name="phone" class="py-1 tech-input input-bg  px-2 " placeholder="Enter Number Here"
                  maxlength="10">
              </div>
              <div class="d-flex flex-column">
                <label for="" class="labelcontact">Message</label>
                <input type="text" required name="message" class="py-1 tech-input input-bg px-2 " placeholder="Enter Message Here">
              </div>
              <div class="d-flex flex-column">
                <label for="" class="labelcontact">Select Industry</label>

                <select id="select" class="py-1 tech-input input-bg  px-2 " name="option">
                  <div>
                    <option value="Select Industry" style="background-color: black !important;">Select Industry</option>
                    <option value="Financial Services" style="background-color: black !important;">Financial Services
                    </option>
                    <option value="Educational Services" style="background-color: black !important;">Educational
                      Services</option>
                    <option value="Networking Services" style="background-color: black !important;">Networking Services
                    </option>
                    <option value="Others" style="background-color: black !important;">Others</option>
                  </div>
                </select>
              </div>
              <div class="my-4">
                <button class="btn btn-primary" name="submit">Submit</button>
              </div>
            </form>
            </>
          </div>
        </div>
      </div>
    </div>
    <!-- contact section 2 end -->
    <!-- contact section end -->
    <?php include ("./includes/footer.php"); ?>
    <?php include ("./includes/script.php"); ?>
</body>

</html>