$(document).ready(function() {
    // When the user scrolls the page, execute myFunction
    $(window).scroll(function(){
        var sticky = $('#_navTop'),
        scroll = $(window).scrollTop();
        if (scroll >= 100){
            sticky.addClass('fixed-top');
        }else{
            sticky.removeClass('fixed-top');
        };
    });
    $("#crear").on('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
        window.location = "plan_crear.php";
    });
    $("#ingreso,#registro").on('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
        window.location = "plan_home.php";
    });
    $("#reservar").on('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
        window.location = "plan_reserva.php";
    });
    $("#pagar").on('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
        window.location = "plan_pagar.php";
    });
    $("#pagar_ahora").on('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
        window.location = "plan_reserva.php";
    });
    $("#tarjeta").on('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
        window.location = "plan_tarjeta.php";
    });
}); 

$(document).on('click', 'a[href^="#"]', function (event) {
    event.stopPropagation();
    event.preventDefault();
    $('html, body').animate({scrollTop: $($.attr(this, 'href')).offset().top}, 1000);
});

