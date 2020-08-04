<?php
require_once "../bootstrap.php";

$CompteTableRepossitory = $entityManager->getRepository('CompteTable');
$compte = $CompteTableRepossitory->findAll();

foreach($compte as $comptes){
    echo $comptes->getNumerocompte()."<br/>";
}




?>