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





// mobile app start
gsap.from(".m1gsap",{
   x:-500,
    duration:1,
    delay:2,
    stagger: true,
    scrollTrigger:{
        trigger:".m1gsap",
        scroller:"body",
        scrub:2
    }
});

gsap.from("#m1gsapright",{
    x:800,
    duration:1,
    delay:2
});

gsap.from(".app-box",{
    x:-2000,
    duration:2,
    delay:2,
    scrollTrigger:{
        trigger:".app-box",
        scroller:"body",
        scrub:2
    }
});


gsap.from(".soft1",{
    x:200,
    duration:1,
    scale:1,
    scrollTrigger:{
        trigger:".soft1",
        scroller:"body",
        scrub:2
    }
});

gsap.from(".bg-back",{
    duration:1,
    x:300,
    scrollTrigger:{
        trigger:".bg-back",
        scroller:"body",
        scrub:2
    }
})

gsap.from(".mmm,.about-microfi",{
    duration:1,
    opacity:0,
    scrollTrigger:{
        trigger:".mmm,.about-microfi",
        scroller:"body",
        scrub:3
    }
})

gsap.from(".set-last-txt",{
    duration:0.3,
    opacity:0,
    scrollTrigger:{
        trigger:".set-last-txt",
        scroller:"body",
        scrub:2
    }
})

gsap.from(".gss",{
    opacity:0,
    duration:1,
    // rotate:360,
    scrollTrigger:{
        trigger:".gss",
        scroller:"body",
        scrub:3
    }
})
// mobile app end

// nbfc  start
gsap.from(".nb-animate",{
    
    duration:2,
    opacity:0,
    scale:1.5,
   
    scrollTrigger:{
        trigger:".nb-animate",
        scroller:"body",
        scrub:2
    }
})
// nbfc  end