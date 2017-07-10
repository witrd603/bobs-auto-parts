<?php
  // create short variable name
  $document_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Parts - Order Results</title>
        </head>
    <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Customer Orders</h2>
    <?php
        $fp = Fopen("$document_root/..orders/orders.text", 'rb');
        flock($fp, LOCK_SH); // lock file for reading
        
        if (!$fp) {
            echo "<p><strong>No orders pending. <br />
                    Please try again later. </strong></p>";
                    exit;
        }
        
        while (!feof($fp)) {
            $order= fgets($fp);
            echo HTML_SPECIALCHARS($order)."br/>";
        }
        
        flock ($fp, LOCK_UN); //release read lock
        fclose($fp);
    ?>
    </body>
    </html>