<?php
// Vérification si le formulaire est soumis
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $mail = $_POST['mail'];
    $objet=$_POST ['objet'];
    $messages=$_POST['messages'];
    
    // Connexion à la base de données 
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe_db = "";
    $base_de_donnees = "fiche_contact";
    
    $connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe_db, $base_de_donnees);
    
    // Vérification de la connexion
    if (!$connexion) {
        die("Échec de la connexion : " . mysqli_connect_error());
    }else{
        $insert= "INSERT INTO user ('nom', 'prenom','mail', 'objet','messages') VALUES ('$nom', '$prenom','$mail','$objet', '$messages') ";
        $execution=mysqli_query($connexion, $insert);
    } 


