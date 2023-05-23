<script setup>

</script>

<template>

    <div class="container">
        <div class="description">

            <div class="title">Operacje na BD</div>

            <div class="g-text">
                Wymagania arkusza dotyczące bazy danych:
                <ul>
                    <li>utwórz bazę danych o nazwie <span>prognoza</span></li>
                    <li>
                        do stworzonej bazy należy zaimportować 
                        tabele z pliku <span>baza2.sql</span>
                    </li>
                    <li>
                        po imporcie robimy zrzut całego widocznego ekranu,
                        łącznie z paskiem zadań
                        (klawisze: windows + shift + s )
                    </li>
                </ul>

            </div>

            <img class="g-img" src="screenshots/import_ss.png" alt="import_ss" title="import_ss">

            <div class="text">
                Następnie tworzymy zapytania w <span>SQL</span> 
                i zapisujemy je w pliku <span>kwerendy.txt</span>.<br>
                Tutaj nie da się nic poradzić, trzeba po prostu znać SQL-a.
                <ul>
                    <li>
                        Zapytanie 1:<br>
                        wybierające wszystkie pola z tabeli pogoda dla miast 
                        o id równym 2, posortowane malejąco według daty prognozy
                    </li>
                </ul>
            </div>

            <code>
                SELECT * FROM pogoda WHERE pogoda.miasta_id = 2 ORDER BY pogoda.data_prognozy DESC;
            </code>

            <div class="text">
                <ul>
                    <li>
                        Zapytanie 2:<br>
                        wybierające jedynie pola id oraz temperatura_dzien z 
                        tabeli pogoda dla tych rekordów, dla których ciśnienie 
                        jest poniżej 1000 hPa
                    </li>
                </ul>
            </div>

            <code>
                SELECT pogoda.id, pogoda.temperatura_dzien FROM pogoda WHERE pogoda.cisnienie &lt; 1000;
            </code>

            <div class="text">
                <ul>
                    <li>
                        Zapytanie 3:<br>
                        wybierające jedynie pola data_prognozy, opady 
                        z tabeli pogoda oraz nazwa z tabeli
                        miasta dla temperatur dziennych powyżej 20 stopni. 
                        Zapytanie wykorzystuje relację
                    </li>
                </ul>
            </div>

            <code>
                SELECT pogoda.data_prognozy, pogoda.opady, miasta.nazwa FROM pogoda JOIN miasta ON pogoda.miasta_id = miasta.id WHERE pogoda.temperatura_dzien > 20;
            </code>

            <div class="text">
                <ul>
                    <li>
                        Zapytanie 4:<br>
                        usuwające z tabeli pogoda rekord o id równym 8
                    </li>
                </ul>
            </div>

            <code>
                DELETE FROM pogoda WHERE pogoda.id = 8;
            </code>

            <div class="text">
                Po wykonaniu każdego zapytania trzeba zrobić zrzut całego ekranu
                z widocznym wynikiem zapytania oraz zapisać w sposób następujący:<br>
                <span>kw(numer_zapytania).jpg</span>, np.: <span>kw2.jgp</span>
            </div>

            <div class="title">Grafika</div>

            <img class="g-img" src="screenshots/skalowanie_ss.png" alt="skalowanie_ss" title="skalowanie_ss">

            <div class="g-text">
                Wymagania dotyczące grafiki są następujące:
                <ul>
                    <li>
                        plik logo.png należy przeskalować z 
                        zachowaniem proporcji tak, aby jego
                        wysokość wynosiła dokładnie 90 px, 
                        obraz ma zachować przezroczystość
                    </li>
                    <li>
                        plik obraz.jpg należy przeskalować z 
                        zachowaniem proporcji tak, aby jego
                        wysokość wynosiła dokładnie 250 px
                    </li>
                </ul>
                Obydwie grafiki należy otworzyć w programie 
                do obróbki grafiki rastrowej, np. GIMP.
                Aby przeskalować grafikę należy zaznaczyć cały obrazek,
                po czym wybrać narzędzie do skalowania.<br>
                
            </div>

            <img class="g-img" src="screenshots/eksport_ss.png" alt="eksport_ss" title="eksport_ss">

            <div class="g-text">
                Po dostosowaniu wymiarów obrazka trzeba go skopiować, 
                stworzyć nowy plik o wymiarach skopiowanego obrazka, 
                najlepiej od razu z przezroczystym tłem.
                Następnie wklejamy obrazek z prawidłowymi rozmiarami
                oraz eksportujemy z roszerzeniem <span>.png</span>.
            </div>

            <div class="bigger">
                Podgląd gotowej strony:
            </div>

            <img src="screenshots/gotowiec.png" alt="podgląd gotowej strony" title="podgląd gotowej strony">

            <div class="title">HTML</div>

            <div class="text">
                Zgodnie z poleceniem należy stworzyć plik <span>meteo.php</span>, a w nim:

                <ul>
                    <li>zastosować właściwy standard kodowania polskich znaków (np. UTF-8),</li>
                    <li>zmienić tytuł strony na "Prognoza pogody Poznań"</li>
                    <li>oraz podłączyć plik ze zdefiniowanymi stylami.</li>
                </ul>
                Wszystko to należy zrobić w znacznikach <span>&lt;head&gt;&lt;/head&gt;</span> :
            </div>

            <code>
                &lt;head&gt;<br>
                <t1></t1>&lt;meta charset="UTF-8"&gt;<br>
                <t1></t1>&lt;title&gt;Prognoza pogody Poznań&lt;/title&gt;<br>
                <t1></t1>&lt;link rel="stylesheet" href="styl4.css"&gt;<br>
                &lt;/head&gt;
            </code>

            <div class="text">
                Następnie należy podzielić stronę na bloki:<br>
                <ul>
                    <li>na górze trzy bloki banera tzn. lewy, środkowy i prawy</li>
                    <li>poniżej dwa bloki: lewy i prawy</li>
                    <li>następnie blok główny</li>
                    <li>na dole blok stopki</li>
                </ul>
                Najłatwiej zrobić to znacznikami <span>&lt;div&gt;&lt;/div&gt;</span>.
                Każdemu znacznikowi można przypisać atrybut <span>class</span>,
                dzięki któremu potem będziemy mogli ostylować każdego div-a lub,
                jeśli istnieje taka potrzeba, kilka za pomocą jednej klasy.
                Najlepiej nazywać klasy po angielsku, bo nie powinno się
                w nich używać polskich znaków.
            </div>

            <code>
                &lt;body&gt;<br>
                <t1></t1>&lt;div class="banner"&gt;<br>
                <t2></t2>&lt;div class="left"&gt;<br><br>
                <t2></t2>&lt;/div&gt;<br>
                <t2></t2>&lt;div class="middle"&gt;<br><br>
                <t2></t2>&lt;/div&gt;<br>
                <t2></t2>&lt;div class="right"&gt;<br><br>
                <t2></t2>&lt;/div&gt;<br>
                <t1></t1>&lt;/div&gt;<br>
                
                <t1></t1>&lt;div class="second-part"&gt;<br>
                <t2></t2>&lt;div class="half"&gt;<br><br>
                <t2></t2>&lt;/div&gt;<br>
                <t2></t2>&lt;div class="half"&gt;<br><br>
                <t2></t2>&lt;/div&gt;<br>
                <t1></t1>&lt;/div&gt;<br>
                
                <t1></t1>&lt;div class="main"&gt;<br><br>
                <t1></t1>&lt;/div&gt;<br>

                <t1></t1>&lt;div class="footer"&gt;<br><br>
                <t1></t1>&lt;/div&gt;<br>
                &lt;/body&gt;
            </code>

            <div class="text">
                Teraz można przejść do wstawiania zawartości do poszczególnych
                bloków. <br>
                Zawartość lewego bloku banera:
                <ul>
                    <li>akapit o treści "maj, 2019r."</li>
                </ul>
                Znacznik akapitu to <span>&lt;p&gt;&lt;/p&gt;</span>, 
                treść umieszcza się między znacznikiem otwierającym, a zamykającym.
                Blok będzie więc wyglądał w ten sposób:
            </div>

            <code>
                &lt;div class="left"&gt;<br>
                <t1></t1>&lt;p&gt;maj, 2019r.&lt;/p&gt;<br>
                &lt;/div&gt;
            </code>

            <div class="text">
                Blok środkowy: 
                <ul>
                    <li>nagłówek drugiego stopnia o treści "Prognoza dla Poznania"</li>
                </ul>
                Znacznik dla nagłówka to <span>&lt;h2&gt;&lt;/h2&gt;</span>.
                Wyróżniamy 6 stopni nagłówków, największy to <span>&lt;h1&gt;&lt;/h1&gt;</span>,
                a najmniejszy <span>&lt;h6&gt;&lt;/h6&gt;</span>.
            </div>

            <code>
                &lt;div class="middle"&gt;<br>
                <t1></t1>&lt;h2&gt;Prognoza dla Poznania&lt;/h2&gt;<br>
                &lt;/div&gt;
            </code>

            <div class="text">
                Wymagania dla ostatniego bloku banera:
                <ul>
                    <li>
                        obraz <span>logo.png</span> z tekstem alternatywnym o 
                        treści "prognoza"
                    </li>
                </ul>
                Grafiki w HTML-u umieszcza się w pojedynczym znaczniku 
                <span>&lt;img src="" alt=""&gt;</span>. W atrybucie 
                <span>src</span> umieszczamy link do obrazka, który 
                chcemy osadzić na stronie, zaś atrybut <span>alt</span>
                to tekst alternatywny, który jest wyświetlany, gdy przeglądarka
                z jakiegoś powodu nie może wyświetlić grafiki.
            </div>

            <code>
                &lt;div class="right"&gt;<br>
                <t1></t1>&lt;img src="logo.png" alt="prognoza"&gt;<br>
                &lt;/div&gt;
            </code>

            <div class="text">
                Następny w kolejności jest blok lewy:
                <ul>
                    <li>
                        odnośnik do pliku <span>kwerendy.txt</span> 
                        z treścią "Kwerendy"
                    </li>
                </ul>
                Znacznik odnośnika to <span>&lt;a href=""&gt;&lt;/a&gt;</span>.
                W atrybucie <span>href</span> podajemy link, do którego 
                odnośnik ma przekierowywać użytkownika.<br>
                Zawartość bloku prawego:
                <ul>
                    <li>obraz.jpg z tekstem alternatywnym o treści "Polska, Poznań"</li>
                </ul>
                Całość będzie wyglądać w ten sposób:
            </div>

            <code>
                &lt;div class="second-part"&gt;<br>
                <t1></t1>&lt;div class="half"&gt;<br>
                <t2></t2>&lt;a href="kwerendy.txt"&gt;Kwerendy&lt;/a&gt;<br>
                <t1></t1>&lt;/div&gt;<br>
                <t1></t1>&lt;div class="half"&gt;<br>
                <t2></t2>&lt;img src="obraz.jpg" alt="Polska, Poznań"&gt;<br>
                <t1></t1>&lt;/div&gt;<br>
                &lt;/div&gt;
            </code>
            
            <div class="text">
                Zawartość bloku głównego:<br>
                <ul>
                    <li>tabela o sześciu kolumnach</li>
                    <li>
                        nagłówkowy wiersz tabeli zawierający wpisy:
                        <ul>
                            <li>"Lp."</li>
                            <li>"DATA"</li>
                            <li>"NOC - TEMPERATURA"</li>
                            <li>"DZIEŃ - TEMPERATURA"</li>
                            <li>"OPADY [mm/h]"</li>
                            <li>"CIŚNIENIE [hPa]"</li>
                        </ul>
                    </li>
                    <li>
                        wiersze z danymi tabeli wypełniane za pomocą skryptu, 
                        którym zajmiemy się później
                    </li>
                </ul>
                Znacznik obejmujący całą tabelę to <span>&lt;table&gt;&lt;/table&gt;</span>,
                wewnątrz opisujemy strukturę tabeli za pomocą znaczników wierszy
                <span>&lt;tr&gt;&lt;/tr&gt;</span> oraz komórek <span>&lt;td&gt;&lt;/td&gt;</span>.
                Wiersz nagłówkowy to zwyczajny wiersz, ale komórki nagłówkowe mają inny znacznik:
                <span>&lt;th&gt;&lt;/th&gt;</span>. Skrypt w plikach z roszerzeniem 
                '.php' umieszcza się w specjalnych znacznikach <span>&lt;?php ?&gt;</span>.
                Cały blok główny będzie wyglądał w ten sposób:
            </div>

            <code>
                &lt;div class="main"&gt;<br>
                <t1></t1>&lt;table&gt;<br>
                <t2></t2>&lt;tr&gt;<br>
                <t3></t3>&lt;th&gt;Lp.&lt;/th&gt;<br>
                <t3></t3>&lt;th&gt;DATA&lt;/th&gt;<br>
                <t3></t3>&lt;th&gt;NOC - TEMPERATURA&lt;/th&gt;<br>
                <t3></t3>&lt;th&gt;DZIEŃ - TEMPERATURA&lt;/th&gt;<br>
                <t3></t3>&lt;th&gt;OPADY [mm/h]&lt;/th&gt;<br>
                <t3></t3>&lt;th&gt;CIŚNIENIE [hPa]&lt;/th&gt;<br>
                <t2></t2>&lt;/tr&gt;<br>
                <t2></t2>&lt;?php<br>
                <t3></t3>// skryptem zajmiemy się później<br>
                <t2></t2>?&gt;<br>
                <t1></t1>&lt;/table&gt;<br>
                &lt;/div&gt;
            </code>

            <div class="text">
                Ostatni został blok stopki, który ma zawierać:
                <ul>
                    <li>
                        akapit o treści: „Stronę wykonał: ”, 
                        dalej wstawiony numer PESEL zdającego
                    </li>
                </ul>
            </div>

            <code>
                &lt;div class="footer"&gt;<br>
                <t1></t1>&lt;p&gt;Stronę wykonał: 00000000000&lt;/p&gt;<br>
                &lt;/div&gt;<br>
            </code>
            

            <div class="title">CSS</div>
                
            <div class="text">
                Teraz pora zająć się CSS-em.
                Wymagania z arkusza zaraz, bo najpierw trzeba
                poustawiać bloki, żeby to wyglądało tak jak powinno.<br>
                Według mnie najlepiej do ustawiania div-ów służy flexbox.
                Na początku trzeba ustawić <span>display: flex;</span> dla 
                elementów w których znajdują się kolejne div-y. W cssie
                selektor dla klasy to kropka i jej nazwa.
            </div>

            <code>
                .banner, .second-part {<br>
                <t1></t1>display: flex;<br>
                <t1></t1>flex-wrap: wrap;<br>
                }
            </code>

            <div class="text">
                To wystarczy, żeby w podanych blokach divy ustawiały się obok 
                siebie, jeśli będą miały do tego miejsce. <span>flex-wrap: wrap;</span>
                jest w razie gdyby łączna szerokość div-ów przekroczyła 100%.<br>
                Wymagania arkusza są następujące:
                <ul>
                    <li>domyślne dla całej strony: krój czcionki Garamond</li>
                    <li>
                        wspólne dla lewego i prawego bloku banera:
                        <ul>
                            <li>kolor tła RGB(95, 158, 160)</li>
                            <li>żółty kolor czcionki</li>
                            <li>szerokość 20%</li>
                            <li>wysokość 90px</li>
                            <li>wyrównywanie tekstu do prawej</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <code>
                html {<br>
                <t1></t1>font-family: Garamond;<br>
                }<br><br>

                .left, .right {<br>
                <t1></t1>background-color: rgb(95, 158, 160);<br>
                <t1></t1>color: yellow;<br>
                <t1></t1>width: 20%;<br>
                <t1></t1>height: 90px;<br>
                <t1></t1>text-align: right;<br>
                }
            </code>

            <div class="text">
                Dla środkowego bloku banera:
                <ul>
                    <li>kolor tła RGB(175, 238, 238)</li>
                    <li>żółty kolor czcionki</li>
                    <li>szerokość 60%</li>
                    <li>wysokość 90px</li>
                    <li>wyrównywanie tekstu do środka</li>
                </ul>
            </div>

            <code>
                .middle {<br>
                <t1></t1>background-color: rgb(175, 238, 238);<br>
                <t1></t1>color: yellow;<br>
                <t1></t1>width: 20%;<br>
                <t1></t1>height: 90px;<br>
                <t1></t1>text-align: center;<br>
                }
            </code>

            <div class="text">
                Dla bloku lewego i prawego:
                <ul>
                    <li>kolor tła RGB(175, 238, 238)</li>
                    <li>szerokość 50%</li>
                    <li>wysokość 250px</li>
                </ul>
                Dla bloku głównego:
                <ul>
                    <li>kolor tła RGB(95, 158, 160)</li>
                    <li>marginesy wewnętrzne 30px</li>
                </ul>
                Dla bloku stopki:
                <ul>
                    <li>kolor tła RGB(175, 238, 238)</li>
                    <li>marginesy wewnętrzne 10px</li>
                </ul>
            </div>

            <code>
                .half {<br>
                <t1></t1>background-color: rgb(175, 238, 238);<br>
                <t1></t1>width: 50%;<br>
                <t1></t1>height: 250px;<br>
                }<br><br>

                .main {<br>
                <t1></t1>background-color: rgb(95, 158, 160);<br>
                <t1></t1>padding: 30px;<br>
                }<br><br>

                .footer {<br>
                <t1></t1>background-color: rgb(175, 238, 238);<br>
                <t1></t1>padding: 10px;<br>
                }

            </code>

            <div class="text">
                Dla znacznika tabeli:
                <ul>
                    <li>obramowanie 2px, linią kropkowaną o zielonym kolorze</li>
                    <li>szerokość 100%</li>
                    <li>obramowanie połączone</li>
                </ul>
                Dla znacznika komórki danych oraz komórki nagłówkowej tabeli:
                <ul>
                    <li>obramowanie 2px, linią kropkowaną o zielonym kolorze</li>
                </ul>
                Dodatkowo dla komórki nagłówkowej kolor tła zielony 
                i kolor czcionki żółty.
            </div>

            <code>
                table{<br>
                <t1></t1>border: 2px dotted green;<br>
                <t1></t1>width: 100%;<br>
                <t1></t1>border-collapse: collapse;<br>
                }<br><br>

                td, th{<br>
                <t1></t1>border: 2px dotted green;<br>
                }<br><br>

                th{<br>
                <t1></t1>background-color: green;<br>
                <t1></t1>color: yellow;<br>
                }
            </code>

            <div class="title">PHP</div>

            <div class="text">
                Wymagania dotyczące skryptu:
                <ul>
                    <li>
                        łączy się z serwerem na localhost, 
                        użytkownik root, bez hasła, baza o nazwie prognoza
                    </li>
                    <li>wysyła do bazy danych zapytanie 1</li>
                </ul>
                Z bazą łączymy się za pomocą funkcji podanej w tabeli,
                funkcja zwraca id połączenia, które przechowywać będziemy
                w zmiennej <span>$con</span>. Zapytanie zapiszemy w zmiennej
                <span>$query</span>, a rezultat tego zapytania w <span>$result</span>.
            </div>

            <code>
                &lt;?php<br><br>
                
                $con = mysqli_connect('localhost','root','root','prognoza');<br>
                $query = "SELECT * FROM pogoda WHERE pogoda.miasta_id = 2 ORDER BY pogoda.data_prognozy DESC;";<br>
                $result = mysqli_query($con, $query);
            </code>

            <div class="text">
                <ul>
                    <li>
                        W pierwszej kolumnie tabeli wyświetlana jest liczba porządkowa 
                        rozpoczynająca się w pierwszym wierszu z danymi od wartości 1.
                        W pozostałych kolumnach tabeli wyświetlane są dane z bazy.
                    </li>
                </ul>
                Dla liczby porządkowej musimy stworzyć zmienną, 
                która będzie się zwiększała o 1 dla każdego kolejnego wiersza.
                W php do wypisywania wielu wierszy danych
                wykorzystuje się pętle <span>while</span>, która wykonuje się dopóki
                warunek jest spełniony. <br>
                W tym przypadku warunkiem jest zwrócenie wyniku zapytania do bazy
                (pętla będzie wykonywać się tak długo, jak długo zwracane będą 
                kolejne wiersze danych). Jeśli warunek jest spełniony,
                to do zmiennej <span>$row</span> przypisywana jest kolejna linijka wyniku.<br>
                Wewnątrz pętli tworzymy (wypisujemy) komórki tabeli wypełnione
                danymi z zapytania za pomocą metody <span>echo</span>.
                Do poszczególnych wartości dostajemy się przez notację tablicową
                <span>$row['nazwa_komórki_w_bazie']</span>.
            </div>

            <code>
                $i = 1;<br>
                while(($row = mysqli_fetch_array($result)) != null){<br>
                <t1></t1>echo("&lt;tr&gt;");<br>
                <t1></t1>echo("&lt;td&gt;" . $i++ . "&lt;/td&gt;");<br>
                <t1></t1>echo("&lt;td&gt;" . $row['data_prognozy'] . "&lt;/td&gt;&lt;td&gt;" <br>
                <t1></t1>. $row['temperatura_noc'] . "&lt;/td&gt;&lt;td&gt;" <br>
                <t1></t1>. $row['temperatura_dzien'] . "&lt;/td&gt;&lt;td&gt;" <br>
                <t1></t1>. $row['opady'] . "&lt;/td&gt;&lt;td&gt;" <br>
                <t1></t1>. $row['cisnienie'] . "&lt;/td&gt;" );<br>
                <t1></t1>echo("&lt;/tr&gt;");<br>
                }
            </code>

            <div class="text">
                Na końcu działania skrypt zamyka połączenie z serwerem.
            </div>

            <code>
                mysqli_close($con);<br>
                ?&gt;
            </code>

        </div>
        <div class="links">
            <div class="links-header">Link do gotowca</div>
            <div class="link"><a href="http://localhost/3ct/2020styczenzad03phpPogoda/meteo.php" target="_blank">Gotowiec</a></div>
            <div class="links-header"><p>Zawartość do pobrania</p></div>
            <div class="link"><a href="screenshots/egzamin.pdf" target="_blank" download="egzamin">Arkusz</a></div>
            <div class="link"><a href="egzamin_materialy.zip" target="_blank">Materiały</a></div>
            <div class="link"><a href="egzamin_zrobiony/kwerendy.txt" target="_blank" download>kwerendy.txt</a></div>
        </div>
    </div>

