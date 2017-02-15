<?php
require_once("../model/PDO.php");
require_once('class/Avatar.php');
$avatar = new Avatar();

$add = $avatar->countAvatar()+1;
$save = str_replace('data:image/png;base64,', '', $_POST['#photoo'] );
file_put_contents( '../view/images/avatar/avatar'.$add.'.png', base64_decode( $save ) );

include("test_recize.php");
$resize = new ResizeImage('../view/images/avatar/avatar'.$add.'.png');
$resize->resizeTo(200, 180);
$resize->saveImage('../view/images/avatar/avatar'.$add.'.png');


$avatar->setAvatar();
echo $avatar->getUrlAvatar();
?>
