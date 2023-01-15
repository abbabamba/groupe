<?php
include_once 'connexion.php';
if(isset($_POST['valider'])){
if(empty($_POST['prenom']) && empty($_POST['nom']) && empty($_POST['produit']) && empty($_POST['prix']) && empty($_POST['telephone'])){
    $message='Veuilez remplir tous les champs';
}else{
    $requete= $bdd->prepare('INSERT INTO abm_boutique.client(prenom,nom,produit,prix,telephone) VALUES(:prenom, :nom ,:produit,:prix,:telephone)');
    $requete->bindvalue(':prenom',$_POST['prenom']);
    $requete->bindvalue(':nom',$_POST['nom']);
    $requete->bindvalue(':produit',$_POST['produit']);
    $requete->bindvalue(':prix',$_POST['prix']);
    $requete->bindvalue(':telephone',$_POST['telephone']);
    $requete->execute();
    if ($requete) {
       echo "votre commande est bien effectuer , nous vous appelerons bientot";
    }

}
}
?>