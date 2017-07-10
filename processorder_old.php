<?php
//create short variable names
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
  <h1>Bob's Auto Parts</h1>
  <h2>Order Results</h2>
  <?php
echo "<p>Order processed at ".date( 'H:i, jS F Y'). "</p>";

echo '<p>  Your order is as follows:  </p>';
#echo htmlspecialchars($tireqty).' tires<br />';
#echo htmlspecialchars($oilqty).' bottles of oil<br />';
#echo htmlspecialchars($sparkqty).' spark plugs<br />';

$totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty;
echo "<p> Items ordered: ".$totalqty." <br />";
$totalamount = 0.00;

define('TIREPRICE', 100);
define('OILPRICE' , 10);
define('SPARKPRICE', 4);

$totalamount = $tireqty * TIREPRICE
              + $oilqty * OILPRICE
              + $sparkqty * SPARKPRICE;

echo"Subtotal: $" .number_format($totalamount,2)."<br />";

$taxrate = 0.10; //local sales tax is 10%
$totalamount = $totalamount * (1 + $taxrate); 
echo "Total including tax $".number_format($totalamount,2)."</p>";

if ($totalqty == 0) {
  echo '<p style="color:red">';
  echo 'You did not order anything on the previous page!';
  echo'</p>';
} else {
    if ($tireqty > 0)
        echo htmlspecialchars($tireqty).' tires<br />';
    if ($oilqty > 0)
         echo htmlspecialchars($oilqty).' bottles of oil<br />';
    if ($sparkqty > 0)
        echo htmlspecialchars($sparkqty).' spark plugs<br />';
}

/* if ($tireqty <10) {
 $discount = 0;
}elseif (($tireqty >=10) && ($tireqty <= 49)) {
  $discount = 5;
}elseif (($tireqty >=50) && ($tireqty <=99)) {
  $discount= 10;
} elseif ($tireqty >=100) {
  $discount = 15;
}
        

      if ($find == "a") {
          echo "<p>Regular customer. </p>";
          
      } elseif ($find == "b") {
          echo "<p>Customer referred by TV advert. </p>";
          
      } elsif ($find == "c") {
          echo "<p>Customer referred by phone directory. </p>";
          
      } elsif ($find == "d") {
          echo "<p>Customer referred by word of mouth. </p>";
      }else {
         echo "<p>We do not know how this customer found us.</p>";   
      }   -->
  
         */


?>
</body>
</html>
