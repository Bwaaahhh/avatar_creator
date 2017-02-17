<body>
<!-- ZONE DE CREATION -->
<div class="container-fluid">
  <div class="row">
    <div id="creator" class="col-md-6">
      <p>Créez votre avatar</p>

      <div class="photos ui-widget-header" id="photoo">

        <div id="front" class="">
          <!-- SLIDER 1 FRONT -->
          <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:170px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
              <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
              <div style="position:absolute;display:block;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>

            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:170px;overflow:hidden;">

              <?php require_once('controller/front.php') ?>

                <a data-u="any" href="http://www.jssor.com" style="display:none">Simple Fade Slideshow</a>
              </div>
              <!-- Bullet Navigator -->
              <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
              </div>
              <!-- Arrow Navigator -->
              <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
              <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
            </div>
          </div>

          <!-- SLIDER 2 YEUX -->
          <div id="yeux" class="">
            <div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:100px;overflow:hidden;visibility:hidden;">
              <!-- Loading Screen -->
              <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;top:0px;left:0px;width:100%;height:100%;"></div>
              </div>

              <div class="yeux" data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:100px;overflow:hidden;">
                  <?php require_once('controller/yeux.php'); ?>
                  <a data-u="any" href="http://www.jssor.com" style="display:none">Simple Fade Slideshow</a>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                  <!-- bullet navigator item prototype -->
                  <div data-u="prototype" style="width:16px;height:16px;"></div>
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
              </div>
            </div>
            <!-- SLIDER 3 NEZ -->
            <div id="nez" class="">
              <div id="jssor_3" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:70px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                  <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                  <div style="position:absolute;display:block;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>

                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:70px;overflow:hidden;">

                  <?php $result = $avatar->getNez() ?>
                  <?php foreach ($result as $row)
                  { ?>
                    <div class="">
                      <img data-u="image" src="<?= $row->url_nez ?>" alt="">
                    </div>
                    <?php } ?>
                    <a data-u="any" href="http://www.jssor.com" style="display:none">Simple Fade Slideshow</a>
                  </div>
                  <!-- Bullet Navigator -->
                  <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                    <!-- bullet navigator item prototype -->
                    <div data-u="prototype" style="width:16px;height:16px;"></div>
                  </div>
                  <!-- Arrow Navigator -->
                  <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
                  <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
                </div>
              </div>

              <!-- SLIDER 4 -->

              <div id="bouche" class="">
                <div id="jssor_4" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:200px;overflow:hidden;visibility:hidden;">
                  <!-- Loading Screen -->
                  <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;top:0px;left:0px;width:100%;height:100%;"></div>
                  </div>

                  <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:200px;overflow:hidden;">

                    <?php require_once('controller/bouche.php') ?>

                      <a data-u="any" href="http://www.jssor.com" style="display:none">Simple Fade Slideshow</a>
                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                      <!-- bullet navigator item prototype -->
                      <div data-u="prototype" style="width:16px;height:16px;"></div>
                    </div>
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-12">

                  <div class="col-md-4" id="bouton";>
                    <a id="test"></a>
                    <button id="buttonnn" type="button" name="button" onclick="getScreenshot()">Enregistrer</button>
                  </div>
                  <div class="col-md-5 col-md-offset-1 envoyer">
                    <div class="row">
                      <div class="col-md-12">
                        <input type="url" id="url" name="" value="" style="width: 340px;">
                      </div>
                    </div>


                    <button type="button" id="copier" onclick="copier();" name="button">Copier</button>
                  </div>

                </div>

              </div>
            </div>

            <!-- ZONE D'AFFICHAGE DERNIERES CREATIONS -->

            <div id="last_creation" class="col-md-6">
              <p>Les avatars déjà créés</p>
              <?php $result = $avatar->getRandomAvatar() ?>
              <?php foreach ($result as $row)
              { ?>
                <div class="col-md-6 imagecreate">
                  <a href="<?= WEBROOT ?>view_avatar/<?= $row->id_avatar ?>">
                    <img data-u="image" style="width: 200px; padding-bottom:10%" src="<?= $row->url_avatar ?>" alt="">
                  </a>
                </div>
                <?php } ?>
              </div>
            </div>

            <div class="row">

              <div class="moustache">

                <p class="col-md-12">Ajoutez un accessoire</p>

                <div class="moustacheok">

                  <div class="ui-widget-content" id="draggable5" style="margin-right: 0px;margin-left: 0px;">
                    <a href="index.php?paramYeux=1">
                      <img id="imgLunette" src="view/images/Bonus_img/lunette/lunette.png" alt="bonus">
                    </a>
                  </div>

                  <div class="ui-widget-content" id="draggable6" style="margin-right: 0px;margin-left: 0px;">
                    <a href="index.php?paramYeux=3">
                      <img src="view/images/Bonus_img/lunette/lunette3.png" alt="bonus">
                    </a>
                  </div>

                  <div class="ui-widget-content" id="draggable7" style="margin-right: 0px;margin-left: 0px;">
                    <a href="index.php?paramYeux=2">
                      <img src="view/images/Bonus_img/lunette/lunette4.png" alt="bonus">
                    </a>
                  </div>

                  <a href="index.php?page=sessionYeux">
                    <button type="button" id="copier"  name="button">Enlever lunette</button>
                    </a>

                  <div class="ui-widget-content" id="draggable9" style="margin-right: 0px;margin-left: 0px;">
                    <a href="index.php?paramFront=1">
                      <img src="view/images/Bonus_img/chapeau/chapeau.png" alt="bonus">
                    </a>
                  </div>

                  <div class="ui-widget-content" id="draggable10" style="margin-right: 0px;margin-left: 0px;">
                    <a href="index.php?paramFront=2">
                      <img src="view/images/Bonus_img/chapeau/chapeau1.png" alt="bonus">
                    </a>
                  </div>

                  <div class="ui-widget-content" id="draggable10" style="margin-right: 0px;margin-left: 0px;">
                    <a href="index.php?paramFront=3">
                      <img src="view/images/Bonus_img/chapeau/chapeau5.png" alt="bonus">
                    </a>
                  </div>

                  <a href="index.php?page=sessionFront">
                    <button type="button" id="copier"  name="button">Enlever Chapeau</button>
                    </a>

                  <div class="ui-widget-content" id="draggable14" style="margin-right: 0px;margin-left: 0px;">
                    <a href="index.php?paramBouche=1">
                      <img src="view/images/Bonus_img/bouche/bouche1.png" alt="bonus">
                    </a>
                  </div>

                  <div class="ui-widget-content" id="draggable15" style="margin-right: 0px;margin-left: 0px;">
                    <a href="index.php?paramBouche=3">
                      <img src="view/images/Bonus_img/bouche/bouche4.png" alt="bonus">
                    </a>
                  </div>


                  <div class="ui-widget-content" id="draggable16" style="margin-right: 0px;margin-left: 0px;">
                    <a href="index.php?paramBouche=2">
                      <img src="view/images/Bonus_img/autre/autre3.png" alt="bonus">
                    </a>
                  </div>

                  <a href="index.php?page=sessionBouche">
                    <button type="button" id="copier"  name="button">Enlever Bouche</button>
                    </a>

                </div>
              </div>
            </div>
</div>

</body>
