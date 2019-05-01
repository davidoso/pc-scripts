<?php
    // https://www.w3schools.com/php/func_ftp_put.asp
    // Upload local file to a file on the FTP server

    // Connect and login to FTP server
    $ftp_server = "ftp.portaldigital.mx";
    $ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
    $login = ftp_login($ftp_conn, "kmz@portaldigital.mx", "T%m=8U}nEJ3@");

    $kmz = "Fraccion_A.kmz";

    // Upload file
    if(ftp_put($ftp_conn, "serverfile.txt", $kmz, FTP_BINARY)) {
        echo "Successfully uploaded $kmz";
    }
    else {
        echo "Error uploading $kmz";
    }

    // Close connection
    ftp_close($ftp_conn);
?>