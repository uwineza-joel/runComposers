Usage to this tutorial<br>
----------------------------
<br><br>
navigate to <b>/sendmail.php</b> to send email
<br><br>
navigate to <b>/date.php</b> for carbon date functionalities
<br><br>
Testing my autoload class_exists<br>
--------------------------------------
<br><br>
<?php

        require_once __DIR__."/vendor/autoload.php";

        new move();

        new animal();

        connect();

        new App\zoo();

        use App\home;
        new home();
?>