<?php
global $head, $foot;
function htmlshowUsers($data){
    global $head, $foot;
    echo $head;
    foreach ($data as $item){
        foreach ($item as $key=>$value){
            print_r($key.': '.$value.'<br>');
        }
        echo '<br>';
    }
    echo $foot;
}
//function
$head="
<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>";

$foot="
</body>
</html>";
?>
