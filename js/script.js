window.onload = function() {
    // particles()
    // particles2(noBounceV = true, speedV = -100, speedH = -15, connections = false, avoidMouse = false, hover = false);
};
// $('.Count').each(function() {
//     $(this).prop('Counter', 0).animate({
//         Counter: $(this).text()
//     }, {
//         duration: 1000,
//         easing: 'swing',
//         step: function(now) {
//             $(this).text(Math.ceil(now));
//         }
//     });
// }); { /* <span class="Count">10</span> */ }
var a = 0;
$(window).scroll(function() {

    var oTop = $('.CounterBox').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $('.Count').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                    countNum: countTo
                },

                {

                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });
        });
        a = 1;
    }

});
// $('body').toggleClass('loaded');
$(document).ready(function() {

    // setTimeout(function() {
    //     $('body').addClass('loaded');
    // }, 3000);
    $('body').toggleClass('loaded');

});