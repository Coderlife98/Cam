function animateCounter(target,start,end,duration){
    let current =start;
    const increment =Math.ceil((end - start)/duration);
    const counter = document.getElementById(target);
    const timer =setInterval(()=>{
        current+=increment;
       
        if(current>=end){
            clearInterval(timer);
            current = end;
        }
        counter.textContent = current;
    },1);
    
}
 // Call the function to start the animation
 animateCounter("count", 0, 1000, 3000); // Start from 0, reach 500 in 3000 milliseconds (3 seconds)

//  our teams
function animateCounterTeam(target,start,end,duration){
    let current =start;
    const increment =Math.ceil((end - start)/duration);
    const counter = document.getElementById(target);
    const timer =setInterval(()=>{
        current+=increment;
        
        if(current>=end){
            clearInterval(timer);
            current = end;
        }
        counter.textContent = current;
    },1);
    
}
 // Call the function to start the animation
 animateCounter("team", 0, 500, 3000); // Start from 0, reach 500 in 3000 milliseconds (3 seconds)

 //our projects
 function animateCounterProject(target, start, end, duration) {
    let current = start;
    const increment = Math.ceil((end - start) / duration);
    const counter = document.getElementById(target);
    const timer = setInterval(() => {
        current += increment;
        if (current >= end) {
            clearInterval(timer);
            current = end;
        }
        counter.textContent = current;
    }, 1);
}


 animateCounterProject("project",0,1000,2000)