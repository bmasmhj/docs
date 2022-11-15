<?php

// $con = mysqli_connect('sql208.epizy.com','epiz_27295478','iDJW2MLry5','epiz_27295478_wlink'); 
$con = mysqli_connect('localhost','root','','wlink'); 

$messagesql = 'SELECT  * FROM message ORDER BY id desc';
$messageresult = $con->query($messagesql);
$messagedata = [];
if ($messageresult->num_rows > 0) {
    while ($messagerow = $messageresult->fetch_assoc()) {
        array_push($messagedata, $messagerow);
    }
}
 ?>