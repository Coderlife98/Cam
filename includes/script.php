
<script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
      integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
      integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="./js/gsap.js"></script>
    <script src="./js/counter.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: {
        delay: 10500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script> 


<script>
    $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:3,
            itemsDesktop:[1000,3],
            itemsDesktopSmall:[980,2],
            itemsTablet:[768,2],
            itemsMobile:[650,1],
            pagination:true,
            navigation:false,
            slideSpeed:1000,
            autoPlay:true
        });
    });
</script>
    




