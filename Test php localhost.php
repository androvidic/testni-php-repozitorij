<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <style>
        .tekst-1 {
            color: darkcyan;
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-style: italic;            
        }

        .tekst-2 {
            color: lightcoral;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-style: italic;
            font-weight: bolder;
        }

        </style>
    <title>Primjer PHP i HTML-a</title>
</head>
<body>
    <div style="text-align: center;">
    <h1 class="tekst-1">
<?php
$time = date("H");

if ($time < 12) {
    $greeting = "Dobro jutro";
} elseif ($time < 18) {
    $greeting = "Dobar dan";
} else {
    $greeting = "Dobra večer";
}

echo $greeting . ", Dobrodošli na moju testnu PHP - HTML stranicu!";
?>
</h1>
    </div>
    <hr>
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
    
         <a class="tekst-1"href=www.edukos.instrukcije.hr>Klikom odi na Edukos web</a>

            <br>
            
            <br>
    <p class="tekst-2">Gornji link treba popravak, ne radi ispravno</p>
    <br>
    <input type="checkbox" > Izgleda li ti ova stranica dobro? 
    <br>
    <br>
    <p>Ispod se nalazi testna lista</p>
    
<ul>

<li>Prva stavka liste</li>
<ul><li>Podstavka liste</li></ul>
<li>Druga stavka liste</li>

</ul>

<hr>
<br>
<div style="text-align: center;">
<a href="mailto:andrija.vidic3@gmail.com">Za sve info pošaljite mail developeru</a>
<br>
<br>
<a href="tel:+38516165165">Za sva telefonska pitanja nazovite developera</a>.
<br>
<br>
<br>
<img src="file:\\\C:\Users\andri\Desktop\Testni projekt - Andrija\slikeANDRIJA VIDIĆ.jpg" alt="Developer je Andrija Vidić" title="Developer je Andrija Vidić" width="180" height="280"/> 
    </div>

    <div>

    <table> 
        <tr> 
            <th>Modul tečaja u Algebri</th>
             <th>Trajanje modula u satima</th>
        </tr> 
        <tr> <td>Linux - priprema radne okoline</td> 
             <td>15</td>
        </tr> 
        <tr> <td>Uvod u HTML</td>
             <td>20</td>
        </tr> 
        <tr> <td>Uvod u PHP</td>
             <td>20</td>     
        </tr> 
    </table> 

    
    </div>

</body>
</html>

