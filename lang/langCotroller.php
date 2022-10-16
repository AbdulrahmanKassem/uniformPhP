<?php
session_start();
if (isset($_POST['lang'])) {
    if (in_array($_POST['lang'], ['ar', 'en'])) {
        //-- stor language value
        $_SESSION['lang'] = $_POST['lang'];
        //-- set page direction by $_SESSION['dir']
        if ($_SESSION['lang'] == "en") {
            $_SESSION['dir'] = 'ltr';
        } else {
            $_SESSION['dir'] = 'rtl';
        }
    } else {
        $_SESSION['lang'] = 'ar';
        $_SESSION['dir'] = 'rtl';
    }
    header('location:' . getCurrentUrl());
}



function getCurrentUrl()
{
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
    else
        $url = "http://";
    // Append the host(domain name, ip) to the URL.   
    $url .= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL   
    $url = $_SERVER['HTTP_REFERER'];
    return $url;
}
