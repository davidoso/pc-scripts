<?php
    $con = ftp_connect('ftp.portaldigital.mx') or die("Couldn't connect");
    ftp_login($con,  'kmz@portaldigital.mx',  'T%m=8U}nEJ3@');
    echo is_array(ftp_nlist($con, ".")) ? 'Connected!' : 'Not Connected! :(';
?>