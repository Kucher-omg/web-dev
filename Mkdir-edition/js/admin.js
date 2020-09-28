function windowSize() {

    if (window.innerWidth <= 700) {

        $("#admin-head").attr("src", "/content/home/admin-head.png");


    } else {
        $("#admin-head").attr("src", "/content/home/admin-head-lg.png");


    }
}

$(window).on('load resize', windowSize);