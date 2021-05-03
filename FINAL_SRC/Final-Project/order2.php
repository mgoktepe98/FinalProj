<?php
   $fname = $_REQUEST['fname'];
   $model = $_REQUEST['model'];
   setcookie("fname",$fname, time() + 86400);
   setcookie("model",$model, time() + 86400);
?>
<html>
   <head>
      <title>Select Color</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>

<div id="banner">
    Webengers Secret Travel Agency
   </div>

      <div class="pageContainer centerText">
   <p></p>
         <h2 class="centerText">Select Color</h2>
         <div class="pageContainer">
         <!--Pathing Test 
            <form action="order3.php" class="formLayout">
        -->
            <form action="order3.php" class="formLayout">
               <div class="formGroup">
                  <label>Car color:</label>
                  <div class="formElements">
                     <select name="color" required >
                        <option  value=""></option>
                        <option style="background-color: blue; color:white;" value="blue">Blue</option>
                        <option style="background-color: red" value="red">Red</option>
                        <option style="background-color: yellow" value="yellow">Yellow</option>
                     </select>
                  </div>
               </div>
               <div class="formGroup">
                  <label></label>
                  <button type="submit"> >> Next >> </button>
               </div>
               <div class="centerText vertGap55">
      
                  <a href="?">Reload page</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>