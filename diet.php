<!DOCTYPE html>
<html lang='pl' ng-app="MainSite">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studio Kobiet Włocławek - Dieta</title>
    <link href="css/preloader.css" rel="stylesheet" >
    <meta property="og:title" content="Studio Kobiet Włocławek - Dieta" />
    <meta property="og:description" content="Oferta dietetyczna Studia Kobiet Włocławek. Skuteczna dieta to najważniejszy elemnt przemiany!" />
    <meta description="Oferta dietetyczna Studia Kobiet Włocławek. Skuteczna dieta to najważniejszy elemnt przemiany!">
    <meta name="Keywords" content="Studio kobiet włocławek, Studio figura włocławek, studio kobiet, studio figura, włocławek fitness, fitness włocławek, dietetyczka włocławek, endermonologia, endermonologia włocławek, fitness, zabiegi na twarz włocławek, zabiegi na twarz, włocławek zabiegi na twarz, włocławek siłownia, włocławek fitness dla kobiet, włocławek kobiecy fitness, kobiecy fitness włocławek, dietetyczka włocławek, strefa zabiegów włocławek, studio włocławek, kobiet włocławek" />
    <meta name="google-site-verification" content="google-site-verification=0cTgTVhEDGmhLlT2js-N7EdBBl-9MABS5W2WXZ0_1dM" />
    <meta name="author" content="Szymon Marcinkowski">
    <meta property="og:image" content="img/avatar.jpg" />
    <script data-require="angular.js@*" data-semver="1.2.13" src="https://code.angularjs.org/1.2.13/angular.js"></script>
    <script data-require="angular-animate@*" data-semver="1.2.13" src="https://code.angularjs.org/1.2.13/angular-animate.js"></script>

    <link rel="shortcut icon" type="image/jpg" href="img/logo.jpg" />
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/menu.css" />
    <link rel="stylesheet" href="css/welcomeBlock.css" />
    <link rel="stylesheet" href="css/diet.css" />

    <link rel="stylesheet" href="css/footer.css" />





</head>

<body ng-controller="MainSite" ng-cloak>
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <div id="content" class="Wrap CounterBox">

        <div class="header" id="Home">

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
                    <a href="index.php">Home</a>
                </div>
                <div class="li hide">
                    <a href="fitness.php">Strefa fitness</a>
                </div>
                <div class="li hide">
                    <a href="treatments.php">Strefa zabiegów</a>
                </div>
                <div class="li hide">
                    <a href="#">Dieta</a>
                </div>
                <div class="li hide">
                    <a href="cennik.php">Cennik</a>
                </div>
                <div class="li hide">
                    <a href="index.php#kontakt">Kontakt</a>
                </div>
            </div>
        </div>
        <div class="moveUp">
            <a href="#"><i class="fas fa-chevron-circle-up"></i></a>
        </div>
        <div class="WelcomeBlock">
            <div class="typeWrite">
                <div class="add">Twoja własna</div>
                <div class="add"><span class="typed-words point"></span></div>
            </div>
            <a href="#offer">
                <div class="buttonCheck" data-aos="fade-up">Zobacz sam!</div>
            </a>

        </div>

        <!--  -->
        <div class="dietBlock">
            <div class="aboutMe">

                <div class="meDesc dietDesc" data-aos="fade">
                    <p>Cześć! Jestem Klaudia!
                        Jestem magistrem dietetyki oraz psychodietetykiem, który w pracy z pacjentem przykłada ogromną wagę na jak najlepszy kontakt, rozmowę i poznanie sedna problemu. Zajmuję się osobami, które chcą stracić masę ciała i chcą rozpocząć zdrowy tryb życia, a także tymi, którzy chorują na wszelkiego rodzaju schorzenia.</p>
                </div>
                <div class="photoAboutMe" data-aos="fade-left">
                    <img src="img/Klaudia_dietetyk.jpg">

                </div>
            </div>
            <div class="dietBox">
                <div class="dietTitle">
                    <div class="title" data-aos="fade">Pierwsza wizyta</div>
                </div>
                <div class="dietTime" data-aos="fade">
                    <p>umawiana indywidualnie</p>
                </div>
                <div class="dietDesc" data-aos="fade">
                    <p>

                    <ul>
                        <li>
                            Wypełnienie
                            kwestionariusza (wywiad
                            zdrowotny i żywieniowy)
                        </li>
                        <li>
                            Dokonanie pomiarów na
                            analizatorze składu ciała
                            TANITA
                        </li>
                        <li>
                            Dokonanie pomiarów ciała
                            miarką
                        </li>
                        <li>
                            Ułożenie jadłospisu (jadłospis układany na
                            tydzień, z którego korzysta
                            się przez dwa tygodnie)
                        </li>
                        <li>
                            Porady dietetyczne
                        </li>
                    </ul>

                    </p>
                </div>
            </div>
            <div class="dietBox">
                <div class="dietTitle" data-aos="fade">
                    <div class="title">Pogadanka z analizą składu ciała</div>
                </div>
                <div class="dietTime" data-aos="fade">
                    <p>umawiana indywidualnie</p>
                </div>
                <div class="dietDesc" data-aos="fade">
                    <p>
                        Pogadanka z analizą składu
                        ciała na analizatorze
                        TANITA wraz z
                        dokonaniem pomiarów ciała
                        miarką oraz wypełnieniem
                        kwestionariusza (przeprowadzenie wywiadu
                        zdrowotnego i
                        żywieniowego)
                    </p>
                </div>
            </div>
            <div class="dietBox">
                <div class="dietTitle" data-aos="fade">
                    <div class="title">Porada psychodietetyczna</div>
                </div>
                <div class="dietTime" data-aos="fade">
                    <p>umawiana indywidualnie</p>
                </div>
                <div class="dietDesc" data-aos="fade">
                    <p>
                    <ul>
                        <li>Anoreksja</li>
                        <li>Bulimia</li>
                        <li>Zaburzenia odżywiania </li>

                        <li style="list-style: none;"> Porada zawiera analizę składu ciała
                            na analizatorze TANITA,
                            dokonaniem pomiarów ciała
                            miarką oraz wypełnieniem
                            kwestionariusza (przeprowadzenie wywiadu
                            zdrowotnego i
                            żywieniowego)</li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="dietBox">
                <div class="dietTitle" data-aos="fade">
                    <div class="title">Ułożenie diety</div>
                </div>
                <div class="dietTime" data-aos="fade">
                    <p>umawiana indywidualnie</p>
                </div>
                <div class="dietDesc" data-aos="fade">
                    <p>
                        Ułożenie diety dla osób z
                        chorobami dietozależnymi,
                        dieta eliminacyjna oraz dla
                        kobiet w ciąży
                    </p>
                </div>
            </div>

            <a href="cennik.php#dieta">
                <div class="buttonCheck" data-aos="fade-up">Sprawdź ceny!</div>
            </a>
        </div>
    </div>


    <!--  -->
    </div>
    <div class="footer">
        <div class="author">
            <div class="title" data-aos="fade"> Polub nas na </div>
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
            strings: ["dieta", "recepta na sukces"],
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