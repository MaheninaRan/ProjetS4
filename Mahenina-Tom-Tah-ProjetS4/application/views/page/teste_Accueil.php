    <!-- Categories Section Begin -->
    <style>
        .regime{
            border: 1px solid;
            border-radius: 5px;
            box-shadow: 2px 2px 2px 2px;
        }
        .b{
            text-align: left;
        }
    </style>
    <section class="categories spad">
        <div class="container">
           <h3>Bienvenue <?php echo( $pers['pers']['nom']); ?> </h3>

            <h2>Ces regimes sont faites pour vous : </h2> <br><br>
            <?php foreach($regimeMety as $d): ?>                
            <div class="col-md-3 col-md-offset-1 regime">
                <h4 class="text-center"><?php echo( $d['nom']); ?></h4> <br>
                <dl class="dl-horizontal"> 
                   <p> <b>Petit dejeuner : </b> <?php echo( $d['dejeuner']); ?> </p>
                   <p> <b>Repas : </b> <?php echo( $d['repas']); ?> </p>
                   <p> <b>Dinner : </b> <?php echo( $d['dinner']); ?> </p>
                   <p> <b>Prix unitaire : </b> <?php echo( $d['prix']); ?> </p>
                   <p> <b>Prix traitement : </b> refaveo </p>
                   <p> <b>Duree : </b> refaveo </p>
                        <button style="margin-left: 30%;">Achetter</button>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Categories Section End -->