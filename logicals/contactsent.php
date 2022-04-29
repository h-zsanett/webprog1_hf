<?php
/*  A php-s tesztelés fut le először  */
$hiba = false;

if(!isset($_POST['nev']) || strlen($_POST['nev']) < 5)
{
    $hiba = true;
    $uzenet.="<strong>Hibás név:</strong> ".@$_POST['nev'];
    //exit("Hibás név: ".@$_POST['nev']);
}

$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';  // Itt is ellennőrzi az email-t reguláris kifejezéssel
if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
{
    $hiba = true;
    $uzenet.="<strong>Hibás email:</strong> ".$_POST['email'];
    //exit("Hibás email: ".$_POST['email']);
}

if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))                 // Ha nem volt Üzenet szövegmező, vagy üres volt az adata
{
    $hiba = true;
    $uzenet.="<strong>Hibás szöveg:</strong> ".$_POST['szoveg'];
    //exit("Hibás szöveg: ".$_POST['szoveg']);
}

if(isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['szoveg']) && (!$hiba)) // plusz feltétel, hogy ha hibamentes a php tesztelés is
{
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_username, $db_passwd, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query($db_query_string);

        $ujra = "false";

        // Létezik már a felhasználói név?
        if(isset($_SESSION['login'])) 
        { 
            $sqlSelect = "select id from users where username = :username";
            $sth = $dbh->prepare($sqlSelect);
            $sth->execute(array(':username' => $_SESSION['login']));
            if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                $uzenet = "Létező felhasználó!";
                $felhasznaloi_nev = $_SESSION['login'];
            }
            else $felhasznaloi_nev = "Vendég";
        }
        else $felhasznaloi_nev = "Vendég";

        // az értékeket az adatbázisba beírjuk
            $sqlInsert = "insert into messages(id, cimzett, usernev, email, uzenet)
                          values(0, :cimzett, :usernev, :email,  :uzenet)";
            $stmt = $dbh->prepare($sqlInsert); 
            $stmt->execute(array(':cimzett' => $_POST['nev'], ':usernev' => $felhasznaloi_nev,
                                 ':email' => $_POST['email'], ':uzenet' => $_POST['szoveg'])); 
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "Az üzenet adatbázisba írása sikeres.";
                $ujra = false;                     
            }
            else {
                $uzenet = "Az üzenet adatbázisba írása sikertelen.";
                $ujra = true;
            }
    }
    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
        $ujra = true;
    }      
}
else {
    header("Location: .");
}
?>