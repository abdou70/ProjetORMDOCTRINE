<?php
//create_client.php <name>
require_once "../../bootstrap.php";

if(isset($_POST['creerCompteSubmit'])){
    extract($_POST);


    $client = new CompteTable();
    $client->setNumerocompte($numagence);
    $client->setNumeroagence($numcompte);
    $client->setClerib($rib);
    $client->setDateouverture($date);
    $client->setMontantinitial($montant0);
    $client->setFraisouverture($frais);
    $client->setDatebloquage($date1);
    $client->setDatedebloquage($date2);
    $client->setAgios($agios);
    
    
    $entityManager->persist($client);
    $entityManager->flush();
    echo "compte cree avec succes avec " . $client->getId(). "\n";
    

}
//$client->setComptes();


?>