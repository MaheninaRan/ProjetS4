<div class="container">
        <?php  for($i=0;$i<count($sport); $i++){ 
            $spp=$sport[$i]['id'];            
        ?>                
            <div class="col-md-3 col-md-offset-1 regime">
                <dl class="dl-horizontal"> 
                   <p> <b>Regime n° : </b> <?php echo( $sport[$i]['idRegime']); ?> </p>
                   <p> <b>Sport : </b> <?php echo( $sport[$i]['nom']); ?> </p>
                   <p> <b>Duree : </b> <?php echo( $sport[$i]['duree']); ?> </p>
                        <button style="margin-left: 30%;"> <a href="<?php echo site_url("index.php/BackOffice/deleteSport?idSport=$spp");?>">Effacer</a> </button>
            </div>
        <?php } ?>
</div>
        