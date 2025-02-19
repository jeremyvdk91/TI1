<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />

    <title><?=$title ?></title>
</head>
<body>
<div class="container">
    <header>
       
    <?php
include "inc/banniere.php";
    ?>
    </header>
    
    
    <nav><?php
include "inc/menu.php";
    ?></nav>
    
    <main>
    
    <h2 class="bienvenue">POUR NOUS CONTACTER</h2>

    <img src="img/contacts.jpg" alt="Contact" class="contact">
        <p class="cont"><strong>Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire,remplissez le formulaire ci-dessous</strong></p>
  
        <form action="..." method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required>

            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="commentaires">Commentaires :</label>
            <textarea id="commentaires" name="commentaires" rows="5" required></textarea>

            <button type="submit">Envoyer votre message</button>
        </form>
    </main>
    

</div>
</body>
</html>