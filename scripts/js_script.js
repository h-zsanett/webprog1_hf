window.onload = function() 
{
    var kuld = document.getElementById("kuld");     // A DOM modellben megkeresi a "kuld" ID-jű elemet. Ez a Küld gomb.
    if (kuld)                                       // Ha a "kuld" ID-jű elem létezik
    {
        kuld.disabled = true;
    }
};

    // kliens oldali ellenőrzés
function ellenoriz()                                // láttuk, hogy a kapcsolat.html fájlban két helyen hívtuk meg.
{ 
    var rendben = true;                             // a metódus végén ebben adja vissza metódus értékét. alapérték = true
    var fokusz = null;                              // a fókusz beállítására. Lásd a metódus végén. alapérték=null
    
    var szoveg = document.getElementById("szoveg"); // A DOM-ban megkeresi a "szoveg" ID-jű elemet. Ez az Üzenet rész.
    if (szoveg)                                     // ha létezik az üzenet rész
    { 
        if (szoveg.value.length==0)                 // ha üresen hagytuk az üzenetet
        {
            rendben = false;
            szoveg.style.background = '#f99';       // pirosra színezi az üzenet mező hátterét
            fokusz = szoveg;                        // az üzenet mezőre helyezi a fókuszt
            
        } else 
        {
            szoveg.style.background = '#9f9';       // zöldre színezi az üzenet mező hátterét
        }
    }
    // A DOM-ban megkeresi az "email" ID-jű elemet. Ez az email beviteli mező.
    var email = document.getElementById("email");
    if (email) 
    { 
        var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (!checkPattern.test(email.value))        // ha nem helyes az email
        { 
            rendben = false;
            email.style.background = '#f99';
            fokusz = email;
        } else 
        {
            email.style.background = '#9f9';
        }
    }
    // A DOM-ban megkeresi a "nev" ID-jű elemet. Ez a Név beviteli mező.
    var nev = document.getElementById("nev");
    if (nev) 
    {
        if (nev.value.length<5)                     // Ha a név karaktereinek száma kisebb mint 5
        {
            rendben = false;
            nev.style.background = '#f99';
            fokusz = nev;
        } 
        else 
        {
            nev.style.background = '#9f9';
        }
    }
    
    if (fokusz)                                     // ha állítottuk a fókuszt az ellenőrzés közben
    { 
        fokusz.focus();                             // A fokusz nevű objektumra állítja a kókuszt:
    }
    
    // A DOM-ban megkeresi a "kuld" ID-jű elemet. Ez a Küld gomb.
    var kuld = document.getElementById("kuld");
    if (kuld)                                        // Ha minden adat jó volt, akkor rendben=true => !rendben=false => kuld.disabled = false
    {
        kuld.disabled = !rendben;
    }
    return rendben;
}