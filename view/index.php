<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- ZONE DE CREATION -->

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

                      <?php $result = $avatar->getFront() ?>
                      <?php foreach ($result as $row)
                      { ?>
                      <div>
                          <img data-u="image" src="<?= $row->url_front ?>" alt="">
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

<!-- SLIDER 2 YEUX -->
      <div id="yeux" class="">
        <div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:100px;overflow:hidden;visibility:hidden;">
              <!-- Loading Screen -->
              <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                  <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                  <div style="position:absolute;display:block;top:0px;left:0px;width:100%;height:100%;"></div>
              </div>

              <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:100px;overflow:hidden;">

                <?php $result = $avatar->getYeux() ?>
                <?php foreach ($result as $row)
                { ?>
                  <div class="">
                    <img data-u="image" src="<?= $row->url_yeux ?>" alt="">
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
<!-- SLIDER 3 NEZ -->
<div id="yeux" class="">
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

                <?php $result = $avatar->getBouche() ?>
                <?php foreach ($result as $row)
                { ?>
                  <div class="">
                    <img data-u="image" src="<?= $row->url_bouche ?>" alt="">
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

    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="col-md-4" id="bouton";>
          <a id="test"></a>
          <button id="buttonnn" type="button" name="button" onclick="getScreenshot()">Enregistrer</button>
        </div>
        <div class="col-md-5 envoyer">
            <div class="row">
              <div class="col-md-12">
                <input type="url" id="url" name="" value="" style="width: 340px;">
              </div>
            </div>


            <button type="button" id="copier" onclick="copier();" name="button">Copier</button>
          </div>
        <?php $result = $avatar->getUrlAvatar();?>

          <div class="col-md-2" style="margin-top: 11px ; padding-left:0">
            <a href="<?=$result?>" id="Tt" class="twitter-share-button" data-size="large">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            <div class="fb-share-button" id="Fb" data-layout="button" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="<?=$result?>">Partager</a></div>
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
       <a href="index.php?page=view_avatar&id_avatar=<?= $row->id_avatar ?>">
         <img data-u="image" style="width: 200px; padding-bottom:10%" src="<?= $row->url_avatar ?>" alt="">
       </a>
    </div>
   <?php } ?>
  </div>

  <div class="moustache">
    <p>Ajoutez un accessoire</p>
    <div class="ui-widget-content" id="draggable1">
      <img src="view/images/Bonus_img/moustache/barbe.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable2">
      <img src="view/images/Bonus_img/moustache/moustache.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable3">
      <img src="view/images/Bonus_img/moustache/moustache2.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable4">
      <img src="view/images/Bonus_img/moustache/moustache3.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable5">
      <img src="view/images/Bonus_img/lunette/lunette.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable6">
      <img src="view/images/Bonus_img/lunette/lunette3.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable7">
      <img src="view/images/Bonus_img/lunette/lunette4.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable8">
      <img src="view/images/Bonus_img/lunette/lunette5.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable9">
      <img src="view/images/Bonus_img/chapeau/chapeau.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable10">
      <img src="view/images/Bonus_img/chapeau/chapeau1.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable11">
      <img src="view/images/Bonus_img/chapeau/chapeau2.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable12">
    <img src="view/images/Bonus_img/chapeau/chapeau4.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable13">
    <img src="view/images/Bonus_img/bouche/bouche.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable14">
    <img src="view/images/Bonus_img/bouche/bouche1.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable15">
    <img src="view/images/Bonus_img/bouche/bouche4.png" alt="bonus">
    </div>

    <div class="ui-widget-content" id="draggable16">
    <img src="view/images/Bonus_img/autre/autre3.png" alt="bonus">
    </div>

  </div>

</body>
