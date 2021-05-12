<?php

if(!empty($_GET['file']))
{
    $filename = basename($_GET['file']);
    $filepath = 'files/' . $filename;
    if (!empty($filename) && file_exists($filepath)) {

        //Définir les headers

        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        readfile($filepath);
        exit;

    }else {
        echo "Ce document n'existe pas";
    }
}

