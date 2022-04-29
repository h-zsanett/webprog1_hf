<?php
// adatok összegyűjtése egy tömbbe:
// $kepek tömb: asszociatív tömb: kulcs-érték párokat tárolunk (lásd lentebb)
$kepek = array();
$olvaso = opendir($MAPPA);
while (($fajl = readdir($olvaso)) !== false) {
    if (is_file($MAPPA.$fajl)) {
    // almappákkal nem foglalkozunk, csak fájlokkal
    $vege = strtolower(substr($fajl, strlen($fajl)-4));
    if (in_array($vege, $TIPUSOK))
    // jpg és png fájlokkal foglalkozunk csak
    $kepek[$fajl] = filemtime($MAPPA.$fajl);

    }
}
closedir($olvaso);
?>
<div id="galeria">
    <h1>Galéria</h1>
    <div class="container" style="margin-top:20px">
        <div class="row">
        <?php
            arsort($kepek);

        foreach($kepek as $fajl => $datum)
        // végig megy a $kepek tömb elemein.
        // A kulcsot a $fajl változóba, az értéket a $datum változóba teszi
        {?>
            <div class="col-sm-4">
                <article class="blog-post content-item">
                <div class="images">
                <header><strong>Név:</strong> <?php echo $fajl; ?></header>
                    <a href="<?php echo $MAPPA.$fajl ?>"> 
                        <img src="<?php echo $MAPPA.$fajl ?>">
                    </a><br>
                    <p class="imagedate">Dátum: <?php echo date($DATUMFORMA, $datum); ?></p>
                </div>
                </article>
                <hr class="d-sm-none">
            </div>
        <?php
        }?>
        </div>
    </div>
</div>