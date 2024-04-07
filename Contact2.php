<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact2.css">
    <title>Page contact en Anglais</title>
</head>
<body>
   

    <div class="navbar">
        <div class="logo">
            <h4>BIYEM-ASSI</h4>
        </div>
        <div class="fenetres">
            <ul class="liens">
                <li><a href="Accueil2.html">Home</a></li>
                <li><a href="Lieux2.html">Places</a></li>
                <li><a href="moyensetcommerces2.html">Means and shops</a></li>
                <li><a href="Histoire2.html">History</a></li>
            </ul>
            
        </div>

    </div>
    <h3>Contact us!</h3>

<form id="contact-form" action="index.php" method="post">
    <label for="nom">Name:</label>
    <input type="text" id="nom" name="nom" placeholder="Enter your name" required>

    <label for="prenom">first name:</label>
    <input type="text" id="prenom" name="prenom" placeholder="Enter your first name" required>

    <label for="mail">email:</label>
    <input type="text" id="mail" name="mail" placeholder="Enter your email" required>
    
    <label for="objet">Object:</label>
    <select id="objet" name="objet">
        <option value="Demande d'informations">Information request</option>
        <option value="Demande de rendez-vous">Request an appointment</option>
        <option value="Divers">Various</option>
    </select><br><br>
    
    <label for="messages">Message:</label>
    <textarea id="messages" name="messages" placeholder="Enter your message.." style="height:200px" required></textarea>

    <input type="submit" value="Submit">
</form>

<div id="confirmation-message" class="confirmation-message">Your message has been sent.</div>


<div class="trad">
    <button><a href="Contact.html">Français</a></button>
</div>
<footer>
    <b>
    <i>2024 ©BIYEM-ASSI NGOPNDJEPENDAjosephmarc </i>
    </b>
</footer>

<script>
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        // Empêcher le comportement par défaut du formulaire (rechargement de la page)
        event.preventDefault();
        
        // Afficher le message de confirmation
        document.getElementById("confirmation-message").style.display = "block";
        
        // Réinitialiser le formulaire après 3 secondes (3000 millisecondes)
        setTimeout(function() {
            document.getElementById("contact-form").reset();
            document.getElementById("confirmation-message").style.display = "none";
        }, 3000);
    });
</script>

    
</body>
</html>

