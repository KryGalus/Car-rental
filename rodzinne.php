<!DOCTYPE html>
<html>
    <head>
        <title>Wypożyczalnia samochodów</title>
        <link href="styl.css" type="text/css" rel="stylesheet">
        <meta name="viewport"  content="width=device-width, initial-scale=1"/>
        <meta charset="utf-8">
    </head>
    <body>
        <header id="h1">
            <img src="zdj/auto.png" id="logo" alt="logo">
            <a href="osobowe.php"><div id="a1">Osobowe</div></a>
            <a href="dostawcze.php"><div id="a2">Dostawcze</div></a>
            <a href="domiasta.php"><div id="a3">Do miasta</div></a>
            <a href="rodzinne.php"><div id="a4">Rodzinne</div></a>
            <a href="sportowe.php"><div id="a5">Sportowe</div></a>
        </header>
        <header id="h2">
            <img src="zdj/mail.png" width="30px" height="30px">
            <span>lorem.ipsum@dolor.com</span>
            <br>
            <img src="zdj/phone.png" width="30px" height="30px">
            <span>111 777 444</span>
        </header>
        <section id="left">
            <div id="form">
                <form>
                    <select name="nadwozie" id="s1">
                        <option>Typ nadwozia</option>
                    </select>
                    <select name="marka" id="s2">
                        <option>Marka pojazdu</option>
                    </select>
                    <select name="model" id="s3">
                        <option>Model pojazdu</option>
                    </select>
                    <select name="paliwo" id="s4">
                        <option>Rodzaj paliwa</option>
                    </select>
                    <br>
                    <input type="number" name="rokod" id="rokod" placeholder="Rok produkcji od" min="2012" max="2023">
                    <input type="number" name="rokdo" id="rokdo" placeholder="Rok produkcji do" min="2012" max="2023">
                    <br>
                    <input type="submit" value="Pokaż" name="sub" id="sub">
                </form>
            </div>
        </section>
        <section id="osright">

        </section>
        <section id="osmain">
        <?php
                    $db = new mysqli('localhost', 'root', '', 'auta');
                    $msg = '';
                    $zapytanie = "SELECT * FROM oferta WHERE typ = 4";
                    $wynik = $db->query($zapytanie);
                    $ile_znalezionych = $wynik->num_rows;
                    for($i=0;$i<$ile_znalezionych;$i++)
                    {
                        $wiersz = $wynik->fetch_assoc();
                        echo '<div class="ogloszenie">';
                        echo '<table>';
                        echo '<tr>';
                        echo '<th>'.'Marka:'.'</th>';
                        echo '<th>'.'Model:'.'</th>';
                        echo '<th>'.'Typ nadwozia:'.'</th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>'.$wiersz['marka'].'</td>';
                        echo '<td>'.$wiersz['model'].'</td>';
                        echo '<td>'.$wiersz['nadwozie'].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<th>'.'Rok produkcji:'.'</th>';
                        echo '<th>'.'Rodzaj paliwa:'.'</th>';
                        echo '<th>'.'Silnik:'.'</th>';
                        echo '<th>'.'KM:'.'</th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td>'.$wiersz['rok'].'</td>';
                        echo '<td>'.$wiersz['paliwo'].'</td>';
                        echo '<td>'.$wiersz['silnik'].'</td>';
                        echo '<td>'.$wiersz['km'].'</td>';
                        echo '</tr>';
                        echo '</table>';
                        echo '<button id="b1">Sprawdź</button>';
                        echo '</div>';
                        echo '<div class="ogloszenie1">';
                        echo '<img src="zdj/'.$wiersz['zdj'].'.jpg"/>';
                        echo '</div>';
                    }
                ?>
        </section>
        <footer>
            <table>
                <tr id="t1">
                    <td>Regulamin</td>
                    <td>Kontakt</td>
                    <td>O firmie</td>
                </tr>
                <tr id="t1">
                    <td>Samochody</td>
                    <td>Lokalizacja</td>
                    <td>Lorem ipsum</td>
                </tr>
            </table>
        </footer>
    </body>
</html>