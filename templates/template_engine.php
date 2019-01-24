<?php
function render($view, $data=null){

    $tempFolder="templates/";
    return require_once "$tempFolder/$view";

}