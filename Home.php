<!DOCTYPE html>
<html lang="pl">
<head>
  <title>CreatePC4You - Strona Główna</title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content ="IE=edge,chrome=1">
  <meta name="Description" content="Strona jest projektem powstałym w celu nauki HTML,CSS oraz PHP" />
  <meta name="Keywords" content="komputer, podzespoły, składanie, komputery, karty, graficzne, procesory, podzespoły" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="Stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="css/magnifier.css" type="text/css"/>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="jquery.scrollTo.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
  

</head>
<body>

<!-- TUTAJ ROZPOCZYNA SIE KODOWANIE GÓREJ CZEŚCI STRONY W DUŻEJ ROZDZIELCZOŚCI-->


<div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="icon-th-list"></i></label>
      <div class="content">
      <div class="logo"><a href="Home.php"><h1 style="logoMain">CreatePC4You</h1></a></div>
        <ul class="links">
          <li><a href="Home.php">Strona główna</a></li>
          <li><a href="Onas.php">O nas</a></li>
          <li>
            <a href="Home.php" class="desktop-link">Podzespoły</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Podzespoły</label>
            <ul>
              <li><a href="Procesory.php">Procesor</a></li>
              <li><a href="#">Chłodzenie procesora</a></li>
              <li><a href="#">Płyta główna</a></li>
              <li><a href="#">Pamięć RAM</a></li>
              <li><a href="#">Karta graficzna</a></li>
              <li>
                  <a href="#" class="desktop-link">Dysk twardy</a>
                  <input type="checkbox" id="show-items">
                  <label for="show-items">Dysk twardy</label>
                  <ul>
                    <li><a href="#">Dyski HDD</a></li>
                    <li><a href="#">Dyski SSD</a></li>
                    <li><a href="#">Dyski M2</a></li>
                  </ul>
              </li>
              <li><a href="#">Zasilacz</a></li>
              <li><a href="#">Obudowa</a></li>
                </ul>
              </li>
          <li><a href="Login.php">Logowanie</a></li>
          <li><a href="Registration.php">Rejestracja</a></li>
		      <img src="images/moon.png" id="icon" alt="">
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="icon-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Szukaj..." required>
        <button type="submit" class="go-icon"><i class="icon-right-big"></i></button>
      </form>
    </nav>
  </div>
<div class="up" >
  <div class="content2">
    <small>Witaj na naszej stronie!</small>
    <h2 class="headtext">Stwórz swój <br> Wymarzony komputer</h2>
    <button type="button" class="NeonButton">Rozpocznij składanie</button>
  </div>
</div>

<!-- TUTAJ ROZPOCZYNA SIE KODOWANIE PIERWSZEJ LINIJKI TEKSTU-->

<div class="welcome">
  <div class="cont">
    <div class="welcometext"></div>
    <p class="tekstsg" style="text-align: center;">Oto najbardziej zaawansowane i interesujące narzędzie konfiguracyjne. Zmodyfikuj gotową kolekcję lub zbuduj komputer od podstaw. Na poniższej stronie możesz porównać cenę każdej części we wszystkich sklepach. W przypadku niewystarczającej wiedzy możesz skorzystać z gotowych komponentów komputerowych, które odpowiadają Twoim potrzebom i maksymalnej możliwej kwocie zakupu.</p>
    <button type="button" style="color: var(--wtb); border-color: var(--wtb); margin-top: 15px;">Rozpocznij składanie</button>
  </div>
</div>

<!-- STOP -->

<!-- TUTAJ ROZPOCZYNA SIE KODOWANIE DRUGIEJ LINIJKI TEKSTU-->

