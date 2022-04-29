    <form action = "?page=login" method = "post">
      <fieldset>
        <legend>Bejelentkezés</legend>
        <br>
        <input type="text" name="username" placeholder="felhasználó" required><br><br>
        <input type="password" name="passwd" placeholder="jelszó" required><br><br>
        <input type="submit" name="login" value="Belépés">
        <br>&nbsp;
      </fieldset>
    </form>
    <h3>Ha még nem regisztrálta magát nálunk, itt kérjük tegye meg!</h2>
    <form action = "?page=reg" method = "post">
      <fieldset>
        <legend>Regisztráció</legend>
        <br>
        <input type="text" name="vezeteknev" placeholder="vezetéknév" required><br><br>
        <input type="text" name="keresztnev" placeholder="utónév" required><br><br>
        <input type="text" name="username" placeholder="felhasználói név" required><br><br>
        <input type="password" name="passwd" placeholder="jelszó" required><br><br>
        <input type="submit" name="reg" value="Regisztráció">
        <br>&nbsp;
      </fieldset>
    </form>
