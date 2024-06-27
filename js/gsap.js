
window.addEventListener("wheel", (dets) => {
    console.log(dets);
    if (dets.deltaY > 0) {
        gsap.to(".marque", {
            duration: 5,
            transform: "translateX(-200%)",
            repeat: -1,
            ease: "none"
        })
        gsap.to(".marque i", {
            rotate: 180

        })
    }
    else {
        gsap.to(".marque", {
            transform: "translateX(0%)",
            duration: 5,
            repeat: -1,
            ease: "none"
        })
        gsap.to(".marque i", {
            rotate: 0

        })

    }


});





gsap.registerPlugin(ScrollTrigger);


// hospital management start
gsap.from(".hos-txt-hero", {
    opacity: 0,
    duration: 2,
    scale: 1.2,
    stagger: 0.5,
    scrollTrigger: {
        trigger: ".hos-txt-hero",
        scroller: "body",
        scrub: 3
    }
});

// hospital management end



// for home page start
gsap.from(".set-desi", {
    x: -1300,
    duration: 2,
    delay: 1,
    stagger: true,
});

// for home page end




// college management software start
var college = gsap.timeline();
college.from("#gsapCollege1,#gsapCollege2", {
    scale: 0.5, // Starts from half the size and zooms in to full size
    opacity: 0,
    duration: 2, // Optional: Sets the duration of the animation
    scrollTrigger: {
        trigger: "#gsapCollege1,#gsapCollege2",
        scroller: "body",
        // markers:true,
        // start:"top 12%",
        // end:"bottom 60%",
        scrub: 3,
    }
});

var mmCollege = gsap.timeline();
mmCollege.from("#collGsap1,#collGsap2", {
    opacity: 0,
    duration: 2,
    scrollTrigger: {
        trigger: "#collGsap1,#collGsap2",
        scroller: "body",
        scrub: 3
    }
});


// college management software end
// hospital start
let hospmedia = gsap.matchMedia();
hospmedia.add("(min-width:1024px)", () => {
    var hosp = gsap.timeline();
    hosp.from("#hos1", {
        x: -500,
        opacity: 0,
        scrollTrigger: {
            trigger: "#hos1",
            scroller: "body",
            // markers:true,
            start:"top 70%",
            end:"bottom 80%",
            scrub: 3,

        }
    });

    hosp.from("#hos2", {
        x: 1200,
        opacity: 0,
        scrollTrigger: {
            trigger: "#hos2",
            scroller: "body",
            // markers:true,
            start:"top 40%",
            end:"bottom 80%",
            scrub: 5,

        }
    });

    hosp.from("#sechosgsap",{
        duration: 1,
        scale: 0.1,
        y: 40,
        ease: "back.in",
        stagger: 0.2,
        scrollTrigger: {
            trigger: "#sechosgsap",
            scroller: "body",
            // once: true,
            // markers:true,
            start:"top 70%",
            end:"bottom 90%",
            scrub: 3,

        }
    });

    hosp.from(".step-img",{
        opacity: 0, 
        x: -100, 
        duration: 1,
        scrollTrigger: {
            trigger: ".step-img",
            scroller: "body",
            // once: true,
            // markers:true,
            start:"top 70%",
            end:"bottom 90%",
            scrub: 3,

        }
    });

    hosp.from(".faqgsap",{
        opacity:0,
        duration: 1,
        scale: 0.1,
        y: 40,
        ease: "back.in",
        stagger: 0.2,
        scrollTrigger: {
            trigger: ".faqgsap",
            scroller: "body",
            // once: true,
            // markers:true,
            start:"top 60%",
            end:"bottom 90%",
            scrub: 5,

        }
    });

    hosp.from(".hos-set-this",{
        duration: 1,
        scale: 0.1,
        y: 40,
        ease: "back.in",
        stagger: 0.2,
        scrollTrigger: {
            trigger: ".hos-set-this",
            scroller: "body",
            // once: true,
            // markers:true,
            start:"top 60%",
            end:"bottom 80%",
            scrub: 5,

        }
    });
    hosp.from(".why-hossp",{
        opacity:0,
        ease: "bounce.out",
        scrollTrigger: {
            trigger: ".why-hossp",
            scroller: "body",
            // once: true,
            // markers:true,
            start:"top 60%",
            end:"bottom 80%",
            scrub: 3,

        }

    });
    hosp.from(".hosBoxgsap",{
       opacity:0,
       x:-50,
       duration:2,
       stagger:0.5,
       scrollTrigger: {
        trigger: ".hosBoxgsap",
        scroller: "body",
        // once: true,
        // markers:true,
        start:"top 40%",
        end:"bottom 95%",
        scrub: 3,

    }
    });

})

