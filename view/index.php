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
    <p>Créer votre avatar</p>

    <div class="photos">
      <div id="front" class="">
          <?php $result = $avatar->getFront() ?>
          <?php foreach ($result as $row)
          { ?>
              <img src="<?= $row->url_front ?>" alt="">
          <?php } ?>
      </div>

      <div id="yeux" class="">
          <?php $result = $avatar->getYeux() ?>
          <?php foreach ($result as $row)
          { ?>
              <img src="<?= $row->url_yeux ?>" alt="">
          <?php } ?>
      </div>

      <div id="nez" class="">
          <?php $result = $avatar->getNez() ?>
          <?php foreach ($result as $row)
          { ?>
              <img src="<?= $row->url_nez ?>" alt="">
          <?php } ?>
      </div>

      <div id="bouche" class="">
          <?php $result = $avatar->getBouche() ?>
          <?php foreach ($result as $row)
          { ?>
              <img src="<?= $row->url_bouche ?>" alt="">
          <?php } ?>
      </div>

    </div>

    <button type="button" name="button" class="col-md-2 btn btn-default">Enregistrer</button>


     <div class="col-md-6 envoyer">
       <input type="text" name="" value="URL de l'image" class="col-md-5 form"><button type="button" name="button" class="btn btn-default">Copier</button>
     </div>
     
     
     <a href="https://twitter.com/share" class="twitter-share-button" data-size="large">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
     
     <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Partager</a></div>
     

</div>


<!-- ZONE D'AFFICHAGE DERNIERES CREATIONS -->

  <div id="last_creation" class="col-md-6">
    <p>Les avatars déjà créés</p>
  </div>

</body>
