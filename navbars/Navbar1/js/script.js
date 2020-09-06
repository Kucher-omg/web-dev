$('.navTrigger').click(function() {

    $(this).toggleClass('active');
    console.log('-------------->' + this);
    $("#mainListDiv").toggleClass("show_list");

    $("#mainListDiv").fadeIn();

});

$('.main_list').click(function() {

    $(".navTrigger").toggleClass('active');

    $("#mainListDiv").toggleClass("show_list");

    $("#mainListDiv").fadeIn();

});