hospmedia.add("(max-width:1024px)", () => {
    var hospmediasm = gsap.timeline();
    hospmediasm.from("#sechosgsap",{
        duration: 1,
        scale: 0.1,
        y: 40,
        ease: "back.in",
        stagger: 0.2,
        scrollTrigger: {
            trigger: "#sechosgsap",
            scroller: "body",
            // once: true,
            // markers:true,
            start:"top 30%",
            end:"bottom 90%",
            scrub: 3,

        }
    });
    hospmediasm.from(".hosBoxgsap",{
        opacity:0,
        x:-50,
        duration:2,
        
        stagger:0.5,
        scrollTrigger: {
         trigger: ".hosBoxgsap",
         scroller: "body",
        //  markers:true,
         start:"top 60%",
         end:"bottom 70%",
         scrub: 3,
 
     }
     });

     hospmediasm.from(".faqgsap",{
        opacity:0,
        duration: 1,
        scale: 0.1,
        y: 40,
        ease: "back.in",
        stagger: 0.2,
        scrollTrigger: {
            trigger: ".faqgsap",
            scroller: "body",
            // once: true,
            // markers:true,
            start:"top 30%",
            end:"bottom 90%",
            scrub: 5,

        }
    });

});
// hospital end
// technology start
let techcheck = gsap.matchMedia();
techcheck.add("(min-width:1024px)", () => {
    var technolo = gsap.timeline();
    technolo.from("#technologyBox1", {
        x: -200,
        duration: 1,
        scrollTrigger: {
            trigger: "#technologyBox1",
            scroller: "body",
            scrub: 3,
            start: "top 40%",
            end: "top 10%"
        }
    });
    technolo.from("#technologyBox2", {
        x: -100,
        duration: 1,
        scrollTrigger: {
            trigger: "#technologyBox2",
            scroller: "body",
            scrub: 3,
            start: "top 40%",
            end: "top 10%"
        }
    });

    technolo.from("#technologyBox3", {
        x: 200,
        duration: 1,
        scrollTrigger: {
            trigger: "#technologyBox3",
            scroller: "body",
            scrub: 3,
            start: "top 40%",
            end: "top 10%"
        }
    });

    technolo.from("#technologyBox4", {
        x: 400,
        duration: 1,
        scrollTrigger: {
            trigger: "#technologyBox4",
            scroller: "body",
            scrub: 3,

            start: "top 40%",
            end: "top 10%"
        }
    });
});


techcheck.add("(max-width:1024px)", () => {
    var technolo = gsap.timeline();
    technolo.from("#technologyBox1", {
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: "#technologyBox1",
            scroller: "body",
            scrub: 3,
            start: "top 60%",
            end: "top 20%"
        }
    });
    technolo.from("#technologyBox2", {
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: "#technologyBox2",
            scroller: "body",
            scrub: 3,
            start: "top 60%",
            end: "top 20%"
        }
    });
    technolo.from("#technologyBox3", {
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: "#technologyBox3",
            scroller: "body",
            scrub: 3,
            start: "top 60%",
            end: "top 20%"
        }
    });
    technolo.from("#technologyBox4", {
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: "#technologyBox4",
            scroller: "body",
            scrub: 3,
            start: "top 60%",
            end: "top 20%"
        }
    });
});
//  technology end
// Our technology partner start
var partner = gsap.matchMedia();
partner.add("(min-width:1024px)", () => {
    gsap.from(".heading-tech,.tec-partner ", {
        opacity: 0,
        scale: -0.5,
        duration: 1,
        scrollTrigger: {
            trigger: ".heading-tech,.tec-partner ",
            start: "top 35%",
            end: "bottom 70%",
            scroller: "body",
            scrub: 3
        }
    });
});
// Our technology partner end
// our team section start
var team = gsap.matchMedia();
team.add("(min-width:1024px)", () => {
    var t1 = gsap.timeline();
    t1.from(".bbb1", {
        opacity: 0,
        scale: -1.1,
        duration: 1,
        scrollTrigger: {
            trigger: ".bbb1",
            scroller: "body",
            start: "top 30%",
            end: "bottom 55%",
            scrub: 4,
        }
    })
})
// our team section end


// software dev start
var software = gsap.matchMedia();
software.add("(min-width:1024px)", () => {
    var t1 = gsap.timeline();
    t1.from(".set-soft-bgg", {
        opacity: 0,
        scaleX: 0.5,
        duration: 2,
        scrollTrigger: {
            trigger: ".set-soft-bgg",

            start: "top 50%",
            end: "bottom 80%",
            scroller: "body",
            scrub: 3,

        }
    });
    t1.from(".ggg-aa", {
        opacity: 0,
        duration: 2,
        scrollTrigger: {
            trigger: ".set-soft-bgg",
            scroller: "body",
            scrub: 3,
        }
    });
    t1.from(".team-soft-md", {
        opacity: 0,
        y: -200,
        duration: 2,
        scrollTrigger: {
            trigger: ".team-soft-md",
            scroller: "body",
            scrub: 3
        }
    })

})
// software dev end

