<?php 

if($hiba) 
{
    exit("Az adatokat a kapott hiba miatt nem szúrjuk be az adatbázisba!");
}
else {                                                                  // ha minden jó, az adatokat adatbázisban rögzítjük
?>

        <?php if(isset($uzenet)) { ?>
            <h1><?= $uzenet ?></h1>
            <?php if($ujra) { ?>
                <a href="index.php?page=contact">Próbálja újra!</a>
            <?php } ?>
        <?php } ?>


<?php    
}

echo "Kapott értékek: ";
echo "<pre>";
var_dump($_POST);
echo "</pre>";

?>