<p class="naglowek">Rozpocznij budowę swojego komputera!</p>
<p class="tekstsg" style="margin-bottom: 20px;">Alternatywą dla zakupu komputera gotowego jest niezależne złożenie jego z części które same wybierzemy. To rozwiązanie ma wiele zalet, najważniejszą jest pełna kontrola wyboru podzbiorów, dzięki czemu możesz dostosować je do swoich potrzeb i  budżetu, którym dysponujesz. 
<br> W przyszłości możliwe jest modernizację naszego komputera bez strachu przed zmianami gwarancyjnymi dla całego zestawu. Każdy komponent zakupiony przez nas ma swoją własną gwarancję. Niezależny składany komputer może wydawać się skomplikowany, ale w rzeczywistości każdy powinien zmierzyć się z tym zadaniem. 
<br>Aby ułatwić cały proces wyboru sprzętu komputerowego, utworzyliśmy konfigurację PC która pomoże krok po kroku wybrać optymalne elementy, które będą kompatybilne z innymi. 
</p>

<!-- STOP -->

<!-- TUTAJ ROZPOCZYNA SIE KODOWANIE DRUGIEGO AKAPITU-->

<section id="features">
  <div class="Config">
    <div class="ConfigImage">
      <img src="images/comp3.png" alt="">
    </div>
    <div class="ConfigRight">
      <p class="tekstsg" style=" color:#fff; font-size: 28px; font-weight: bold; text-align: center; width: 100%;">Zmodyfikuj gotowy zestaw lub zbuduj komputer od podstaw. </p>
      <p class="tekstsg" style=" color:#fff; font-size: 26px;">Oto najbardziej zaawansowane i jednocześnie najprzyjemniejsze narzędzia do konfiguracji. </p>
        <a class="Neon" href="Dopasowanie.php">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Dopasuj komputer pod siebie
        </a>
        <a class="Neon" href="Budowanie.php">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Zbuduj swój komputer od podstaw
        </a>
      </div>
    </div>
	</div>
</section>

<!-- STOP -->

<!-- TUTAJ ROZPOCZYNA SIE KODOWANIE INFORMACJI O PODZESPOŁACH-->

