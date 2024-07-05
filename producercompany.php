<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producer Company</title>
    <?php include ("./includes/link.php"); ?>
    <style>
        .faqdescription {
            display: none;
        }
    </style>
</head>

<body>
    <?php include ("./includes/header.php"); ?>
    <!-- hero start -->
    <div class="container-fluid set-micro_hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="micro-soft">
                        <h1 class="text-white fw-bolder ggg">PRODUCER COMPANY SOFTWARE</h1>
                        <p class="text-white text-center animation-pos"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero end -->

    <!-- section one -->
    <div class="container-fluid producertopbg py-3 py-lg-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex  align-items-center justify-content-between ">
                    <!-- <div>
                    <img src="" alt="@dued">
                   </div> -->
                    <div>
                        <img src="./assets/producer5.png" class="producerimg" alt="">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-microfi">
                        <h3 class="text-family fw-bolder text-info">PRODUCER COMPANY SOFTWARE</h3>
                        <p class="text-justify text-slate">When you are looking for innovative, customized and
                            sustainable software solutions Camwel Solution LLP has all the innovative software
                            solutions, which will support your business and its processes across multiple locations,
                            devices, browsers and operating systems.</p>
                        <p class="text-justify text-slate">Our project teams include experts in project management,
                            analysis, design, development, quality assurance and deployment. All of the required skills
                            to deliver exceptional tailored solutions. We have vast experience in development of
                            Producer Company Software. Our Software has a centralized database that is very beneficiary
                            for Producer Companies with core banking operations like Fixed Deposit, Recurring Deposits,
                            Loan to Customers, Monthly Income Schemes, Dividend declarations etc. Our Software has all
                            the modules that show the Members details like all Saving A/c, Current A/c, FD A/c, RD A/c,
                            DDS A/c, management of Cheque book and Bond, all kind of Loan operations, Printing Loan
                            Ledger, Automatic Interest Calculations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Producer Company Software Features start -->
    <div class="container-fluid py-3 py-lg-5 produceradvantage">
        <div class="container">
            <div class="row">
                <div class="col-12 py-4">
                    <h4 class="text-center text-warning">Producer Company Software Features</h4>
                    <p class="text-center text-slate">We provide the best PRODUCER COMPANY SOFTWARE as per client needs
                        with full customization for different clients.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-5 my-2 position-relative  sm_none">
                    <div class="position-absolute rotate_set py-5">
                        <h3 class="faq_font">FAQ</h3>
                    </div>
                </div>
                <div class="col-12 col-lg-7 my-2">
                    <div class="faqproducer">
                        <div class="faqhead" id="faq2">
                         <h5 class="text-white">Member and Share Management</h5>
                        </div>
                        <div class="faqdescription">
                           <ul>
                            <li><i class="fa-solid fa-arrow-right text-info pe-3"></i>Member Register</li>
                            <li><i class="fa-solid fa-arrow-right text-info pe-3"></i>Share Register</li>
                            <li><i class="fa-solid fa-arrow-right text-info pe-3"></i>Share Certificate (Computerized)</li>
                            <li><i class="fa-solid fa-arrow-right text-info pe-3"></i>Membership Details Report</li>
                            <li><i class="fa-solid fa-arrow-right text-info pe-3"></i>Share Details Report</li>
                            <li><i class="fa-solid fa-arrow-right text-info pe-3"></i>Member Active/In-Active Option</li>
                            <li><i class="fa-solid fa-arrow-right text-info pe-3"></i>Verify/Approve System</li>
                           </ul>
                        </div>
                        <div class="faqhead my-2" id="faq2">
                            <h5 class="text-white">Saving Accounts</h5>
                        </div>
                        <div class="faqdescription">
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, consectetur.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, consectetur.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, consectetur.
                            </p>
                        </div>
                        <div class="faqhead my-2" id="faq2">
                            <h5 class="text-white">Loan Management</h5>
                        </div>
                        <div class="faqdescription">
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, consectetur.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, consectetur.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, consectetur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Producer Company Software Features end -->

    <?php include ("./includes/footer.php"); ?>
    <?php include ("./includes/script.php"); ?>
    <script>

        $(document).ready(function () {

            $("#faq1").click(function () {
                // $(".faqdescription").toggle();
                $(".faqdescription").fadeToggle();
                $(".faqdescription").fadeToggle("slow");
                $(".faqdescription").fadeToggle(3000);
            });
        });
    </script>

</body>

</html>