<script setup>




</script>

<template>

    <div class="container">
        <div class="description">
            <div class="text">
                Zazwyczaj arkusz zaczyna się od operacji na bazie danych.
            </div>

            <code>
                cokolwiek <br>
                
            </code>

            <div class="text">
                Gotowa strona powinna wyglądać w ten sposób:
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
        height: 120%;
        overflow: hidden;
        background-color: #2c3e50;
        justify-content: center;
    }

    .description,
    .links{
        height: 100%;
        padding: 20px;
        flex-direction: column;
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

    .text{
        display: unset;
    }

    code{
        /* display: flex; */
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

    .links{
        width: 25%;
        border-left: 5px solid #45607d;
        /* flex-direction: column; */
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
