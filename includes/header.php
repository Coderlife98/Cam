<style>
  .navbar-toggler{
    background-color: white;
  }
  .fadeout {
	opacity: 0;
	filter: alpha(opacity=0);
}
.loader {
	position: fixed;
	z-index: 9999;
	width: 100%;
	height: 100%;
	background: #000;
	text-align: center;
	-webkit-transition: opacity 1s ease;
	-moz-transition: opacity 1s ease;
	-o-transition: opacity 1s ease;
	transition: opacity 1s ease;
}

.loader-content {
	background:black;
	background-size: 123px 38px;
	display: block;
	position: relative;
	padding-top: 50px;
	top: 45%;
	
}

@-webkit-keyframes fadeInDown{0%{opacity:0;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{opacity:1;-webkit-transform:none;transform:none}}
@keyframes fadeInDown{0%{opacity:0;-webkit-transform:translate3d(0,-100%,0)}};

</style>


<div class="loader">
<div class="loader-content">
    <img src="./assets/loader.gif" alt="Loader" class="loader-loader" />
</div>
</div>

<!-- Topbar Start -->
<div class="container-fluid py-2 px-0 d-none d-lg-block">
  <div class="row gx-0 align-items-center">
    <div class="col-lg-4 px-5 text-start">
      <div class="h-100 d-inline-flex align-items-center me-4">
        <small class="fa fa-phone me-2"></small>
        <a href="tel:+91 9028388889,+91 9572852742 ">+91 9028388889 | +91 9572852742</a>
      </div>
    </div>
    <div class="col-lg-8 px-5 text-end">
      <div class="h-100 d-inline-flex align-items-center add-gap-pro">
        <a class="" href="./business_vertices.php">Business Verticals</a>
        <a class="" href="./investor.php">Investor</a>
        <!-- <a class="" href="">Career</a> -->
        <a class="" href="javascript:void(0);">Portfolio</a>
        <a class="" href="./blog.php">Blog</a>
        <a class="" href="javascript:void(0);">Gallery</a>
        <a class="" href="./contact.php">Contact us</a>
      </div>
    </div>
  </div>
</div>
<!-- Topbar End -->




<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-transparent navbar-fixed-top navbar-light sticky-top px-4 px-lg-5">
  <a href="./index.php" class="navbar-brand d-flex align-items-center">
    <h1 class="m-0">
      <img class="img-fluid me-3" src="./assets/camwel_logo.png" alt="@dued" />
    </h1>
  </a>
  <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
      <a href="./index.php" class="nav-link ">Home</a>
      <div class="nav-item dropdown">
        <a href="about.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
        <div class="dropdown-menu bg-light border-0 m-0">
          <a href="./about.php" class="dropdown-item">About</a>
          <a href="./technologies_we_specize.php" class="dropdown-item">Technologies We Specialize in</a>
          <a href="./technology_partner.php" class="dropdown-item">Our Technology Partner</a>
          <a href="./our_team.php" class="dropdown-item">Our Team</a>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
        <div class="dropdown-menu bg-light border-0 m-0">
          <a href="./software_development_company.php" class="dropdown-item">Software Development</a>
          <a href="./website_dev.php" class="dropdown-item">Website Development</a>
          <a href="./digital_marketing.php" class="dropdown-item">Digital marketing</a>
          <a href="./mobile_app.php" class="dropdown-item">Mobile App Development</a>
          <a href="./portal.php" class="dropdown-item">Portal Development</a>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
        <div class="dropdown-menu bg-light border-0 m-0">
          <a href="./core_banking_software.php" class="dropdown-item">Core Banking Software</a>
          <a href="./nidhi_company_registration.php" class="dropdown-item">Nidhi Company Registration</a>
          <a href="./nidhi_company_software.php" class="dropdown-item">Nidhi Company Software</a>
          <a href="javascript:void(0);" class="dropdown-item">Credit Co-operative Society Software</a>
          <a href="./dsa_loan.php" class="dropdown-item">DSA Loan Management Software
          </a>
          <a href="microfinance_registration.php" class="dropdown-item">MicroFinance Company Registration</a>
          <a href="./microfinance_software.php" class="dropdown-item">Micro-finance Software</a>
          <a href="./nbfc.php" class="dropdown-item">NBFC Software</a>
          <a href="./producercompany.php" class="dropdown-item">Producer Company</a>
          <a href="./mlmsoftware.php" class="dropdown-item">MLM Software</a>
          <a href="./chitfund_software.php" class="dropdown-item">Chit Fund Software</a>
          <a href="./college_management_software.php" class="dropdown-item">College Management Software</a>
          <a href="./school_management_software.php" class="dropdown-item">School Management Software</a>
          <a href="./instituate_management.php" class="dropdown-item">Institute Management Software</a>
          <a href="./billing_software.php" class="dropdown-item">POS Software </a>
          <a href="./hospital_management_software.php" class="dropdown-item">Hospital Management Software
          </a>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Financial</a>
        <div class="dropdown-menu bg-light border-0 m-0">
          <a href="./core_banking_software.php" class="dropdown-item">Core Banking Software</a>
          <a href="./nbfc.php" class="dropdown-item">NBFC Software</a>
          <a href="./nidhi_company_software.php" class="dropdown-item">Nidhi Company Software</a>
          <a href="javascript:void(0);" class="dropdown-item">Credit Co-operative Society Software</a>
          <a href="./producer" class="dropdown-item">Producer Company Software</a>
          <a href="./microfinance_software.php" class="dropdown-item">Micro-finance Software</a>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Educational
        </a>
        <div class="dropdown-menu bg-light border-0 m-0">
          <a href="college_management_software.php" class="dropdown-item">College Management Software</a>
          <a href="./school_management_software.php" class="dropdown-item">School Management Software</a>
          <a href="./instituate_management.php" class="dropdown-item">Institute Management Software</a>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Networking
        </a>
        <div class="dropdown-menu bg-light border-0 m-0">
          <a href="./binary_plan_software.php" class="dropdown-item">Binary Plan Software
          </a>
          <a href="./matrix_plan_software.php" class="dropdown-item">Matrix Plan Software
          </a>
          <a href="./board_plan.php" class="dropdown-item">Board Plan Software
          </a>
          <a href="./unilevel_plan.php" class="dropdown-item">Unilevel Plan Software
          </a>
          <a href="./generation_plan.php" class="dropdown-item">Generation Plan Software
          </a>
          <a href="./investment_plan.php" class="dropdown-item">Investment plan Software
          </a>
          <a href="./helping_plan.php" class="dropdown-item">Helping plan Software
          </a>
          <a href="./crowdfunding_plan.php" class="dropdown-item">CrowdFunding plan Software
          </a>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ERP
        </a>
        <div class="dropdown-menu bg-light border-0 m-0">
          <a href="./billing_software.php" class="dropdown-item">POS Software </a>
          <a href="./hospital_management_software.php" class="dropdown-item">Hospital Management Software
          </a>
        </div>
      </div>
    </div>
  </div>
 
</nav>
<!-- Navbar End -->






<script>

  window.onload = function(){
	setTimeout(function(){
	var loader = document.getElementsByClassName("loader")[0];
	loader.className="loader fadeout" ;
	setTimeout(function(){loader.style.display="none"},1000)
	},1000)
}
  // var nav = document.querySelector('nav'); // Identify target

  // window.addEventListener('scroll', function (event) { // To listen for event
  //   event.preventDefault();

  //   if (window.scrollY <= 150) { // Just an example
  //     nav.style.backgroundColor = '#000'; // or default color
  //   } else {
  //     nav.style.backgroundColor = 'transparent';
  //   }
  // });
</script>