var maxSoftware = gsap.matchMedia();
maxSoftware.add("(min-width:1024px)", () => {
    var t1 = gsap.timeline();
    t1.from(".m1gsap", {
        x: -500,
        duration: 1,
        delay: 2,
        stagger: true,
        scrollTrigger: {
            trigger: ".m1gsap",
            scroller: "body",
            // markers:true,
            start: "top 70%",
            end: "bottom 80%",
            scrub: 2
        }
    });
    t1.from(".app-box", {
        opacity:0,
        y: -50,
        duration: 1,
        delay: 2,
        stagger: true,
        scrollTrigger: {
            trigger: ".app-box",
            scroller: "body",
            // markers:true,
            start: "top 70%",
            end: "bottom 80%",
            scrub: 3
        }
    });
    t1.from(".movegsap",{
        opacity:0,
        x:-300,
        duration:1,
        scrollTrigger:{
            trigger:".movegsap",
            scroller:"body",
            // markers:true,
            start: "top 70%",
            end: "bottom 80%",
            scrub: 3
        }
    });
})



var software = gsap.matchMedia();
software.add("(max-width:1024px)", () => {
    var t1 = gsap.timeline();
    t1.from(".m1gsap", {
        opacity: 0,
        duration: 1,
        delay: 2,
        stagger: true,
        scrollTrigger: {
            trigger: ".m1gsap",
            scroller: "body",
            scrub: 2
        }
    });



})

// website dev start
var website = gsap.matchMedia();
website.add("(min-width:1024px)", () => {
    var t1 = gsap.timeline();
    t1.from(".web-head", {
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: ".web-head",
            scroller: "body",
            start: "top 40%",
            end: "bottom 60%",
            scrub: 3
        }
    });
    t1.from(".gpp", {

        x: 300,
        duration: 1,
        scrollTrigger: {
            trigger: ".gpp",
            scroller: "body",
            scrub: 3,
        }
    })
});


var websiteSm = gsap.matchMedia();
websiteSm.add("(max-width:1024px)", () => {
    var t1 = gsap.timeline();
    t1.from(".gpp", {
        opacity: 0,
        duration: 1,
        delay: 2,
        stagger: true,
        scrollTrigger: {
            trigger: ".gpp",
            scroller: "body",
            scrub: 2
        }
    });



})
// website dev end

// digital marketing start
var digital = gsap.matchMedia();
digital.add("(min-width:1024px)", () => {
    var t1 = gsap.timeline();
    t1.from(".gap-right", {
        opacity: 0,
        duration: 2,
        scrollTrigger: {
            trigger: ".gap-right",
            scroller: "body",
            start: "top 30%",
            end: "bottom 60%",
            scrub: 3
        }
    });
    t1.from(".gsap-ri,.point-software", {
        opacity: 0,
        scale: 0.5,
        scrollTrigger: {
            trigger: ".gsap-ri,.point-software",
            scroller: "body",
            // markers: true,
            start: "top 65%",
            end: "bottom 90%",
            scrub: 3
        }
    });

    t1.from(".scc-gsap", {
        opacity: 0,
        scale: 0.5,
        scrollTrigger: {
            trigger: ".scc-gsap",
            scroller: "body",
            // markers: true,
            start: "top 50%",
            end: "bottom 90%",
            scrub: 3
        }
    });
    t1.from(".horn", {
        opacity: 0,
        x: -200,
        scrollTrigger: {
            trigger: ".horn",
            scroller: "body",
            // markers: true,
            start: "top 50%",
            end: "bottom 80%",
            scrub: 3

        }
    });
    t1.from(".sem", {
        opacity: 0,
        x: 200,
        scrollTrigger: {
            trigger: ".sem",
            scroller: "body",
            // markers:true,
            start: "top 50%",
            end: "bottom 90%",
            scrub: 3

        }
    });
    t1.from(".emailgsap", {
        opacity: 0,
        y: 150,
        scrollTrigger: {
            trigger: ".emailgsap",
            scroller: "body",
            // markers:true,
            top: "top 50%",
            end: "bottom 90%",
            scrub: 3
        }
    })

});

