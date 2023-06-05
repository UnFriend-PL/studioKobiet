<!DOCTYPE html>
<html lang='pl' ng-app="MainSite">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studio Kobiet Włocławek - Cennik</title>
    <link href="css/preloader.css" rel="stylesheet" >
    <meta property="og:title" content="Studio Kobiet Włocławek - Cennik" />
    <meta property="og:description" content="Cennik usług Studia Kobiet Włocławek. Najniższe ceny w okolicy!" />
    <meta description="Cennik usług Studia Kobiet Włocławek. Najniższe ceny w okolicy!">
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
    <link rel="stylesheet" href="css/price-list.css" />

    <link rel="stylesheet" href="css/footer.css" />





</head>

<body ng-controller="MainSite">
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <div id="content" class="Wrap CounterBox">

        <div class="header" id="Home">

            <div class="li first" style="justify-content: flex-start;">
                <a href="index.php"><div data-aos="fade-right">Studio Kobiet Włocławek<span class="point">.</span></div></a>
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
                    <a href="diet.php">Dieta</a>
                </div>
                <div class="li hide">
                    <a href="#">Cennik</a>
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
                <div class="add">Najniższe ceny specjalnie dla</div>
                <div class="add"><span class="typed-words point"></span></div>
            </div>
            <a href="#cennik">
                <div class="buttonCheck" data-aos="fade-up">Zobacz sam!</div>
            </a>

        </div>

        <!--  -->

        <div class="price-list" id="cennik">
            <div class="priceSection">
                <div class="sectionTitle" data-aos="fade-up">
                    <h1>Medycyna estetyczna</h1>
                </div>
                <div class="sectionSubTitle" data-aos="fade-down">
                    <h2>Endermologia z liposukcją kawitacyjną</h2>
                </div>
                <div class="sectionContent">
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Liposukcja kawitacyjna</div>
                            <div class="priceDesc">
                                <p>30 minut, pojedyncze wejście na wybraną partię ciała</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">80 zł</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Endermologia</div>
                            <div class="priceDesc">
                                <p>30 minut, pojedyncze wejście, zabieg na całe ciało</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">120 zł</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Pakiet 10 zabiegów Endermologii</div>
                            <div class="priceDesc">
                                <p>10 wejść po 30 minut, zabieg na całe ciało</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">850 zł</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">10 zabiegów dwa w jednym</div>
                            <div class="priceDesc">
                                <p>10 x 30 minut liposukcji kawitacyjnej, 10 x 30 minut endermologii, zabieg na całe ciało</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">1200 zł</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">8 zabiegów dwa w jednym</div>
                            <div class="priceDesc">
                                <p>8 x 30 minut liposukcji kawitacyjnej, 8 x 30 minut endermologii, zabieg na całe ciało</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">800 zł</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">5 zabiegów dwa w jednym</div>
                            <div class="priceDesc">
                                <p>5 x 30 minut liposukcji kawitacyjnej, 5 x 30 minut endermologii, zabieg na całe ciało</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">600 zł</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Kostium do endermologii</div>
                            <div class="priceDesc">
                                <p>Do nabycia w studio</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">50 zł</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3" style="line-height: 1.0em">Karta Klienta przy zakupie karnetu z zakresu medycyny estetycznej z pomiarami i analizą składu ciała</div>
                        </div>
                        <div class="cost">
                            <div class="title3">GRATIS!</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="priceSection">
                <div class="sectionTitle" data-aos="fade-up">
                    <div class="title">Zabiegi na twarz</div>
                </div>
                <div class="sectionSubTitle" data-aos="fade-down">
                    <div class="title2">Endermologia LPG i Volumetiq</div>
                </div>
                <div class="sectionContent">
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Endermologia <o>LPG</o> twarzy</div>
                            <div class="priceDesc">
                                <p>1 zabieg</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">120 zł</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Endermologia <o>LPG</o> twarzy</div>
                            <div class="priceDesc">
                                <p>Pakiet 3 zabiegów</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">300 zł</div>
                        </div>

                    </div>

                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Lifting wolumetryczny z mezoterapią frakcyjną</div>

                        </div>
                        <div class="cost">
                            <div class="title3">250 zł</div>
                        </div>
                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Mezoterapia frakcyjna</div>

                        </div>
                        <div class="cost">
                            <div class="title3">200 zł</div>
                        </div>
                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Mikropeeling nanokrystaliczny</div>

                        </div>
                        <div class="cost">
                            <div class="title3">120 zł</div>
                        </div>
                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Nanomezoterapia bezigłowa z fototerapią LED BLUE & GREEN</div>

                        </div>
                        <div class="cost">
                            <div class="title3">140 zł</div>
                        </div>
                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Nanokrioterapia LED BLUE</div>

                        </div>
                        <div class="cost">
                            <div class="title3">130 zł</div>
                        </div>
                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Elektrostymulacja z RF</div>

                        </div>
                        <div class="cost">
                            <div class="title3">150 zł</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="priceSection">
                <div class="sectionTitle" data-aos="fade-up">
                    <div class="title">Stacje treningowe</div>
                </div>
                <div class="sectionSubTitle" data-aos="fade-down">
                    <div class="title2">&nbsp</div>
                </div>
                <div class="sectionContent">
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Bieżnia z podciśnieniem</div>

                        </div>
                        <div class="cost">
                            <div class="title3">30 zł</div>
                        </div>
                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Orbitrek eliptyczny</div>

                        </div>
                        <div class="cost">
                            <div class="title3">30 zł</div>
                        </div>
                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Limfodrenaż</div>

                        </div>
                        <div class="cost">
                            <div class="title3">30 zł</div>
                        </div>
                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Limfodrenaż + body wrapping</div>

                        </div>
                        <div class="cost">
                            <div class="title3">50 zł</div>
                        </div>
                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Elektrostymulacja</div>

                        </div>
                        <div class="cost">
                            <div class="title3">25 zł</div>
                        </div>
                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Roleczki</div>

                        </div>
                        <div class="cost">
                            <div class="title3">15 zł</div>
                        </div>
                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Rower poziomy</div>

                        </div>
                        <div class="cost">
                            <div class="title3">15 zł</div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="priceSection">
                <div class="sectionTitle" data-aos="fade-up">
                    <div class="title">Kriolipoza CoolTech</div>
                </div>
                <div class="sectionSubTitle" data-aos="fade-down">
                    <div class="title2">&nbsp</div>
                </div>
                <div class="sectionContent">
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Kriolipoliza</div>
                            <div class="priceDesc">
                                <p>1 przyłożenie</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">300 zł</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Kriolipoliza</div>
                            <div class="priceDesc">
                                <p>2 przyłożenia</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">400 zł</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Kriolipoliza</div>
                            <div class="priceDesc">
                                <p>3 przyłożenie</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">500 zł</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Kriolipoliza</div>
                            <div class="priceDesc">
                                <p>4 przyłożenie</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">600 zł</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="priceSection">
                <div class="sectionTitle" data-aos="fade-up">
                    <div class="title">Opcje połączenia</div>
                </div>
                <div class="sectionSubTitle" data-aos="fade-down">
                    <div class="title2">&nbsp</div>
                </div>
                <div class="sectionContent">
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Vacu całego ciała</div>
                            <div class="priceDesc">
                                <p>+ RF całego ciała</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">250 zł</div>

                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Vacu całego ciała</div>
                            <div class="priceDesc">
                                <p>+ liposukcja wybranej partii ciała</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">200 zł</div>

                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">RF całego ciała </div>
                            <div class="priceDesc">
                                <p>+ liposukcja wybranej partii ciała</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">200 zł</div>

                        </div>
                    </div>


                    <!-- <div class="sectionSubTitle" data-aos="fade-down">
                        <div class="title2">Opcje pakietowe(karnety)</div>
                    </div> -->

                </div>
            </div>
            <div class="priceSection">
                <div class="sectionTitle" data-aos="fade-up">
                    <div class="title">Karnety</div>
                </div>
                <div class="sectionSubTitle" data-aos="fade-down">
                    <div class="title2">Długotrawłe efekty</div>
                </div>
                <div class="sectionContent">
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Intensywne spalanie w 1,5 h</div>
                            <div class="priceDesc">
                                <p>3 downolne urządzenia</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">250 zł</div>
                            <div class="title4">12 wejść</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Intensywne spalanie w 1,5 h</div>
                            <div class="priceDesc">
                                <p>3 downolne urządzenia</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">200 zł</div>
                            <div class="title4">8 wejść</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Pogromca celluitu w 1 h</div>
                            <div class="priceDesc">
                                <p>2 downolne urządzenia</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">200 zł</div>
                            <div class="title4">12 wejść</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Pogromca celluitu w 1 h</div>
                            <div class="priceDesc">
                                <p>2 downolne urządzenia</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">180 zł</div>
                            <div class="title4">8 wejść</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Body SPA w 1 h</div>
                            <div class="priceDesc">
                                <p>2 downolne urządzenia w połączeniu z body wrapping</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">280 zł</div>
                            <div class="title4">12 wejść</div>
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Body SPA w 1 h</div>
                            <div class="priceDesc">
                                <p>2 downolne urządzenia w połączeniu z body wrapping</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">250 zł</div>
                            <div class="title4">8 wejść</div>
                        </div>

                    </div>
                    <!-- <div class="sectionSubTitle" data-aos="fade-down">
                        <div class="title2">Opcje pakietowe(karnety)</div>
                    </div> -->
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">6 zabiegów</div>
                            <div class="priceDesc">
                                <p>-25%</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">1300 zł</div>

                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">8 zabiegów </div>
                            <div class="priceDesc">
                                <p>-30%</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">1600 zł</div>

                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">10 zabiegów</div>
                            <div class="priceDesc">
                                <p>-40%</p>
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">1800 zł</div>

                        </div>

                    </div>
                </div>
            </div>

                 <div class="priceSection" id="dieta">
                <div class="sectionTitle" data-aos="fade-up">
                    <div class="title">Dieta</div>
                </div>
                <div class="sectionSubTitle" data-aos="fade-down">
                    <div class="title2">Klucz do sukcesu</div>
                </div>
                <div class="sectionContent">
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Pierwsza wizyta</div>
                            <div class="priceDesc">
                                <!-- <p>3 downolne urządzenia</p> -->
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">150 zł</div>
                            <!-- <div class="title4">12 wejść</div> -->
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Każda kolejna wizyta</div>
                            <div class="priceDesc">
                                <!-- <p>3 downolne urządzenia</p> -->
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">130 zł</div>
                            <!-- <div class="title4">8 wejść</div> -->
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Pogadanka z analizą składu ciała</div>
                            <div class="priceDesc">
                                <!-- <p>2 downolne urządzenia</p> -->
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">50 zł</div>
                            <!-- <div class="title4">12 wejść</div> -->
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-left">

                        <div class="priceName">
                            <div class="title3">Porada psychodietetyczna</div>
                            <div class="priceDesc">
                                <!-- <p>2 downolne urządzenia</p> -->
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">50 zł</div>
                            <!-- <div class="title4">8 wejść</div> -->
                        </div>

                    </div>
                    <div class="sellingItem" data-aos="fade-right">

                        <div class="priceName">
                            <div class="title3">Ułożenie diety</div>
                            <div class="priceDesc">
                                <!-- <p>2 downolne urządzenia w połączeniu z body wrapping</p> -->
                            </div>
                        </div>
                        <div class="cost">
                            <div class="title3">150 zł</div>
                            <!-- <div class="title4">12 wejść</div> -->
                        </div>

                   
                    <!-- <div class="sectionSubTitle" data-aos="fade-down">
                        <div class="title2">Opcje pakietowe(karnety)</div>
                    </div> -->

                </div>
                
            </div>
            <div class="priceDesc" data-aos="fade">
                <p>* Zakup karnetów na stacje treningowe nie zawiera w cenie analizy składu ciała, pomiarów oraz diety. Wszystkie te usługi dostępne są za dodatkową opłatą 50zł.</p>
            </div>
            <!-- <div class="priceDesc" data-aos="fade">
                <p>* w Studio oferujemy konsultacje z dyplomowaną dietetyczką Klaudią Sowińską, która jest członkiem naszego zespołu i chętnie odpowie na wszystkie pytania.</p>
            </div> -->
        </div>

        <!--  -->
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
                        <div class="title3">Instagramie</div>
                    </div>
                </div>
                <div class="followBox">
                    <div class="followIco">
                        <a target="_blank" href="https://www.facebook.com/endermologiaLPG"><i class="fab fa-facebook-square"></i></a>
                    </div>
                    <div class="followText" data-aos="fade">
                        <div class="title3">Facebooku</div>
                    </div>
                </div>
            </div>
            <div class="author">
                <div class="title4"> Copyright © 2021</div>
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
            strings: ["Ciebie", "twoich przyjaciół", "twojej dziewczyny", "twojej żony"],
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