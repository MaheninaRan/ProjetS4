<style>
    a{
        color: white;
    }
</style>
<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                       <h2> <a href="<?php echo site_url('index.php/BackOffice/stat');?>">Stat</a> </h2>
                            <h2> <br> 
                            <ul class="col-md-6">
                                <li><a href="<?php echo site_url('index.php/BackOffice/formulaireRegime');?>">Insert regime</a> </li>
                                <li><a href="<?php echo site_url('index.php/BackOffice/effacer');?>">Effacer regime</a></li>
                                <li><a href="<?php echo site_url('index.php/BackOffice/modifierRegime');?>">Modifier regime</a></li>
                            </ul>
                            <ul class="col-md-6">
                                <li><a href="<?php echo site_url('index.php/BackOffice/formulaireSport');?>">Insert sport</a> </li>
                                <li><a href="<?php echo site_url('index.php/BackOffice/effacerSport');?>">Effacer sport</a></li>
                                <li><a href="<?php echo site_url('index.php/BackOffice/modifierSport');?>">Modifier sport </a></li>
                            </ul>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<h2 class="text-center"></h2>
<ul>
    <li><a href="<?php echo site_url('index.php/testeC/checklogin');?>">Stat</a></li>
    <li><a href="<?php echo site_url('index.php/testeC/checklogin');?>">Insert</a></li>
    <li><a href="<?php echo site_url('index.php/testeC/checklogin');?>">Effacer</a></li>
    <li><a href="<?php echo site_url('index.php/testeC/checklogin');?>">Modifier</a></li>
</ul>