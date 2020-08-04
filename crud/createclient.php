<?php


//create_client.php <name>
require_once "../...bootstrap.php";


$client = new TableClient();
$client->setNom("Fall");
$client->setPrenom("Mareme");
$client->setAdresse("Malika-plage");
$client->setEmail1("fallmena@gmail.com");
$client->setNumerotelephone("776780021");
$client->setProfession("chef-entreprise");
$client->setCni("2435199402387");
$client->setDatenaissance(date("Y-m-d",strtotime("1994-09-15")));
$client->setSalaire("2500000");
$client->setNomemployeur("SGBS");
$client->setRaisonsocial("SN-192");
$client->setTelephoneEmployeur("338672600");
$client->setAdresseEmployeur("Agence_keur_massar");
$client->setNinea("2015SABN-16");
$client->setEmail("sgbs@gmail.com");

$entityManager->persist($client);
$entityManager->flush();
echo "client cree avec succes avec " . $client->getId(). "\n";
//$client->setComptes();








?>