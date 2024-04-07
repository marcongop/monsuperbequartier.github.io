<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BIYEM-ASSI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Lieux.php">Lieux</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Histoire.php">Histoire</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" href="Moyensetcommerces.php">Commerces et moyens</a>
        </li>
        <li class= "nav-item">
            <a class="nav-link" href="Contact.php">Contacts</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inscription/Connexion
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Inscription.php">S'inscrire</a></li>
            <li><a class="dropdown-item" href="connexion.php">Se connecter</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
       
      </ul>
    </div>
  </div>
</nav>



<form id="contact-form" action="recup.php" method="post">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>

    <label for="prenom">Prénom:</label>
    <input type="text" id="First name" name="Prénom" placeholder="Entrez votre prénom" required>

    <label for="mail">email:</label>
    <input type="text" id="mail" name="mail" placeholder="Entrez votre mail" required>
    
    <label for="objet">Object:</label>
    <select id="object" name="objet">
        <option value="Demande d'informations">Demande d'informations</option>
        <option value="Demande de rendez-vous">Demande de rendez-vous</option>
        <option value="Divers">Divers</option>
    </select><br><br>
    
    <label for="messages">Message:</label>
    <textarea id="messages" name="messages" placeholder="entrez votre message.." style="height:200px" required></textarea>

    <input type="submit" value="Soumettre">
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<div class="trad" >
    <button style="background-color:aqua"><a href="contact2.php" style="color:black">Anglais</a></button>
</div>

</body>
</html>