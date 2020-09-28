window.onscroll = function() {

    "use strict";

    // Vars  

    var winScrollTop = window.pageYOffset,
        navBar = document.getElementById("nav"),
        theAboutSec = document.getElementById("scroll-top"),
        theSkillsSec = document.getElementById("block-name"),
        theLIst = document.getElementById("list_ul"),
        theWorksSec = document.getElementById("list-group");
    // theDesignSec = document.getElementById("design"),
    // theContactSec = document.getElementById("contact"),

    // goUp = document.getElementById("goup");

    // Nav fixed to scroll and sscroll to fixed

    if (winScrollTop > 0) {
        navBar.classList.remove("fixed");
        navBar.classList.add("scroll");
    } else {
        navBar.classList.remove("scroll");
        navBar.classList.add("fixed");
    }

    // Change the about background color when scroll 

    // if (winScrollTop >= theAboutSec.offsetTop - 400) {
    //     theAboutSec.style.backgroundColor = "#0404ad";
    // }

    // if (winScrollTop >= theAboutSec.offsetTop - 300) {
    //     theAboutSec.style.backgroundColor = "#030386";
    // }

    // if (winScrollTop >= theAboutSec.offsetTop - 200) {
    //     theAboutSec.style.backgroundColor = "#000069";
    // }

    // Change link color when scroll

    if (winScrollTop >= theAboutSec.offsetTop - 60 && winScrollTop < theSkillsSec.offsetTop - 60) {
        theLIst.firstElementChild.classList.add("active");
    } else {
        theLIst.firstElementChild.classList.remove("active");
    }

    if (winScrollTop >= theSkillsSec.offsetTop - 60 && winScrollTop < theWorksSec.offsetTop - 60) {
        theLIst.children[1].classList.add("active");
    } else {
        theLIst.children[1].classList.remove("active");
    }

    if (winScrollTop >= theWorksSec.offsetTop - 60) {
        theLIst.children[2].classList.add("active");
    } else {
        theLIst.children[2].classList.remove("active");
    }

    // if (winScrollTop >= theDesignSec.offsetTop - 60 && winScrollTop < theContactSec.offsetTop - 60) {
    //     theLIst.children[3].classList.add("active");
    // } else {
    //     theLIst.children[3].classList.remove("active");
    // }

    // if (winScrollTop >= theContactSec.offsetTop - 60) {
    //     theLIst.children[4].classList.add("active");
    // } else {
    //     theLIst.children[4].classList.remove("active");
    // }

    // Show and hide the Go Up button

    if (winScrollTop > theWorksSec.offsetTop) {
        goUp.style.display = "block";
    } else {
        goUp.style.display = "none";
    }
};

// function to scroll to the sections

// function scroll(toElement, speed) {

//     "use strict";

//     var winObject = window,
//         windowTopScroll = winObject.pageYOffset,
//         pointer = toElement.getAttribute('href').slice(1),
//         elem = document.getElementById(pointer),
//         elemOffset = elem.offsetTop,
//         counter = setInterval(function() {

//             windowTopScroll;
//             // From button to top
//             if (windowTopScroll > elemOffset) {
//                 winObject.scrollTo(0, windowTopScroll);
//                 windowTopScroll -= speed;
//                 if (windowTopScroll <= elemOffset) {
//                     clearInterval(counter);
//                     winObject.scrollTo(0, elemOffset);
//                 }
//                 // From top to button
//             } else {
//                 winObject.scrollTo(0, windowTopScroll);
//                 windowTopScroll += speed;
//                 if (windowTopScroll >= elemOffset) {
//                     clearInterval(counter);
//                     winObject.scrollTo(0, elemOffset);
//                 }
//             }
//         }, 7);
// }

var links = document.querySelectorAll("a[data-scroll]"),
    i;

for (i = 0; i < links.length; i = i + 1) {
    links[i].onclick = function(e) {

        "use strict";
        scroll(this, 28);
        e.preventDefault();
    };
}

// Responsive Navbar button

var navButton = document.getElementById("nav_button");
navButton.onclick = function() {
    "use strict";
    var listDiv = document.getElementById("main_list");
    listDiv.classList.toggle("show");
    navButton.classList.toggle("active");
};