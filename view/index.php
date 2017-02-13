<body>

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
</div>


<!-- ZONE D'AFFICHAGE DERNIERES CREATIONS -->

  <div id="last_creation" class="col-md-6">
    <p>Les avatars déjà créés</p>
  </div>

</body>
