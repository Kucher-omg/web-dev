$("#search-btn").click(function() {
    $(".input").toggleClass("active").focus;
    $(this).toggleClass("animate");
    $(".input").val("");
});
$('.carousel').carousel({
    interval: 2500
});
$(".toggle-change").bind("click", function() {
    $(this).attr("data-toggle", "modal");
});

$(".toggle-change").bind("hover", function() {
    $(this).attr("data-toggle", "tooltip");
});

$("#phone-num").click(function() {

    $(this).val("+380");
});

$(function() {
    $(".card").on("click", function() {
        $("#img-card-1").blur();

    });
});



var re = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/;

function testInfo(phoneInput) {
    var OK = re.exec(phoneInput.value);
    if (!OK || phoneInput.value.length < 12) {
        // window.alert("Isn't a phone number!");
        swal({
            position: 'top',
            title: "Isn't a phone number!",
            confirmButtonText: "OK",
            confirmButtonColor: "#00ff99",
        });
        $("#phone-num").val("");

    }
}

function testStore(phoneInput) {
    var OK = re.exec(phoneInput.value);
    if (!OK || phoneInput.value.length < 12) {
        // window.alert("Isn't a phone number!");
        swal({
            position: 'top',
            title: "Isn't a phone number!",
            text: "Example: +380960810643",
            confirmButtonText: " OK ",
            confirmButtonColor: "#00ff99",
        });
        $("#phone-num2").val("");

    } else {
        shoppingPage.removeAllthat();

    }
}

/* NAVBAR */
$('.bar').click(function() {

    $(this).toggleClass('active');
    console.log('-------------->' + this);
    $("#menu-but").toggleClass("show_list");

    $("#menu-but").fadeIn();

});

$('#menu-but').click(function() {

    $(".bar").toggleClass('active');

    $("#menu-but").toggleClass("show_list");

    $("#mainListDiv").fadeIn();

});
/* END NAVBAR */


/* CAROUSEL */

function windowSize() {

    if (window.innerWidth > 700 && window.innerWidth <= 1060) {
        $("#header-iPhone").attr("src", "content/home/iPhone-home2.png");
        $("#header-iPad").attr("src", "content/home/iPad-home2.png");
        $("#header-watch").attr("src", "content/home/watch-home2.png");

    } else if (window.innerWidth <= 700) {

        $("#carousel-1").attr("src", "content/home/slider-home1sm.png");
        $("#carousel-2").attr("src", "content/home/slider-home2sm.png");
        $("#header-1").attr("src", "content/home/slider-home1sm.png");
        $("#header-MAC").attr("src", "content/home/mac-home-sm.png");
        $("#header-iPhone").attr("src", "content/home/iPhone-home-sm.png");
        $("#header-iPad").attr("src", "content/home/iPad-home-sm.png");
        $("#header-watch").attr("src", "content/home/watch-home-sm.png");

        // $("#carousel-1").attr("src", "");

    } else {
        $("#carousel-1").attr("src", "content/home/1111.png");
        $("#carousel-2").attr("src", "content/home/slider-home2.png");
        $("#header-1").attr("src", "content/home/1111.png");
        $("#header-MAC").attr("src", "content/home/mac-home.png");
        $("#header-iPhone").attr("src", "content/home/iPhone-home.png");
        $("#header-iPad").attr("src", "content/home/iPad-home.png");
        $("#header-watch").attr("src", "content/home/watch-home.png");


    }
}
// $(window).load(windowSize); // при загрузке
// $(window).resize(windowSize); // при изменении размеров
// или "два-в-одном", вместо двух последних строк:
$(window).on('load resize', windowSize);


let buttonCountPlus = document.querySelector(".buttonCountPlus");
let buttonCountMinus = document.querySelector(".buttonCountMinus");
let count = document.querySelector(".buttonCountNumber");
let count2 = document.getElementById("num");
let number = 1;
let price = 350;

buttonCountPlus.onclick = function() {
    if (number <= 3) {
        number++;
        count.innerHTML = number;
        count2.value = number * price;
    }
};

buttonCountMinus.onclick = function() {
    if (number >= 2) {
        number--;
        count.innerHTML = number;
        count2.value = number * price;
    }
};