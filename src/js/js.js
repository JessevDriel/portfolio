window.addEventListener("scroll", function () {
const distance = window.scrollY
// console.log(distance);


// if(distance > 200){
//     document.querySelector(".animation1").classList.add("slideIn1");
// }

if(distance > 700){
    document.querySelector(".animation3").classList.add("slideIn3");
}
if(distance > 700){
    document.querySelector(".animation4").classList.add("slideIn4");
}


})  

function slideIn() {
        document.querySelector(".animation2").classList.add("slideIn2");
}

if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
} else {
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    }
}