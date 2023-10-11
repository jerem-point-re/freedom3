<?php

$title = "Post";
ob_start(); ?>

<h1>post.php</h1>;

<?php

$content = ob_get_clean();
require 'yayout.php';

?>