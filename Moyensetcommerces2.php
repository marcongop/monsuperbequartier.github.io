<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Moyensetcommerces.css">
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
          <a class="nav-link active" aria-current="page" href="index2.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Lieux.php">Places</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Histoire.php">History</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" href="Moyensetcommerces.php">Shops and means</a>
        </li>
        <li class= "nav-item">
            <a class="nav-link" href="Contact.php">Contacts</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inscription/Connexion
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="inscription2.php">Register</a></li>
            <li><a class="dropdown-item" href="connexion2.php">Login</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
       
      </ul>
    </div>
  </div>
</nav>


<h3 style="margin:40px">Commerces retrouvés à BIYEM-ASSI</h3>

<div class="row" >
    <div class="card" style="width: 20em;" >
        <img src="Images/marché_rond.jpg" class="card-img-top" alt="..." style="width: 100%;">
         <div class="card-body" >
          <p class="card-text">rond-point express market</p>
        </div>
    </div>
    
    <div class="card" style="width: 20em;" >
        <img src="Images/accacia.jpg" class="card-img-top" alt="..." style="width: 100%;">
         <div class="card-body" >
         <p class="card-text"> accacia market</p>
    </div>
</div>



<h3 style="margin:40px;">Means of transport  in BIYEM-ASSI</h3>



<div class="row" display="flex;">
    <div class="card" style="width: 20em;" >
        <img src="Images/taxis.jpg" class="card-img-top" alt="..." style="width: 100%;">
         <div class="card-body" >
          <p class="card-text">taxis</p>
        </div>
    </div>
    
    <div class="card" style="width: 20em;" >
        <img src="Images/moto.jpg" class="card-img-top" alt="..." style="width: 100%;">
         <div class="card-body" >
         <p class="card-text"> motorcycles</p>
    </div>
</div>




<div class="trad" >
    <button style="background-color:aqua"><a href="Moyensetcommerces.php" style="color:black">Français</a></button>
</div>