<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <title>Input</title>
</head>
<body>
<style>
    .container{
        width: 95%;
        margin-top: 10%;
    }
    .divInput{
        background-image: url(./asset/images/Teste.jpg);   
        text-align: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-position-x: right;
        background-position-y: bottom;
    }   
    [class*="col"]{ 
        margin-bottom: 20px ; 
    }
    img{width : 100%;}
</style>
<div class="container">
<div class="row"> 
    <div class="col-lg-3 col-sm-1 col-md-3"></div>
            <form action="<?php echo site_url('index.php/BackOffice/checklogin');?>" methode="post"  class ="form-horizontal col-xs-6 col-lg-6 col-sm-6 col-md-6 divInput">
                    <div class ="row">
                        <div class ="form-group ">
                            <div class ="col-lg-1 col-xs-1"></div>
                            <label for=" textarea " class ="col-lg-2 col-xs-2"> Email </label>
                            <div class ="col-lg-6 col-xs-6"><input type ="email" name="email" placeholder="Mahenina@gmail.com" class ="form-control" id="textarea"></div>
                        </div>
                    </div>
                    <div class ="row">
                        <div class ="form-group ">
                            <div class ="col-lg-1 col-xs-1"></div>
                            <label for=" textarea " class ="col-lg-2 col-xs-2"> Mot de passe </label>
                            <div class ="col-lg-6 col-xs-6"><input type ="text" name="password" placeholder="Mahenina" class ="form-control" id="idMdp"></div>
                        </div>
                    </div>               
                <button class ="submit"> Envoyer </button >
            </form >
    <div class="col-lg-3 col-sm-1 col-md-2"></div>
</div>
</div>
<script src="assets/js/jquery.min.js"></script>
      <script>
        $(function(){
          $("form").on("submit",function(){
              var InputMdp =document.getElementById("idMdp");
              if($(InputMdp).val().length<6 ){
                  $("div.alert").show("slow").delay(4000).hide("slow") ;
                  return false;
              }
            });
        });
</script>
</body>
</html>