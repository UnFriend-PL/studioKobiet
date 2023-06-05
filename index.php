<!DOCTYPE html>
<html lang='pl' ng-app="MainSite">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nasze studio to zakątek dla kobiet w każdym wieku, z różnym bagażem doświadczeń, z różnymi problemami, ale z jednym, podobnym celem - potrzebą zmiany czegoś w sobie!">
    <title>Studio Kobiet Włocławek</title>
    <link href="css/preloader.css" rel="stylesheet">

    <meta property="og:title" content="Studio Kobiet Włocławek" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <meta property="og:site_name" content="Studio Kobiet Włocławek">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pl_PL">
    <meta name="Keywords" content="Studio kobiet włocławek, Studio figura włocławek, studio kobiet, studio figura, włocławek fitness, fitness włocławek, dietetyczka włocławek, endermonologia, endermonologia włocławek, fitness, zabiegi na twarz włocławek, zabiegi na twarz, włocławek zabiegi na twarz, włocławek siłownia, włocławek fitness dla kobiet, włocławek kobiecy fitness, kobiecy fitness włocławek, dietetyczka włocławek, strefa zabiegów włocławek, studio włocławek, kobiet włocławek" />
    <meta property="og:description" content="Nasze studio to zakątek dla kobiet w każdym wieku, z różnym bagażem doświadczeń, z różnymi problemami, ale z jednym, podobnym celem - potrzebą zmiany czegoś w sobie!" />

    <meta name="google-site-verification" content="google-site-verification=0cTgTVhEDGmhLlT2js-N7EdBBl-9MABS5W2WXZ0_1dM" />
    <meta name="author" content="Szymon Marcinkowski">
    <meta property="og:image" content="img/logo.jpg" />

    <script data-require="angular.js@*" data-semver="1.2.13" src="https://code.angularjs.org/1.2.13/angular.js"></script>
    <script data-require="angular-animate@*" data-semver="1.2.13" src="https://code.angularjs.org/1.2.13/angular-animate.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="img/logo.jpg" />
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="stylesheet" href="css/welcomeBlock.css" />
    <link rel="stylesheet" href="css/footer.css" />

    <link rel="stylesheet" href="css/infoSection.css" />
    <link rel="stylesheet" href="css/chooseUs.css" />
    <link rel="stylesheet" href="css/team.css" />






</head>

