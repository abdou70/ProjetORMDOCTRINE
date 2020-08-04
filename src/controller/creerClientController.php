<?php
//create_client.php <name>
require_once "../../bootstrap.php";

if(isset($_POST['creerClientSubmit'])){
    extract($_POST);


    $client = new TableClient();
    $client->setNom($nomclient);
    $client->setPrenom($prenomclient);
    $client->setAdresse($adresseclient);
    $client->setEmail1($emailclient);
    $client->setNumerotelephone($phoneclient);
    $client->setProfession($professionclient);
    $client->setCni($numident);
    $client->setDatenaissance($datenais);
    $client->setSalaire($salaireclient);
    $client->setNomemployeur($moral);
    $client->setRaisonsocial($raismoral);
    $client->setTelephoneEmployeur($telemoral);
    $client->setAdresseEmployeur($adresemoral);
    $client->setNinea($ninea);
    $client->setEmail($emailmoral);
    
    $entityManager->persist($client);
    $entityManager->flush();
    echo "client cree avec succes avec " . $client->getId(). "\n";
    

}
//$client->setComptes();








?>