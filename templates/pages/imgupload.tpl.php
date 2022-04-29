<?php
$uzenet = array();
if (isset($_POST['kuld'])) 
{
    foreach($_FILES as $fajl)                                                                   // Végig megy a feltöltött fájlokon. (max. 3)
    { 
        if ($fajl['error'] == 4);
            // Ha csak egy képet választunk ki, akkor a másik kettőnél: $fajl['error'] == 4
            // Ilyenkor nem csinál semmit (üres utasítás)
        elseif (!in_array($fajl['type'], $MEDIATIPUSOK))                                        // ha a fájl nem jpg vagy png
            $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];
        elseif ($fajl['error'] == 1 or $fajl['error'] == 2 or $fajl['size'] > $MAXMERET)
            $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
        else 
        {
            
            $ujfilenev_tmp = str_replace(' ', '_', strtolower(iconv("UTF-8", "ASCII//TRANSLIT", $fajl['name'])));
            $ujfilenev= preg_replace('/[^a-z.A-Z0-9_]+/', '', $ujfilenev_tmp);
            $vegsohely = $MAPPA.$ujfilenev;        
            if (file_exists($vegsohely))                                                        // Ha a fájl már létezik
                $uzenet[] = " Már létezik: " .$ujfilenev;
            else {
                move_uploaded_file($fajl['tmp_name'], $vegsohely);                              // fájl másolása
                $uzenet[] = ' Sikeres feltöltés: ' . $ujfilenev;
            }
        }
    }
}
?>

<h1>Feltöltés a galériába:</h1>
<?php
if (!empty($uzenet))
// ha már jártunk az oldalon
{ 
    echo '<ul>';
    foreach($uzenet as $u)
    echo "<li>$u</li>";
    echo "</ul>";
    echo "<a href='./?page='gallery'>";
}
?>
<form action="./" method="post" enctype="multipart/form-data" accept-charset="utf-8">
<input type="hidden" name="page" value="<?php echo $keres['fajl']?>">
<label>Első:
    <input type="file" name="elso" required>
</label>
<label>Második:
    <input type="file" name="masodik">
</label>
<label>Harmadik:
    <input type="file" name="harmadik">
</label>
    <input type="submit" name="kuld">
</form>