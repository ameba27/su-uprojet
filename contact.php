<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="./font/css/all.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-display-container bodi">
    
    <div class="w3-text-blue w3-animate-top">
        
       <h2><marquee> N'hésitez pas à nous envoyer des messages ou à nous contacter </marquee></h2>
    </div>
    <div class="header">
        <ul class="menu">
            <li><a href="index.php" class="w3-bar-item w3-button w3-blue"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="https://www.eformation-inrs.fr/formation/8" class="w3-bar-item w3-button" >Formation</a></li>
            <li><a href="http://kapitalis.com/" class="w3-bar-item w3-button">Informations</a></li>
            <li><a href="" class="w3-bar-item w3-button">Contact</a></li>

        </ul>
    <ul class="inscription">
        <li><a href="formulaire.php" class="w3-animate-right w3-bar-item w3-button ">Inscription</a></li>
        <li><a href="login.php" class="w3-animate-right w3-bar-item w3-button">Connexion</a></li>
    </ul>
    </div><br>
    <h2 ><legend><strong class="w3-display-center" style="margin-left: 500px">CONTACTS:</strong></legend></h2>
    <div class="w3-cell-row">
         <div class="w3-container w3-cell">
              <h4><legend><strong style="text-decoration: underline; color: blue">Amadou Ba:</strong></legend></h4>
              <h4><i class="fas fa-envelope"> : amadou.ba2@uvs.edu.sn</i></h4>
              <h4><i class="fas fa-phone"> : +221 77 183 85 32</i></h4>
              <br><br>
              <h4><legend><strong style="text-decoration: underline; color: blue">Souleymane Mbaye:</strong></legend></h4>
              <h4><i class="fas fa-envelope"> : julesreal87@gmail.com</i></h4>
              <h4><i class="fas fa-phone"> : +221 78 121 64 55</i></h4>
         </div>
         <div class="w3-container W3-cell-right" style="margin-bottom: 100px">
             <form action="message.php" method="POST" >
                     <input type="text" name="nom" placeholder="Nom" class=" w3-border  w3-margin" style="width: 400px; height: 40px"><br>
                     <input type="text" name="prenom" placeholder="Prénom" class=" w3-border  w3-margin" style="width: 400px; height: 40px"><br>
                     <input type="email" name="email" placeholder="Email" class=" w3-border  w3-margin" style="width: 400px; height: 40px"><br>
                     <textarea name="message" id="" cols="30" rows="10" placeholder="Entrer votre message" class="w3-margin" style="width: 500px"></textarea><br>
                     <input type="submit" value="Envoyer" class="w3-btn w3-blue" style="margin-left: 100px; width: 300px">
             </form>
         </div>
    </div>
    <div class="w3-display-bottommiddle w3-blue w3-center w3-padding " style="width: 100%; height: 30px margin-top: 100px">
       &copy Souleymane & Amadou BootCamp 2021
    </div>
</body>
</html>