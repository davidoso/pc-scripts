<?php
    // Open ftp connection
    $con = ftp_connect('ftp.portaldigital.mx') or die("Couldn't connect");

    // Username and pwd
    ftp_login($con, 'kmz@portaldigital.mx', 'T%m=8U}nEJ3@');

    // Login result
    echo is_array(ftp_nlist($con, ".")) ? 'Connected!' : 'Not connected! :(';
?>