<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.botstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/style.css">
    <title>site</title>
    

    </style>
</head>
<body>
    <?php
         require_once('include/bdd.php');
         if(isset($_POST["submit"])){
             $mtht=$_POST["prixunit"]*$_POST["qtecmde"];
        
         $req=$bdd->prepare("INSERT INTO produits (libprod,prixunit,qtecmde,date,mtht) VALUES(:libprod,:prixunit,:qtecmde,:date,:mtht)");
         $req2=$req->execute(array(':libprod'=>$_POST["libprod"],':prixunit'=>$_POST["prixunit"],':qtecmde'=>$_POST["qtecmde"],':date'=>$_POST["date"],':mtht'=>$mtht));
         if($req2){
             header('location:index.php');
         }else{
            echo 'veuillez contacter un administrateur';
        }   
        }
    ?>
    <div class="container">
        <a href="index.php" class="btn btn-primary">RETOUR</a>     
    </div>
      <div id="login">                   
    <div class="container ">
        <div id="" class="">
            
                    <form id="login-form" class="form" action="" method="post" >

                         <h1>AJOUTER VOS ARTICLES</h1>
                         <hr>
                        <div class="form-group">
                            
                            <input type="text" name="libprod" id="libprod" class="form-control btn" placeholder="libelleprod ou désignation" required>
                        </div><br>
                        <div class="form-group">
                            
                            <input type="number" name="prixunit" id="prixunit" class="form-control btn" placeholder="prix unitaire" required>
                        </div><br>
                        <div class="form-group">
                            
                            <input type="number" name="qtecmde" id="qtecmde" class="form-control btn" placeholder="quantite commandée" required>
                        </div><br>
                        <div class="form-group">
                            
                            <input type="date" name="date" id="date" class="form-control btn" placeholder="Date" required>
                        </div><br><br>
                        <div class="form-group">
                            
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="envoyer">
                        </div>
                        
                    </form>
                  </div>
    </div>
</div>
<a href=""><p class="copyr">copyright-oct-2019 contact:orobimiche@gmail.com</p></a>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>