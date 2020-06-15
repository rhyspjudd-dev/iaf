// Toggle open/close nav
$(document).ready(function(){
    $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
    });

    $('.mob-nav a').click(function() {
        $(this).removeClass('active');
        $('#overlay').removeClass('open');
        $('.button-container').removeClass('active');
    });
});