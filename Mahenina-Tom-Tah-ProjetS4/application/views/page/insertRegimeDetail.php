    <?php foreach($id as $user) ?>
    <h1><?php echo($user['id']); ?></h1>
  
    <div class="col-lg-4 col-sm-1 col-md-3"></div>
    <form action="<?php echo site_url('index.php/BackOffice/saveDetailRegime');?>" method="post" class ="form-horizontal col-xs-12 col-lg-6 col-sm-10 col-md-7 divInput">
                    <div class ="form-group ">
                        <legend >Insert Detail </legend >
                    </div>
                    <div class ="row">
                        <div class ="form-group">
                            <div class ="col-lg-1 col-xs-1"></div>
                            <label for="text" class ="col-lg-2 col-xs-2"> Petit dejeneur</label >
                            <div class ="col-lg-6 col-xs-6"><input type="text" name="dejeuner" placeholder="petit dejeneur"></div>
                        </div>
                    </div>

                    <div class ="row">
                        <div class ="form-group">
                            <div class ="col-lg-1 col-xs-1"></div>
                            <label for="text" class ="col-lg-2 col-xs-2"> Repas</label >
                            <div class ="col-lg-6 col-xs-6"><input type="text" name="repas" placeholder="repas"></div>
                        </div>
                    </div>

                    <div class ="row">
                        <div class ="form-group ">
                            <div class ="col-lg-1 col-xs-1"></div>
                            <label for=" textarea " class ="col-lg-2 col-xs-2"> Dinner </label>
                            <div class ="col-lg-6 col-xs-6">  <input type="text" name="dinner" placeholder="dinner"></div>
                        </div>
                    </div>    
                    <input type="hidden" value="<?php echo($user['id']);?>" name="idRegime">           
                <button class ="submit"> Envoyer </button >
            </form >
