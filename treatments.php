<!DOCTYPE html>
<html lang='pl' ng-app="MainSite">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studio Kobiet Włocławek - Strefa Zabiegów</title>
    <link href="css/preloader.css" rel="stylesheet">
    <meta property="og:title" content="Studio Kobiet Włocławek - Strefa Zabiegów" />
    <meta property="og:description" content="Strefa zabiegów Studia Kobiet Włocławek. Najlepszy sprzęt w okolicy. Dowiedz się więcej na temat naszej oferty." />
    <meta description="Strefa zabiegów Studia Kobiet Włocławek. Najlepszy sprzęt w okolicy. Dowiedz się więcej na temat naszej oferty.">
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
    <link rel="stylesheet" href="css/machines.css" />

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
                    <a href="#">Strefa zabiegów</a>
                </div>
                <div class="li hide">
                    <a href="diet.php">Dieta</a>
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
                <div class="add">Twoja strefa</div>
                <div class="add"><span class="typed-words point"></span></div>
            </div>
            <a href="#offer">
                <div class="buttonCheck" data-aos="fade-up">Zobacz sam!</div>
            </a>

        </div>

        <!--  -->

        <div class="machines" id="offer">
            <div class="machine">
                <div class="macihneContent">
                    <div class="machineTitle">
                        <div class="title" data-aos="fade-right">Liposukcja kawitacyjna</div>
                    </div>
                    <div class="machineDesc" data-aos="fade-up">
                        <div class="descDefault">
                            <p>Liposukcja kawitacyjna to zabieg, który pozwala osiągnąć szczupłą sylwetkę bez wykorzystania skalpela. Zyskała popularność dzięki świetnym efektom w zakresie modelowania ciała i pozbycia się zbędnej tkanki tłuszczowej.</p>
                        </div>
                        <div class="DescAdd">
                            <div class="title3" ng-click="Lipo = !Lipo">Jak działa liposukcja kawitacyjna? <i class="fas fa-plus-circle" ng-hide="Lipo"></i><i ng-hide="!Lipo" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Lipo">
                                <p>Czas trwania zabiegu 30min. Zabieg przeznaczony na wybrane partie ciała takie jak brzuch, uda ,pośladki, ramiona.</p>
                                <p>Cały proces ma na celu wywołanie drgań w tkance tłuszczowej za pomocą profesjonalnej głowicy, która emituje fale ultradźwiękowe i wywołuje zjawisko kawitacji. Jest to zjawisko fizyczne, które powstaje na skutek różnicy ciśnienia w cieczach. Powstają miliony mikropęcherzyków, które pod wpływem kawitacji powiększają się, ocierają się o siebie i uszkadzają błony komórkowe komórek tłuszczowych. Zawartość komórki tłuszczowej trafia do przestrzeni międzykomórkowej , dalej do wątroby i jest zmetabolizowana jak zwykłe pożywienie. Bardzo ważne jest, żeby przed zabiegiem i po zabiegu pić bardzo dużo wody, W ten sposób szybciej można się pozbyć zbędnych produktów przemiany materii.</p>
                                <p>Liposukcja ultradźwiękowa polecana jest wszystkim tym, którzy chcą pozbyć się zbędnego tłuszczu z konkretnych partii ciała. Zabieg ma na celu nie tylko poprawę wyglądu ciała, ale też wzrost pewności siebie. Z powodzeniem mogą korzystać z niego zarówno kobiety, jak i mężczyźni.</p>
                            </div>
                            <div class="title3" ng-click="Lipo2 = !Lipo2">Przeciwwskazania <i class="fas fa-plus-circle" ng-hide="Lipo2"></i><i ng-hide="!Lipo2" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Lipo2">
                                <p>
                                <ul>
                                    <li>Niewydolność wątroby</li>
                                    <li>Niewydolność serca oraz przewlekłe nadciśnienie tętnicze</li>
                                    <li>Niewydolność krążenia</li>
                                    <li>Wszczepiony rozrusznik serca lub sztuczna zastawka</li>
                                    <li>Posiadanie metalowych implantów w okolicy poddawanej zabiegowi</li>
                                    <li>Nowotwory oraz stany po usunięciu zmian nowotworowych</li>
                                    <li>Wirusowe lub bakteryjne schorzenia skórne</li>
                                    <li>Ciąża i karmienie piersią</li>
                                    <li>Zakrzepowe zapalenie żył</li>
                                    <li>Cukrzyca</li>
                                    <li>Padaczka</li>
                                    <li>Osteoporoza</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="chechPrice" data-aos="fade">
                        <a href="cennik.php">Sprzawdź cenę</a>
                    </div>
                </div>
                <div class="machinePhoto" data-aos="fade-left">
                    <img src="img/liposukcja.jpg">
                </div>
            </div>
            <div class="machine">
                <div class="macihneContent">
                    <div class="machineTitle">
                        <div class="title" data-aos="fade-right">Endermologia LPG Endermolab</div>
                    </div>
                    <div class="machineDesc" data-aos="fade-up">
                        <div class="descDefault">
                            <p>Endermologia to prawdziwy HIT wśród zabiegów modelujących sylwetkę. Często ćwiczenia i domowa pielęgnacja nie wystarczają, by skutecznie pozbyć się cellulitu i lokalnie nagromadzonego tłuszczu.</p>
                        </div>
                        <div class="DescAdd">
                            <div class="title3" ng-click="Ende = !Ende">Jak działa urządzenie Endermologia? <i class="fas fa-plus-circle" ng-hide="Ende"></i><i ng-hide="!Ende" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Ende">
                                <p>Endermologia to zabieg, w którym zastosowano specjalne rolki oraz zjawisko próżni, które wspólnie oddziałują na wszystkie warstwy skóry. W efekcie pobudzone do pracy komórki rozpoczynają proces usuwania nadmiernej ilości tłuszczu z tkanki, co prowadzi do jej zmiękczenia i wygładzenia cellulitu.
                                    Badania dowiodły, że zabiegi endermologii pomagają ujędrnić skórę, pozbyć się tkanki tłuszczowej z miejsc opornych na ćwiczenia oraz dietę.
                                    Nasze klientki borykają się z różnymi problemami i posiadają różne typy sylwetek, dlatego endermologia, dzięki różnym programom zabiegowym odpowiada na ich różne potrzeby.
                                    Przed zabiegiem klientka ubiera się w specjalny, przeznaczony tylko dla niej, kombinezon który zapewnia komfort i prawidłowość wykonania masażu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="chechPrice" data-aos="fade">
                        <a href="cennik.php">Sprzawdź cenę</a>
                    </div>
                </div>
                <div class="machinePhoto" data-aos="fade-left">
                    <img src="img/Enmdermologia.jpg">
                </div>
            </div>
            <div class="machine">
                <div class="macihneContent">
                    <div class="machineTitle">
                        <div class="title" data-aos="fade-right">Icoone na ciało</div>
                    </div>
                    <div class="machineDesc" data-aos="fade-up">
                        <div class="descDefault">
                            <p>Innowacyjne podejście i-Tech Industries® oparte na rozwoju nowych technologii i znaczących odkryciach naukowych dotyczących tkanki skórnej, opiera się na prawdziwej kulturze pielęgnacji skóry, najbardziej rozległego organu ludzkiego ciała, niezwykle wrażliwego i istotnego dla jego ochrony przed czynnikami zewnętrznymi.</p>
                        </div>
                        <div class="DescAdd">
                            <div class="title3" ng-click="IcooB = !IcooB">Budowa skóry a ICOONE <i class="fas fa-plus-circle" ng-hide="IcooB"></i><i ng-hide="!IcooB" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!IcooB">
                                <p>Na podstawie tej teorii zakładamy, że pomiędzy poszczególnymi tkankami nie ma wyraźnego rozgraniczenia, bądź warstwowego ułożenia. Wszystkie struktury połączone są ze sobą poprzez sieć włókien, pomiędzy którymi tworzą się wolne przestrzenie zwane mikrowakuolami. Włókna te zbudowane są głównie z kolagenu, elastyny oraz w niewielkim stopniu z lipidów. Dodatkowo do włókien kolagenowych przyłączone są proteoglikany, które wykazują silną hydrofilność, powodując tym samym wiązanie cząsteczek wody wewnątrz mikrowakuli.</p>
                                <p>Taka budowa zapewnia swobodne przesuwanie się poszczególnych struktur względem siebie, jak również rozprężanie i sprężanie mikrowakuli podczas ucisku. Widoczne jest to np. w momencie uszczypnięcia fałdu skórnego, który po puszczeniu wraca do formy pierwotnej. Im młodsza skóry, czyli im bardziej elastyczne włókna, tym szybszy powrót fałdu. Przeprowadzone badania stały się inspiracją do zaprojektowania urządzenia ICOONE, które w bardzo precyzyjny sposób stymuluje opisaną sieć bez jej uszkodzenia.</p>
                            </div>
                            <div class="title3" ng-click="IcooB2 = !IcooB2">Zalety i wpływ na tkanki <i class="fas fa-plus-circle" ng-hide="IcooB2"></i><i ng-hide="!IcooB2" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!IcooB2">
                                <p>
                                    Zalety:
                                <ul>
                                    <li>Minimalne ryzyko wystąpienia niepożądanych efektów ubocznych.</li>
                                    <li>Fototerapia LED 650 nm nie jest zabiegiem ablacyjnym w związku z czym nie powoduje uszkodzeń termicznych tkanek.</li>
                                    <li>Brak ograniczeń jeśli chodzi o fototyp skóry, możliwość wykonywania zabiegów o każdej porze roku.</li>
                                    <li>Po zabiegu pacjent od razu wraca do aktywnego trybu życia.</li>
                                    <li>Zabiegi są szybkie i efektywne.</li>
                                </ul>
                                Wpływ na tkanki:
                                <ul>
                                    <li>Stymuluje odbudowę komórkową poprzez produkcję kolagenu i elastyny.</li>
                                    <li>Poprawia mikrokrążenie krwi i dotlenia tkanki.</li>
                                    <li>Przyspiesza metabolizm komórkowy.</li>
                                    <li>Stymuluje pracę układu limfatycznego, zmniejsza obrzęki i stany zapalne.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="chechPrice" data-aos="fade">
                        <a href="cennik.php">Sprzawdź cenę</a>
                    </div>
                </div>
                <div class="machinePhoto" data-aos="fade-left">
                    <img src="img/IcooTeam.jpg">
                </div>
            </div>
            <div class="machine">
                <div class="macihneContent">
                    <div class="machineTitle">
                        <div class="title" data-aos="fade-right">Icoone na twarz - lifting twarzy bez skalpela</div>
                    </div>
                    <div class="machineDesc" data-aos="fade-up">
                        <div class="descDefault">
                            <p>Jest to nieinwazyjna metoda polecana w szczególności dla osób pragnących nadać swojej twarzy młody i zdrowy wygląd bez interwencji chirurga. System głowic Robomini i Robomicro umożliwia precyzyjny masaż twarzy szyi i dekoltu. Dzięki wymiennym końcówkom głowic zabieg na twarz ICOONE pozwala , bez problemu opracować delikatne i wrażliwe okolice oczu oraz ust , szyję i dekolt . Praca na mięśniach twarzy pozwala uzyskać efekt widocznego liftingu już po pierwszym zabiegu. Zabieg polecamy w opcji tzw. bankietowej, kiedy powinien być wykonany dzień przed ”wielkim wyjściem” lub w serii, aby uzyskać pełen efekt terapeutyczny, czyli wysmuklenie rysów twarzy, poprawienie zarysu owalu i rozjaśnienie okolicy oczu.

                            </p>
                            <p> Zabieg Icoone to renomowany zabieg wykonywany między innymi w takich klinikach jak Klinika Ambroziak. Nie bez kozery zabieg Icoone jest nazywany zabiegiem gwiazd. Efektem takiego zabiegu jest poprawa owalu twarzy, zmniejszenie podbródka, uniesienie opadających powiek, likwidacja obwisłych policzków, spłycenie zmarszczek i blizn, redukcja obrzęków pod oczami. Zabieg trwa 40 minut, wykonywany jest 1 raz w tygodniu. Szybkość osiągnięcia oczekiwanych efektów zależy przede wszystkim od kondycji cery. Skuteczność oferowanego przez nas zabiegu Icoone w Toruniu potwierdzają setki zadowolonych klientów oraz specjalistyczne badania.</p>
                        </div>
                        <div class="DescAdd">
                            <div class="title3" ng-click="IcooF = !IcooF">Przebieg zabiegu <i class="fas fa-plus-circle" ng-hide="IcooF"></i><i ng-hide="!IcooF" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!IcooF">
                                <p>
                                    Demakijaż - Zabieg wykonuje się na suchej, czystej skórze
                                    Zaczyna się od największej głowicy i masuje się kolejno dekolt, szyję i twarz ruchami liftingującymi. Po kolei zmienia się głowice aż do najmniejszej.
                                    Na koniec nakłada się krem.
                                </p>
                                <p>
                                    Przed przystąpieniem do zabiegu szczegółowo informujemy pacjenta o przebiegu każdego z etapów. Nasze studio zapewnia możliwość skorzystania z bezpłatnej konsultacji, w trakcie której dowiesz się, czy zabieg Icoone (Toruń) to odpowiednie rozwiązanie dla Twojej cery. W przypadku jakichkolwiek pytań służymy fachowym poradnictwem. Dostosowujemy również częstotliwość wykonywania zabiegów do stanu cery, indywidualnych potrzeb i oczekiwań każdego z klientów.
                                </p>
                            </div>
                            <div class="title3" ng-click="IcooF2 = !IcooF2">Efekty <i class="fas fa-plus-circle" ng-hide="IcooF2"></i><i ng-hide="!IcooF2" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!IcooF2">
                                <p>
                                <ul>
                                    <li>redukcja zmarszczek</li>
                                    <li>efekt liftingu bez użycia igły i skalpela</li>
                                    <li>odmłodzenie okolic twarzy, szyi, dekoltu</li>
                                    <li>poprawa konturu oczu i ust</li>
                                </ul>
                                Efekty zabiegu Icoone (Toruń) zależą od ilości wykonanych sesji, wieku klienta bądź klientki oraz pierwotnego stanu cery. Wysoką skuteczność potwierdzają setki osób, które zauważyły wymienione wyżej efekty już po pierwszej sesji.
                                </p>
                            </div>
                            <div class="title3" ng-click="IcooF3 = !IcooF3">Przeciwwskazania <i class="fas fa-plus-circle" ng-hide="IcooF3"></i><i ng-hide="!IcooF3" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!IcooF3">
                                <p>
                                    Oferowany przez nas zabieg Icoone w Toruniu jest bezpieczny, skuteczny i nieinwazyjny. Istnieje jednak szereg przeciwwskazań, które z powodu określonych przesłanek zdrowotnych uniemożliwiają skorzystanie z prezentowanej opcji. Są to m.in.:
                                <ul>
                                    <li>ciąża</li>
                                    <li>karmienie piersią (ściągnięcie pokarmu i utylizacja)</li>
                                    <li>padaczka</li>
                                    <li>zakrzepica żylna</li>
                                    <li>choroby serca</li>
                                    <li>choroby skóry</li>
                                    <li>cesarskie cięcie ( 6 msc po)</li>
                                    <li>poród naturalny (3 msc po)</li>
                                    <li>nowotwory ( do 5 lat)</li>
                                    <li>przepuklina (omijać)</li>
                                    <li>zaburzenia krzepliwości krwi</li>
                                    <li>przerwanie ciągłości skóry w miejscu zabiegu</li>
                                    <li>łuszczyca w fazie zapalnej</li>
                                    <li>botoks (1 tydzień po zabiegu)</li>
                                    <li>kwas hialuronowy (4 tygodnie po zabiegu)</li>
                                </ul>
                                W przypadku wystąpienia jakichkolwiek wątpliwości co do możliwości skorzystania z zabiegu, zalecamy skontaktowanie się z lekarzem specjalistą. Nasze studio oferuje także bezpłatną konsultację, w trakcie której szczegółowo zapoznasz się z przebiegiem poszczególnych etapów zabiegu. Chętnie odpowiemy na wszelkie pytania w zakresie usługi Icoone </p>
                            </div>
                        </div>
                    </div>
                    <div class="chechPrice" data-aos="fade">
                        <a href="cennik.php">Sprzawdź cenę</a>
                    </div>
                </div>
                <div class="machinePhoto" data-aos="fade-left">
                    <!-- <img src="img/IcooTeam.jpg"> -->
                </div>
            </div>
            <div class="machine">
                <div class="macihneContent">
                    <div class="machineTitle">
                        <div class="title" data-aos="fade-right">Thermogenic</div>
                    </div>
                    <div class="machineDesc" data-aos="fade-up">
                        <div class="descDefault">
                            <p>Termogeniczny zabieg kształtujący i wyszczuplający sylwetkę to seria wyjątkowo skutecznych zabiegów wspomagających walkę z cellulitem.</p>
                        </div>
                        <div class="DescAdd">
                            <div class="title3" ng-click="Mach0 = !Mach0">Etap 1 – wywiad i dokładny pomiar ciała <i class="fas fa-plus-circle" ng-hide="Mach0"></i><i ng-hide="!Mach0" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Mach0">
                                <p>Przed rozpoczęciem pierwszego profesjonalnego zabiegu z serii na ciało należy przeprowadzić dokładny wywiad z pacjentem, aby wyeliminować możliwość wystąpienia działań niepożądanych. Następnie dokonujemy dokładnych pomiarów newralgicznych punktów ciała. Pomiarów dokonujemy i zapisujemy zgodnie z Kartą Klienta THERMOGENIQUE.</p>
                            </div>
                            <div class="title3" ng-click="Mach1 = !Mach1">Etap 2 – peelingujący masaż wstępny ciała <i class="fas fa-plus-circle" ng-hide="Mach1"></i><i ng-hide="!Mach1" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Mach1">
                                <p>Na skórę nakładamy niewielką ilość wybranego peelingu w zależności od dedykowanego zabiegu:

                                <ul>
                                    <li>ThermoGenique Extrême Luxury Gold,</li>
                                    <li>ThermoGenique Extrême Regeneraiting Touch of Paradaise.</li>

                                </ul>
                                Masaż peelingujący wykonujemy zgodnie z procedurą zabiegową, szczególnie skupiając się na miejscachnewralgicznych. Po zakończeniu peeling zmywamy ze skóry za pomocą wilgotnych ręczników lub pod prysznicem.</p>
                            </div>
                            <div class="title3" ng-click="Mach2 = !Mach2">Etap 3 – Aktywne uderzenie termogeniczne <i class="fas fa-plus-circle" ng-hide="Mach2"></i><i ng-hide="!Mach2" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Mach2">
                                <p>Na partie objęte zabiegiem nakładamy ampułkę V-Slim PROF. Koktajl redukujący tkankę tłuszczową i modelujący kontur do ciała. Zawartość ampułki wmasowujemy dokładnie i intensywnie w skórę. Nie spłukujemy! Następnie na te same partie ciała nakładamy Minceur thermo-actif – termoaktywny antycellulitowy żel wyszczuplający i modelujący sylwetkę.</p>
                            </div>
                            <div class="title3" ng-click="Mach3 = !Mach3">Etap 4 – wzmocnienie termogeniczne i detoks <i class="fas fa-plus-circle" ng-hide="Mach3"></i><i ng-hide="!Mach3" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Mach3">
                                <p>Na partie objęte zabiegiem nakładamy "kokon termogeniczny". Następnie wytwarzamy efekt próżni w "kokonie termogenicznym" oraz przykrywamy dodatkowo pacjenta kocem pozostawiając do wzmocnienia efektu na około 25-35 minut.</p>
                            </div>
                            <div class="title3" ng-click="Mach4 = !Mach4">Etap 5 - masaż firmowy thermogen body shape extreme massage <i class="fas fa-plus-circle" ng-hide="Mach4"></i><i ng-hide="!Mach4" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Mach4">
                                <p>Po zdjęciu "kokona termogenicznego" na partiach objętych zabiegiem wykonujemy specjalistyczny drenaż zgodnie z procedurą THERMOGEN. Po wykonaniu drenażu przechodzimy do intensywnie ujędrniającego, wyszczuplającego i modelującego sylwetkę masażu THERMOGEN Body Shape Extrême Massage. W zależności od rodzaju wybranego zabiegu do masażu wykorzystujemy:
                                <ul>
                                    <li>Złoty miód regenerujący do masażu,</li>
                                    <li>Dotyk Raju – regenerujący olejek do masażu ciała</li>
                                </ul>
                                </p>
                            </div>
                            <div class="title3" ng-click="Mach6 = !Mach6">Etap 6 - pomiary końcowe <i class="fas fa-plus-circle" ng-hide="Mach6"></i><i ng-hide="!Mach6" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Mach6">
                                <p>Na zakończenie pierwszego zabiegu z serii dokonujemy również zgodnie z Kartą Klienta pomiarów pozabiegowych. Pomiary dokonywane są w tych samych miejscach i partiach ciała, które były mierzone przed zabiegiem. Pomiary zapisujemy w Karcie Klienta i porównujemy z pomiarami przed podając utratęcentymetrów.</p>
                            </div>

                            <div class="title3" ng-click="Mach7 = !Mach7">Efekty <i class="fas fa-plus-circle" ng-hide="Mach7"></i><i ng-hide="!Mach7" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Mach7">
                                <p>
                                <ul>
                                    <li>gładsza skóra</li>
                                    <li>oczyszczenie organizmu z toksyn</li>
                                    <li>niwelowanie obrzęków i zastojów</li>
                                    <li>odprowadzenie nadmiaru wody</li>
                                    <li>utrata centymetrów w obwodach</li>
                                </ul>
                                </p>
                            </div>
                            <div class="title3" ng-click="Mach8 = !Mach8">Wskazania <i class="fas fa-plus-circle" ng-hide="Mach8"></i><i ng-hide="!Mach8" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Mach8">
                                <p>
                                <ul>
                                    <li>cellulit</li>
                                    <li>zatrzymywanie wody w organiźmie</li>
                                    <li>nadmierna tkanka tłuszczowa</li>
                                    <li>"ciężkość" nóg</li>
                                </ul>
                                </p>
                            </div>

                            <div class="title3" ng-click="Mach9 = !Mach9">Przeciwwskazania <i class="fas fa-plus-circle" ng-hide="Mach9"></i><i ng-hide="!Mach9" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Mach9">
                                <p>
                                <ul>
                                    <li>ciąża i laktacja</li>
                                    <li>choroby skóry</li>
                                    <li>nadciśnienie</li>
                                    <li>problemy z wątrobą</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="chechPrice" data-aos="fade">
                        <a href="cennik.php">Sprzawdź cenę</a>
                    </div>
                </div>
                <div class="machinePhoto" data-aos="fade-left">
                    <!-- <img src="img/img_3.jpg"> -->
                </div>
            </div>
            <div class="machine">
                <div class="macihneContent">
                    <div class="machineTitle">
                        <div class="title" data-aos="fade-right">Vacu zabieg na całe ciało </div>
                    </div>
                    <div class="machineDesc" data-aos="fade-up">
                        <div class="descDefault">
                            <p>Rozbija tłuszcz, drenuje, ujędrnia skórę i zwiększa jej elastyczność. Specjalnie opracowana głowica, która wytwarza próżnie i zasysa poszczególne elementy skóry wraz z tkanką tłuszczową. Za sprawą odpowiednich ruchów przyspiesza metabolizm, poprawia mikrokrążenie oraz rozbija złogi tłuszczowe.
                                Dodatkowo bipolarny RF dzięki uzyskaniu efektu termogenicznego ma jeszcze większy wpływ na skórę, zwiększając jej elastyczność i poprawiając jędrność.</p>
                            <p> Unikalny RF Thermq RF mini, BODY i Thermq Vacuum Bipolar wykorzystują unikalną technologię głębokiego podgrzewania (technologia plazmowa), gdzie dochodzi do przebudowy kolagenu i sprzyja migracji fibroblastów i tworzeniu nowego kolagenu. Przebudowa skóry ma miejsce w ciągu kilkunastu miesięcy i trwa około dwóch lat. 2 głowice z technologią Therm RF Body. Jedna do dużych partii ciała, a druga do mniejszych.</p>
                            <p>Efekt termogeniczny w technologii THERMG RF BODY polega na wytworzeniu krótkich, intensywnych impulsów, które oscylują przez skórę w celu ogrzania tkanki. W tym przypadku, energia przenika przez skórę i stymuluje skurcz kolagenu oraz produkcję nowego kolagenu do napinania skóry.
                                Dodatkowo w zależności od regulowanej intensywności, światło czerwone emitowane w centralnej części głowicy przyspiesza procesy regeneracyjne skóry i poprawia jej jędrność, stymulując działanie odmładzające.</p>
                        </div>
                        <div class="DescAdd">

                        </div>
                    </div>
                    <div class="chechPrice" data-aos="fade">
                        <a href="cennik.php">Sprzawdź cenę</a>
                    </div>
                </div>
                <div class="machinePhoto" data-aos="fade-left">
                    <!-- <img src="img/vacu.jpg"> -->
                </div>
            </div>
            <div class="machine">
                <div class="macihneContent">
                    <div class="machineTitle">
                        <div class="title" data-aos="fade-right">Volumetiq - M'onduniq Cosmetiques Professionnel </div>
                    </div>
                    <div class="machineDesc" data-aos="fade-up">
                        <div class="descDefault">
                            <p>VOLUMETIQ to urządzenie pozwalające na przeprowadzenie szeregu zabiegów kosmetycznych, w oparciu o wykorzystanie najnowszej tech­nologii nanokrystalicznej, która nadaje wyjątkową wytrzymałość, odporność oraz przewodnictwo i elastycz­ność pracy urządzenia</p>
                        </div>
                        <div class="DescAdd">
                            <div class="title3" ng-click="vol = !vol">NANOKRIOTERAPIA 5-10˚C LED BLUE
                                <i class="fas fa-plus-circle" ng-hide="vol"></i>
                                <i ng-hide="!vol" class="fas fa-minus-circle"></i>
                            </div>
                            <div class="DescAddText" ng-hide="!vol">
                                <p>
                                    Niska temperatura wykorzystana podczas zabiegu wspomaga odnowę biologiczną ciała. Komórki skóry otrzymują więcej składników odżywczych, są lepiej dotlenione i szybciej się regenerują. Pobudzone krążenie powoduje szybsze spalanie w komórkach tłuszczowych, przez co stopniowo usuwany jest cellulit.

                                    Po zabiegu skóra staje się gładka i matowa, co ma kolosalne zwłaszcza w przypadku skór problematycznych u nastolatków i dorosłych. Zimno doskonale radzi sobie z obrzękami powstałymi podczas snu.
                                </p>
                            </div>
                            <div class="title3" ng-click="vol1 = !vol1">NANOMEZOTERAPIA BEZIGŁOWA Z FOTOTERAPIĄ LED BLUE&GREEN
                                <i class="fas fa-plus-circle" ng-hide="vol1"></i>
                                <i ng-hide="!vol1" class="fas fa-minus-circle"></i>
                            </div>
                            <div class="DescAddText" ng-hide="!vol1">
                                <p>
                                    Zabiegi NONOMEZOTERAPII BEZIGŁOWEJ opierają się na zastosowaniu mikroprądów do odżywiania głęboko położonych komórek, drenażu limfatycznego, przy­spieszenia metabolizmu oraz poprawy przepływu limfy i krążenia krwi, a także wygładzania zmarszczek, roz­jaśniania skóry i utrzymywania odpowiedniego jej nawilżenia.

                                    W zabiegu dodatkowo wykorzystuje się FOTOTERAPIĘ LED BLUE & GREEN opartą o światło niebieskie i zielone, które wykazuje działanie antybakteryjne i przeciwzapalne – hamuje rozwój stanów zapalnych u pacjentów z trądzi­kiem pospolitym i trądzikiem różowatym.
                                </p>
                            </div>
                            <div class="title3" ng-click="vol2 = !vol2">NANOKRYSTALICZNA RADIOFREKWENCJA BIPOLARNA
                                <i class="fas fa-plus-circle" ng-hide="vol2"></i>
                                <i ng-hide="!vol2" class="fas fa-minus-circle"></i>
                            </div>
                            <div class="DescAddText" ng-hide="!vol2">
                                <p>
                                    Ta technika działa jednocześnie na naskórek oraz głę­bokie warstwy skóry, oferując istotną poprawę w za­kresie jędrności i napięcia, likwidację zmarszczek, blizn i rozstępów oraz wyrównanie powierzchni i poprawę kolorytu skóry. Wykorzystuje prąd RF bipolarny, co umożliwia wykonanie zabiegów ablacyjnych i semi ablacyjnych.

                                    Kluczowymi efektami zabiegu są przyrost objętości włókien w skórze do 30% (w ciągu 2 do 6 miesięcy po zabiegu) oraz przyrost procesów metabolicznych tłuszczu, który jest wydalany z organizmu.
                                </p>
                            </div>
                            <div class="title3" ng-click="vol4 = !vol4">FRAKCYJNA MEZOTERAPIA NANOCRYSTAL PEN
                                <i class="fas fa-plus-circle" ng-hide="vol4"></i>
                                <i ng-hide="!vol4" class="fas fa-minus-circle"></i>
                            </div>
                            <div class="DescAddText" ng-hide="!vol4">
                                <p>
                                    Nowa technologia drgania o wysokiej częstotliwości z wy­korzystaniem nowoczesnych chipów komputerowych do sterowania prędkością wibracji intensywnością nacisku gwarantuje 100% skuteczność we wtłaczaniu substancji aktywnych i różnych koktajli zabiegowych marki M’onduniq.

                                </p>
                            </div>
                            <div class="title3" ng-click="vol5 = !vol5">MIKROPEELING NANOCRYSTAL PEN
                                <i class="fas fa-plus-circle" ng-hide="vol5"></i>
                                <i ng-hide="!vol5" class="fas fa-minus-circle"></i>
                            </div>
                            <div class="DescAddText" ng-hide="!vol5">
                                <p>
                                    Innowacyjne rozwiązanie z kierunku mikrozłuszcza­nia warstwy rogowej naskórka za pomocą nanodyskowej technologii i odpowiedniego ruchu głowicy do mikrozłuszczania i poprawy mikrokrążenia skóry.

                                    Technologia gwa­rantuje skuteczne oczyszczenie skóry i przygotowanie do dalszych etapów wielu zabiegów w profesjonalnym gabinecie. To idealna alternatywa dla zabiegów mikrodermabrazji lub złuszczania mechanicznego.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="chechPrice" data-aos="fade">
                        <a href="cennik.php">Sprzawdź cenę</a>
                    </div>
                </div>
                <div class="machinePhoto" data-aos="fade-left">
                    <!-- <img src="img/vacu.jpg"> -->
                </div>
            </div>

        </div>
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
            strings: ["zabiegów", "odmłodzania", "piękności"],
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