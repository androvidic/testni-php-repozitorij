<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Primjer PHP i HTML-a</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
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

echo $greeting . ", Vaš New Breed Asisst in digital!";
?>
</h1>
<nav>
<ul><a href="#">Početna stranica</a>
<a href="#">O nama</a>
<a href="#">Naše usluge</a>
<a href="#">Reference</a>
<a href="#">Kontatk</a>
</ul>
</nav>
</header>
    <hr>
    <main>
    <div style="text-align: center;">
        <p class="tekst-2">
            <?php
             // Ovo je PHP kod unutar HTML-a
                echo "Danas je " . date("d.m.Y.") . " i vrijeme je " . date("H:i:s");

                    echo "<br>";
                        echo "<br>";
                            echo "<u>Lijep je dan</u>, iskoristi ga <u>najbolje</u> što možeš";?></p>
    <br>
    </div>
    <hr>
    <div style="text-align: center;">
    
         <a href="https://www.edukos-instrukcije.hr" target="_blank">Klikom odi na Edukos web</a>

            <br>
            
            <br>
    <p>Gornji link radi ispravno</p>
    <br>
    <input type="checkbox" > Izgleda li ti ova stranica dobro?</input>
    <br>
    <br>
    <p>Ispod se nalazi testna lista</p>
    
<ul>

<li>Prva stavka liste</li>
<ul><li>Podstavka liste</li></ul>
<li>Druga stavka liste</li>

</ul>
</div>
<hr>
<br>
<br>
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
    <br>
    <br>
<p>Za prijavu na tečaj, molimo Vas unesite Vaše podatke u prijavni obrazac:</p>
<br>
    <form method="post" action="spremiPodatke.php" style="text-align: center;">
    <input type="text" name="Vaše ime i prezime" placeholder="Upišite svoje ime i prezime">
    <br>
    <br>
    <input type="text" name="mjesto" placeholder="Unesite svoje mjesto stanovanja">
    <br>
    <br>
    <input type="text" name="adresa" placeholder="Naziv ulice i kućni broj">
    <br>
    <br>
    <textarea name="komentar" maxlength="500" >Napišite svoju napomenu</textarea>
    <br>
    <br>
    <input type="radio" name="spol" value="m" checked>muški
<input type="radio" name="spol" value="f">ženski
<input type="radio" name="spol" value="n">ne želim odgovoriti
<br>
<p>Odaberite program koji želite upisati</p>
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
    <br>
    <hr>
    </main>
<footer>
<img src="slike/ANDRIJA%20VIDI%C4%86.jpg" alt="Developer je Andrija Vidić" title="Developer je Andrija Vidić" width="180" height="280"/> 
<p>Developer: Andrija Vidić</p>
    </div>
    <div>
<a href="mailto:andrija.vidic3@gmail.com">andrija.vidic3@gmail.com</a>
<br>
<br>
<a href="tel:+38516165165">0993033672</a>
</footer>

</body>
</html>

