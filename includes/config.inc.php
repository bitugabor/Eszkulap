<?php
$ablakcim = array(
    'cim' => 'Mini honlap Kft.',
);

$fejlec = array(
    'kepforras' => 'logo_02.png',
    'kepalt' => 'logo',
	'cim' => '',
	'motto' => ''
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Mini honlap Kft.'
);

$oldalak = array(
	
	'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'hireink' => array('fajl' => 'hireink', 'szoveg' => 'Híreink', 'menun' => array(1,1)),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
    '/' => array('fajl' => 'cimlap', 'szoveg' => 'Kezdőlap', 'menun' => array(1,1)),
    
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);



$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>

<?php
    $MAPPA = './kepek/';
    $TIPUSOK = array ('.jpg', '.png');
    $MEDIATIPUSOK = array('image/jpeg', 'image/png');
    $DATUMFORMA = "Y.m.d. H:i";
    $MAXMERET = 500*1024;
?>