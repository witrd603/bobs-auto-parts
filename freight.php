<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<meta name="author" content="">
<meta http-equiv="Reply-to" content="@.com">
<meta name="generator" content="PhpED 8.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="creation-date" content="09/06/2012">
<meta name="revisit-after" content="15 days">
<title>Bob's Auto Parts - Freight Costs</title>
<link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>
<table style="border: 0px; padding: 3px">
<tr>
<td style="background: #cccccc; text-align: center;">Distance</td>
<td style="background: #cccccc; text-align: center;">Cost</td>
</tr>

<?php
$distance <= 50;
while ($distance <= 250) {
    echo "<tr>
    <td style=\"text-align: right;\">".$distance."</td>
    <td style=\"text-align: right;\">".($distance / 10)."</td>
    </tr>\n";
    $distance += 50;
    }
    ?>
    </table>
</body>
</html>
