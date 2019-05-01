<?php
    try {
        $con = ftp_connect('ftp.portaldigital.mx');
        //$con = ftp_connect('localhost');
        if (false === $con) {
            throw new Exception('Unable to connect');
        }

        $loggedIn = ftp_login($con,  'kmz@portaldigital.mx',  'T%m=8U}nEJ3@');
        //$loggedIn = ftp_login($con,  'legalpc',  'legalpwd');
        if (true === $loggedIn) {
            echo 'Success!';
        } else {
            throw new Exception('Unable to log in');
        }

        print_r(ftp_nlist($con, "."));
        ftp_close($con);

    } catch (Exception $e) {
        echo "Failure: " . $e->getMessage();
    }
?>