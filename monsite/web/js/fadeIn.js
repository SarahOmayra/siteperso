tiles = $("ul#tiles li").fadeTo(0, 0);

$(window).scroll(function(d,h) {
    tiles.each(function(i) {
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        console.log(b);
        if (a < b) $(this).fadeTo(500,1);
    });
});