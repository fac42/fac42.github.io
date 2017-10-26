$(document).ready(function(){
    // Date JS
    var date = new Date();
    document.getElementById("date").innerHTML = date.getFullYear();
    // Header JS
    var height = $(window).height();
    var width = $(window).width();
    console.log(height);
    console.log(width);
    $(window).on('scroll', function() {
        if (width < 500) {
            $('header').toggleClass('shrink', $(document).scrollTop()>(height*.75));
        }
        else {
            $('header').toggleClass('shrink', $(document).scrollTop()>(height*.85));
        }
    });
});


