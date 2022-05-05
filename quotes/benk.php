<?php

    print "hello from benk.php\n";
   
    $lori = $_ENV["DATABASE_PASSWORD"];
    echo "Password is " . $lori . "<br>\n";

    $msg = $_ENV["HELLO_MESSAGE"];
    $aud = $_ENV["HELLO_AUDIENCE"];

    echo "\n" . $msg . " " . $aud . "!\n\n";

?>
