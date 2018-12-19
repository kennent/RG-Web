$(document).on('ready', function() {
$(".lazy").slick({
    // lazyLoad: 'ondemand', // ondemand progressive anticipated
    // infinite: true
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true
});
});