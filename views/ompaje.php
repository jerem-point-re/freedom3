<?php

$title = "Start";
ob_start(); ?>

<h1>Start</h1>
<button>Hey</button>
<div class="main">
    <div class="card">
        <h3>My Card</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, magni dolorum id quis voluptates ipsam?</p>
    </div>
</div>

<?php

$content = ob_get_clean();
require 'yayout.php';

?>