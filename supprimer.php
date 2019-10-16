<?php

require_once('include/bdd.php');

$req=$bdd->query("DELETE  FROM produits WHERE id='".$_GET["id"]."'");

if($req){
    header('location:index.php');
}else{
    echo "veuillez contacter un administrateur";
}
