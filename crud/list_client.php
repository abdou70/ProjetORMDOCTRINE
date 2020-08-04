<?php
require_once "../bootstrap.php";
$TableClientRepository = $entityManager->getRepository('TableClient');
$client = $TableClientRepository->findAll();

foreach($client as $clients){
    echo $clients->getPrenom()."<br/>";
   // echo $clients->getNom();


   // echo "<br/>".$clients->getcompte()[0]->getNumcompte();

}
//######################################################################

    /*  $cc=$entityManager->getRepository('TableClient')
                        ->findBy(array('prenom' => "abdou"));

                   foreach($cc as $c){
                 echo $c->getId();
        }
*/ 

?>