<section id="#Podzespoly">
  <div class="container">
   <div class="row">
   <p class="naglowek">Oto najważniejsze kroki potrzebne do zbudowania komputera!</p>
            <p class="naglowek">Określ budżet i przeznaczenie komputera</p>
            <p class="tekstsg">Powinniśmy najpierw ustalić, ile możemy wydać na nowy komputer. Bardzo ważny jest również jego cel. Komputery biurowe powinny mieć inne parametry, podczas gdy potężne komputery do gier powinny mieć równie potężne parametry.</p>
   <div class="Config">
      <div class="ConfigIMGLeft" data-aos="fade-right">
        <img src="images/cpu.png" style="width: 60%" alt="Procesor">
      </div>
      <div class="ConfigRight" data-aos="fade-left">
      <p class="naglowek">Procesor</p>
      <p class="tekstsg">Procesor to serce komputera. Wyposażony jest w tzw. rdzeń komponentowy, odpowiedzialny za koordynację wszystkich zadań wykonywanych przez komputer. </p>
      <p class="tekstsg">  Procesory dwurdzeniowe nadają się do najbardziej podstawowych zadań, ale profesjonaliści i gracze mogą wybrać modele z 4, 6, 8 lub więcej rdzeniami. </p>
      <p class="tekstsg">  Na wydajność ma również wpływ częstotliwość taktowania wyrażona w MHz lub GHz. Kiedy potrzebujesz tak zwanej dużej mocy obliczeniowej, jest to ważne np. dla graczy lub użytkowników, dla których najważniejsza jest wydajność. </p>
      <p class="tekstsg">  Do wyboru mamy procesory wielu firm. To, który wybierzemy, określa rodzaj płyty głównej.</p>
      </div>
    </div>
    <div style="clear: both;"></div>

    <div class="Config">
      <div class="ConfigLeft" data-aos="fade-right">
        <p class="naglowek">Chłodzenie procesora</p>
        <p class="tekstsg">Wybierając odpowiednie chłodzenię procesora, możemy nie tylko zapewnić cichszą pracę komputera, ale także poprawić stabilność i wydajność. </p>
        <p class="tekstsg"> Procesor jest jednym z podzespołów, który generuje najwięcej ciepła i zużywa najwięcej energii. </p>
        <p class="tekstsg"> Dobranie właściwego chłodzenia jest kluczowe w sytuacji, kiedy zamierzamy podkręcać procesor.</p>
      </div>
      <div class="ConfigIMGRight" data-aos="fade-left">
        <img src="images/cpucooler.png" style="width: 65%" alt="Chłodzenie procesora">
      </div>
    </div>
    <div style="clear: both;"></div>

    <div class="Config">
      <div class="ConfigIMGLeft" data-aos="fade-right">
        <img src="images/motherboard.png" style="width: 75%"alt="Płyta główna">
      </div>
      <div class="ConfigRight" data-aos="fade-left"> 
        <p class="naglowek">Płyta główna</p>
        <p class="tekstsg">Płyta główna to najbardziej podstawowa i najważniejsza część komputera. Tutaj instalowane są poszczególne komponenty, takie jak procesor, pamięć RAM i karta graficzna.</p>
        <p class="tekstsg">  Podłączane są do niego również komponenty, takie jak dyski twarde lub napędy. Dlatego bardzo ważne jest, aby wszystkie te elementy były kompatybilne z płytą główną. </p>
        <p class="tekstsg">  Może również zawierać elementy integracyjne (wbudowane w niego) – w tym. Karta sieciowa i dźwiękowa.</p>
      </div>
    </div>
    <div style="clear: both;"></div>

    <div class="Config">
      <div class="ConfigLeft" data-aos="fade-right">
        <p class="naglowek">Pamięć RAM</p>
        <p class="tekstsg">RAM to tymczasowa pamięć komputera. Przechowuje wszystkie informacje, których komputer obecnie potrzebuje do wykonywania powierzonych mu zadań. </p>
        <p class="tekstsg">  System operacyjny i wszystkie uruchomione programy ładują swoje komponenty do pamięci RAM podczas uruchamiania. Widać, że im więcej pamięci (może 4 GB, 8, 16 lub więcej), tym więcej operacji można wykonać jednocześnie. </p>
        <p class="tekstsg">  Szybkość przetwarzania zależy głównie od rodzaju pamięci. Obecnie najpopularniejszą jest energooszczędna pamięć DDR4. Do starszych płyt głównych przeznaczony jest natomiast DDR3.</p> 
        <p class="tekstsg">  Wybierając pamięć RAM trzeba dopasować jej taktowanie do możliwości płyty głównej. Tylko wówczas będziemy mieć pewność, że będzie działać poprawnie.</p>
      </div>
      <div class="ConfigIMGRight" data-aos="fade-left">
        <img src="images/RAM.png" style="width: 75%"alt="Pamięć RAM">
      </div>
    </div>
    <div style="clear: both;"></div>

    <div class="Config">
      <div class="ConfigIMGLeft" data-aos="fade-right">
        <img src="images/kartagraficzna.png" style="width: 70%" alt="Karta graficzna">
      </div>
      <div class="ConfigRight" data-aos="fade-left">
        <p class="naglowek">Karta graficzna</p>
        <p class="tekstsg">Karta graficzna przedstawia efekt pracy komputera na ekranie monitora. Im wyższa wydajność komponentu, tym wyższa jakość obrazu. </p>
        <p class="tekstsg">  Komputer będzie mógł wyświetlać wyższą rozdzielczość i płynniejsze animacje. Karta graficzna pomaga również przyspieszyć renderowanie i inne procesy. </p>
        <p class="tekstsg"> Najpopularniejsze karty graficzne to Radeon RX oraz GeForce GTX i RTX. O ich wydajności świadczy ilość i rodzaj pamięci wideo oraz taktowanie pamięci, ale ważne jest też odpowiednie chłodzenie, co ma wpływ na niezawodność i kulturę pracy karty graficznej.</p>
      </div>
    </div>
    <div style="clear: both;"></div>

    <div class="Config">
      <div class="ConfigLeft" data-aos="fade-right">
        <p class="naglowek">Dysk twardy</p>
        <p class="tekstsg">Dysk twardy to pamięć masowa — lokalizacja, w której zapisywane są pliki. Im większa pojemność tego komponentu, tym więcej dokumentów, piosenek, zdjęć, filmów lub gier można na nim przechowywać. </p>
        <p class="tekstsg">  Istnieją dwa podstawowe typy: dyski twarde o dużej pojemności (kilka terabajtów), ale wolniejsze dyski oraz dyski SSD, które są bardziej wydajne, niezawodne i prawie bezgłośne. </p>
        <p class="tekstsg">  Decydując się na obydwa rozwiązania w jednym komputerze, można uzyskać szybkie ładowanie systemu oraz najważniejszych programów i równocześnie dużą przestrzeń dyskową na pliki.</p>
      </div>
      <div class="ConfigIMGRight" data-aos="fade-left">
        <img src="images/ssd.png" style="width: 60%"alt="Dysk twardy">
      </div>
    </div>
    <div style="clear: both;"></div>

    <div class="Config">
      <div class="ConfigIMGLeft" data-aos="fade-right">
        <img src="images/zasilacz.png" style="width: 70%"alt="Zasilacz">
      </div>
      <div class="ConfigRight" data-aos="fade-left">
        <p class="naglowek">Zasilacz</p>
        <p class="tekstsg">Zasilacz jest niezbędnym elementem do pracy komputera.Oprócz przetwarzania i dostarczania energii elektrycznej, pełni również funkcję ochronną - chroni części komputerowe przed awariami spowodowanymi zwarciami lub skokami napięcia. </p>
        <p class="tekstsg">  Jego najważniejszymi parametrami są moc i sprawność. Do prawidłowego funkcjonowania bardziej wydajnych komputerów jest zastosowanie zasilacza o większej mocy. </p>
        <p class="tekstsg">  Z drugiej strony wyższa sprawność zasilacza zapewniająca bezawaryjną pracę.</p>
      </div>
    </div>
    <div style="clear: both;"></div>

    <div class="Config">
      <div class="ConfigLeft" data-aos="fade-right">
        <p class="naglowek">Obudowa</p>
        <p class="tekstsg">Najlepszym rozwiązaniem jest dobranie obudowy jako ostatniej, aby upewnić się, że ma wystarczająco dużo miejsca dla wszystkich komponentów komputera. </p>
        <p class="tekstsg">  Warto zdecydować się na taką obudowę, która prezentować się będzie odpowiednio, ale najważniejsze jest, aby zapewniała bezpieczeństwo dla podzespołów Twojego nowego komputera oraz łatwy do nich dostęp. </p>
        <p class="tekstsg">  Powinna także być na tyle przestronna, aby w przyszłości znalazło się miejsce, podczas  rozbudowy i modernizacji komputera.</p>
      </div>
      <div class="ConfigIMGRight" data-aos="fade-left">
        <img src="images/case.png" style="width: 50%"alt="Obudowa">
      </div>
    </div>
   </div>
  </div>
