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
