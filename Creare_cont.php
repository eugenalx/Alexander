<?php


include 'Portofoliu.php';
include 'Variabiles.php';
echo '<br><br><br>';

$form = <<<GATA
    <html><body>
    <DIV ALIGN="center">
    <a href="Login.php">Daca ai cont click aici</a></p>   
    <form method='post' action='$_SERVER[PHP_SELF]'>
        &emsp;&emsp; Nume si prenume: &emsp;  &emsp; &emsp; 
        Username: &emsp; &emsp;&emsp;&emsp; &emsp; 
        Parola: &emsp;&emsp;&emsp;&emsp; &emsp; <br>
            <input type = 'text' name = 'nume' pattern="([a-zA-Z]+[\s\,]{1,})([a-zA-Z]+[\s\,]{0,1})*" 
                                title = 'Nume prenume'
                                required>
            <input type='text' name='username' pattern="[^0-9_]\w+" 
                                title = 'contine numai litere, cifre sau underscore - prima este litera'
                                required>
            <input type='password' name='password' pattern = "(?=.*\W)(?=.*[a-z]).{4,}"  
                                title = 'minim 4 caractere, minim unul nonalfanumeric'
                                required><br><br>
                    <input type='submit' value='Sign up'><br>
    </form>
    </body>
    </html>
GATA;
echo $form;



if(isset($_POST['nume']) && isset($_POST['username']) && isset($_POST['password'])){
        $ad_useri = @fopen(USERI,'a+');
        rewind($ad_useri);
        $finduser = FALSE;
  while(!feof($ad_useri)){
        $line = fgets($ad_useri);
        $array = explode(";",$line);
        if(trim($array['1']) == $_POST['username']){      
        $finduser=TRUE;
        break;
        }
    }
    if($finduser){
        echo "$_POST[username] este deja luat!<br>Incercati altul!";  }
     else {
        fputs($ad_useri, ucwords("\n".$_POST["nume"])."; ".$_POST["username"]."; ".$_POST["password"]."\r");
        fclose($ad_useri);
        echo "Bine ai venit $_POST[nume]! <br> <a href='Comenzi.php'>Please login!</a>";
        #header('location: homepage.php');
        }
    
}
