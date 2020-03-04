<?php

include 'Portofoliu.php';
include 'Variabiles.php';
echo '<br><br><br>';

$form = <<<GATA
    <!DOCTYPE html>
    <html><body>
    <DIV ALIGN="center">   
    <form method='post' action='$_SERVER[PHP_SELF]'>
       Nume complet: <input type = 'text' name = 'nume' value = "$autofil"
                                title = 'Nume si prenume' 
                                required><br><br>
       Adresa de email: <input type='text' name='email' 
                                pattern= "(?i)([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}" 
                                title = 'caractere permise: "litere cifre @ - _ ."'                                    
                                required><br><br>
       Numar de telefon: <input type='text' id="mobil"	name="mobil" 
                                pattern="([0]\d\d\d)*([0]{1})([0-9]{9})" lenght="10"
                                title = 'de forma: "0..."'required><br><br>
       De unde ai auzit de noi:
               <select name="sursa"><br>
                    <option value="prieten">Prieten</option>
                    <option value="internet" selected = "selected" >Internet</option>
                    <option value="alte">Alte surse</option>
               </select> <br><br>
       Cu ce te putem ajuta?
               <textarea name="intrebari" rows="3" cols="50" maxlenght="150" >Textul tau aici</textarea><br><br>
                        <input type='submit' value='Trimite'>
                        <button type="reset">Reset</button><br>
    </form>
    </body>
    </html>

GATA;



#if(empty($_POST['nume'])&& empty($_POST['email'])&& empty($_POST['mobil'])&&empty($_POST['sursa'])&& empty($_POST['intrebari'])){
if(empty($_POST)){
    echo $form;}
      else{
    echo "<center>Multumim!<br>În cel mai scurt timp veti fi contactsat de unul dintre reprezentantii nostri";
}
?>
