<?php  
include('connex.php');  

if(isset($_POST)){
    if(isset($_POST['nom']) AND !empty($_POST['nom'])
    AND isset($_POST['prenom']) AND !empty($_POST['prenom'])
    AND isset($_POST['sexe']) AND !empty($_POST['sexe']) AND isset($_POST['date_de_naissance']) AND !empty($_POST['date_de_naissance']) AND isset($_POST['lieu_de_naissance']) AND !empty($_POST['lieu_de_naissance']) AND isset($_POST['adresse']) AND !empty($_POST['adresse']) AND isset($_POST['telephone']) AND !empty($_POST['telephone']) AND isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND isset($_POST['email']) AND !empty($_POST['email']) AND isset($_POST['passwords']) AND !empty($_POST['passwords'])){
        $id = strip_tags($_GET['id']);
        $nom = strip_tags($_POST['nom']);
        $prenom = strip_tags($_POST['prenom']);
        $sexe = strip_tags($_POST['sexe']);
        $date_de_naissance = strip_tags($_POST['date_de_naissance']);
        $lieu_de_naissance = strip_tags($_POST['lieu_de_naissance']);
        $adresse = strip_tags($_POST['adresse']);
        $telephone = strip_tags($_POST['telephone']);
        $pseudo = strip_tags($_POST['pseudo']);
        $email = strip_tags($_POST['email']);
        $password = strip_tags(md5($_POST['passwords']));


        $sql = "UPDATE `clients` SET `nom`=:nom, `prenom`=:prenom, `sexe`=:sexe, `date_de_naissance`=:date_de_naissance, `lieu_de_naissance`=:lieu_de_naissance, `adresse`=:adresse, `telephone`=:telephone, `pseudo`=:pseudo, `email`=:email, `passwords`=:passwords  WHERE `id`=:id;";

        $query = $lien->prepare($sql);

        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':sexe', $sexe, PDO::PARAM_STR);
        $query->bindValue(':date_de_naissance', $date_de_naissance, PDO::PARAM_STR);
        $query->bindValue(':lieu_de_naissance', $lieu_de_naissance, PDO::PARAM_STR);
        $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
        $query->bindValue(':telephone', $telephone, PDO::PARAM_INT);
        $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':passwords', md5($password), PDO::PARAM_STR);
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        $query->execute();

        header('Location: afficheTab.php');
    }
}

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "SELECT * FROM `clients` WHERE `id`=:id;";

    $query = $lien->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch();
}    
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="./font/css/all.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <style>
       span {
           color: red;
       }
       ul li {
           list-style: none;
       }
       input {
           width: 80%;
           height: 40px;
       }

   </style>
</head>
<body>
    <h1>Modifier un client </h1>
    <div class="w3-display-container">
        <img src="image.jpeg" alt=""  style="width: 100%; height: 1000px">
          <div class="w3-display-topmiddle w3-hover-white w3-margin w3-opacity-min" style="width: 50%; height: 95%;">
              <form action="" method="POST" class=" w3-container  w3-padding">
                  <ul>
                      <li classe="w3-text-teal">Nom<span>*</span></li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="text" name="nom" id="nom" value="<?= $result['nom'] ?>" required>
                      <br><br>
                      <li classe="w3-text-teal">Prénom<span>*</span></li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="text" name="prenom" id="prenom" value="<?= $result['prenom'] ?>" required>
                      <br><br>
                      <label classe="w3-text-teal">Sexe<span>*</span></label><br>
                      <select class="w3-section" style="width:80%; height: 40px" name="sexe" id="sexe" value="<?= $result['sexe'] ?>" required>
                    
                          <option value=""disabled selected>Faites votre choix</option>
                          <option value="Homme">Homme</option>
                          <option value="Femme">Femme</option>
                      </select>
                      <br><br>
                      <li classe="w3-text-teal">Date de naissance <span>*</span></li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="date" name="date_de_naissance" id="date_de_naissance" value="<?= $result['date_de_naissance'] ?>" required>
                      <br><br>
                      <li classe="w3-text-teal">Lieu de naissance</li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="text" name="lieu_de_naissance" id="lieu_de_naissance" value="<?= $result['lieu_de_naissance'] ?>">
                      <br><br>
                      <li classe="w3-text-teal">Adresse</li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="text" name="adresse" id="adresse" value="<?= $result['adresse'] ?>">
                      <br><br>
                      <li classe="w3-text-teal">Téléphone <span>*</span></li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="tel" name="telephone" id="telephone" value="<?= $result['telephone'] ?>" required>
                      <br><br>
                      <li classe="w3-text-teal">Pseudo</li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="text" name="pseudo" id="pseudo" value="<?= $result['pseudo'] ?>">
                      <br><br>
                      <li classe="w3-text-teal">Email <span>*</span></li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="email" name="email" id="email" value="<?= $result['email'] ?>" required>
                      <br><br>
                      <li classe="w3-text-teal">Mot de passe <span>*</span></li>
                      <input class=" w3-border w3-light-grey w3-hover-light-blue" type="password" name="passwords" id="passwords" value="<?= $result['passwords'] ?>" required><br>
                      <br>
                      <input type="submit" name="ajout" value="Modifier" class="w3-btn w3-blue"/>
                      
                  </ul>
              </form>
         </div>
   </div>
</body>
</html>