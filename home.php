<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
   <?php include("./includes/link.php");?>
  </head>
  <body>
    <?php include("./includes/header.php");?>
    
    <div class="cursor-dot" data-cursor-dot></div>
    <div class="cursor-outline" data-cursor-outline></div>
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="./assets/slider1.png">
                <div class="content">
                    <div class="author">Services</div>
                    <div class="title">Software and WebApplication</div>
                    <div class="topic">Development</div>
                    <div class="des">
                        <!-- lorem 50 -->
                       Camwel Provides Best Customer Focused Custom Made Software <br> and Web Application Development Services Build on <br> Latest Technologies
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <!-- <button>SUBSCRIBE</button> -->
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./assets/slider2.png">
                <div class="content">
                    <div class="author">Services</div>
                    <div class="title">Solution For Finance</div>
                    <div class="topic">Sector</div>
                    <div class="des">
                       Camwel offers Development,Integration,Automationand Data Management Solution For Finanicial Organization To support Decision Making Process and Ensure Operational Efficiency
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <!-- <button>SUBSCRIBE</button> -->
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./assets/slider3.png">
                <div class="content">
                    <div class="author">services</div>
                    <div class="title">Solution For Education</div>
                    <div class="topic">Sector</div>
                    <div class="des">
                       Time To Let Go of the old System.Time to embrace the smart way of learning!
                       There is Another Way
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <!-- <button>SUBSCRIBE</button> -->
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./assets/slider4.png">
                <div class="content">
                    <div class="author">services</div>
                    <div class="title">Don't Just Think We Make</div>
                    <div class="topic">it Impressive</div>
                    <div class="des">
                       A design,development and consulting Company
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <!-- <button>SUBSCRIBE</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="./assets/slider1.png">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./assets/slider2.png">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./assets/slider3.png">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./assets/slider4.png">
                <div class="content">
                    <div class="title">
                        Name Slider
                    </div>
                    <div class="description">
                        Description
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><i class="ri-skip-right-line"></i></button>
            <button id="next"><i class="ri-skip-left-line"></i></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>



















    <div class="container set-home-bg d-lg-flex my-2 my-lg-5">
      <div
        class="col-12 col-lg-4 d-flex justify-content-center align-items-center"
      >
        <img src="./assets/who.png" width="350px" alt="@skull" />
      </div>
      <div class="col-12 col-lg-8 my-3 mg-lg-0">
        <h3 class="sm-text heading-all">WHO WE ARE</h3>
        <div class="who-para">
          <p>
            We are a digital transformation and software development company
            that provides cutting edge engineering solutions, helping Fortune
            500+ companies and enterprise clients untangle complex issues that
            always emerge during their digital evolution journey.
          </p>
          <p>
            Since 2016 we have been a visionary and a reliable software
            engineering partner for world-class brands. Experience with Numbers
            of Years of inspired teamwork and Positive Change, Camwel Solution
            LLP is now a full-scale integrated software development and
            information technology company having the presence in Patna, Pune
            and Bangalore. From skilled professionals and creative team, company
            has expend in different areas of IT industry such as Banking,
            Non-banking, Finance, Education, RealEstate and Network Marketing.
          </p>
          <button class="my-2">
            <a href="" class="text-white">Know More</a>
          </button>
        </div>
      </div>
    </div>
    <!-- What We Offers start -->

    <!-- -----------------------------------------sunny changed start -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="fw-bold">What We Offers</h3>
          <h4>SERVICES</h4>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row set-in-bw">
        <div class="col-12 col-md-5 col-lg-3 add-mar">
          <div class="logo-section-home">
            <img
              src="assets/software-home.png"
              height="130px"
              alt="@skull"
              class="set-desi"
            />
          </div>
          <div class="add-p-home">
            <div class="text-capitalize text-center fw-bold">
              <h5>Software <span>Development</span></h5>
            </div>
            <div class="text-center">
              <p>
                Camwel offer custom software development and consulting services
                to help you pull off your next project with less stress and less
                cost. Create Complex Software, Ensure liable
                <br />
                software.
              </p>
            </div>
            <div class="button d-flex justify-content-center">
              <button class="set-hover">
                <a href="" class="text-white"
                  >Read More <i class="fa-solid fa-arrow-right set-display"></i
                ></a>
              </button>
            </div>
          </div>
        </div>
        <!-- 2 -->
        <div class="col-12 col-md-5 col-lg-3 add-mar">
          <div class="logo-section-home">
            <img
              src="assets/website-home.png"
              height="130px"
              alt="@skull"
              class="set-desi"
            />
          </div>
          <div class="add-p-home">
            <div class="text-capitalize text-center fw-bold">
              <h5>Website Design and <span>Development</span></h5>
            </div>
            <div class="text-center">
              <p>
                Built the Design you need on time with an experienced team that
                uses a clear and effective sign process Working With a Loyal
                Development team with expertises Skills.
              </p>
            </div>
            <div class="button d-flex justify-content-center">
              <button class="set-hover">
                <a href="" class="text-white"
                  >Read More <i class="fa-solid fa-arrow-right set-display"></i
                ></a>
              </button>
            </div>
          </div>
        </div>
        <!-- 3 -->
        <div class="col-12 col-md-5 col-lg-3 add-mar">
          <div class="logo-section-home">
            <img
              src="assets/portal-home.png"
              height="130px"
              alt="@skull"
              class="set-desi"
            />
          </div>
          <div class="add-p-home">
            <div class="text-capitalize text-center fw-bold">
              <h5>Portal Development</h5>
            </div>
            <div class="text-center">
              <p>
                We help B2B and B2C businesses with custom web portal services
                to win more conversions. Turn your ideas into a solid reality
                using our exceptional web portal development.
              </p>
            </div>
            <div class="button d-flex justify-content-center">
              <button class="set-hover">
                <a href="" class="text-white"
                  >Read More <i class="fa-solid fa-arrow-right set-display"></i
                ></a>
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-5 col-lg-3 add-mar">
          <div class="logo-section-home">
            <img
              src="assets/digital-home.png"
              height="130px"
              alt=""
              class="set-desi"
            />
          </div>
          <div class="add-p-home">
            <div class="text-capitalize text-center fw-bold">
              <h5>Digital Marketing</h5>
            </div>
            <div class="text-center">
              <p>
                Ensuring your business is optimized to rank higher on Search
                Engines (GOOGLE, Yahoo, Bing), get leads from your traffic, &
                grow your reputation beyond your competitors.
              </p>
            </div>
            <div class="button d-flex justify-content-center">
              <button class="set-hover">
                <a href="" class="text-white"
                  >Read More <i class="fa-solid fa-arrow-right set-display"></i
                ></a>
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-5 col-lg-3 add-mar">
          <div class="logo-section-home">
            <img
              src="assets/mobile-home.png"
              height="130px"
              alt="@skull"
              class="set-desi"
            />
          </div>
          <div class="add-p-home">
            <div class="text-capitalize text-center fw-bold">
              <h5>Mobile App <span class="">Development</span></h5>
            </div>
            <div class="text-center">
              <p>
                Create an impact ful Mobile App that fits your brands and
                industry within shorter time frame.We offers tailor-made,
                professional and effective mobile <br />
                solutions.
              </p>
            </div>
            <div class="button d-flex justify-content-center">
              <button class="set-hover">
                <a href="" class="text-white"
                  >Read More <i class="fa-solid fa-arrow-right set-display"></i
                ></a>
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-5 col-lg-3 add-mar">
          <div class="logo-section-home">
            <img
              src="assets/it-home.png"
              height="130px"
              alt="@skull"
              class="set-desi"
            />
          </div>
          <div class="add-p-home">
            <div class="text-capitalize text-center fw-bold">
              <h5>IT Consulting</h5>
            </div>
            <div class="text-center">
              <p>
                Trust our Top Minds to eliminate work - flow pain point,
                implement new technology. A managed IT services provider with IT
                consulting services can add immediate value.
              </p>
            </div>
            <div class="button d-flex justify-content-center">
              <button class="set-hover">
                <a href="" class="text-white"
                  >Read More <i class="fa-solid fa-arrow-right set-display"></i
                ></a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- -----------------------------------------sunny changed end -->
    <!-- What We Offers end -->

    <!-- Technologies we specialize in start -->
    <div class="container my-2 my-lg-5">
      <div class="row">
        <div class="col-12">
          <h4 class="set-tech-head">Technologies we specialize in</h4>
        </div>
        <div class="col-12">
          <p class="my-2">
            Camwel Solution LLP having highly integrated team of talented
            engineers having breadth and depth of technology expertise in
            following Technologies.
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
          <div class="img">
            <img src="./assets/techno1.png" height="100px" alt="@skull" />
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
          <div class="img">
            <img src="./assets/techno2.png" height="100px" alt="@skull" />
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
          <div class="img">
            <img src="./assets/techno3.png" height="100px" alt="@skull" />
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
          <div class="img">
            <img src="./assets/techno4.png" height="100px" alt="@skull" />
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
          <div class="img">
            <img src="./assets/techno5.png" height="100px" alt="@skull" />
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
          <div class="img">
            <img src="./assets/techno6.png" height="100px" alt="@skull" />
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
          <div class="img">
            <img src="./assets/techno7.png" height="100px" alt="@skull" />
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
          <div class="img">
            <img src="./assets/techno8.png" height="100px" alt="@skull" />
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
          <div class="img">
            <img src="./assets/techno9.png" height="100px" alt="@skull" />
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
          <div class="img">
            <img src="./assets/techno10.png" height="100px" alt="@skull" />
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
          <div class="img">
            <img src="./assets/techno11.png" height="100px" alt="@skull" />
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
          <div class="img">
            <img src="./assets/techno12.png" height="100px" alt="@skull" />
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
          <div class="img">
            <img src="./assets/techno13.png" height="100px" alt="@skull" />
          </div>
        </div>
      </div>
    </div>
    <!-- Technologies we specialize in end -->
    <!-- Industries start -->
    <div class="container my-2 my-lg-5">
      <div class="row">
        <div class="col-12">
          <h3 class="set-head-in">Industries</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3 set-middel">
          <div class="img set-bank-bg">
            <img
              src="./assets/indu_bank.png"
              height="300px"
              class="img-bank"
              alt="@skull"
            />
            <div class="text-bank">
              <p>
                Camwel offers end-to-end software & customized Solutions and
                support services to Banking Sector.
              </p>
            </div>
            <h5 class="text-center my-2">BANKING SECTOR</h5>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 set-middel">
          <div class="img set-bank-bg">
            <img
              src="./assets/financial_sector.png"
              height="300px"
              width="262px"
              class="img-bank"
              alt="@skull"
            />
            <div class="text-bank">
              <p>
                Camwel providing complete and customized software Solutions to
                Banks, Micro Finance, NBFC, Finance Companies.
              </p>
            </div>
            <h5 class="text-center my-2">FINANCE SECTOR</h5>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 set-middel">
          <div class="img set-bank-bg">
            <img
              src="./assets/education_sector.png"
              height="300px"
              class="img-bank"
              alt="@skull"
            />
            <div class="text-bank">
              <p>
                We at Camwel have gained years of experience in Education
                industry from working with education institutes and publishers.
              </p>
            </div>
            <h5 class="text-center my-2">EDUCATION SECTOR</h5>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 set-middel">
          <div class="img set-bank-bg">
            <img
              src="./assets/indu_bank.png"
              height="300px"
              class="img-bank"
              alt="@skull"
            />
            <div class="text-bank">
              <p>Engaging and exciting software solutions for modern retail.</p>
            </div>
            <h5 class="text-center my-2">RETAIL & E-COMMERCE</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- Industries end -->
    <!-- counter start -->
    <div class="container-fluid set-counter my-2 my-lg-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 set-re-home">
            <div class="counter py-3">
              <div class="text-img-counter">
                <img src="./assets/happy.png" alt="" />

                <!-- <p>Happy Customer</p> -->
              </div>
              <span id="count">0 </span> <br />
              <span class="text-white"> customers</span>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 set-re-home">
            <div class="counter py-3">
              <div class="text-img-counter-team">
                <img src="./assets/team_cou.png" alt="" />

                <!-- <p>Happy Customer</p> -->
              </div>
              <span id="team">0 </span> <br />
              <span class="text-white">Our Teams</span>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 set-re-home">
            <div class="counter py-3">
              <div class="text-img-counter-team">
                <img src="./assets/project.png" alt="" />

                <!-- <p>Happy Customer</p> -->
              </div>
              <span id="project">0 </span> <br />
              <span class="text-white">Our Projects</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- counter end -->
    <!-- Footer section start -->
   <?php include("./includes/footer.php");?>
    <!-- Footer section end -->
    <script>
      
