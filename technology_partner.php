<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Technology Partners</title>
    <?php include ("./includes/link.php"); ?>
    <style>
        .move {
            display: flex;
            padding: 1vw;
            background-color: green;
            overflow-x: hidden;
        }

        .marque {
            display: flex;
            align-items: center;

            flex-shrink: 0;
            transform: translateX(-100%);
        }

        .marque h2 {
            color: white;
            padding: 0px 23px;
        }

        .marque i {
            font-size: 45px;
            color: white;
        }
    </style>
</head>

<body>
    <?php include ("./includes/header.php"); ?>
    <!-- hero section start -->
    <div class="container-fluid set-tech-bg">

    </div>
    <!-- hero section end -->

    <!-- Our Partners start -->
    <div class="container-fluid partner-padding-top py-3">
        <div class="container   ">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center ">
                    <div class="heading-tech ">
                        <h3 class="fw-bolder ">Our Partners</h3>
                        <p class="pt-3 ">From manufacturing line to meeting room, our software development solutions
                            will
                            help you elevate your Enterprise Core and overcome the challenges of technological
                            transformation both in daily and large-scale operations.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex justify-content-center ">
                    <img src="./assets/tech-left.png" class="tec-partner" alt="@skull">
                </div>
            </div>
        </div>
    </div>
    <!-- Our Partners end -->
    <!-- contact form section start -->
    <div class="container-fluid set-bg-tech-form">
        <div class="container  my-2 my-lg-4">
            <div class="row">
                <div class="col-12 col-lg-7  ">
                    <div>
                        <div class="tech-heading">
                            <h3 class="fw-bolder text-warning">We Partner with</h3>
                        </div>


                        <div class="all-section">
                            <div class="product-head mt-3 ">
                                <h4 class="text-info">Product companies</h4>
                                <p>Need to reduce your time to market but wary of managing an external team? Our
                                    well-tuned agile development process allows smooth integration into your project at
                                    any stage.</p>
                            </div>
                            <div class="product-head mt-3 ">
                                <h4 class="text-info">Tech evangelists</h4>
                                <p>Passionate about the potential of game‑changing technology? Let’s join forces to
                                    spread the word and create mutually beneficial business opportunities with the
                                    industry’s movers and shakers.</p>
                            </div>
                            <div class="product-head mt-3 ">
                                <h4 class="text-info">IT consultancies</h4>
                                <p>Leverage our specialized technical talent and proven domain. and online video to
                                    deliver turnkey projects to your customers — on time and on budget.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="heading-touch">
                        <h3 class="fw-bolder text-warning">Keep in touch</h3>
                    </div>
                    <div class="product-head mt-3 ">
                        <p class="text-justify">We understand the real value of loyal, long-term business partnerships.
                            This is why we are ready to go the extra mile and tailor our partnership options to your
                            specific business needs and expectations. Let's connect today.</p>
                    </div>
                    <div class="contact_form_section">
                        <form action="./formhandler_tech.php" method="post">
                            <div class="section">
                                <label for="" class="text-info labelcontact">Name</label><br>
                                <input type="text" name="name" placeholder="Enter Name Here" class="tech-input input-bg">
                            </div>
                            <div class="section">
                                <label for="" class="text-info labelcontact">Email</label><br>
                                <input type="email" name="email" placeholder="Enter Email Here" class="tech-input input-bg">
                            </div>
                            <div class="section">
                                <label for="" class="text-info labelcontact">Contact</label><br>
                                <input type="text" oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')" maxlength="10" name="phone" placeholder="Enter Contact Number" class="tech-input input-bg">
                            </div>
                          
                            <div class="section">
                                <label for="" class="text-info labelcontact">Message</label><br>
                                <textarea name="message" id="" cols="30" rows="4" placeholder="Enter Message Here"
                                    class="tech-input input-bg"></textarea>
                            </div>
                            <button class="btn btn-primary py-3  my-3 w-100" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form section end -->
    <!-- text_moving section start -->
    <div class="container-fluid px-0">
        <div class="move">
            <div class="marque">
                <h2>Camwel Solution LLP
                    Janki Market, Bhagwat Nagar, Kumhrar, Patna 800026, Bihar, India</h2>
                <i class="ri-arrow-right-line"></i>
            </div>
            <div class="marque">
                <h2>Camwel Solution LLP
                    Janki Market, Bhagwat Nagar, Kumhrar, Patna 800026, Bihar, India</h2>
                <i class="ri-arrow-right-line"></i>
            </div>
            <div class="marque">
                <h2>Camwel Solution LLP
                    Janki Market, Bhagwat Nagar, Kumhrar, Patna 800026, Bihar, India</h2>
                <i class="ri-arrow-right-line"></i>
            </div>
            <div class="marque">
                <h2>Camwel Solution LLP
                    Janki Market, Bhagwat Nagar, Kumhrar, Patna 800026, Bihar, India</h2>
                <i class="ri-arrow-right-line"></i>
            </div>
            <div class="marque">
                <h2>Camwel Solution LLP
                    Janki Market, Bhagwat Nagar, Kumhrar, Patna 800026, Bihar, India</h2>
                <i class="ri-arrow-right-line"></i>
            </div>
        </div>
    </div>
    <!-- text_moving section end -->
    <?php include ("./includes/footer.php"); ?>
    <?php include ("./includes/script.php"); ?>
</body>

</html>