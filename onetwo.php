
<?php

$FirstLine =$_SERVER['REQUEST_METHOD']." ".$_SERVER['PHP_SELF']." HTTP/1.1</br>";
$headers = getallheaders();
$body = @file_get_contents('php://input');

$page=$FirstLine;
foreach($headers as $header_=>$Value )
    $page .= ($header_.":".$Value."</br>");

$page .= ("<br /> </br> ".$body);
    
    
    
    echo $page;
?>
