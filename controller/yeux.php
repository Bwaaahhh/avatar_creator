  <?php if(isset($_GET['paramYeux'])){
    $result = $avatar->getYeux($_GET['paramYeux']);
    foreach ($result as $row){  ?>
      <div class="">
        <img data-u="image" src="<?= $row->url_yeux ?>" alt="">
      </div>
      <?php }
      $_SESSION['yeux'] = $_GET['paramYeux'];
  }elseif(isset($_SESSION['yeux'])){
    $result = $avatar->getYeux($_SESSION['yeux']);
    foreach ($result as $row){  ?>
      <div class="">
        <img data-u="image" src="<?= $row->url_yeux ?>" alt="">
      </div>
      <?php }
  }else{
    $result = $avatar->getYeux();
    foreach ($result as $row){  ?>
      <div class="">
        <img data-u="image" src="<?= $row->url_yeux ?>" alt="">
      </div>
      <?php }
  }?>