<body ng-controller="MainSite">
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <div id="content" class="Wrap">

        <div class="header" id="home">

            <div class="li first" style="justify-content: flex-start;">
                <a href="index.php">
                    <div data-aos="fade-right">Studio Kobiet Włocławek<span class="point">.</span></div>
                </a>
            </div>
            <div class="phoneMenu" ng-click="showMenu('on')">
                <div class="li hide">
                    <i class="fas fa-bars"></i>
                </div>

            </div>
            <div class="ukryj" ng-hide="menu" data-aos="fade-left">
                <div class="close li hide" ng-hide="close" ng-click="showMenu('off')">
                    <i class="fas fa-times-circle"></i>
                </div>
                <div class="li hide">
                    <a href="#Home">Home</a>
                </div>
                <div class="li hide">
                    <a href="fitness.php">Strefa fitness</a>
                </div>
                <div class="li hide">
                    <a href="treatments.php">strefa zabiegów</a>
                </div>
                <div class="li hide">
                    <a href="diet.php">Dieta</a>
                </div>
                <div class="li hide">

                    <a href="cennik.php">Cennik</a>
                </div>
                <div class="li hide">
                    <a href="#kontakt">Kontakt</a>
                </div>
            </div>
        </div>
        <div class="moveUp">
            <a href="#"><i class="fas fa-chevron-circle-up"></i></a>
        </div>
        <div class="WelcomeBlock">
            <div class="typeWrite">
                <div class="add">Dajemy Ci możliwość</div>
                <div class="add">redukcji <span class="typed-words point"></span></div>
            </div>
            <a href="#offer">
                <div class="buttonCheck" data-aos="fade-up" id="kontakt">Zobacz sam!</div>
            </a>

        </div>
        <div class="infoSection">
            <div class="infoBox">
                <div class="infoSec" data-aos="fade-up">
                    <div class="infoIco">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="infoText">
                        <div class="infoTop">
                            Odwiedź nasze studio!
                        </div>
                        <div class="infoBottom">

                            Włocławek 87-800, Toruńska 26
                        </div>

                    </div>
                </div>
                <div class="infoSec" data-aos="fade-up">
                    <div class="infoIco">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="infoText">
                        <div class="infoTop">
                            Zadzwoń już teraz!
                        </div>
                        <div class="infoBottom">
                            <a href="tel:+48512148686">+48 512 148 686</a>
                        </div>

                    </div>
                </div>
                <div class="infoSec" data-aos="fade-up">
                    <div class="infoIco">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="infoText">
                        <div class="infoTop">
                            Wyślij wiadomość

                        </div>
                        <div class="infoBottom">
                            <a href="mailto:studio.kobietwloclawek@gmail.com" style="word-wrap: break-word;" >
                                studio.kobiet wloclawek@gmail.com
                            </a>
                        </div>

                    </div>
                </div>
                <div class="infoSec" data-aos="fade-up">
                    <div class="infoIco">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="infoText">
                        <div class="infoTop">
                            Godziny otwarcia
                        </div>
                        <div class="infoBottom">
                            Poniedziałek-Piątek 8:00 - 20:00
                        </div>

                    </div>
                </div>
            </div>

            <div class="offer" id="offer">
                <div class="offerBox" data-aos="fade">
                    <!-- <div class="offerPhoto">
                        <img src="img/img_1.jpg">
                    </div> -->
                    <div class="offerText">
                        <div class="offerTitle">
                            <h3>Co oferujemy!</h3>
                        </div>
                        <div class="offerContent">

                            <p><b>Studio Kobiet Włocławek</b> to zakątek dla kobiet w każdym wieku, z różnym bagażem doświadczeń, z różnymi problemami, ale z jednym, podobnym celem - potrzebą zmiany czegoś w sobie!</p>
                            <p> Oferujemy wspaniałą atmosfere i do każdej klientki podchodzimy indywidualnie.</p>
                            <p>Nasze specjalistki dobiorą plan zabiegowo-treningowy idealnie dostosowany do Twoich potrzeb.</p>
                            <p>Używamy najwyższej jakości kosmetyków marki <b>M'onduniq</b>.</p>
                        </div>
                    </div>
                    <div class="offerMore">
                        <a href="#"> Dowiedz się więcej <i class="fas fa-chevron-right move"></i></a>
                    </div>
                </div>
                <div class="offerBox" data-aos="fade">
                    <a href="fitness.php">
                        <div class="offerPhoto">
                            <img src="img/fitness.jpg">
                        </div>
                    </a>
                    <div class="offerText">
                        <div class="offerTitle">
                            <h3>Strefa fitness</h3>
                        </div>
                        <div class="offerContent">
                            <p>Strefa fitness z typowo kobiecymi stacjami treningowymi, które łączą intensywny trening z przyjemnymi masażami drenującymi, które przyspieszają proces odchudzania i modelowania sylwetki.</p>
                        </div>
                    </div>

                    <div class="offerMore">
                        <a href="fitness.php"> Dowiedz się więcej <i class="fas fa-chevron-right move"></i></a>

                    </div>
                </div>
                <div class="offerBox" data-aos="fade">
                    <a href="treatments.php">
                        <div class="offerPhoto">
                            <img src="img/treatments.jpg">
                        </div>
                    </a>
                    <div class="offerText">
                        <div class="offerTitle">
                            <h3>Strefa zabiegowa</h3>
                        </div>
                        <div class="offerContent">
                            <p>Strefa zabiegowa to strefa gdzie Klientki poddawane są specjalistycznym zabiegom wyszczuplającym, redukującym tkankę tłuszczową i cellulit, a także zabiegom upiększającym.</p>
                        </div>
                    </div>
                    <div class="offerMore">
                        <a href="treatments.php"> Dowiedz się więcej <i class="fas fa-chevron-right move"></i></a>

                    </div>
                </div>
                <div class="offerBox" data-aos="fade" data-aos="fade">
                    <a href="diet.php">
                        <div class="offerPhoto">
                            <img src="img/diet.jpg">
                        </div>
                    </a>
                    <div class="offerText">
                        <div class="offerTitle">
                            <h3>Usługi dietetyczne</h3>
                        </div>
                        <div class="offerContent">
                            <p>Usługi dietetyczne to skuteczna dieta w połączeniu z aktywnością fizyczną to gotowy przepis na odchudzanie. Odpowiednie żywienie to 70 procent sukcesu. Staramy się, aby każda z naszych Klientek zrozumiała, że dieta nie musi wiązać się z wyrzeczeniami, czy uczuciem głodu.



                            </p>
                        </div>
                    </div>
                    <div class="offerMore">
                        <a href="diet.php"> Dowiedz się więcej <i class="fas fa-chevron-right move"></i></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="chooseUs CounterBox">
            <div class="choosePhoto" data-aos="fade-right">

            </div>
            <div class="chooseContent" data-aos="fade-left">
                <div class="chooseTitle">
                    <div class="title">Dlaczego my</div>
                </div>
                <div class="chooseDesc">
                    <p>W naszej ofercie znajdziesz szeroki wachlarz zabiegów modelowania sylwetki z różnymi formami aktywności fizycznej, a także usługi z zakresu dietetyki oraz kosmetologii estetycznej. Do Twojej dyspozycji jest również wykwalifikowany zespół, który służy merytoryczną wiedzą, motywuje w dążeniu do zmian i wspiera, kiedy na horyzoncie pojawiają się czarne chmury.</p>
                </div>
                <div class="chooseExp">
                    <div class="expBox">
                        <div class="expNum">
                            <div class="title"><span class="Count" data-count="1000">0</span>+</div>
                        </div>
                        <div class="expDesc">
                            Zadowolonych klientek
                        </div>
                    </div>
                    <div class="expBox">
                        <div class="expNum">
                            <div class="title"><span class="Count" data-count="6">0</span></div>
                        </div>
                        <div class="expDesc">
                            Lat doświadczenia
                        </div>
                    </div>
                    <div class="expBox">
                        <div class="expNum">
                            <div class="title"><span class="Count" data-count="100">0</span>%</div>
                        </div>
                        <div class="expDesc">
                            satysfakcji
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- <div class="teamContent">
            
            <div class="teamDesc">
                <p>agiycasblvsacyvb</p>
            </div>
            <div class="teamPhoto">
            </div>
        </div> -->
        <div class="footer">
            <div class="author">
                <h1 data-aos="fade"> Polub nas na </h1>
            </div>
            <div class="followUs">
                <div class="followBox">
                    <div class="followIco">
                        <a target="_blank" href="https://www.instagram.com/studiokobietwloclawek/"><i class="fab fa-instagram-square"></i></a>

                    </div>
                    <div class="followText" data-aos="fade">
                        <h3>Instagramie</h3>
                    </div>
                </div>
                <div class="followBox">
                    <div class="followIco">
                        <a target="_blank" href="https://www.facebook.com/endermologiaLPG"><i class="fab fa-facebook-square"></i></a>
                    </div>
                    <div class="followText" data-aos="fade">
                        <h3>Facebooku</h3>
                    </div>
                </div>
            </div>
            <div class="author">
                <h4> Copyright © 2021</h4>
            </div>
            <div class="author">
                <h5>Created by <a target="_blank" href="http://kanguroweIt.pl/">KanguroweIt.pl</a></h5>
            </div>
        </div>
    </div>

    <script>
        AOS.init({
            duration: 1200,
        });
    </script>

    <!-- <script src="php/script.php"></script> -->
    <script src="https://kit.fontawesome.com/241248b580.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="angular/MainSite.js"> </script>

    <!-- <script src="js/script.js"></script> -->
    <script src="js/typed.js"></script>
    <script>
        var typed = new Typed('.typed-words', {
            strings: ["bólu", " stresu", "tkanki tłuszczowej"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
        });
    </script>
    <script src="js/script.js"></script>

</body>

</html>