<style>
body {
  background-image: url('./images/eszkulap_hatter01.jpg');
  
	background-repeat: no-repeat;
	background-size: cover;
    background-attachment: fixed;

</style>

<div class="cimlap_tomb">
    <h3 class="piros">ÖRÖKBE SZERETNÉK FOGADNI!</h3>
    <h3 class="kozep">Minden fontos információ az örökbefogadásról a Bővebben gombra kattintva jelenik meg.</h3>
    <h3 class="jobb">Bővebben...</h3>
</div>

<div class="cimlap_tomb">
    <h2 class="kozep">TISZTELT TÁMOGATÓINK!</h2><br><p class="p_kozep">Egyesületünk azon szerencsés szervezetek közé tartozhat, akik számára 2021. májusától megnyílt a telefonos adománygyűjtés lehetősége.<br>
    Az adományvonalon keresztül hívásonként, sms-enként 500,- Ft-tal támogatja az egyesület tevékenységét.<br>
    <img src="./images/adjukossze.png" alt="adjukossze kep" class="kepkozep" style="width:400px;">
Az adományvonalon keresztüli támogatási formát azon magyarországi előfizetők vehetik igénybe, akik az alábbi szolgáltatókkal állnak szerződéses kapcsolatban:</p>
<ul id="felsorolas">
  <li>Magyar Telekom Nyrt.</li>
  <li>Telenor Magyarország Zrt és</li>
  <li>Vodafone Magyarország Zrt.</li>
</ul>
<p class="p_bal_suru">Az Egyesület külön kérésre az adományokról adományigazolást állít ki, melyhez kérjük az alábbi adatokat szíveskedjenek megküldeni az eszkulap2016@gmail.com emailre: az adományozó neve, székhelye (lakcíme), adószám (cég esetén) és kérjük jelöljék, hogy melyik kampányunkhoz csatlakozott az adományával.</p>
<p class="p_bal">
Az aktuális támogatási célról az egyesület honlapján és Facebook profilján is tájékoztatást fogunk közzétenni.
<br>
2021. május hónap a Veterán Vitalitás kampányé.
<br>
Megtisztelő segítséget ezúton is megköszönjük:
</p>
<p class="p_jobb">Eszkuláp Egyesület</p>
</div>
<div class="cimlap_tomb">
<h3 class="kozep">
VÁLTOZÁSOK...</h3>
<p class="p_kozep_suru">
Előzetes bejelentkezéssel (nem minden nap és nem minden idősávban tudunk látogatókat fogadni) tudtok jönni sétáltatni. Védenceink nagyon igénylik a kinti sétákat, most már talán a jóidő is adott lesz hozzá. Azt kérjük, hogy öltözzetek "elkoszolhatóan", még mindig van, aki a féltett, hófehér cipőjében érkezik... Egy kutyára szánjatok legalább 30-60 percet, hogy valóban érdemi időt tölthessen tőlünk távol.<br><br>

Ahová jöhettek ➡️<br>
Mányi Menedék: 70/5257522<br>
Mányi Ebkert: 70/ 6290545<br>
Tárnok, kutyapanzió: 70/2263420<br>
Budapest, 17. kerület, kutyapanzió: eszkulap2016@gmail.com<br>
Pócsmegyer-Surány, kutyapanzió: eszkulap2016@gmail.com<br>
Szeretettel várunk titeket!
</p>
<img src="./images/szabalyok.jpeg" alt="szabalyok kep" id="szabalyok_kep" style="width:300px;">
</div>
<br><br><p> ESZKULÁP Állatmenhely eredeti honlapja: <a href="http://www.eszkulap.hu">www.eszkulap.hu</a><br><br></p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <embed src="sample.mp4" autostart="false" height="300" width="500" />
<?php
    // Alkalmazás logika:
    include('./includes/config.inc.php');
    
    // adatok összegyűjtése:    
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false)
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK))
                $kepek[$fajl] = filemtime($MAPPA.$fajl);            
        }
    closedir($olvaso);
    ?>
