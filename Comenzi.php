<?php

#session_start();
include 'Portofoliu.php';
include 'Variabiles.php';



$comanda = <<<REZV
    <html>
    <head>
    <meta charset="utf-8">
		<title>Comenzi online</title> 
                <style>
                table, th, td {
                border: 1px solid black;
                font-family: "Times new roman";
                font-size: 20px;
                width: 1200px;
                line-height: 15px;
                text-align center;
                border-color: inherit;
                vertical-align: central;}
                </style>
   </head> 
   <body>
    <DIV ALIGN = "center">
        <form method = 'post' action = '$_SERVER[PHP_SELF]'>
               
            <table>
            <tr>
                            <th><h3>Denumire produs</h3></th>
                <th></th>
                <th><h3>Pret unitar</h3></th>
                <th><h3>Numar bucati</h3></th>
            </tr>
            <tr>
                <th align = "center">Merdenea cu brânză,<br><br>cu ciuperci<br><br>sau carne</th>                
                <th><img src = "images/Merdenea1.jpg" alt = "Merdenea"></th>
                <th>4 lei/ buc</th>    
                <th><input type='text' name='merdenea' size = "5" pattern="([0-9]{1,2})"></th>
            </tr>
            <tr>
                <th align = "center">Placintă dobrogeană<br><br>cu brânză</th>                
                <th><img src = "images/Dobrogeana.jpg" alt = "Dobrogeana"></th>
                <th>35 lei/ kg</th>    
                <th><input type='text' name='dobrogeana' size = "5" pattern="([0-9]{1,2})"></th>
          </tr>
          <tr>
                <th align = "center">Plăcintă de casă <br><br>cu brânză, mere <br><br>sau dovleac</th>                
                <th><img src = "images/Placintaasortata1.jpg" alt = "Placinta de casa"></th>
                <th>35 lei/kg</th>    
                <th><input type='text' name='placinta' size = "5" pattern="([0-9]{1,2})"></th>
          </tr>
        </table>
        <label><h3>Selectați metoda de expediere: </h3></label>
            <input type = "radio" name="plata" value="Curier" title = '20 lei prin Cargus curier' checked/>Curier rapid
            <input type = "radio" name="plata" value="Ridicare" title = 'Gratuit de la punctul nostru de lucru'/>Ridicare personală<br><br>
                			<input type="submit" value="Trimite comanda">
		</form>
        
    </body></html>
REZV;

if(!isset($_SESSION['username'])){
    echo '<br><center><b>Trebuie sa fii autentificat pentru a lansa o comanda</b></center><br><br>';
    echo '<center><b><i><a href = "Login.php">Click aici pentru login</a></i></b></center>';
}
    else{
    echo $comanda;
    }

    if (! empty($_POST["dobrogeana"])) {           // testeaza daca \$_POST are date;
        if (array_key_exists($_POST["dobrogeana"], $preturi)){
                                
        $pretcomanda = $preturi[$_POST['dobrogeana']] * $_POST["dobrogeana"];
        echo "<header>Draga $autofil, ai comandat $_POST[dobrogeana] kg de Dobrogene</header>                        
            <br>Total de plata: $pretcomanda
            <br>*****************<br>";
        #if($_POST["plata"]=='rate'){
         #   echo "Ai optat pentru plata in $_POST[nrrate] rate<br>
          #      Valoarea unei rate este:".round($rata);}        
            
    }}
    

