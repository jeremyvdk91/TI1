<?php

if(isset($_GET['p'])){

    // création d'un switch qui va vérifier la variable get p
    switch($_GET['p']){
        case "accueil":
            $title ="Accueil";
            include "../templates/accueil.php";
            break;
        case "geo":
            $title="Geographie";
            include "../templates/geographie.php";
            break;
         case "hist":
            $title="Histoire";
            include "../templates/histoire.php";
            break;
        case "cult":
            $title="Culture";
            include "../templates/culture.php";
            break;
        case "gal":
            $title="Galerie";
            include "../templates/galerie.php";
            break;
        case "form":
            $title="Contact";
            include "../templates/contact.php";
            break;
        case "link":
            $title="Liens";
            include "../templates/liens.php";
            break;

  
        // variable p pas dans le switch
        default:
            include "../templates/page-404.php";
       
    }

// sinon nous sommes sur l'accueil    
}else{
    // Appel de la vue
    include "../templates/accueil.php";
}