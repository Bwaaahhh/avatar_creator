<?php
$result = $avatar->getSpecialAvatar();
foreach ($result as $row) {?>
  <div class="visu_avatar">
    <img src="<?= $row->url_avatar ?> " alt="">
  </div>
<?php } ?>
