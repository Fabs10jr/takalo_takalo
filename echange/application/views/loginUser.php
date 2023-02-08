<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="<?php echo css_loader("bootstrap.min") ?>" rel="stylesheet">
    
    <!-- Style -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="<?php echo css_loader("style1") ?>">

    <title>Takalo-takalo</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Login to <strong>Takalo-takalo</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="<?php echo site_url("Connexion/loginUser")?>" method="post">
                <div class="form-group first">
                  <label for="username">Login</label>
                  <input type="text" class="form-control" id="username" name="mail" value="admin">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="mdp" value="echange">
                </div>
                
                

                <input type="submit" value="Log In" class="btn btn-block btn-primary">

              </form>


            </div>
            <a href="<?php echo site_url() . 'Connexion/pageInscription'; ?>" >S'inscrire ?</a>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>