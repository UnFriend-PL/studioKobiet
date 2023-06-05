var app = angular.module('MainSite', ['ngAnimate'])
    .directive('slideable', function() {
        return {
            restrict: 'C',
            compile: function(element, attr) {
                // wrap tag
                var contents = element.html();
                element.html('<div class="slideable_content" style="margin:0 !important; padding:0 !important" >' + contents + '</div>');

                return function postLink(scope, element, attrs) {
                    // default properties
                    attrs.duration = (!attrs.duration) ? '1s' : attrs.duration;
                    attrs.easing = (!attrs.easing) ? 'ease-in-out' : attrs.easing;
                    element.css({
                        'overflow': 'hidden',
                        'height': '0px',
                        'transitionProperty': 'height',
                        'transitionDuration': attrs.duration,
                        'transitionTimingFunction': attrs.easing
                    });
                };
            }
        };
    })
    .directive('slideToggle', function() {
        return {
            restrict: 'A',
            link: function(scope, element, attrs) {
                var target = document.querySelector(attrs.slideToggle);
                attrs.expanded = false;
                element.bind('click', function() {
                    var content = target.querySelector('.slideable_content');
                    if (!attrs.expanded) {
                        content.style.border = '1px solid rgba(0,0,0,0)';
                        var y = content.clientHeight;
                        content.style.border = 0;
                        target.style.height = y + 'px';
                    } else {
                        target.style.height = '0px';
                    }
                    attrs.expanded = !attrs.expanded;
                });
            }
        }
    });

app.controller('MainSite', function($scope, $window, $timeout) {
    // $scope.Menu = [
    //     { name: 'Home' },
    //     { name: 'Oferta' },
    //     { name: 'Kontakt' },
    //     { name: 'Doświadczenie' },

    //     // { name: 'Pomoc zdalna' }
    // ]

    $scope.states = {};
    $scope.states.activeItem = 'Home';

    $scope.menu = true;
    $scope.showMenu = function(val) {
        console.log(val)
        if (val == "on") {
            $scope.menu = false;
            console.log($scope.menu)

        } else if (val == "off") {
            $scope.menu = true;

        }
    }

    $scope.validationCheck = function() {
        console.log($scope.mail,
            $scope.text,
            $scope.topic,
            $scope.checkbox,
            $scope.send1)
        if ($scope.mail == undefined ||
            $scope.text == undefined ||
            $scope.topic == undefined ||
            $scope.checkbox == false
        ) {
            $scope.send1 = true;
        } else {
            $scope.send1 = false;

        }
    }

    if ($(document.querySelector(".Wrap")).width() >= 1351) {
        $scope.close = true;
        $scope.menu = false;

    } else {
        $scope.close = false;
        $scope.menu = true;

    }
    var dodaj = 0;

    window.addEventListener("scroll", function(event) {
        var top = this.scrollY;
        buttonList = angular.element(document.querySelectorAll('.ButtonMenu'));
        // console.log(buttonList);
        // console.log(top);
        // console.log($(document.querySelector(".Wrap")).height());

        if ($(document.querySelector(".Wrap")).height() >= 4500) {
            dodaj = 400;
        } else {
            dodaj = 0;

        }
        if (top >= 0 && top < (600 + dodaj)) {
            idx = 0;
            [].forEach.call(buttonList, (e) => {
                idx += 1;
                if (idx == 1) {
                    angular.element(e).addClass('active');
                    // console.log(angular.element(e));
                } else {
                    angular.element(e).removeClass('active');
                }
                // console.log(e);
            });
        }
        if (dodaj + top >= dodaj + 600 && top < dodaj + 1400) {
            idx = 0;
            [].forEach.call(buttonList, (e) => {
                idx += 1;
                if (idx == 2) {
                    angular.element(e).addClass('active');
                    // console.log(angular.element(e));
                } else {
                    angular.element(e).removeClass('active');
                }
                // console.log(e);
            });
        }
        if (top >= dodaj + 1400 && top < dodaj + 2800) {
            idx = 0;
            [].forEach.call(buttonList, (e) => {
                idx += 1;
                if (idx == 3) {
                    angular.element(e).addClass('active');
                    // console.log(angular.element(e));
                } else {
                    angular.element(e).removeClass('active');
                }
                // console.log(e);
            });
        }
        if (top >= dodaj + 2800 && top < dodaj + 3500) {
            idx = 0;
            [].forEach.call(buttonList, (e) => {
                idx += 1;
                if (idx == 4) {
                    angular.element(e).addClass('active');
                    // console.log(angular.element(e));
                } else {
                    angular.element(e).removeClass('active');
                }
                // console.log(e);
            });
        }
    }, false);







});
var autoplay = true;
jQuery(document).ready(function($) {
    var interval = setInterval(moveRight, 7000);
    $("#slider").hover(function() {
        clearInterval(interval);
        console.log("czyszcze")
    }, function() {
        interval = setInterval(moveRight, 7000);
        console.log("ustawiam")

    });


    // $('#checkbox').change(function() {
    //     setInterval(function() {
    //         moveRight();
    //     }, 5000);
    // });

    var slideCount = $('#slider ul li').length;
    var slideWidth = $('#slider ul li').width();
    var slideHeight = $('#slider ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    $('#slider').css({ width: slideWidth, height: slideHeight });

    $('#slider ul').css({ width: sliderUlWidth, marginLeft: -slideWidth });

    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: +slideWidth
        }, 1000, function() {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: -slideWidth
        }, 1000, function() {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function() {
        moveLeft();
    });

    $('a.control_next').click(function() {
        moveRight();
    });

});