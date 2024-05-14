gsap.from(".set-soft-bgg", {
    x: 1800,
    duration: 2,
    delay: 1,
    stagger: true,
});
// for home page start
gsap.from(".set-desi", {
    x: -1300,
    duration: 2,
    delay: 1,
    stagger: true,
});
// for home page end
gsap.from(".ggg-aa", {
    y: -2000,
    duration: 2,
    delay: 2,
    stagger: true
});
gsap.from(".dig-gsap1", {
    x: -500,
    duration: 1,
    delay: 1,
    stagger: true
})

gsap.from(".gap-right", {
    x: 800,
    duration: 2,
    delay: 2,
    stagger: true
})

gsap.from(".gsap-ri", {
    x: 600,
    duration: 2,
    delay: 1,
    stagger: true
})

var tl = gsap.timeline();
tl.from(".point-software", { x: -500, duration: 2 });
gsap.from(".m1gsap", {
    x: -500,
    duration: 1,
    delay: 2,
    stagger: true,
    scrollTrigger: {
        trigger: ".m1gsap",
        scroller: "body",
        scrub: 2
    }
});


gsap.from("#m1gsapright", {
    x: 800,
    duration: 1,
    delay: 2
});

var tl = gsap.timeline();

tl.from("#technologyBox1",{
    x:-200,
    duration:1,
    scrollTrigger:{
        trigger:"#technologyBox1",
        scroller:"body",
        scrub:3,
        start:"top 60%",
        end:"top 20%"
    }
})
tl.from("#technologyBox2",{
    x:-100,
   duration:1,
   scrollTrigger:{
    trigger:"#technologyBox2",
    scroller:"body",
    scrub:3,
    start:"top 60%",
    end:"top 20%"
}
})
tl.from("#technologyBox3",{
    x:200,
    duration:1,
    scrollTrigger:{
        trigger:"#technologyBox3",
        scroller:"body",
        scrub:3,
        start:"top 60%",
        end:"top 20%"
    }
})
tl.from("#technologyBox4",{
    x:400,
    duration:1,
    scrollTrigger:{
        trigger:"#technologyBox4",
        scroller:"body",
        scrub:3,
        start:"top 60%",
        end:"top 20%"
    }
})

var mm = gsap.matchMedia();

mm.add("(max-width: 500px)", function(matches) {
    if (matches) {
        var tl = gsap.timeline();

        ["#technologyBox1", "#technologyBox2", "#technologyBox3", "#technologyBox4"].forEach(function(box) {
            tl.from(box, {
                opacity: 0,
                duration: 1,
                scrollTrigger: {
                    trigger: box,
                    scroller: "body",
                    scrub: 3,
                   
                }
            });
        });
    }
});


gsap.from(".app-box", {
    x: -2000,
    duration: 2,
    delay: 2,
    scrollTrigger: {
        trigger: ".app-box",
        scroller: "body",
        scrub: 2
    }
});



gsap.from(".soft1", {
    x: 200,
    duration: 1,
    scale: 1,
    scrollTrigger: {
        trigger: ".soft1",
        scroller: "body",
        scrub: 2
    }
});

gsap.from(".bg-back", {
    duration: 1,
    x: 300,
    scrollTrigger: {
        trigger: ".bg-back",
        scroller: "body",
        scrub: 2
    }
})

gsap.from(".mmm,.about-microfi", {
    duration: 1,
    opacity: 0,
    scrollTrigger: {
        trigger: ".mmm,.about-microfi",
        scroller: "body",
        scrub: 3
    }
})

gsap.from(".set-last-txt", {
    duration: 0.3,
    opacity: 0,
    scrollTrigger: {
        trigger: ".set-last-txt",
        scroller: ".gsap-containe",
        scrub: 2
    }
})

gsap.from(".gss", {
    opacity: 0,
    duration: 1,
    // rotate:360,
    scrollTrigger: {
        trigger: ".gss",
        scroller: "body",
        scrub: 3
    }
})
// mobile app end

// nbfc  start
gsap.from(".nb-animate", {
    duration: 2,
    opacity: 0,
    scale: 1.5,

    scrollTrigger: {
        trigger: ".nb-animate",
        scroller: "body",
        scrub: 2
    }
});

// nbfc  end

gsap.from(".tool", {
    duration: 2,
    scale: 1.5,
    opacity: 1,
    scrollTrigger: {
        trigger: ".tool",
        scroller: "body",
        scrub: 4,
    }
})

gsap.from(".butt", {
    duration: 2,
    opacity:0,
    scrollTrigger:{
        trigger:".butt",
        scroller:"body",
        scrub:4
    }
})

gsap.from(".pos-sect-1-head",{
    duration:2,
    opacity:0,
    scrollTrigger:{
        trigger:".pos-sect-1-head",
        scroller:"body",
        scrub:3
    }
});

gsap.from(".poin-eff",{
   x:500,
    scrollTrigger:{
        trigger:".poin-eff",
        scroller:"body",
        scrub:3
    }
});

gsap.from(".hos-txt-hero",{
   opacity:0,
    duration:2,
    scale:1.5,
    stagger:0.5,
    scrollTrigger:{
        trigger:".hos-txt-hero",
        scroller:"body",
        scrub:3
    }
});


gsap.from(".bus_img",{
    x:-800,
     scrollTrigger:{
         trigger:".bus_img",
         scroller:"body",
         scrub:3
     }
 });




//technology section start
gsap.from("#gsaptech", {
    x: -1000,
    opacity: 0,
    duration: 2,
    delay: 2,
    scrollTrigger: {
      trigger: "#gsaptech",
      scroller: "body",
      marker: true,
      scrub: 3
    }
  });

