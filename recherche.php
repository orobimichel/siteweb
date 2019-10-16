<?php
require_once('include/bdd.php');
$erreur=null;

if(isset($_POST["search"])){ 
    $reqserch=$_POST["search"];
   if(!empty($reqserch)){ 
$req=$bdd->query("SELECT * FROM produits WHERE libprod LIKE '%".$reqserch."%'");
if($req->rowCount()==0){
   
    $erreur="Aucun Resultat ne Correspond à ".$reqserch." relancer la recherche ";
    
}else{
    $req=$bdd->query("SELECT * FROM produits WHERE libprod LIKE '%".$reqserch."%'");
   
    
 } ?> 

 <?php 
 if($erreur){
     ?>
        <p style="text-align:center; color:blue; font-size:1.8em;" > <?php echo $erreur;?> </p>
     <?php
 }
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>site</title>
    <link rel="stylesheet" href="https://stackpath.botstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/style.css">
   
</head>
<body>


    <div class="container">
       <h1 class="clas" title="conception & réalisation:orobi">BIENVENUE SUR NOTRE SITE</h1>
      
       <a href="ajouter.php" class="btn btn-primary">AJOUTER DES ARTICLES</a> 
       <a href="index.php" class="btn btn-primary">RETOUR</a>
       <div class="container-fluid">
            <table class="table">
                <thead style="background-color:black; color:white;">
                    <tr>
                        <th>N°</th>
                        <th>Librod</th>
                        <th>PrixUnit</th>
                        <th>QteCmde</th>
                        <th>MontantHT</th>
                        <th>Date</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <?php
                while($req2=$req->fetch()){?>
<tbody style="background-color:blue;color:white;">
    <tr>
        <td><?php echo $req2['id'];?></td>
        <td><?php echo $req2['libprod'];?></td>
        <td><?php echo $req2['prixunit'];?></td>
        <td><?php echo $req2['qtecmde'];?></td>
        <td><?php echo $req2['prixunit']*$req2['qtecmde'];?></td>
        <td><?php echo $req2['date'];?></td>
        <td><a href="editer.php?id=<?php echo $req2['id'];?>" onclick="return confirm('voulez vous modifier')">
        <span class="glyphicon glyphicon-pencil" style="color:white;"></span></a></td>
        <td><a href="supprimer.php?id=<?php echo $req2['id'];?>" onclick="return confirm('voulez vous supprimer')">
        <span class="glyphicon glyphicon-trash" style="color:white;"></span></a></td>
    </tr>
</tbody>
            <?php } ?>

 


            </table>
       </div>
    </div>
    <a href=""><p class="copyr">copyright-oct-2019 contact:orobimiche@gmail.com</p></a>
   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</body>
</html>    
         <?php
    }else {
        header('location:index.php');
}
}
?>


   