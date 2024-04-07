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
     
      </ul>
    </div>
  </div>
</nav>
<h2>Inscription</h2>


<form id="contact-form" action="recup.php" method="post">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>

    <label for="prenom">Prenom:</label>
    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom" required>

    <label for="mail">email:</label>
    <input type="text" id="mail" name="mail" placeholder="Entrez votre adresse Mail" required>
    
    
    <label for="mail">Mot de passe:</label>
    <input type="text" id="password" name="password" placeholder="Entrez un mot de passe" required>
    
    
    

    <input type="submit" value="Envoyer">
</form>


<div id="confirmation-message" class="confirmation-message">Votre inscription a été enrégistrée! Merci.</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class="trad" >
    <button style="background-color:aqua"><a href="inscription2.php" style="color:black">Anglais</a></button>
</div>

</body>
</html>
