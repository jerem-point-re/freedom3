<?php

if(isset($_GET['p']) && ($_GET['p'] == "post")) {
    require 'views/post.php';
} else {
    require 'views/ompaje.php';
}

?>