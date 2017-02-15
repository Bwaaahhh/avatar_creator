<?php
require_once("../model/PDO.php");
require_once('class/Avatar.php');
$avatar = new Avatar();
$add = $avatar->countAvatar()+1;
$save = str_replace('data:image/png;base64,', '', $_POST['#photoo'] );
file_put_contents( '../view/images/avatar/avatar'.$add.'.png', base64_decode( $save ) );
$avatar->setAvatar();
?>
