window.addEventListener('load', init);

$('a[href^="#"]').on('click', function(event) {
    var target = $( $(this).attr('href') );
    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});

function init() {
    loop();
    setBlog('18 April 2016', '2 Mei 2016', '7 Augustus 2016');
};

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
        menu        = $('nav ul');
        menuHeight  = menu.height();
 
    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
});

$(window).resize(function(){
    var w = $(window).width();
    if(w > 320 && menu.is(':hidden')) {
        menu.removeAttr('style');
    }
}); 