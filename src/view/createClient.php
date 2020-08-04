<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>TEST | BANQUE DU PEUPLE | IN SYSTEM</title>
  <link rel="stylesheet" href="../../public/css/main.css">
  <link rel="stylesheet" href="../../public/css/client.css">
  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body onload="cache();">
  <!-- STARTING : CONTAINER GENERAL -->
  <div class="wrapper">
    <!-- STARTING : SIDEBAR -->
    <div class="sidebar">
      <h2><img class="sidebar_logo" src="../../public/img/BP-LOGO-SVG-WHITE.svg" alt="LOGO BANQUE DU PEUPLE" title="Vous d'Abord"></h2>
      <ul>
        <li><a href="../../index.php"><i class="fas fa-home"></i>Accueil</a></li>
        <li class="active"><a href="#"><i class="fas fa-user-tie"></i>Creer un Client</a></li>
        <li><a href="createAccount.php"><i class="fas fa-address-card"></i>Creer un Compte</a></li>
        <li><a href="#"><i class="fas fa-exchange-alt"></i>Faire un Virement</a></li>
      </ul>
      <div class="extra_option">
        <a href="javascript:return false;" title="Changer de Langue"><i class="fas fa-language"></i></a>
        <a href="javascript:return false;" title="Afficher Aide"><i class="fas fa-question-circle"></i></a>
        <a href="javascript:return false;" title="Se Déconnecter"><i class="fas fa-power-off"></i></a>
      </div>
    </div>
    <!-- ENDING : SIDEBAR -->

    <!-- STARTING : MAIN CONTENT -->
    <div class="main_content">
      <div class="header">
        <div class="next_nav">
          <!-- MENU HAUT - PARTIE GAUCHE -->
          <div class="display_header">
            <h2>BANQUE DU PEUPLE <span class="breadcrumb">>> Creation CLient</span></h2>
          </div>
          <!-- MENU HAUT - PARTIE DROITE -->
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-clock" aria-hidden="true"></i> <span class="">Time / Date</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-comments" aria-hidden="true"></i> <span class="">Support</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="">
                <i class="fas fa-user" aria-hidden="true"></i> <span class="">Account</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- // CONTENU CENTRAL :  -->
      <div class="info">
          <header>
          <hr />
           <h1>INFORMATION CLIENT </h1>
    </header>
      <nav>
           statut client
       <div class="first">
        <button id="nouveau" name="nouveau" value="1">Nouveau client</button>
        <button id="clientid" name="clientid" value="2">Client ID</button>
        <button id="clientemploy" name="clientemploy" value="3">client salarie</button>
        <button id="clientmoral" name="clientmoral" value="4">Client moral</button>
       </div>
      </nav>    
      <div class="introduction">
      <form  method="post" action="../controller/creerClientController.php" id="creerClientForm">
      <div id="nom">
       <label for="nomclient"> Nom client :</label><strong>*</strong>
       <input type="text" name="nomclient" id="nomclient" class="normale" />
       <span id="nom_manquant"></span>
      
       <label for="prenomclient"> Prenom client :</label><strong>*</strong>
       <input type="text" name="prenomclient" id="prenomclient"  class="normale"/>
       <span id="prenom_manquant"></span><br /><br />

       <label for="adresseclient">adresse client :</label><strong>*</strong>
       <input type="text" name="adresseclient" id="adresseclient"  class="normale"/>
       <span id="adresse_manquant"></span>

       <label for="emailclient"> Email client :</label>
       <input type="text" name="emailclient" id="emailclient"  class="normale"/> 
       <span id="email_manquant"></span><br /><br />

       <label for="phoneclient"> Numero telephone :</label><strong>*</strong>
       <input type="tel" name="phoneclient" id="phoneclient"  class="normale"/>
       <span id="phone_manquant"></span>

       <label for="professionclient"> Profession :</label>
       <input type="tex" name="professionclient" id="professionclient" class="normale"/>
       <span id="profession_manquant"></span><br /><br />

       <label  for="numident"> CNI(n° d'identité) :</label><strong>*</strong>
       <input type="text" name="numident" id="numident"  class="normale"/>
       <span id ="cni_manquant"></span>

       <label for="datenais"> Date de naissance :</label><strong>*</strong>
       <input type="date" name="datenais" id="datenais" class="normale" />
       <span id="date_manquant"></span>

       <label for="salaireclient"> Salaire client :</label><strong>*</strong>
       <input type="text" name="salaireclient" id="salaireclient" class="normale" />
       <span id="sal_manquant"></span></div>
       
       
      <div id="second">
       <label for="idcli"> Entrer le n° CNI : </label>
       <input type="search" name="idcli" id="idcli" class="normale" />
       <span id="idcli_manquant"></span></div>

      <div id="four">
        <label for="moral"> Nom  :</label><strong>*</strong>
        <input type="text" name="moral" id="moral"  class="normale" value="" />
        <span id="moral_manquant"></span>

        <label for="raismoral"> Raison social :</label><strong>*</strong>
        <input tupe="text" name="raismoral" id="raismoral"  class="normale" value="" />
        <span id="rais_manquant"></span><br /><br />

        <label for="telemoral"> Telephone  :</label><strong>*</strong>
        <input type="text" name="telemoral" id="telemoral"  class="normale" value=""/>
        <span id="tel_manquant"></span>
       
        <label for="adresemoral"> Adresse  :</label><strong>*</strong>
        <input type="text" name="adresemoral" id="adresemoral"  class="normale" value="" />
        <span id="adres_manquant"></span><br /><br />

        <label for="ninea"> NINEA  :</label><strong>*</strong>
        <input type="text" name="ninea" id="ninea"  class="normale" value=""/>
        <span id="ninea_manquant"></span> 

        <label for="emailmoral"> Email  :</label><strong>*</strong>
        <input type="text" name="emailmoral" id="emailmoral"  class="normale" value="" />
        <span id="ema_manquant"></span></div><br /><br />

        <input type="hidden" id="clientChoisi" name="clientChoisi" value="">
        <input type="text" name="creerClientSubmit" value="FORM SUBMITTED" hidden />
        <input type="submit" id="envoyer" value="Enregistrer" class="envoie"  />
       </form>
        <p> Les champs avec <strong>*</strong> sont obligatoire</p>
      </div>
      </div>
      <!-- FIN CONTENU CENTRAL -->
    </div>
    <!-- ENDING MAIN CONTENT -->
  </div>
  <!-- ENDING CONTAINER GENERAL -->
      
    <!-- Main JS -->
    <script src="../../public/js/global.js"></script>
    <script src="../../public/js/client.js"></script>
</body>

</html>