</section>


<!-- STOP -->

<!-- TUTAJ ROZPOCZYNA SIE KODOWANIE KONTAKTU NA STRONIE GŁOWEJ-->

<div class="contactAll">
  <div class="BlackOpacity">
    <div class="contactUs">
      <p class="tekstsg" style=" color:#fff; font-size: 28px; font-weight: bold; text-align: center; width: 100%; items-align:center;">Skontaktuj się z nami! </p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Impedit dolorem eveniet consectetur, in, pariatur repellendus unde natus nobis distinctio iusto quae voluptatibus aspernatur beatae facere voluptatum optio assumenda placeat. 
      Doloremque.</p>
    </div>
    <div class="contactMail">
      <div class="contactInfo">
        <div class="box">
          <div class="contactText">
            <h3 class="naglowek" style="color: #fff;"><i class="icon-location" style="font-size:36px; color: #fff;"></i>Adres</h3>
            <p class="tekstsg" style="color: #fff" >35-312 Rzeszów <br>ul.Dąbrowskiego 40/4</p>
          </div>
        </div>
        <div class="box">
          <div class="contactText">
            <h3 class="naglowek" style="color: #fff"><i class="icon-mobile" style="font-size:36px; color: #fff;"></i>Telefon</h3>
            <p class="tekstsg" style="color: #fff">+48535366666</p>
          </div>
        </div>
        <div class="box">
          <div class="contactText">
            <h3 class="naglowek" style="color: #fff"><i class="icon-mail-alt" style="font-size:36px; color: #fff;"></i>Email</h3>
            <p class="tekstsg" style="color: #fff">createpc4you@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="contactForm">
        <form>
          <h2>Wyślij wiadomość</h2>
          <div class="inputBox">
            <input type="text" name="" required="required" id="">
            <span>Imię i nazwisko</span>
          </div>
          <div class="inputBox">
            <input type="text" name="" required="required" id="">
            <span>Email</span>
          </div>
          <div class="inputBox">
            <textarea required="required" name="" id="" cols="30" rows="10"></textarea>
            <span>Wiadomość...</span>
          </div>
          <div class="inputBox">
            <input type="submit" value="Wyślij!">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- STOP-->

