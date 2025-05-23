<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Primjer PHP i HTML-a</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="slike\Transparent.png" alt="NbAid" width="300px">
    <h1>
<?php
$time = date("H");

if ($time < 12) {
    $greeting = "Dobro jutro";
} elseif ($time < 18) {
    $greeting = "Dobar dan";
} else {
    $greeting = "Dobra večer";
}

echo $greeting . ", vam želimo - New Breed Assist in digital";
?>
</h1>
<nav>
    <ul><a href="#">Početna stranica</a>
        <a href="#">O nama</a>
        <a href="#">Naše usluge</a>
        <a href="#">Reference</a>
        <a href="#">Kontakt</a>
    </ul>
</nav>
</header>
    <hr>
    <main>
    <div class= "container hero">
        <p>
            <?php
             // Ovo je PHP kod unutar HTML-a
                echo "Danas je " . date("d.m.Y.") . " i vrijeme je " . date("H:i:s");

                    echo "<br>";
                        echo "<br>";
                            echo "<u>Lijep je dan</u>, iskoristi ga <u>najbolje</u> što možeš";?></p>
    <br>
    </div>
    <hr>
    <div class="container hero">
    
         <a href="https://www.edukos-instrukcije.hr" target="_blank">Klikom odi na Edukos web</a>

            <br>
            
            <br>
        <p>Gornji link radi ispravno</p>
    <br>
        <input type="checkbox" > Izgleda li ti ova stranica dobro?</input>
    <br>
    <br>
        <p>Ispod se nalazi testna lista</p>
    
<ul style="list-style-type: none;">

    <li>Prva stavka liste</li>
<ul style="list-style-type: none;"><li>Podstavka liste</li></ul>
    <li>Druga stavka liste</li>

</ul>
</div>
<hr>
<br>
<br>
<div class="container hero">
    <table> 
        <tr> 
            <th>Modul tečaja u Algebri</th>
             <th>Trajanje modula u satima</th>
        </tr> 
            <tr> 
                <td><em>Linux - priprema radne okoline</em></td> 
                <td><strong>15</strong></td>
        </tr> 
        <tr> 
            <td><em>Uvod u HTML</em></td>
             <td><strong>25</strong>
        </tr>
        <tr> 
            <td><em>Uvod u PHP</em></td>
             <td><strong>20</strong></td>     
        </tr> 
        <tr> 
            <td><em>Uvod u SQL</em></td>
             <td><strong>15</strong></td>     
        </tr> 
        <tr> 
            <td><em>Napredni PHP</em></td>
             <td><strong>25</strong></td>     
        </tr> 
        <tr> <td><em>Laravel</em></td>
             <td><strong>25</strong></td>     
        </tr> 
    </table> 
</div>
    <br>
    <br>
<div class="container hero">
<p>Za prijavu na tečaj, molimo Vas unesite Vaše podatke u prijavni obrazac:</p>
<br>
    <form method="post" action="spremiPodatke.php">
        <label for="name">Ime i prezime</label>
    <input type="text" name="Vaše ime i prezime" placeholder="Upišite svoje ime i prezime">
    <br>
    <br>
    <label for="mjesto">Mjesto stanovanja</label>
        <input type="text" name="mjesto" placeholder="Unesite svoje mjesto stanovanja">
    <br>
    <br>
    <label for="adresa">Adresa stanovanja</label>
        <input type="text" name="adresa" placeholder="Naziv ulice i kućni broj">
    <br>
    <br>
    <label for="komentar">Vaš komentar</label>
        <textarea name="komentar" maxlength="500">Napišite svoju napomenu</textarea>
    <br>
    <br>
<div class="radio-group">
    <label for="spol">Vaš spol</label>
        <input type="radio" name="spol" value="m" checked>muški
    <input type="radio" name="spol" value="f">ženski
    <input type="radio" name="spol" value="n">ne želim odgovoriti
</div>
<br>
<label for="programming_language">Odaberite program koji želite upisati</label>
    <select name="programming_language">
    <option value="linux">Linux priprema radne okoline</option>
    <option value="sql">Uvod u HTML	</option>
    <option value="php">Uvod u PHP</option>
    <option value="sql">Uvod u SQL</option>
    <option value="napredni php">Napredni PHP</option>
    <option value="laravel">Laravel</option>
</select>
<br>
<br>
    <input type="submit" value="Pošalji">

    </form>
</div>
    <br>
    <hr>
    </main>
<footer>
    <div class="footer-content">
        <img src="slike/ANDRIJA%20VIDI%C4%86.jpg" alt="Developer je Andrija Vidić" title="Developer je Andrija Vidić" width="180" height="280"> 
        <a href="mailto:andrija.vidic3@gmail.com">Mail:andrija.vidic3@gmail.com</a>
        <a href="tel:+38516165165">Tel: 0993033672</a>
        <p style="color: black;">Copyright 2025. New Breed Assist in digital</p>
    </div>
</footer>
</body>
</html>

