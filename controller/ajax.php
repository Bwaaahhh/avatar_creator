<?php
$save = str_replace('data:image/png;base64,', '', $_POST['#photoo'] );
file_put_contents( '../view/images/avatar/image.png', base64_decode( $save ) );
?>
