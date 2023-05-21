<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prognoza pogody Poznań</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div class="baner">
        <div class="lewy">
            <p>maj, 2019 r.</p>
        </div>
        <div class="srodkowy">
            <h2>Prognoza dla Poznania</h2>
        </div>
        <div class="prawy">
            <img src="logo.png" alt="prognoza">
        </div>
    </div>
    <div class="lpcontainer">
        <div class="half">
            <a href="kwerendy.txt">Kwerendy</a>
        </div>
        <div class="half">
            <img src="obraz.jpg" alt="Polska, Poznań">
        </div>
    </div>
    
    <div class="glowny">
        <table>
            <tr>
                <th>Lp.</th>
                <th>DATA</th>
                <th>NOC - TEMPERATURA</th>
                <th>DZIEŃ - TEMPERATURA</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <?php 
            
            $con = mysqli_connect('localhost','root','root','prognoza');
            $query = "SELECT * FROM pogoda WHERE pogoda.miasta_id = 2 ORDER BY pogoda.data_prognozy DESC;";
            $result = mysqli_query($con, $query);
            $i = 1;
            while(($row = mysqli_fetch_array($result)) != null){
                echo("<tr>");
                echo("<td>" . $i++ . "</td>");
                echo("<td>" . $row['data_prognozy'] . "</td><td>" 
                . $row['temperatura_noc'] . "</td><td>" 
                . $row['temperatura_dzien'] . "</td><td>" 
                . $row['opady'] . "</td><td>" 
                . $row['cisnienie'] . "</td>" );
                echo("</tr>");
            }

            mysqli_close($con);

            ?>
        </table>
    </div>
    <div class="stopka">
        <p>Stronę wykonał: Michał Mrózek</p>
    </div>
    
</body>
</html>