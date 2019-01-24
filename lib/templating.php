<?php


function renderTemplate($templatePath, $users)
{
//    print_r($data);
//    exit;

    if (file_exists($templatePath)) {
        include $templatePath;
    }else {
        echo "$templatePath does not exists";
        die(1);
    }
}

