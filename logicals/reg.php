<?php
if(isset($_POST['username']) && isset($_POST['passwd']) && isset($_POST['vezeteknev']) && isset($_POST['keresztnev'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Létezik már a felhasználói név?
        $sqlSelect = "select id from users where login = :login";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':login' => $_POST['username']));
        if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $uzenet = "A felhasználói név már foglalt!";
            $ujra = "true";
        }
        else {
            // Ha nem létezik, akkor regisztráljuk
            $sqlInsert = "insert into users(id, vezeteknev, keresztnev, login, passwd)
                          values(0, :vezeteknev, :keresztnev, :login, :passwd)";
            $stmt = $dbh->prepare($sqlInsert); 
            $stmt->execute(array(':vezeteknev' => $_POST['vezeteknev'], ':keresztnev' => $_POST['keresztnev'],
                                 ':login' => $_POST['username'], ':passwd' => sha1($_POST['passwd']))); 
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";                     
                $ujra = false;
            }
            else {
                $uzenet = "A regisztráció nem sikerült.";
                $ujra = true;
            }
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