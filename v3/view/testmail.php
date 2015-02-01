<?php
// A test script for sending mail.  Put your email address below
// and open this script in your browser.
$ADDR = "aaron@chengfolio.com";
if (mail($ADDR,"Testing","This is a test"))
    echo "Mail function succeeded<br />";
else
    echo "Mail function FAILED<br />";
?>
