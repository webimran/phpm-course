<?php 
    session_name("imran");
    session_start(array(
        'cookie_lifetime' => 60
    ));
    echo  $_SESSION['simran'];