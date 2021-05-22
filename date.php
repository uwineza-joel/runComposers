<?php

    require_once __DIR__."/vendor/autoload.php";

    use Carbon\Carbon;

    echo "Today is ".Carbon::now();
    
    echo "<br><br>After 2 minutes ago ".Carbon::now()->subMinutes(2);

?>