</template>

<style scoped>

    div{
        display: flex;
    }

    .container{
        width: 100%;
        height: 100%;
        overflow: hidden;
        background-color: #2c3e50;
        justify-content: center;
    }

    .description,
    .links{
        height: 100%;
        padding: 20px;
        flex-wrap: wrap;
    }

    .description{
        width: 75%;
    }

    .title{
        font-size: 50px;
        width: 100%;
        justify-content: center;
        font-weight: 600;
    }
    
    .text, code{
        padding: 8px 16px;
        width: 100%;
        height: fit-content;
    }

    .g-text{
        padding: 8px 16px;
        width: 65%;
        height: fit-content;
        display: unset;
    }

    .text{
        display: unset;
    }

    .bigger{
        font-size: 1.7rem;
        width: 100%;
        justify-content: center;
    }

    code{
        background-color: hsl(210, 29%, 18%);
        font-family: monospace;
    }

    span{
        display: inline-block;
        font-family: monospace;
        background-color: hsl(210, 29%, 18%);
        padding: 2px 0;
    }

    t1{
        margin-left: 30px;
    }

    t2{
        margin-left: 60px;
    }

    t3{
        margin-left: 90px;
    }

    img{
        width: 100%;
        margin: 8px 0;
    }

    img.g-img{
        width: 35%;
        margin: 8px 0;
    }

    .links{
        width: 25%;
        border-left: 5px solid #45607d;
        flex-direction: column;
        flex-wrap: unset;
    }

    .links-header{
        width: 100%;
        justify-content: center;
        font-family: monospace;
    }

    .link{
        width: 100%;
        padding: 15px;
        font-family: monospace;
    }

    .link > a {
        width: 100%;
        height: 100%;
        text-align: center;
        text-decoration: none;
        color: unset;
        background-color: #45607d;
        word-wrap: break-word;
    }

</style>