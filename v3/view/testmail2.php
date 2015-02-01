<?php
// A test script for sending mail.  Put your email address below
// and open this script in your browser.
$ADDR = "aaron@chengfolio.com";
if (mail($ADDR,"Testing with -f","This is a test","From: $ADDR","-f$ADDR"))
    echo "Mail function succeeded with -f parameter<br />";
else
    echo "Mail function FAILED with -f parameter<br />";
?>
