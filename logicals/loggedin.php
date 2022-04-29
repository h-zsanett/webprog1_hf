<?php
if(isset($_POST['username']) && isset($_POST['passwd'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=pll9cs', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Felhasználó keresése
        $sqlSelect = "select id, vezeteknev, keresztnev from users where username = :username and passwd = sha1(:passwd)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':username' => $_POST['username'], ':passwd' => $_POST['passwd']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $_SESSION['csn'] = $row['vezeteknev']; $_SESSION['un'] = $row['keresztnev']; $_SESSION['login'] = $_POST['username'];
        }
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
else {
    header("Location: .");
}
?>
