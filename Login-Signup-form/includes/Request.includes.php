<?php

 if(isset($_POST["reset-request-submit"])) {

   $selector = bin2hex (random_byte(8));
   $token = random_byte(32);

   $url = "www.website.net/Create-new-password.php?selector=" . $selector . "&validtor=" . bin2hex($token) // dependent on website link write url
$expires = data("U") + 1800;

 }
 else {
header ("Location: ../index.php");
 }
