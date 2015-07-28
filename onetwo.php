
<?php

$fh =$_SERVER['REQUEST_METHOD']." ".$_SERVER['PHP_SELF']." HTTP/1.1</br>";
$hds = getallheaders();
$body = @file_get_contents('php://input');

$page=$fh;
foreach($hds as $h=>$v )
    $page .= ($h.":".$v."</br>");

    $page .= ("<br /> </br> ".$body);
    echo $page;
?>
