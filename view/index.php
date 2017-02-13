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

      </div>
      <div id="nez" class="">

      </div>
      <div id="bouche" class="">

      </div>
    </div>

    <button type="button" name="button" class="col-md-2 btn btn-default">Enregistrer</button>

   <div class="row">
     <div class="col-md-12 envoyer">
       <input type="text" name="" value="URL de l'image" class="col-md-6 form"><button type="button" name="button" class="btn btn-default">Copier</button>
     </div>
   </div>


<!-- ZONE D'AFFICHAGE DERNIERES CREATIONS -->

  <div id="last_creation" class="col-md-6">
    <p>Les avatars déjà créés</p>
  </div>

</body>
