<?php 
        $server ='localhost';
        $user = 'babs';
        $password ='abm';
try {
        
         $bdd = new PDO("mysql:host=$server;dbname=abm_boutique",$user,$password);
       echo "connexion reussie";
}
        catch (PDOException $e){
                echo "echec de connexion .$e->getMessage()";    
        }
?>