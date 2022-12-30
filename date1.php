<?php
date_default_timezone_set('Asia/Kolkata');
$d2='25/12/2022';
$d3='30/12/2022';
if(date("d/m/y") < $d3 and date("d/m/y") > $d2){
    header("location:contact.html");
}
else{
    echo "registration not started";
}
?>