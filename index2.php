<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <a class="nav-link" href="Histoire.php">Histoiry</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" href="Moyensetcommerces.php">Shops and means</a>
        </li>
        <li class= "nav-item">
            <a class="nav-link" href="Contact.php">Contacts</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inscription/Connection
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



<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/hopital.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>BIYEM-ASSI</h5>
        <p>.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images/rond_point.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>BIYEM-ASSI </h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images/lycée2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>BIYEM-ASSI</h5>
        <p>BIYEM-ASSI .</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="container">
    <div class="row">
        <div class="col">
            <p>
                Welcome to the Website of the BIYEM-ASSI neighborhood!!
                    You have come to the right place to discover this neighborhoodin all beauty and brillance!.It is 
                located in the heart of the city of Yaoundé, more precisely in the 6th arrondissement..
            </p>
        </div>
            
        <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15923.443943531005!2d11.47824306182169!3d3.840004647583708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcfcfba91be3b%3A0x3eb618bb8fc3a303!2sBiyem-Assi%2C%20Yaound%C3%A9%2C%20Cameroun!5e0!3m2!1sfr!2sfr!4v1712227177397!5m2!1sfr!2sfr" width="650" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


        <div class="trad" >
    <button style="background-color:aqua"><a href="index.php" style="color:black">Français</a></button>
</div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>