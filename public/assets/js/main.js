AOS.init();

if ($(window).width() > 1000) {
    // benfit
    $('#benefit').mousemove(function(e) {
        let amountMovedY = (e.pageY * 1 / 40);
        let amountMovedX = (e.pageX * 3 / 90); 
        $('#benefit .shape-1').css('left', amountMovedY/2 + 'px');
        $('#benefit .shape-1').css('top', amountMovedX/2 + 'px');
        // let amountMovedZ = (e.pageY * 2 / 90);
        // let amountMovedT = (e.pageX * 3 / 40); 
        // $('#benefit .shape-2').css('right', amountMovedZ + 'px');
        // $('#benefit .shape-2').css('top', amountMovedT + 'px');
        // let amountMovedA = (e.pageY * 1 / 10);
        // let amountMovedB = (e.pageX * 3 / 80); 
        // $('#benefit .shape-3').css('top', amountMovedA + 'px');
        // $('#benefit .shape-3').css('left', amountMovedB + 'px');
        // let amountMovedQ = (e.pageY * 3 / 70);
        // let amountMovedW = (e.pageX * 3 / 80); 
        // $('#benefit .shape-4').css('top', -amountMovedQ + 'px');
        // $('#benefit .shape-4').css('left', amountMovedW + 'px');
    });
    // home
    $('#home').mousemove(function(e) {
        let amountMovedX = (e.pageX * 1 / 10);
        let amountMovedY = (e.pageY * 1 / 10);
        $('#home .shape-1').css('left', amountMovedX + 'px ');
        $('#home .shape-1').css('top', amountMovedY + 'px ');
    });
    $('#home').mousemove(function(e) {
        let amountMovedY = (e.pageY * 3 / 15);
        let amountMovedX = (e.pageX * 2 / 16);
        $('#home .shape-2').css('left',amountMovedX + 'px ');
        $('#home .shape-2').css('top', amountMovedY + 'px ');
    });
   
    // sign-in
    $('#sign-up').mousemove(function(e) {
        let amountMovedX = (e.pageX * 1 / 10);
        let amountMovedY = (e.pageY * 1 / 10);
        $('#sign-up .shape-sign').css('left', amountMovedY + 'px ');
        $('#sign-up .shape-sign').css('top', amountMovedX + 'px ');
    });
    $('#sign-up').mousemove(function(e) {
        let amountMovedX = (e.pageX * 1 / 10);
        let amountMovedY = (e.pageY * 1 / 10);
        $('#sign-up .shape-sign-1').css('left', amountMovedX + 'px ');
        $('#sign-up .shape-sign-1').css('top', amountMovedY + 'px ');
    });
    // Contact
    $('#contact-form').mousemove(function(e) {
        let amountMovedX = (e.pageX * 1 / 10);
        let amountMovedY = (e.pageY * 1 / 10);
        $('#contact-form .shape-contact').css('left', amountMovedY + 'px ');
        $('#contact-form .shape-contact').css('top', amountMovedX + 'px ');
    });

}

$('#menu').on('click',function(){
    if($('#menu .menu-btn').hasClass('active')){
        $('#menu .menu-btn').removeClass('active').addClass('not-active');
        $('#menu-nav').removeClass('show');
    }else{
        $('#menu .menu-btn').addClass('active').removeClass('not-active');
        $('#menu-nav').addClass('show');
    }
});


$(".solution-btn").on('click', function(e){
    e.preventDefault();
    $(this).next().slideToggle();
});


$(window).on('scroll', function() {
    if ($(window).scrollTop() > 200) {
        $('.back-to-top').fadeIn("fast");
        $('.whatsapp').fadeIn("fast");
        $('.phone-btn').fadeIn("fast");
    } else {
        $('.back-to-top').fadeOut("fast");
        $('.whatsapp').fadeOut("fast");
        $('.phone-btn').fadeOut("fast");
    }
    
    if ($(window).scrollTop() > 100) {
        $('header').addClass('active');
        $(".course-menu").addClass('show');
        $(".course-menu-btn").addClass('show');
    } else {
        $('header').removeClass('active');
        $(".course-menu").removeClass('show');
        $(".course-menu-btn").removeClass('show');
    }
});

$(".course-menu-btn").on('click', function(){
    if($(".course-menu-btn i").hasClass('fa-chevron-left')){
        $(".course-menu-btn i").removeClass('fa-chevron-left').addClass('fa-times');
        $(".course-menu").addClass('open');
    }else{
        $(".course-menu-btn i").addClass('fa-chevron-left').removeClass('fa-times');
        $(".course-menu").removeClass('open');
    }
});
// $(window).on('scroll', function() {
   
//     if ($(window).scrollTop() > 10) {
//         $('header').addClass('show');
//     } else {
//         $('header').removeClass('show');
//     }
// });

$('.back-to-top').on('click', function(e) {
    $('html, body').animate({
        scrollTop: $('body').offset().top,
        scrollTop: $('html').offset().top
    }, 500)
});


$('.invoice-table .table-body div').on('click',function(){
    $('.modal-box').fadeIn();

});
$('.modal-box .close, .modal-box .fa-times').on('click',function(){
    $('.modal-box').fadeOut();
});

$('.subsc-btn').on('click',function(){
    $('.modal-new').fadeIn();
});
$('.modal-new .close, .modal-new .fa-times').on('click',function(){
    $('.modal-new').fadeOut();
});
