<?php
 
 $pdo=null;
 $dns=mysql:host="server"; dbname="ecole";
 
 $dbuser="root";
 $pw:"";
 
 try{
     $pdo=now PDO($dns,$dbuser,$pw);
     
 }
 
 catch(PDOExeption $e){
     print("Echec de la connexion : %s/n",$e->getMessage());
 }
return $pdo
?>