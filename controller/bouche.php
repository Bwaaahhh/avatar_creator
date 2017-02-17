<?php if(isset($_GET['paramBouche'])){
  $result = $avatar->getBouche($_GET['paramBouche']);
  foreach ($result as $row){  ?>
    <div class="">
      <img data-u="image" src="<?= $row->url_bouche ?>" alt="">
    </div>
    <?php }
    $_SESSION['bouche'] = $_GET['paramBouche'];
}elseif (isset($_SESSION['bouche'])){
  $result = $avatar->getBouche($_SESSION['bouche']);
  foreach ($result as $row){  ?>
    <div class="">
      <img data-u="image" src="<?= $row->url_bouche ?>" alt="">
    </div>
    <?php }
}
else{
  $result = $avatar->getBouche();
  foreach ($result as $row){  ?>
    <div class="">
      <img data-u="image" src="<?= $row->url_bouche ?>" alt="">
    </div>
    <?php }
}?>
