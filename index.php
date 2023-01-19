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
        <section id="right">

        </section>
        <section id="main">
            <section class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <div class="slide first">
                        <img src="zdj/1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="zdj/2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="zdj/3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="zdj/4.jpg" alt="">
                    </div>
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </section>
        </section>
        <section id="main1">
            <div id="left1">
                <h1>Lorem ipsum</h1>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, porro, fugit nulla culpa officia dolorum est eveniet ipsam, voluptatibus vero accusamus non. Quos in quis, earum aspernatur repudiandae at molestias.
                Dolores dolorem non assumenda soluta repellat nisi iure omnis eaque, veniam eius veritatis consequuntur ducimus architecto! Commodi voluptas doloremque aliquid, est, quaerat cupiditate minus facilis, praesentium voluptatibus iusto quidem sint.
                Accusamus soluta deserunt aperiam alias eligendi. Saepe, id placeat odio eveniet voluptate sed corrupti neque quo quidem debitis voluptatem hic aut modi perspiciatis, maxime eligendi, officiis quas odit alias molestiae.</span>
                </div>
            <div id="right1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.9739111977915!2d18.931811815930747!3d51.60536661135603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471a5b9c77b56067%3A0x5f0283e527aa2f6e!2sOgrodowa%2015%2C%2098-311%20Zdu%C5%84ska%20Wola!5e0!3m2!1sen!2spl!4v1672919039666!5m2!1sen!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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