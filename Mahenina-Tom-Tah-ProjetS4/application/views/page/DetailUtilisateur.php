<h4>Etape (2/3) </h4>
<form action="<?php echo site_url('index.php/testeC/saveDetail');?>"  method="post">
    <?php foreach($id as $user) ?>
    <h3>Utilisateur n° <?php echo($user['id']); ?></h3>
    
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/bootstrap.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/bootstrap.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/font-awesome.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/elegant-icons.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/owl.carousel.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/slicknav.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/style.css"); ?>" type="text/css">
    <title>Accueil</title>
</head>
<body>

<style>
    .container{
        width: 90%;
        margin-top: 10%;
        
    }
    body{
        background-color: azure;
    }
    .icon{text-align: center;}
    .icon i:hover{transform: scale(1.5);}
    .login{
        border-radius: 8%;
        background-color: white;
    }
    input :focus {
        box-shadow: 2px 2px 2px 2px;
    }
    #validerBut{
        width: 100px;
        height: 35px;
        font-size: 10px;
        margin-left: 35%;
    }

</style>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 login">
            <legend><h2 class="text-center">Veuillez remplir</h2></legend>
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <div class="signin__form__text">
                        <div class="signin__form__signup__social icon">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
                    </div> 
                        <form action="<?php echo site_url('index.php/BackOffice/saveDetailRegime');?>" method="post">
                           <div class="row">
                                <input class="col-md-9 col-md-offset-1" type="number" name="taille" placeholder="taille">
                           </div> <br>
                            <div class="row">
                                <input class="col-md-9 col-md-offset-1" type="number" name="poids" placeholder="poids">
                            </div> <br>
                            <input type="hidden" value="<?php echo($user['id']); ?>" name="idUser">
                            

                            <button id="validerBut"  type="submit" class="site-btn">Valider</button>
                        </form>
                </div>
        </div>
    </div>
</div>
    
</body>
</html>
