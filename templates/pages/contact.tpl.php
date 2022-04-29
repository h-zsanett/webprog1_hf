
<script type="text/javascript" src="scripts/js_script.js"></script>
<form class="contactform" name="kapcsolat" action="?page=contactsent" onsubmit="return ellenoriz();" method="post">
<div>
<label>
    <p class="contaxttext">Címzett neve (minimum 5 karakter):</p> &nbsp;&nbsp;<input class="inputfield" type="text" id="nev" name="nev" size="20" maxlength="40">
</label>
<br>
<label>
    <p class="contaxttext">Címzett e-mail címe (kötelező): </p>&nbsp;&nbsp;<input  class="inputfield" type="text" id="email" name="email" size="30" maxlength="40"> 
</label>
<br>
<label>
    <p class="contaxttext">Üzenet (kötelező): </p>&nbsp;&nbsp;<textarea  class="inputfield" id="szoveg" name="szoveg" cols="40" rows="10"></textarea>  
</label>
<br>
<input id="kuld" type="submit" value="Küld">&nbsp;&nbsp;
<button onclick="ellenoriz();" type="button">Ellenőrzés</button>
</div>
</form>