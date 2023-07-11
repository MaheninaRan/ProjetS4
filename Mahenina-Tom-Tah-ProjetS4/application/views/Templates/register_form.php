<style>
    .error {
        border: 1px solid red;
      }
  
      .error-message {
        color: red;
        font-size: 12px;
        margin-top: 5px;
      }
</style>

<div class="signin">
        <div class="signin__warp">
            <div class="signin__content">
                <div class="signin__logo">
                    <a href="#"><img src="img/siign-in-logo.png" alt=""></a>
                </div>
                <div class="signin__form">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="false">
                                Inscription
                            </a>
                        </li>
                        <li class="nav-item">
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="signin__form__text">
                                <p>Avec votre reseau sociaux</p>
                                <div class="signin__form__signup__social">
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="google"><i class="fa fa-google"></i></a>
                                </div>
                                <div class="divide">ou</div>
                                <form action="<?php echo site_url('index.php/testeC/insertUtilisateur');?>" id="myForm" method="post">
                                    <input type="text" placeholder="Votre Nom" name="nom">
                                    <input type="date"  id="dateOfBirth" placeholder="date de naissance" name="naissance">
                                    <span id="errorMessage" class="error-message"></span>
                                    <style>
                                        #genre{
                                            height: 46px;
                                            width: 100%;
                                        }
                                    </style>
                                    <select id="genre" name="genre">
                                        <option value="homme"> homme </option>
                                        <option value="femme"> femme </option>
                                    </select> <br> <br>
                                    <input type="text" placeholder="Votre Email" name="email">
                                    <input type="text" placeholder="Mot de passe" name="password">
                                    <label for="sign-agree-check">
                                        J'accepte les termes & conditions
                                        <input type="checkbox" id="sign-agree-check">
                                        <span class="checkmark"></span>
                                    </label>
                                    <button type="submit" class="site-btn">S'inscrire</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

