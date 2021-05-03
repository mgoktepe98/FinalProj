<html>
<head>
    <title>Order Confirmation</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="pageContainer centerText">

    <p></p>
    <h2>Order Confirmation</h2>
    <?php
    //must arrive from order02.php
    $referrer = $_SERVER['HTTP_REFERER'];
    if (stripos($referrer, 'Order2.php') == false) header("location:Order1.php");
    
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
    <a href="Order1.php">Place another order</a>

</div>
</body>
</html>