digital.add("(max-width:1024px)",()=>{
    var t1 = gsap.timeline();
    t1.from(".gap-right", {
       y:-10,
        duration: 2,
        scrollTrigger: {
            trigger: ".gap-right",
            scroller: "body",
            start: "top 30%",
            end: "bottom 60%",
            scrub: 3
        }
    });

    t1.from(".gsap-ri,.point-software", {
        opacity: 0,
        scale: 0.5,
        scrollTrigger: {
            trigger: ".gsap-ri,.point-software",
            scroller: "body",
            // markers: true,
            start: "top 65%",
            end: "bottom 90%",
            scrub: 3
        }
    });

    t1.from(".emailgsap", {
        opacity: 0,
        y: 150,
        scrollTrigger: {
            trigger: ".emailgsap",
            scroller: "body",
            // markers:true,
            top: "top 50%",
            end: "bottom 90%",
            scrub: 3
        }
    });

    t1.from(".sem", {
        opacity: 0,
        y: 20,
        scrollTrigger: {
            trigger: ".sem",
            scroller: "body",
            // markers:true,
            start: "top 50%",
            end: "bottom 90%",
            scrub: 3

        }
    });

 
  
})

// digital marketing end
// portal start
var portal = gsap.matchMedia();
portal.add("(min-width:1024px)", () => {
    var t1 = gsap.timeline();
    t1.from(".portal-gsap", {
        y: 80,
        scrollTrigger: {
            trigger: ".portal-gsap",
            scroller: "body",
            // markers:true,
            end: "bottom 80%",
            start: "top 70%",
            scrub: 3
        }
    });
    t1.from(".por-ii", {
        opacity: 0,
        scrollTrigger: {
            trigger: ".por-ii",
            scroller: "body",
            scrub: 3
        }
    })
});

gsap.from(".fadeInRight", {
    scrollTrigger: {
        trigger: ".fadeInRight",
        top: "top 40%",
        end: "bottom 20%",
        once: true, // Only trigger once
        // markers: true, // Show markers for debugging
    },
    duration: 2.5,
    ease: "bounce.out",
    x: -250,
});

gsap.to(".bob", {
    keyframes: {
        y: [0, 80, 30, 0],
        ease: "none",
        easeEach: "power2.inOut"
    },
    scrollTrigger: {
        trigger: ".bob",
        // top: "top 40%",
        // end: "bottom 20%",
        once: true,

    },

    ease: "elastic",
    duration: 5,
    stagger: 0.2
});

gsap.from(".main-portal-bullet", {
    x: -1200,
    duration: 3,
    stagger: 0.3,
    scrollTrigger: {
        trigger: ".main-portal-bullet",
        // top: "top 40%",
        // end: "bottom 20%",
        once: true,

    },
})




// portal end
// core banking software start
var coreBanking = gsap.matchMedia();
coreBanking.add("(min-width:1024px)", () => {
    var t1 = gsap.timeline();
    t1.from(".core-imggg-set", {
        opacity: 0,
        scale: 0.5,
        scrollTrigger: {
            trigger: ".core-imggg-set",
            scroller: "body",
            // markers:true,
            start: "top 25%",
            end: "bottom 55%",
            scrub: 3
        }
    });
  
});
// core banking software end
// nidhi company registration start

// nidhi company registration end

// nidhi software start
var softnidhi = gsap.matchMedia();
softnidhi.add("(min-width:1024px)", () => {
    var t1 = gsap.timeline();
    t1.from(".soft1", {
        x: 200,
        duration: 1,
        scale: 1,
        scrollTrigger: {
            trigger: ".soft1",
            scroller: "body",
            scrub: 2
        }
    });
    t1.from(".bg-back", {
        duration: 2,
        x: 300,
        scrollTrigger: {
            trigger: ".bg-back",
            scroller: "body",
            scrub: 2
        }
    });
  
});


// nidhi software end

gsap.from("#m1gsapright", {
    x: 800,
    duration: 1,
    delay: 2
});

gsap.from(".app-box", {
    x: -2000,
    duration: 2,
    delay: 2,
    
    scrollTrigger: {
        trigger: ".app-box",
        scroller: "body",
        scrub: 2
    },
 
    
});

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
    opacity: 0,
    scrollTrigger: {
        trigger: ".butt",
        scroller: "body",
        scrub: 4
    }
})

gsap.from(".pos-sect-1-head", {
    duration: 2,
    opacity: 0,
    scrollTrigger: {
        trigger: ".pos-sect-1-head",
        scroller: "body",
        scrub: 3
    }
});

gsap.from(".poin-eff", {
    x: 500,
    scrollTrigger: {
        trigger: ".poin-eff",
        scroller: "body",
        scrub: 3
    }
});

gsap.from(".bus_img", {
    x: -800,
    scrollTrigger: {
        trigger: ".bus_img",
        scroller: "body",
        scrub: 3
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
        scrub: 3
    }
});

// hospital end

