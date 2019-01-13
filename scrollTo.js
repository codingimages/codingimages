$('document').ready(function() {
    $('a.about').click(function(e) {
        e.preventDefault();
        var link = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(link).offset().top
        }, 1000);
        
    });
});

$('document').ready(function() {
    $('a.features').click(function(e) {
        e.preventDefault();
        var link = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(link).offset().top
        }, 1000);
        
    });
});

$('document').ready(function() {
    $('a.pricing').click(function(e) {
        e.preventDefault();
        var link = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(link).offset().top
        }, 1000);
        
    });
});

$('document').ready(function() {
    $('a.stories').click(function(e) {
        e.preventDefault();
        var link = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(link).offset().top
        }, 1000);
        
    });
});

$('document').ready(function() {
    $('a.contact').click(function(e) {
        e.preventDefault(); 
        var link = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(link).offset().top
        }, 1000);
        
    });
});

