window.onscroll = function() {

    "use strict";

    // Vars 

    var winScrollTop = window.pageYOffset,
        navBar = document.getElementById("nav-2"),
        theAboutSec = document.getElementById("parallax"),
        theSkillsSec = document.getElementById("block-nameMAC"),
        theLIst = document.getElementById("list_ul-2"),
        theWorksSec = document.getElementById("list-group");


    if (winScrollTop > 0) {
        navBar.classList.remove("fixed");
        navBar.classList.add("scroll");
    } else {
        navBar.classList.remove("scroll");
        navBar.classList.add("fixed");
    }

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


    if (winScrollTop > theWorksSec.offsetTop) {
        goUp.style.display = "block";
    } else {
        goUp.style.display = "none";
    }
};



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
    var listDiv = document.getElementById("main_list-2");
    listDiv.classList.toggle("show");
    navButton.classList.toggle("active");
};