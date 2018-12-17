<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>REALBOOK</title>
        <link rel="stylesheet" type="text/css" href="profil_realbook.css">
        
<?php require "connexion.php";
    $appliBD = new Connexion();
?>

</head>


<body>
<?php include 'header.php' ?>

   
<form>
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" placeholder="Veuillez entrer le nom"> <br>

    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" id="prenom" placeholder="Veuillez entrer le prénom"> <br>

    <label for="dateDeNaissance">Date de naissance:</label>
    <input type="date" name="dateDeNaissance" id="dateDeNaissance" placeholder="Veuillez entrer la date de naissance"> <br>

    <label for="Statut">Statut:</label>
    <select id="Statut">
        <option value="">--Choisir votre statut--</option>
        <option value="En couple">En couple</option>
        <option value="Célibataire">Célibataire</option>
        <option value="Non défini">Non défini</option>
    </select><br>

    Type de musique:<br>
    <input type="checkbox" name="Classique" id="classique" value="Classique"> 
    <label for="classique">Classique</label><br>
    
    <input type="checkbox" name="rock" id="rock" value="Rock"> 
    <label for="rock">Rock</label><br>
    <input type="checkbox" name="Rap" id="rap" value="Rap"> 
    <label for="rap">Rap</label><br>
    <input type="checkbox" name="Oriental" id="oriental" value="Oriental"> 
    <label for="oriental">Oriental</label><br>
    <input type="checkbox" name="Country" id="country" value="Country"> 
    <label for="country">Country</label><br>
    <input type="checkbox" name="Autre" id="autre" value="Autre"> 
    <label for="autre">Autre</label><br>


        Hobbies:<br>

        <input type="checkbox" name="Sport" id="sport" value="Sport"> 
        <label for="sport">Sport</label><br>
        <input type="checkbox" name="Lecture" id="lecture" value="Lecture"> 
        <label for="lecture">Lecture</label><br>
        <input type="checkbox" name="Voyage" id="Voyage" value="Voyage"> 
        <label for="Voyage">Voyage</label><br>
        <input type="checkbox" name="Cinéma" id="Cinéma" value="Cinéma"> 
        <label for="Cinéma">Cinéma</label><br>
        <input type="checkbox" name="Informatique" id="Informatique" value="Informatique"> 
        <label for="Informatique">Informatique</label><br>
        <input type="checkbox" name="Cuisine" id="Cuisine" value="Cuisine"> 
        <label for="Cuisine">Cuisine</label><br>
       
      
      <label>Relation:</label><br>


             <input type="checkbox" name="Phillipe Carmeno" value="Phillipe Carmeno"> Phillipe Carmeno<select id="Relation">
             <option value="">--Quel est le lien--</option>
             <option value="Ami(e)">Ami(e)</option>
             <option value="Famille">Famille</option>
             <option value="Collègue">Collègue</option>
         </select><br>


        <input type="checkbox" name="Agnes Billard" value="Agnes Billard"> Agnes Billard<select id="Relation">
             <option value="">--Quel est le lien--</option>
             <option value="Ami(e)">Ami(e)</option>
             <option value="Famille">Famille</option>
             <option value="Collègue">Collègue</option>
         </select><br>

         <input type="checkbox" name="Andreia Da Costa" value="Andreia Da Costa"> Andreia Da Costa<select id="Relation">
             <option value="">--Quel est le lien--</option>
             <option value="Ami(e)">Ami(e)</option>
             <option value="Famille">Famille</option>
             <option value="Collègue">Collègue</option>
         </select><br>

        
         

    <input type="submit" value="Enregistré">



</form>     






</body>
</html>
