<?php

include("connection.php");
$fetch="select * from price";
$prices=mysqli_query($conn,$fetch);
$prices = mysqli_fetch_array($prices);

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $gender = $_POST['r1'];
    $country = $_POST['country'];
    $fav = $_POST['favorite'];
    $contact = $_POST['contact'];
    $views = $_POST['views'];

    $sql = "INSERT INTO feedback(email,pass,gender,country,fav,contact,views) values('$email','$password','$gender','$country','$fav','$contact','$views')";
    mysqli_query($conn,$sql);

    header("location:thankyou.html");
}
if(isset($_POST['newprice'])){
    $id= $_POST['id'];
    $price = $_POST['price'];
    $query2 = "update price set price='$price' where id='$id'";
    mysqli_query($conn,$query2);
    header("location:pricelist.php");
}
$Cappuchino = 0;
$EspressoFrappuccino = 0;
$TazoTea = 0;
$CheeseSandwich = 0;

$CaffèLatte = 0;
$CaramelFrappuccino = 0;
$HotChocolate = 0;
$PaneerRoll = 0;

$IcedCaffèLatte = 0;
$CookieFrappuccino = 0;
$ChinaGreen = 0;
$CrunchCake = 0;

$CaffèAmericano = 0;
$MochaFrappuccino = 0;
$IcedShakenHibiscusTea = 0;
$Cheesecake= 0;

$CookieLatte = 0;
$PralineFrappuccino = 0;
$IcedShakenBlackTea = 0;
$Muffin = 0;

$CaffèMocha = 0;
$NutFrappuccino = 0;
$EarlGreyTea = 0;
$ChocolateMuffin =0;



if(isset($_POST['menu'])){
    if(isset($_POST['Cappuchino'])){
        $query="select price from price where name='Cappuchino'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $Cappuchino = $prices['price'];
    }
    if(isset($_POST['EspressoFrappuccino'])){
        $query="select price from price where name='EspressoFrappuccino'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $EspressoFrappuccino = $prices['price'];
    }
    if(isset($_POST['TazoTea'])){
        $query="select price from price where name='TazoTea'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $TazoTea = $prices['price'];
    }
    if(isset($_POST['CheeseSandwich'])){
        $query="select price from price where name='CheeseSandwich'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $CheeseSandwich = $prices['price'];
    }



    if(isset($_POST['CaffèLatte'])){
        $query="select price from price where name='CaffèLatte'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $CaffèLatte = $prices['price'];;
    }
    if(isset($_POST['CaramelFrappuccino'])){
        $query="select price from price where name='CaramelFrappuccino'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $CaramelFrappuccino = $prices['price'];;
    }
    if(isset($_POST['HotChocolate'])){
        $query="select price from price where name='HotChocolate'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $HotChocolate = $prices['price'];;
    }
    if(isset($_POST['PaneerRoll'])){
        $query="select price from price where name='PaneerRoll'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $PaneerRoll = $prices['price'];;
    }


    if(isset($_POST['IcedCaffèLatte'])){
        $query="select price from price where name='IcedCaffèLatte'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $IcedCaffèLatte = $prices['price'];;
    }
    if(isset($_POST['CookieFrappuccino'])){
        $query="select price from price where name='CookieFrappuccino'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $CookieFrappuccino = $prices['price'];;
    }
    if(isset($_POST['ChinaGreen'])){
        $query="select price from price where name='ChinaGreen'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $ChinaGreen = $prices['price'];;
    }
    if(isset($_POST['CrunchCake'])){
        $query="select price from price where name='CrunchCake'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $CrunchCake = $prices['price'];;
    }


    if(isset($_POST['CaffèAmericano'])){
        $query="select price from price where name='CaffèAmericano'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $CaffèAmericano = $prices['price'];;
    }
    if(isset($_POST['MochaFrappuccino'])){
        $query="select price from price where name='MochaFrappuccino'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $MochaFrappuccino = $prices['price'];;
    }
    if(isset($_POST['IcedShakenHibiscusTea'])){
        $query="select price from price where name='IcedShakenHibiscusTea'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $IcedShakenHibiscusTea = $prices['price'];;
    }
    if(isset($_POST['Cheesecake'])){
        $query="select price from price where name='Cheesecake'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $EspressoFrappuccino = $prices['price'];;
    }


    if(isset($_POST['CookieLatte'])){
        $query="select price from price where name='CookieLatte'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $CookieLatte = $prices['price'];;
    }
    if(isset($_POST['PralineFrappuccino'])){
        $query="select price from price where name='PralineFrappuccino'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $PralineFrappuccino = $prices['price'];;
    }
    if(isset($_POST['IcedShakenBlackTea'])){
        $query="select price from price where name='IcedShakenBlackTea'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $IcedShakenBlackTea = $prices['price'];;
    }
    if(isset($_POST['Muffin'])){
        $query="select price from price where name='Muffin'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $Muffin = $prices['price'];;
    }


    if(isset($_POST['CaffèMocha'])){
        $query="select price from price where name='CaffèMocha'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $CaffèMocha = $prices['price'];;
    }
    if(isset($_POST['NutFrappuccino'])){
        $query="select price from price where name='NutFrappuccino'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $NutFrappuccino = $prices['price'];
    }
    if(isset($_POST['EarlGreyTea'])){
        $query="select price from price where name='EarlGreyTea'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $EarlGreyTea = $prices['price'];;
    }
    if(isset($_POST['ChocolateMuffin'])){
        $query="select price from price where name='ChocolateMuffin'";
        $price = mysqli_query($conn,$query);
        $prices = mysqli_fetch_array($price);
        $ChocolateMuffin = $prices['price'];;
    }

    $add = $Cappuchino +
    $EspressoFrappuccino +
    $TazoTea +
    $CheeseSandwich +
    
    $CaffèLatte +
    $CaramelFrappuccino +
    $HotChocolate +
    $PaneerRoll +
    
    $IcedCaffèLatte +
    $CookieFrappuccino +
    $ChinaGreen +
    $CrunchCake +
    
    $CaffèAmericano +
    $MochaFrappuccino +
    $IcedShakenHibiscusTea +
    $Cheesecake +
    
    $CookieLatte +
    $PralineFrappuccino +
    $IcedShakenBlackTea +
    $Muffin +
    
    $CaffèMocha +
    $NutFrappuccino +
    $EarlGreyTea +
    $ChocolateMuffin ;
 
    header("location:buynow.php?value=$add");
    


}