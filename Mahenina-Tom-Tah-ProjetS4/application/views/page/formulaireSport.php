
<style>
    .container{
        width: 95%;
        margin-top: 10%;
    }
    .divInput{
        background-image: url(Teste.jpg);   
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

            <form action="<?php echo site_url('index.php/BackOffice/saveSport');?>" method="post" class ="form-horizontal col-xs-12 col-lg-6 col-sm-10 col-md-7 divInput">
                    <div class ="form-group ">
                        <legend >Insert Sport </legend >
                    </div>

                    <div class ="row">
                        <div class ="form-group">
                            <div class ="col-lg-1 col-xs-1"></div>
                            <label for="text" class ="col-lg-4 col-xs-4">Regime  </label >   
                                <div class ="col-lg-6 col-xs-6">
                                    <input name="regime" type ="number" class ="form-control" id="text">
                                </div>
                        </div>
                    </div>

                    <div class ="row">
                        <div class ="form-group">
                            <div class ="col-lg-1 col-xs-1"></div>
                            <label for="text" class ="col-lg-2 col-xs-2"> Nom</label >
                            <div class ="col-lg-6 col-xs-6"><input name="nom" type ="text" class ="form-control" id="text"></div>
                        </div>
                    </div>

                    <div class ="row">
                        <div class ="form-group ">
                            <div class ="col-lg-1 col-xs-1"></div>
                            <label for=" textarea " class ="col-lg-2 col-xs-2"> Duree </label>
                            <div class ="col-lg-6 col-xs-6"><input name="duree" type ="number" class ="form-control" id="textarea "></div>
                        </div>
                    </div>               
                <button class ="submit"> Envoyer </button >
            </form >
        <div class="col-lg-3 col-sm-1 col-md-2"></div>
</div>
