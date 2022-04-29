<?php
$ablakcim = array(
    'cim' => 'Nemzeti Fejlesztési Programiroda',
);

/*  A fejléchez tartozó beállítások  */

$header = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
    'xmeret' => 29,
    'ymeret' => 52,
    'keplink' => 'https://www.nfp.hu/',
	'cim' => 'Nemzeti Fejlesztési Programiroda',
	'motto' => ''
);

/*  A lábléchez tartozó beállítások  */
$footer = array(
    'copyright' => 'Copyright  Minden jog fenntartva! '.date("Y"),
    'ceg' => 'Nemzeti Fejlesztési Programiroda Nonprofit Kft.'
);

/*  A menühöz tartozó beállítások  */
$pages = array(
	'/'             =>  array('fajl' => 'mainpage',     'szoveg' => 'Címlap',       'menun' => array(1,1)),
	'gallery'       => array('fajl' => 'gallery',       'szoveg' => 'Galéria',      'menun' => array(1,1)),
    'imgupload'     => array('fajl' => 'imgupload',     'szoveg' => 'Képfeltöltés', 'menun' => array(0,1)),
    'contact'       => array('fajl' => 'contact',       'szoveg' => 'Kapcsolat',    'menun' => array(1,1)),
    'contactsent'   => array('fajl' => 'contactsent',   'szoveg' => 'Elküldve',     'menun' => array(0,0)),
	'messages'      => array('fajl' => 'messages',      'szoveg' => 'Üzenetek',     'menun' => array(1,1)),
	'companyinfo'   => array('fajl' => 'companyinfo',   'szoveg' => 'Céginfo',      'menun' => array(1,1)),
	'cikkek'        => array('fajl' => 'cikkek',        'szoveg' => 'Cikkek',       'menun' => array(1,1)),
    'sitelogin'     => array('fajl' => 'sitelogin',     'szoveg' => 'Belépés',      'menun' => array(1,0)),
    'logout'        => array('fajl' => 'logout',        'szoveg' => 'Kilépés',      'menun' => array(0,1)),
    'loggedin'      => array('fajl' => 'loggedin',      'szoveg' => '',             'menun' => array(0,0)),
    'reg'           => array('fajl' => 'reg',           'szoveg' => '',             'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404error', 'szoveg' => 'A keresett oldal nem található!');

/*  A képekhez tartozó beállítások  */
    $MAPPA = './images/';
    $TIPUSOK = array ('.jpg', '.png');
    $MEDIATIPUSOK = array('image/jpeg', 'image/png');
    $DATUMFORMA = "Y.m.d. H:i";
    $MAXMERET = 1024*1024;

/*  Az adatbázishoz tartozó beállítások  */
$db_host="localhost";
$db_database="pll9cs";
$db_username="pll9cs";
$db_passwd="p3eLel9cees";
$db_query_string = "SET NAMES utf8 COLLATE utf8_hungarian_ci";

?>