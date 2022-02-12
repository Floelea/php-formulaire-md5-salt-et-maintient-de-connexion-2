<?php


require_once "logique.php";


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand bg-danger text-white p-3" href="http://localhost/PhP/theOuCafe">Thé ou café</a>
        
        
        <form action="" method="post" class="d-flex">
        
        <input type="password" name="password" id="" placeholder="Mot de passe">
        <button type="submit" class="btn btn-success">GO</button>
        </form>
              
              <ul class="d-flex list-unstyled ">
                <li>
                  <a href="http://localhost/PhP/theOuCafe/?boisson=the" class="btn btn-warning">Thé</a>
                </li>
                <li>
                  <a href="http://localhost/PhP/theOuCafe/?boisson=cafe" class="btn btn-warning ms-2">Café</a>
                </li>
                <?php  if($compteVerifie){?>
                
                              <li>
                          <a href='http://localhost/PhP/theOuCafe/?boisson=nectar' class="btn btn-warning ms-2">Nectar</a>
                              </li>
                
                <form method="post">
                          <button type="submit" name="deconnexion"  class="btn btn-danger ms-5">Deconnexion</button>
                          </form>
                
                <?php }  ?>
              </ul>
      </div>



    </nav>

    <div class="d-flex justify-content-center mt-5">
      <?=  $pageContent ?>
    </div>
  </body>
</html>