let nextDom = document.getElementById('next');
let prevDom = document.getElementById('prev');

let carouselDom = document.querySelector('.carousel');
let SliderDom = carouselDom.querySelector('.carousel .list');
let thumbnailBorderDom = document.querySelector('.carousel .thumbnail');
let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll('.item');
let timeDom = document.querySelector('.carousel .time');

thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
let timeRunning = 3000;
let timeAutoNext = 7000;

nextDom.onclick = function(){
    showSlider('next');    
}

prevDom.onclick = function(){
    showSlider('prev');    
}
let runTimeOut;
let runNextAuto = setTimeout(() => {
    next.click();
}, timeAutoNext)
function showSlider(type){
    let  SliderItemsDom = SliderDom.querySelectorAll('.carousel .list .item');
    let thumbnailItemsDom = document.querySelectorAll('.carousel .thumbnail .item');
    
    if(type === 'next'){
        SliderDom.appendChild(SliderItemsDom[0]);
        thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
        carouselDom.classList.add('next');
    }else{
        SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
        thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
        carouselDom.classList.add('prev');
    }
    clearTimeout(runTimeOut);
    runTimeOut = setTimeout(() => {
        carouselDom.classList.remove('next');
        carouselDom.classList.remove('prev');
    }, timeRunning);

    clearTimeout(runNextAuto);
    runNextAuto = setTimeout(() => {
        next.click();
    }, timeAutoNext)
}
    </script>
   <?php include("./includes/script.php");?>
  </body>
</html>
