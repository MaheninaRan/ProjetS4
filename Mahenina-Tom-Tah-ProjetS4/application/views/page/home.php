<style>
.regime{
    border: 1px solid blue;
    border-radius: 5px;
    box-shadow: 0px 0px 2px 2px;
}
.b{
    text-align: left;
}
.regime b{
    color: #5668ff;
}
    </style>
<body>
    <!--::header part start::-->
    
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Rester en bonne santer</h5>
                            <h1>C'est avoir un repas regulier et avoir une bonne activiter physique</h1>
                            <div class="banner_btn">
                                <div class="banner_btn_iner">
                                    <a href="food_menu.html" class="btn_2">Menu<img src="img/icon/left_1.svg" alt=""></a>
                                </div>
                                <div class="banner_btn_iner">
                                    <a href="#" class="btn_2">Activiter<img src="img/icon/left_1.svg" alt=""></a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>

    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Votre profil</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <br> <br> <br>
    <section> 
        <div class="row">
            <div class="col-md-4">
                <H2>Personne :</H2> <br>
                <h3> <b>Nom : </b> <?php echo $pers['pers']['nom']; ?> </h3> <br>
                <h3> <b>Naissance : </b> <?php echo $pers['pers']['naissance']; ?> </h3> <br>
                <h3> <b>Genre : </b> <?php echo $pers['pers']['genre']; ?> </h3> <br>
                <h3> <b>Taille : </b> <?php echo $pers['pers']['taille']; ?> </h3> <br>
                <h3> <b>Poids : </b> <?php echo $pers['pers']['poids']; ?> </h3> <br>
                <h3> <b>Objectif : </b> <?php echo $pers['pers']['but']; ?> </h3> <br>
            </div>
        </div> <br><br> <br>
    </section>
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Activiter</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
    <section class="about_part">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-4 col-lg-5 offset-lg-1">
                    <div class="about_img">
                        <img src="../../img/about.png" alt="">
                    </div>
                </div>
                <div class="col-sm-8 col-lg-4">
                    <div class="about_text">
                        <h5>Notre priorite</h5>
                        <h2 style="color: #2638ff;">Votre santée avant tout</h2>
                        <h4>Rester en bonne santée nous nous occupons de tout </h4>
                        <p>Nous somme ici pour vous proposez des repas regulier bien equilibrer et un programme physique à votre hauteur</p>
                        <a href="#" class="btn_3">Programme<img src="img/icon/left_2.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2 class="text-center" style="color:#2638ff">Regime proposer pour vous : </h2> <br>
        <div class="container">
        <?php foreach($regimeMety as $d): ?>                
            <div class="col-md-3 col-md-offset-1 regime">
                <h4 class="text-center"><?php echo( $d['nom']); ?></h4> <br>
                <dl class="dl-horizontal"> 
                   <p> <b>Petit dejeuner : </b> <?php echo( $d['dejeuner']); ?> </p>
                   <p> <b>Repas : </b> <?php echo( $d['repas']); ?> </p>
                   <p> <b>Dinner : </b> <?php echo( $d['dinner']); ?> </p>
                   <p> <b>Sport : </b> </b> <?php echo( $d['sport']); ?> </p>
                   <p> <b>Duree : </b> <?php echo( $d['dureesport']); ?></p>
                   <p> <b>Prix unitaire : </b> <?php echo( $d['prix']); ?> </p>
                        <button style="margin-left: 38%;">Achetter</button>
            </div>
            <?php endforeach; ?>
        </div> <br>
    </section>
  
<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Apropos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
    <section class="about_part about_bg">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-4 col-lg-5 offset-lg-1">
                    <div class="about_img">
                        <img style="width:100%" src="../../img/images (1).jfif" alt="">
                    </div>
                </div>
                <div class="col-sm-8 col-lg-4">
                    <div class="about_text">
                        <h5>Notre Histoire </h5>
                        <h2 style="color: #2638ff;">Une societe pour changer votre quotidient</h2>
                        <h4>Offrant une satisfaction de chaqun</h4>
                        <p>Une societe crée en Juillet 2023 par 3 personnes. Vue le situation et les besoins quotidient nous avons crée ceci pour améliorer
                            et avoir un joue de vivre, et être a l'aise a soit même.
                        </p>
                        <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->
    <!--::review_part start::-->
    <section class="review_part gray_bg section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Testimonials</p>
                        <h2>Customers Feedback</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <div class="client_review_part owl-carousel">
                        <div class="client_review_single media">
                            <div class="client_img align-self-center">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <div class="client_review_text media-body">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                                <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                            </div>
                        </div>
                        <div class="client_review_single media">
                            <div class="client_img align-self-center">
                                <img src="../../../img/client/client_1.png " alt="">
                            </div>
                            <div class="client_review_text media-body">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                                <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                            </div>
                        </div>
                        <div class="client_review_single media">
                            <div class="client_img align-self-center">
                                <img src="../../img/client/client_1.png" alt="">
                            </div>
                            <div class="client_review_text media-body">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                                <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::review_part end::-->
    <!--::chefs_part start::-->
    <section class="chefs_part blog_item_section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Membre</p>
                        <h2>Les concepteur</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="../../img/team/chefs_1.png" alt="">
                        </div>
                        <div class="single_blog_text text-center">
                            <h3>Rado Mahenina</h3>
                            <p>Concepteur</p>
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="../../img/team/chefs_2.png" alt="">
                        </div>
                        <div class="single_blog_text text-center">
                            <h3>Asina Tommy</h3>
                            <p>Concepteur</p>
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="../../img/team/chefs_3.png" alt="">
                        </div>
                        <div class="single_blog_text text-center">
                            <h3>Tahiry Ny Aina</h3>
                            <p>Concepteur</p>
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 d-none d-sm-block d-lg-none">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/team/chefs_1.png" alt="">
                        </div>
                        <div class="single_blog_text text-center">
                            <h3>Justin Stuard</h3>
                            <p>Chef Master</p>
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</body>

</html>
</body>

</html>