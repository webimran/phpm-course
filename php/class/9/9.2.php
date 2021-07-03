<?php
    session_name("imran");
    session_start(array(
        'cookie_lifetime' => 60
    ));
   $_SESSION['simran'] = "Simran";
   echo  $_SESSION['simran'];