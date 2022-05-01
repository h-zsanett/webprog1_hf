    <form id="reg_login_form" action = "?page=loggedin" method = "post">
      <fieldset class="reg_login">
        <legend>Bejelentkezési adatok:</legend>
        <input class="reg_login_input" type="text" name="username" placeholder="felhasználó" required autofocus><br>
        <input class="reg_login_input" type="password" name="passwd" placeholder="jelszó" required><br>
        <input class="reg_login_input" type="submit" name="sitelogin" value="Belépés">
        <br>&nbsp;
      </fieldset>
    </form>
    <br>
    <h3>Ha még nem regisztrálta magát nálunk, itt kérjük tegye meg!</h2>
    <form action = "?page=reg" method = "post">
      <fieldset class="reg_login">
        <legend>Regisztráció</legend>
        <input class="reg_login_input" type="text" name="vezeteknev" placeholder="vezetéknév" required><br>
        <input class="reg_login_input" type="text" name="keresztnev" placeholder="utónév" required><br>
        <input class="reg_login_input" type="text" name="username" placeholder="felhasználói név" required><br>
        <input class="reg_login_input" type="password" name="passwd" placeholder="jelszó" required><br>
        <input class="reg_login_input" type="submit" name="reg" value="Regisztráció">
        <br>&nbsp;
      </fieldset>
    </form>
