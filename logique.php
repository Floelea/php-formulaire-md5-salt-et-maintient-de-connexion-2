<?php 
session_start();

// unset($_SESSION['estConnecte']);




if( isset($_GET['boisson']) && ($_GET['boisson'] == 'cafe')){
    require_once "cafe.php";
   }else if ( isset($_GET['boisson']) && ($_GET['boisson'] == 'the')){
       require_once "the.php";
   }else if ( isset($_GET['boisson']) && ($_GET['boisson'] == 'nectar')){
        require_once "boissonSecrete.php";
   }else require_once "question.php";




   $motDePasse = 'elea';
   $compteVerifie = false;
   
   
          if(isset($_POST['deconnexion'])){
              unset($_SESSION['estConnecte']);
              $compteVerifie = false;
              
              
          };
          
          
             if(isset($_SESSION['estConnecte']) && $_SESSION['estConnecte']){
                 $compteVerifie = true;
             }
             

   


             
      if (isset($_POST["password"]) && ($_POST["password"]) == $motDePasse){
          
          $compteVerifie = true;
          $_SESSION['estConnecte']=true;
       };
   
       
   






?>