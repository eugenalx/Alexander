
<?php

include "Portofoliu.php";
session_abort();
include 'Variabiles.php';
echo '<br><br>';


$form = <<<GATA
    <html><body>
    <DIV ALIGN="center">
    <a href="Creare_cont.php">Daca nu ai cont click aici</a></p>   
    <form method='post' action='$_SERVER[PHP_SELF]'>
        Username: <input type='text' name='username'></p>
        Parola: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='password' name='password'></p>
                    <input type='submit' value='Login'>
                    <input type="checkbox" name="ales" value="da" />Keep me logged in<br></p>
    </form>
    </body>
    </html>
GATA;
echo $form; 

    if(isset($_POST['username']) && isset($_POST['password'])){
        $ad_useri = fopen(USERI,'r');
        rewind($ad_useri);
        $finduser = FALSE;
      while(!feof($ad_useri)){
        $line = fgets($ad_useri);
        $array = explode(";",$line);
        if(trim($array['1']) == $_POST['username'] && trim($array['2'])== $_POST['password']) {
            $finduser=TRUE;
            break;}}
      if($finduser){
            session_start();
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['name']=trim($array['0']);
            header('Location: Comenzi.php');
      }else{   
            echo "<h3>User inexistent sau parola invalida</h3>";
            fclose($ad_useri);
            #echo $form;
            }
            
        }

        ##var_dump($array);