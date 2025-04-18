<?php
    include("connection.php");

    




            $query="select price from price where name='Cappuchino'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $Cappuchino = $prices['price'];
       
            $query="select price from price where name='EspressoFrappuccino'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $EspressoFrappuccino = $prices['price'];
      
            $query="select price from price where name='TazoTea'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $TazoTea = $prices['price'];
       
            $query="select price from price where name='CheeseSandwich'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $CheeseSandwich = $prices['price'];
        
            $query="select price from price where name='CaffèLatte'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $CaffèLatte = $prices['price'];;
     
            $query="select price from price where name='CaramelFrappuccino'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $CaramelFrappuccino = $prices['price'];;
       
            $query="select price from price where name='HotChocolate'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $HotChocolate = $prices['price'];;
      
            $query="select price from price where name='PaneerRoll'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $PaneerRoll = $prices['price'];;
        
            $query="select price from price where name='IcedCaffèLatte'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $IcedCaffèLatte = $prices['price'];;
       
            $query="select price from price where name='CookieFrappuccino'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $CookieFrappuccino = $prices['price'];;
        
            $query="select price from price where name='ChinaGreen'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $ChinaGreen = $prices['price'];;
        
            $query="select price from price where name='CrunchCake'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $CrunchCake = $prices['price'];;
       
            $query="select price from price where name='CaffèAmericano'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $CaffèAmericano = $prices['price'];;
        
            $query="select price from price where name='MochaFrappuccino'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $MochaFrappuccino = $prices['price'];;
        
            $query="select price from price where name='IcedShakenHibiscusTea'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $IcedShakenHibiscusTea = $prices['price'];;
       
            $query="select price from price where name='Cheesecake'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $EspressoFrappuccino = $prices['price'];;
      
            $query="select price from price where name='CookieLatte'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $CookieLatte = $prices['price'];;
        
            $query="select price from price where name='PralineFrappuccino'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $PralineFrappuccino = $prices['price'];;
       
            $query="select price from price where name='IcedShakenBlackTea'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
          $IcedShakenBlackTea = $prices['price'];;
        

            $query="select price from price where name='Muffin'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $Muffin = $prices['price'];;
    
    
   
            $query="select price from price where name='CaffèMocha'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $CaffèMocha = $prices['price'];;
       
            $query="select price from price where name='NutFrappuccino'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $NutFrappuccino = $prices['price'];
   
            $query="select price from price where name='EarlGreyTea'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $EarlGreyTea = $prices['price'];;
        
      
            $query="select price from price where name='ChocolateMuffin'";
            $price = mysqli_query($conn,$query);
            $prices = mysqli_fetch_array($price);
            $ChocolateMuffin = $prices['price'];


?>