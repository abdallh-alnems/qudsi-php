<?php


function filterRequset($requsername){
   return htmlspecialchars(strip_tags($_POST[$requsername]));
}







   // function checkAuthenticate(){
   //     if (isset($_SERVER['PHP_AUTH_USER'])  && isset($_SERVER['PHP_AUTH_PW'])) {
   
   //         if ($_SERVER['PHP_AUTH_USER'] != "wael" ||  $_SERVER['PHP_AUTH_PW'] != "wael12345"){
   //             header('WWW-Authenticate: Basic realm="My Realm"');
   //             header('HTTP/1.0 401 Unauthorized');
   //             echo 'Page Not Found';
   //             exit;
   //         }
   //     } else {
   //         exit;
   //     }
   // }

?>