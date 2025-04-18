<?php

include("pricefetch.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <title>Star Bucks</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
  <div id="wrapper">
    <div id="header">
      <div id="header-inner">
        <div id="headerleft"><img src="images/logo.png"></div>
        <div id="headerright">
          <div class="headertextbig">Sip in good. Give out Great</div>
        </div>
      </div>
    </div>

    <div id="main">
      <div id="main-inner">
        <div id="navigationleft">
          <h4 title="Navigation">Navigation</h4>
            <ul class="menu">
              <li><a href="index.html">&raquo; Home</a></li>
              <li><a href="about-us.html">&raquo; About Us</a></li>
              <li><a href="coffee.html">&raquo; Coffee</a></li>
              <li><a href="menu.html">&raquo; Menu</a></li>
              <li><a href="enquiry.html">&raquo; Feedback</a></li>
              <li><a href="contactus.html">&raquo; Contact Us</a></li>
              <li><a href="adminlogin.php">&raquo; Admin</a></li>
            </ul>
        </div>

        <div id="content">
  
         
    <font color="#808080">
<table align="center" width="107%" cellpadding="15" cellspacing="20">
<tr>
<td><h1 style="text-align:left;font-size:20px">Fill the Details</h1></td>
</tr>
<style>
  table, th {
    border: 5px solid #ebecde;
    border-collapse: collapse;
  }
  th{
    background-color: #96D4D4;
  }
  </style>
  
  <table align="center" width="107%" cellpadding="5" cellspacing="15">
  <tr>
  <th style="text-align: center">Espresso Beverages(Hot or Iced)</th>
  <th style="text-align: center">Frappuccino® Blended Beverages</th>
  <th style="text-align: center">Frappuccino® Blended Beverages</th>
  <th style="text-align: center">Food</th>
  </tr>
  <form method="post" action="actions.php">
  <tr>
  <td><input type="checkbox" name="Cappuchino" value="120"/>&nbsp;Cappuchino&nbsp;<br/>Price <b><?=$Cappuchino?>rs</b></td>
  <td><input type="checkbox" name="EspressoFrappuccino" value="140"/>&nbsp;Espresso Frappuccino® Blended
  Beverage&nbsp;<br/>Price <b><?=$EspressoFrappuccino?>rs</b></td>
   <td><input type="checkbox" name="TazoTea"  value="160"/>&nbsp;English Breakfast Tata®Tazo® Tea&nbsp;<br/>Price
    <b><?=$TazoTea?>rs</b></td>
        <td><input type="checkbox" name="CheeseSandwich"  value="200"/>&nbsp;Basil Tomato & Mozzarella Cheese 
  
  Sandwich&nbsp;<br/>Price <b><?=$CheeseSandwich?>rs</b></td>
  </tr>
  
  <tr>
  <td><input type="checkbox" name="CaffèLatte"/>&nbsp;Caffè Latte&nbsp;<br/>Price <b><?=$CaffèLatte?>rs</b></td>
  <td><input type="checkbox" name="CaramelFrappuccino"/>&nbsp;Caramel Frappuccino® Blended 
  
  Beverage&nbsp;<br/>Price <b><?=$CaramelFrappuccino?>rs</b></td>
  <td><input type="checkbox" name="HotChocolate"/>&nbsp;Starbucks® Signature Hot Chocolate&nbsp;<br/>Price <b><?=$HotChocolate?>rs</b></td>
        <td><input type="checkbox" name="PaneerRoll"/>&nbsp;Tandoori Paneer Roll&nbsp;<br/>Price <b><?=$PaneerRoll?>rs</b></td>
  </tr>
  
  <tr>
   <td><input type="checkbox" name="IcedCaffèLatte"/>&nbsp;Iced Caffè Latte&nbsp;<br/>Price <b><?=$IcedCaffèLatte?>rs</b></td>
   <td><input type="checkbox" name="CookieFrappuccino"/>&nbsp;Christmas Cookie Frappuccino&nbsp;<br/>Price <b><?=$CookieFrappuccino?>rs</b></td>
  <td><input type="checkbox" name="ChinaGreen"/>&nbsp;China Green Tips Tata®Tazo® Tea&nbsp;<br/>Price <b><?=$ChinaGreen?>rs</b></td>
         <td><input type="checkbox" name="CrunchCake"/>&nbsp;Chocolate Raspberry Crunch Cake&nbsp;<br/>Price <b><?=$CrunchCake?>rs</b></td>
  </tr>
  
  <tr>
    <td><input type="checkbox" name="CaffèAmericano"/>&nbsp;Caffè Americano&nbsp;<br/>Price <b><?=$CaffèAmericano?>rs</b></td>
    <td><input type="checkbox" name="MochaFrappuccino"/>&nbsp;Mocha Frappuccino® Blended 
  
  Beverage&nbsp;<br/>Price <b><?=$MochaFrappuccino?>rs</b></td>
  <td><input type="checkbox" name="IcedShakenHibiscusTea"/>&nbsp;Tata® Tazo® Iced Shaken Hibiscus 
  
  Tea&nbsp;<br/>Price <b><?=$IcedShakenHibiscusTea?>rs</b></td>
         <td><input type="checkbox" name="Cheesecake"/>&nbsp;Lemon Jazz Cheese Cake&nbsp;<br/>Price <b>120rs</b></td>
  </tr>
  
  <tr>
    <td><input type="checkbox" name="CookieLatte"/>&nbsp;Christmas Cookie Latte&nbsp;<br/>Price <b><?=$CookieLatte?>rs</b></td>
     <td><input type="checkbox" name="PralineFrappuccino"/>&nbsp;Mocha Praline Frappuccino&nbsp;<br/>Price <b><?=$PralineFrappuccino?>rs</b></td>
  <td><input type="checkbox" name="IcedShakenBlackTea"/>&nbsp;Tata® Tazo® Iced Shaken Black 
  
  Tea&nbsp;<br/>Price <b><?=$IcedShakenBlackTea?>rs</b></td>
          <td><input type="checkbox" name="Muffin"/>&nbsp;Blueberry Muffin&nbsp;<br/>Price <b><?=$Muffin?>rs</b></td>
  </tr>
  
  <tr>
    <td><input type="checkbox" name="CaffèMocha"/>&nbsp;Caffè Mocha&nbsp;<br/>Price <b><?=$CaffèMocha?>rs</b>&nbsp;</td>
    <td><input type="checkbox" name="NutFrappuccino"/>&nbsp;Toffee Nut Frappuccino&nbsp;<br/>Price <b><?=$NutFrappuccino?>rs</b></td>
  <td><input type="checkbox" name="EarlGreyTea"/>&nbsp;Earl Grey Tata®Tazo® Tea&nbsp;<br/>Price <b><?=$EarlGreyTea?>rs</b></td>
        <td><input type="checkbox" name="ChocolateMuffin"/>&nbsp;Double Chocolate Muffin&nbsp;<br/>Price <b><?=$ChocolateMuffin?>rs</b></td>
  </tr>
  </table> 
<tr><th><input type="submit" name="menu" value="TOTAL PRICE" style="font-size:16px"></th></tr><br/><br/>
<tr>
  <th> <h8 style="font-size:18px"> <b>Total Bill</b> </h8></th>
  <th> <h1><?php if(isset($_GET['value'])){ echo $_GET['value'];} else{} ?><h2></th> &nbsp;&nbsp;&nbsp;
</tr>
<tr>
<th><a href="#"> <input type="submit" value ="ORDER NOW" style="font-size:14px"></a></th> &nbsp; &nbsp; &nbsp;
<th><input type ="reset" value ="CANCEL" style="font-size:14px"></th>
</tr>
</table>
</font>
</form>
        </div>

        </div>
      </div>
    </div>

    <div id="footer">
      © Star Bucks,India. All Rights Reserved
    </div>
  </div>
</body>
</html>