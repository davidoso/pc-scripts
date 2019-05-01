<?php
    // Obtener array de la versión de curl
    $version = curl_version();

    // Estos son los campos que se pueden usar para
    // comprobar ciertas caracerísticas para esta versión de curl
    $bitfields = Array(
        'CURL_VERSION_IPV6',
        'CURL_VERSION_KERBEROS4',
        'CURL_VERSION_SSL',
        'CURL_VERSION_LIBZ'
    );

    foreach($bitfields as $feature) {
        echo $feature . ($version['features'] & constant($feature) ? ' coincide' : ' no coincide');
        echo PHP_EOL;
    }
?>