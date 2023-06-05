<!DOCTYPE html>
<html lang='pl' ng-app="MainSite">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studio Kobiet Włocławek - strefa Fitness</title>
    <link href="css/preloader.css" rel="stylesheet" >
    <meta property="og:title" content="Studio Kobiet Włocławek - strefa Fitness" />
    <meta property="og:description" content="Strefa fitness Studia Kobiet Włocławek. Najlepszy sprzęt w okolicy. Dowiedz się więcej na temat naszej oferty." />
    <meta description="">
    <meta name="Keywords" content="Studio kobiet włocławek, Studio figura włocławek, studio kobiet, studio figura, włocławek fitness, fitness włocławek, dietetyczka włocławek, endermonologia, endermonologia włocławek, fitness, zabiegi na twarz włocławek, zabiegi na twarz, włocławek zabiegi na twarz, włocławek siłownia, włocławek fitness dla kobiet, włocławek kobiecy fitness, kobiecy fitness włocławek, dietetyczka włocławek, strefa zabiegów włocławek, studio włocławek, kobiet włocławek" />
    <meta name="google-site-verification" content="google-site-verification=0cTgTVhEDGmhLlT2js-N7EdBBl-9MABS5W2WXZ0_1dM" />
    <meta name="author" content="Szymon Marcinkowski">
    <meta property="og:image" content="img/avatar.jpg" />
    <script data-require="angular.js@*" data-semver="1.2.13" src="https://code.angularjs.org/1.2.13/angular.js"></script>
    <script data-require="angular-animate@*" data-semver="1.2.13" src="https://code.angularjs.org/1.2.13/angular-animate.js"></script>

    <link rel="shortcut icon" type="image/jpg" href="img/logo.jpg" />
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    <link rel="stylesheet"  href="css/style.css" />
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
                        <div class="title"  data-aos="fade-right">Vacu Shaper</div>
                    </div>
                    <div class="machineDesc" data-aos="fade-up">
                        <div class="descDefault">
                            <p>Bieżnia pod ciśnieniem to nowoczesna metoda zwalczania tkanki tłuszczowej i cellulitu. Specjalistyczne urządzenie łączące zalety wysiłku fizycznego i działania podciśnienia. Dzięki wykonywaniu klasycznych ruchów na bieżni oraz panującemu podciśnieniu w kapsule Vacu Shaper dochodzi do polepszenia krążenia krwi głównie w miejscach najbardziej narażonych (brzuch, uda, pośladki) na powstawanie cellulitu. Przyspiesza również krążenie limfy, dzięki czemu z organizmu szybciej są usuwane toksyny.</p>
                        </div>
                        <div class="DescAdd">
                            <div class="title3"  ng-click="Vacu = !Vacu">Jak Vacu Shaper pomaga w redukcji cellulitu <i class="fas fa-plus-circle" ng-hide="Vacu"></i><i ng-hide="!Vacu" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Vacu">
                                <p>Zgodnie z badaniami, ponad 80 % kobiet po 25 roku życia ciepli z powodu nierówności, zgrubień oraz gąbczastych bruzd na powierzchni ciała, w szczególności w okolicach ud i pośladków. Cellulit jest powszechnie występującym schorzeniem, które spędza sen z powiek milionom przedstawicielek płci pięknej na całym świecie. Bez wątpienia jest on wrogiem, którego nie jest łatwo się pozbyć. Wiedzą o tym zarówno nastolatki, jak i dojrzałe kobiety – skórka pomarańczowa to naprawdę trudny przeciwnik, który może powodować brak akceptacji własnego ciała i wstyd przed jego eksponowaniem np. w spódnicy mini, krótkich szortach, nie mówiąc już o kostiumie kąpielowym. Vacu Shaper to kobiecość pod ochroną!!! Spalanie selektywne to nic innego jak pozbycie się tkanki tłuszczowej z najbardziej problematycznych części ciała, czyli z brzucha, ud i pośladków przy jednoczesnym zachowaniu kobiecych krągłości, czyli biustu. Trening na Vacu-Shaper pozwala na osiągnięcie wymarzonego efektu. Pobieranie tłuszczu potrzebnego w procesie spalania w mięśniach jest niezależne od tego, które partie mięśni pracują, lecz od tego, które obszary skóry i tkanki podskórnej są lepiej ukrwione w danym momencie.</p>
                            </div>
                            <div class="title3"  ng-click="Vacu2 = !Vacu2">Zalety treningu przy pomocy Vacu Shaper <i class="fas fa-plus-circle" ng-hide="Vacu2"></i><i ng-hide="!Vacu2" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Vacu2">
                                <p>
                                <ul>
                                    <li><div>Selektywne spalanie tłuszczu, tzn. największe ilości cząsteczek tłuszczu pobierane są dokładnie ze stref problemowych: pośladki, uda, brzuch, z obszarów o wymuszonym, zwiększonym ukrwieniu, Odwrotny efekt uzyskamy podczas klasycznego wysiłku podczas, którego w pierwszej kolejności kobiety chudną na twarzy, gubią biust.</div></li>
                                    <li><div>Spalanie tkanki tłuszczowej następuje przy wysiłku dużo mniejszym niż przy normalnym treningu jedynie przy 50% maksymalnego obciążenia serca.</div></li>
                                    <li><div>Porównywalnie do klasycznego treningu w tym samym czasie ćwiczeń spalamy cztery razy szybciej tkankę tłuszczową.</div></li>
                                    <li><div>Każdy trening powoduje utratę kilkuset kcal!!!</div></li>
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
                    <img src="img/Vacu.jpg">
                </div>
            </div>
            <div class="machine">
                <div class="macihneContent">
                    <div class="machineTitle">
                        <div class="title"  data-aos="fade-right">Infra Swan Shaper</div>
                    </div>
                    <div class="machineDesc" data-aos="fade-up">
                        <div class="descDefault">
                            <p>Cel i efekty działania:

                            <ul>
                                <li>Wyrzeźbione mięśnie nóg, pośladków i brzucha.</li>
                                <li>Wzmocnione mięśnie ramion i pleców.</li>
                                <li>Większa wydajność organizmu.</li>
                                <li>Likwidacja tkanki tłuszczowej.</li>
                                <li>Wzmocnienie serca.</li>
                                <li>Poprawa pracy układu krążenia i układu oddechowego.</li>
                                <li>Redukcja cellulitu.</li>
                            </ul>
                            Swan Shaper wyjątkowa stacja treningowa łącząca 4 innowacyjne technologie w jednym:</p>
                        </div>
                        <div class="DescAdd">
                            <div class="title3"  ng-click="Infra = !Infra">Eliptyk skrętny <i class="fas fa-plus-circle" ng-hide="Infra"></i><i ng-hide="!Infra" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Infra">
                                <p>Eliptyk skrętny który w innowacyjny sposób łączy trening cardio z jednoczesnym ćwiczeniem mięśni brzucha. Opatentowany system rotacyjny pozwala poza wzmacnianiem mięśni nóg skutecznie ćwiczyć mięśnie proste i skośne brzucha oraz pozostałe mięśnie tułowia.</p>
                            </div>
                            <div class="title3"  ng-click="Infra2 = !Infra2">Lampy kolagenowe <i class="fas fa-plus-circle" ng-hide="Infra2"></i><i ng-hide="!Infra2" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Infra2">
                                <p>Regeneracja wierzchniej warstwy skóry poprzez kolagenową terapię światłe. Kolagen to białko stanowiące podstawowy składnik struktury skóry. Występuje w tkance łącznej organizmu, wspiera jej strukturę i odpowiada za system transportu. Ubytek kolagenu powoduje starzenie skóry i zwiotczenie mięśni. Struktura tkanki łącznej zmienia się z wiekiem powodując pojawienie się zmarszczek na skórze. Komórki skóry mogą być stymulowane do produkcji kolagenu wzmacniającego strukturę skóry. Proces ten jest pobudzany przez fale świetlne o długości 633 nm. Ta długość fali mieści się wg wykresu w tzw świetle widzialnym. Ta długość fali wpływa korzystnie na pow warstwę skóry.</p>
                            </div>

                            <div class="title3"  ng-click="Infra3 = !Infra3"> Lampy podczerwone <i class="fas fa-plus-circle" ng-hide="Infra3"></i><i ng-hide="!Infra3" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Infra3">
                                <p>Dla głębokiej odbudowy włókien kolagenowych. Lampy emitujące krótkofalowe promieniowanie podczerwonew okolicach 1000 nm. mają szerokie zastosowanie w odbudowie głębokich warstw skóry. Podczerwień jest niewidzialna dla ludzkiego oka, jest jednak odczuwalna w postaci ciepła. Dzieje się to w ten sposób, że kiedy promieniowanie IR pada na obiekt na swojej drodze, jego energia jest absorbowana a przez to zmieniana na ciepło. Fale o takiej długości docierają głęboko w głąb skóry aż do naczyń krwionośnych. Działanie podczerwieni w urządzeniu Swan dzięki długości fali 1200 nm odbudowuje skórę praktycznie na poziomie komórkowym.</p>
                            </div>
                            <div class="title3"  ng-click="Infra4 = !Infra4"> Jonizacja <i class="fas fa-plus-circle" ng-hide="Infra4"></i><i ng-hide="!Infra4" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Infra4">
                                <p>Otaczające nas powietrze jest zbiorem ładunków elektrycznych. Jon ( to cząstka naładowana dodatnio lub ujemnie. W środowisku naturalnym przeważają ładunki ujemne. Źródłem jonów ujemnych są przede wszystkim burze – wielkie wyładowania atmosferyczne. Mniejszymi, ale stale działającymi jonizatorami są rośliny (szczególne właściwości wykazują paprocie) oraz naturalne zbiorniki wodne (zwłaszcza morza, ale także wodospady). Coraz częściej elektroklimat naszych pomieszczeń jest niesprzyjający. Otacza nas powietrze zjonizowane dodatnio przez pola elektromagnetyczne pochodzące od monitorów, telewizorów, drukarek itp. Liczne badania wykazują, że elektroklimat ma wpływ na zdrowie oraz samopoczucie człowieka – przebywanie w otoczeniu dodatnio zjonizowanego powietrza powoduje osłabienie, znużenie, zmniejszenie wydajności fizycznej i odporności psychicznej. Dlatego warto zatroszczyć się o właściwą jonizację powietrza – zobojętnienie jonów dodatnich i wytworzenie jonów ujemnych. Naturalnymi jonizatorami są rośliny doniczkowe. Może się jednak okazać, że nie są one dość wydajne i muszą być wspomagane przez specjalne urządzenia jonizujące. Funkcja jonizacji powietrza została umieszczona w urządzeniu Swan Shaper</p>
                            </div>
                        </div>
                    </div>
                    <div class="chechPrice" data-aos="fade">
                        <a href="cennik.php">Sprzawdź cenę</a>
                    </div>
                </div>
                <div class="machinePhoto" data-aos="fade-left">
                    <img src="img/swan.jpg">
                </div>
            </div>
            <div class="machine">
                <div class="macihneContent">
                    <div class="machineTitle">
                        <div class="title"  data-aos="fade-right">Limfodrenaż</div>
                    </div>
                    <div class="machineDesc" data-aos="fade-up">
                        <div class="descDefault">
                            <p>Limfodrenaż został zaprojektowany w oparciu o zasadę ręcznego drenażu limfatycznego usuwając toksyny i skupiska tłuszczu. Likwiduje cellulit, obrzęki, usuwa zalegającą wodę w opuchniętych kończynach, przeciwdziała powstawaniu żylaków, ujędrnia skórę, zmniejsza objętość masowanych partii o 3-5 cm.</p>
                        </div>
                        <div class="DescAdd">
                            <div class="title3"  ng-click="Lim = !Lim">Jak działa Limfodrenaż? <i class="fas fa-plus-circle" ng-hide="Lim"></i><i ng-hide="!Lim" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Lim">
                                <p>Limfodrenaż posiada sterowane mikroprocesorem specjalne mankiety, które wypełniane są powietrzem, co umożliwia precyzyjny dobór żądanego ciśnienia w komorach.</p>
                                <p>Każdy z mankietów spodni i rękawów posiada niezależne komory powietrzne. Dzięki specjalnej konstrukcji, płynności przepływu powietrza zapewnia subtelny i efektywny drenaż, który w odczuciu jest bardzo naturalny.</p>
                                <p>Zabieg drenażu limfatycznego trwa w zależności od potrzeb od 30 minut do 60 minut.<br>Podczerwień zamontowana w komorach powoduje nagrzewanie się mankietów do uprzednio zaprogramowanej temperatury co daje jeszcze większe uczucie relaksu i odprężenia.</p>
                            </div>
                            <div class="title3"  ng-click="Lim1 = !Lim1">Efekty <i class="fas fa-plus-circle" ng-hide="Lim1"></i><i ng-hide="!Lim1" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Lim1">
                                <p>
                                <ul>
                                    <li>Odchudzanie</li>
                                    <li>Wyszczuplenie problematycznych partii ciała (dysfunkcja limfatyczna)</li>
                                    <li>Leczenie cellulitis</li>
                                    <li>Zapobieganie powstawaniu żylaków</li>
                                    <li>Syndrom „ciężkich nóg”</li>
                                    <li>Rewelacyjnie sprawdza się w połączeniu z zabiegiem Body Wrraping.</li>
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
                        <div class="title"  data-aos="fade-right">Elektrostymulacja</div>
                    </div>
                    <div class="machineDesc" data-aos="fade-up">
                        <div class="descDefault">
                            <p>To zabieg, w którym przy pomocy prądu o niskiej częstotliwości wywołujemy skurcz mięśni podobny do tego, który następuje podczas ćwiczeń fizycznych. W wygodny sposób uzyskujemy efekty niemal identyczne z wielogodzinnym treningiem na siłowni.</p>
                        </div>
                        <div class="DescAdd">
                            <div class="title3"  ng-click="Ele = !Ele">Zalety i efekty Elektrostymulacji <i class="fas fa-plus-circle" ng-hide="Ele"></i><i ng-hide="!Ele" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Ele">
                                <p>Elektrostymulację możemy stosować właściwie na wszystkich częściach ciała. Najlepsze efekty redukcji tkanki tłuszczowej można zaobserwować na brzuchu, udach i pośladkach. Dzięki stymulacji prądem elektrycznym możemy również poprawić kondycję skóry, ujędrnić piersi, a także zlikwidować nadmiar skóry, który pozostał po nagłym spadku wagi.</p>
                                <p>Elektrostymulacja umożliwia redukcję tkanki tłuszczowej w okolicach, które podczas odchudzania sprawiają nam najwięcej problemów.</p>
                                <p>Elektrostymulacja może być alternatywą u osób, które nie mogą wykonywać tradycyjnych ćwiczeń fizycznych z uwagi na problem ze ścięgnami, stawami, czy inne schorzenia.<br>Elektrostymulacja to gimnastyka bez wysiłku!</p>
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
                        <div class="title"  data-aos="fade-right">Rower poziomy</div>
                    </div>
                    <div class="machineDesc" data-aos="fade-up">
                        <div class="descDefault">
                            <p>Treningowy ROWER POZIOMY renomowanej niemieckiej firmy Kettler. Jest on przeznaczony dla Pań, które chcą podczas ćwiczeń odciążyć odcinek lędźwiowy kręgosłupa oraz stawy kolanowe . Jazda na rowerze treningowym jest formą ćwiczeń niezwykle korzystną dla zdrowia (zwłaszcza dla stawów). Zakres wykonywanych ćwiczeń jest bardzo duży, dzięki czemu z treningu na rowerze może korzystać niemal każdy, niezależnie od kondycji czy wieku.</p>
                        </div>
                        <div class="DescAdd">
                            <div class="title3"  ng-click="Rowe = !Rowe">Zalety treningu na rowerze poziomym <i class="fas fa-plus-circle" ng-hide="Rowe"></i><i ng-hide="!Rowe" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Rowe">
                                <p>
                                <ul>
                                    <li>Wygoda treningu – siodełko roweru poziomego przypomina fotel</li>
                                    <li>Rozwiązują problem bólu lędźwiowego odcinka kręgosłupa wywołanego siedzącym trybem życia; rower poziomy z oparciem pozwala na wykonanie treningu bez odczuwania tego bólu</li>
                                    <li>Zmniejszenie obciążenia stawów kolanowych spowodowane odmienną niż w przypadku pionowych rowerów treningowych pozycją ciała podczas ćwiczeń.</li>
                                    <li>Znaczna redukcja tkanki tłuszczowej – jeden trening pozwala spalić nawet 800 kcal</li>
                                    <li>Większa siła i elastyczność mięśni – szczególnie rzeźbione są mięśnie nóg i pośladków</li>
                                    <li>Poprawa ruchomości stawów</li>
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
                    <img src="img/rower_poziomy.jpg">
                </div>
            </div>
            <div class="machine">
                <div class="macihneContent">
                    <div class="machineTitle">
                        <div class="title"  data-aos="fade-right">Roll Shaper</div>
                    </div>
                    <div class="machineDesc" data-aos="fade-up">
                        <div class="descDefault">
                            <p>Roll Shaper to masowanie, wyszczuplanie, odchudzanie, a także modelowanie sylwetki, spalanie tkanki tłuszczowej i redukcja cellulitu.</p>
                        </div>
                        <div class="DescAdd">
                            <div class="title3"  ng-click="Roll = !Roll">Jak działa Roll Shaper? <i class="fas fa-plus-circle" ng-hide="Roll"></i><i ng-hide="!Roll" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Roll">
                                <p>Roll-shaper to wielki wałek, który masuje ciało od stóp aż po plecy, nie wymagając przy tym wielkiego wysiłku. Rolka rozbija zbędną tkankę tłuszczową, modelując jednocześnie sylwetkę. Taki zabieg pomaga skutecznie pozbyć się cellulitu, który jest bolączką wielu kobiet.</p>
                                <p>Masaż wykonany aparatem ROLL SHAPER pobudza układ limfatyczny do pracy, co powoduje wzmożone zapotrzebowanie organów na tlen i substancje odżywcze. Zwiększa szybkość usuwania z organizmu produktów rozpadu, toksyn, a także wchłaniania obrzęków. Dzięki podwyższeniu przepustowości naczyń limfatycznych substancje toksyczne stopniowo wydalane są z organizmu.</p>
                            </div>
                            <div class="title3"  ng-click="Roll1 = !Roll1">Zalety korzystania z Roll Shaper <i class="fas fa-plus-circle" ng-hide="Roll1"></i><i ng-hide="!Roll1" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Roll1">
                                <p>Poprawa wyglądu sylwetki nie jest jedyną zaletą korzystania z roll-shapera. Polepsza się przemiana materii, a organizm stopniowo oczyszczany jest z toksyn, co wpływa korzystnie na samopoczucie. Rolki to także idealne rozwiązanie dla osób, które skarżą się na problemy z krążeniem. Po zabiegach na roll-shaperze wiecznie zimne lub spuchnięte dłonie i stopy pozostają tylko niemiłym wspomnieniem.</p>
                                <p>Sesje na roll-shaperze dopasowywane są indywidualnie, zarówno pod kątem częstotliwości zabiegów, jak i szybkości obrotów rolki. Początkowo potrzebna jest pomoc instruktora, po krótkim czasie można „rolować się” zupełnie samodzielnie,</p>
                            </div>
                            <div class="title3"  ng-click="Roll2 = !Roll2">Masaż Roll Shaper a wspomaganie układu limfatycznego <i class="fas fa-plus-circle" ng-hide="Roll2"></i><i ng-hide="!Roll2" class="fas fa-minus-circle"></i></div>
                            <div class="DescAddText" ng-hide="!Roll2">
                                <p>Masaż Roll Shaper wspomaga funkcjonowanie układu limfatycznego powodując:</p>
                                <ul>
                                    <li>Pomniejszenie objętości masowanych partii ciała o (3-5 cm)</li>
                                    <li>Wzmacnia mięśnie oraz napina i ujędrnia skórę</li>
                                    <li>Usuwa pęcherzyki tłuszczowe i cellulit</li>
                                    <li>Polepsza ukrwienie i krążenie</li>
                                    <li>Ułatwia usuwanie szkodliwych substancji toksycznych z organizmu</li>
                                    <li>Usuwa cellulit</li>
                                    <li>Redukuje tkankę tłuszczową</li>
                                    <li>UZALEŻNIA !!!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="chechPrice" data-aos="fade">
                        <a href="cennik.php">Sprzawdź cenę</a>
                    </div>
                </div>
                <div class="machinePhoto" data-aos="fade-left">
                    <img src="img/roleczki.jpg">
                </div>
            </div>
        </div>

        <!--  -->
        <div class="footer">
            <div class="author">
                <div class="title"  data-aos="fade"> Polub nas na </div>
            </div>
            <div class="followUs">
                <div class="followBox">
                    <div class="followIco">
                        <a target="_blank" href="https://www.instagram.com/studiokobietwloclawek/"><i class="fab fa-instagram-square"></i></a>

                    </div>
                    <div class="followText" data-aos="fade">
                        <div class="title3" >Instagramie</div>
                    </div>
                </div>
                <div class="followBox">
                    <div class="followIco">
                        <a target="_blank" href="https://www.facebook.com/endermologiaLPG"><i class="fab fa-facebook-square"></i></a>
                    </div>
                    <div class="followText" data-aos="fade">
                        <div class="title3" >Facebooku</div>
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

    <script src="js/typed.js"></script>

    <script>
        var typed = new Typed('.typed-words', {
            strings: ["fitness", "relaksu", "piękności"],
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