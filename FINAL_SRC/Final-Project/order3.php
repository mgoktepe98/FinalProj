<html>
<head>
    <title>Order Confirmation</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="banner">
    Webengers Secret Travel Agency
   </div>

<div class="pageContainer centerText">

    <p></p>
    <h2>Order Confirmation</h2>
    <?php
    //must arrive from order02.php
    $referrer = $_SERVER['HTTP_REFERER'];
    
    if (stripos($referrer, 'order2.php') == false) header("location:index.php");
    
    $color = $_REQUEST['color'];
    if(!($color == 'red' || $color == 'blue' || $color == 'yellow')){
        exit();
    } else{
        echo"<h3> Congratulations " . $_COOKIE['fname'] . " you
        have ordered a  $color ". $_COOKIE['model'] . "!</h3>";
        echo "<img src='images/".$_COOKIE['model'] . $color . ".jpg' />";
    }
    ?>

    <br>
    <!--Path changed for replit compatibility
    <a href="order.php">Place another order</a>
    -->
    <a href="getPayment.php">Procced to Payment</a>
</div>
</body>
</html>