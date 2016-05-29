window.addEventListener('load', init);

function init() {
    loop();
    setBlog('18 April 2016', '2 Mei 2016', '7 Augustus 2016');
}

function loop() {
    $('#arrow').css({
        'margin-top': '0rem'
    });
    $('#arrow').animate ({
        'margin-top': '1rem'
    }, 750, 'swing');
    $('#arrow').animate ({
        'margin-top': '0rem'
    }, 750, 'swing', function() {
        loop();
    });
}
function setBlog(date1, date2, date3) {
    var dateOne = $('.details').find('h5').get(0);
    var dateTwo = $('.details').find('h5').get(1);
    var dateThree = $('.details').find('h5').get(2);

    dateOne.innerHTML = date1;
    dateTwo.innerHTML = date2;
    dateThree.innerHTML = date3;
};

$(function() {
    var pull        = $('#pull');
    var menu        = $('nav ul');
    var menuButton  = $('a#responsiveMenu');
    var icon        = $('#nav-icon3');

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle(300);
        icon.toggleClass('open');
    });

    $(menuButton).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle(300);
        icon.toggleClass('open');
    });
});
///hover active
var arrow = $('#arrow');
var sections = $('section');
var nav = $('nav');
var nav_height = nav.outerHeight();

$(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();

    sections.each(function() {
        var top = $(this).offset().top - nav_height,
            bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
            nav.find('a').removeClass('active');
            nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
        }
    });
});
$('a[href^="#"]').on('click', function(event) {
    var target = $( $(this).attr('href') );
    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});
arrow.on('click', function () {
    var $el = $(this);
    var id = $el.attr('href');
    $('html, body').animate({
        scrollTop: $(id).offset().top - nav_height
    }, 1000);
    return false;
});
