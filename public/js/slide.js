$('#next').click(function(){
    var currentcard = $('.slide.active');
    var nextcard = currentcard.next();
    currentcard.removeClass('active');
    nextcard.addClass('active');

    if (nextcard.length==0) {
        $('.slide').first().addClass('active');
    }
});
$('#prev').click(function(){
    var currentcard = $('.slide.active');
    var prevcard = currentcard.prev();
    currentcard.removeClass('active');
    prevcard.addClass('active');

    if (prevcard.length==0) {
        $('.slide').last().addClass('active');
    }
});