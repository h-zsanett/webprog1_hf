<?php
try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_username, $db_passwd, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query($db_query_string);
		
        $utasitas = "Select  cimzett, email, usernev, idopont, uzenet FROM messages ORDER BY idopont DESC";
		$eredm = $dbh->query($utasitas);

	}
	catch (PDOException $e) {
		echo "Hiba: ".$e->getMessage();
	} 
?>    