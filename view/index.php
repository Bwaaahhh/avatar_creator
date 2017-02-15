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


    <div class="photos" id="photoo">

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
          <div class="col-md-2 col-lg-4";>
            <a id="test"></a>
              <button id="buttonnn" type="button" name="button" onclick="getScreenshot()">Enregistrer</button>
          </div>
          <div class="col-md-4 envoyer">

            <?php $url = $avatar->getUrlAvatar() ?>
            <?php foreach ($url as $row)
            { ?>
              <div class="row">
                <div class="col-md-12">
                  <input type="text" id="url" name="" value="<?= $row->url_avatar ?>" style="width: 200px;">
                </div>
              </div>
            <?php } ?>

               <button type="button" id="copier" name="button">Copier</button>
          </div>
          <div class="col-md-4" style="margin-top: 11px;padding-left: 0px;";>
               <a href="https://twitter.com/share" id="Tt" class="twitter-share-button" data-size="large">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
               <div class="fb-share-button" id="Fb" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Partager</a></div>
          </div>
     </div>
</div>

<!-- ZONE D'AFFICHAGE DERNIERES CREATIONS -->

  <div id="last_creation" class="col-md-6">
    <p>Les avatars déjà créés</p>
  </div>

</body>
