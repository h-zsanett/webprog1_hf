
        <table>
        <tr class='messages_header'><td>Címzett</td><td>Címzett email</td><td>Küldő</td><td>Időpont</td><td>Üzenet</td></tr>
        <?php        
		foreach ($eredm as $sor) 
            print "<tr><td>".$sor[0]."</td><td>".$sor[1]."</td><td>".$sor[2]."</td><td>".$sor[3]."</td><td>".$sor[4]."</td></tr>";
        ?>
            </table>