<!-- TUTAJ ROZPOCZYNA SIE KODOWANIE STOPKI STRONY-->

<footer style="border-top: 3px solid #272727;">
  <div class="products">
    <i class="icon-dropbox"><span class="FooterNames">Produkty</span></i></br></br>
    <a href="Procesory.php"><p class="FooterNames2">Procesory</p></a>
    <p class="FooterNames2">Karty graficzne</p>
    <p class="FooterNames2">Płyty Główne</p>
    <p class="FooterNames2">Dyski twarde</p>
    <p class="FooterNames2">Pamięci RAM</p>
    <p class="FooterNames2">Obudowy</p>
    <p class="FooterNames2">Zasilacze</p> 
  </div>
  <div class="additives">
    <i class="icon-puzzle"><span class="FooterNames">Dodatki</span></i></br></br>
    <p class="FooterNames2">Dodatki w App Store</p>
    <p class="FooterNames2">Inspiracje</p>
    <p class="FooterNames2">Blog</p>
  </div>
  <div class="partners">
    <i class="icon-users"><span class="FooterNames">Partnerzy</span></i></br></br>
    <p class="FooterNames2">Regulamin</p>
    <p class="FooterNames2">Program Partnerski</p>
    <p class="FooterNames2">Program Afiliacyjny</p>
    <p class="FooterNames2">Program Resellerski</p>
    <p class="FooterNames2">Dokumentacja API</p>
  </div>
  <div class="about">
    <i class="icon-info"><span class="FooterNames">O nas</span></i></br></br>
    <p class="FooterNames2">Praca</p>
    <p class="FooterNames2">Media</p>
    <p class="FooterNames2">Polityka Prywatności</p>
    <p class="FooterNames2">Kontakt</p>
  </div>
  <div class="address">
    <i class="icon-location"><span class="FooterNames">Adres</span></i></br></br>
    <p class="FooterNames2">Rzeszów</p>
    <p class="FooterNames2">ul. Dąbrowskiego 40/4</p>
    <p class="FooterNames2">35-312 Rzeszów</p>
  </div>
  <div class="stop" style="clear: both;";></div>
  <div class="socials">
    <a href="http://facebook.com"  rel="noopener" target= "_blank" class="sociallink"><i class="icon-facebook" style="margin-left: 10px;"></i></a>
    <a href="http://twitter.com" rel="noopener" target= "_blank" class="sociallink"><i class="icon-twitter" style="margin-left: 10px;"></i></a>
    <a href="http://instagram.com" rel="noopener" target= "_blank" class="sociallink"><i class="icon-instagram" style="margin-left: 10px;"></i></a>
    <a href="http://youtube.com" rel="noopener" target= "_blank" class="sociallink"><i class="icon-youtube-play" style="margin-left: 10px;"></i></a>
    <a href="http://google.com"rel="noopener" target= "_blank" class="sociallink"><i class="icon-gplus" style="margin-left: 10px:"></i></a>
  </div>
  <div class="footerend"> Wszelkie prawa zastrzeżone &copy; 2021 Dziękujemy za wizytę! </div>
</footer>

<!-- STOP -->
    
<script src="styl.js"></script>

  <!-- TUTAJ ROZPOCZYNA SIE KODOWANIE ANIMACJI OBRAZKÓW I TEKSTU-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- STOP -->

</body>
</html>

