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
  
    <h2 class="bienvenue">GALERIE</h2>
    
    <div class="gal">
    <img src="img\480px_Alexander_Nevsky_Cathedral_in_Sofia.jpg" alt="img1" class="img1">
    <img src="img\480px_Gallery_for_Foreign_Art_TodorBozhinov.jpg" alt="img2" class="img2">
    <img src="img\480px_IvanVazov_National_Theatre.jpg" alt="img3" class="img3">
    <img src="img\480px_StGeorgeRotundaSofia.jpg" alt="img4" class="img4">
    <img src="img\480px_Sveta_Sofia_Church_in_Sofia.jpg" alt="img5" class="img5">
    <img src="img\480px_Tzar_Liberator_Monument_Sofia.jpg" alt="img6" class="img6">
    <img src="img\1280px_Alexander_Nevsky_Cathedral_in_Sofia.jpg" alt="img7" class="img7">
    <img src="img\1280px_Gallery_for_Foreign_Art_TodorBozhinov.jpg" alt="img8" class="img8">
    <img src="img\1280px_IvanVazov_National_Theatre.jpg" alt="img9" class="img9">
    <img src="img\1280px_StGeorgeRotundaSofia.jpg" alt="img10" class="img10">
    <img src="img\1280px_Sveta_Sofia_Church_in_Sofia.jpg" alt="img11" class="img11">
    <img src="img\1280px_Tzar_Liberator_Monument_Sofia.jpg" alt="img12" class="img12">
    </div>
       
    </main>
    

</div>
</body>
</html>