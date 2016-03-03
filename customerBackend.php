<?php
 $username = $_POST['username'];
 $password = $_POST['password'];
 $bangles = $_POST['bangles'];
 $rings = $_POST['rings'];
 $anklets = $_POST['anklets'];
 $shipping = $_POST['shipping'];
 $label = '';
 $shipcost = 0;
 if($shipping == 1)
 {
   $label = "7 day";
   $shipcost = 0;
 }
 else if($shipping == 2)
 {
   $label = "Over night";
   $shipcost = 50;
 }
 else {
   $label = "3 Days";
   $shipcost = 5;
 }

 echo "<html><head><title>Receipt</title><link rel='stylesheet' type='text/css' href='style.css'></head><body>";
 echo "<h1>Receipt</h1>";
 echo "Username: " . $username . "<br>";
 echo "Password: " . $password . "<br>";
 echo "<table style='width:auto'>";
 echo "<tr><td></td>";
 echo "<td>Quantity</td>";
 echo "<td>Cost Per Item</td>";
 echo "<td>Sub Total</td></tr>";

 echo "<tr><td>Bangles</td>";
 echo "<td>" . $bangles . "</td>";
 echo "<td>$10</td>";
 echo "<td>$". $bangles*10 ."</td>";

 echo "<tr><td>Rings</td>";
 echo "<td>" . $rings . "</td>";
 echo "<td>$30</td>";
 echo "<td>$" . $rings*30 . "</td>";

 echo "<tr><td>Anklets</td>";
 echo "<td>" . $anklets . "</td>";
 echo "<td>$50</td>";
 echo "<td>$" . $anklets*50 . "</td>";

 echo "<tr><td colspan='2'>Shipping</td>";
 echo "<td>" . $label . "</td>";
 echo "<td>$" . $shipcost . "</td>";

 $total = $bangles*10 + $rings*30 + $anklets*50+ $shipcost;

 echo "<tr><td colspan='3' >Total Cost</td>";
 echo "<td>$" . $total . "</td></tr>";
 echo "</table>";
echo "</body></html>";

 ?>
