<div class="container">
        <?php  for($i=0;$i<count($regime); $i++){ 
            $spp=$regime[$i]['id'];     
        ?>                
            <div class="col-md-3 col-md-offset-1 regime">
                <h4 class="text-center"><?php echo( $regime[$i]['nom']); ?></h4> <br>
                <dl class="dl-horizontal"> 
                   <p> <b>Petit dejeuner : </b> <?php echo( $regime[$i]['dejeuner']); ?> </p>
                   <p> <b>Repas : </b> <?php echo( $regime[$i]['repas']); ?> </p>
                   <p> <b>Dinner : </b> <?php echo( $regime[$i]['dinner']); ?> </p>
                   <p> <b>Prix unitaire : </b> <?php echo( $regime[$i]['prix']); ?> </p>
                        <button style="margin-left: 30%;"> <a href="<?php echo site_url("index.php/BackOffice/deleteRegime?idRegime=$spp");?>">Effacer</a> </button>
            </div>
        <?php } ?>
</div>
        