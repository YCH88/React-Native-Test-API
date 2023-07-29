<?php
function SetHeader($code){
    header("HTTP/1.1 ".$code." ".HttpStatus($code));
    header("Content-Type: application/json; charset=utf-8");
}
?>