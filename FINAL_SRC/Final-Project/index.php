<html>
   <head>
      <title>Select Model</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
   <div id="banner">
    Webengers Secret Travel Agency
   </div>
      <div class="pageContainer">
         <h2 class="centerText">Select Model</h2>
         <form action="order2.php" class="formLayout">
            <div class="formGroup">
               <label>First name:</label>
               <input type="text" name="fname" class="textbox" autofocus required
                      placeholder="First name" title="first name" maxlength="20" pattern="[A-Za-z'-]{2,20}" />
            </div>
            <div class="formGroup">
               <label> Car model:</label>
               <div class="formElements">
                  <input type="radio" name="model" required value="mustang">Ford Mustang<br>
                  <input type="radio" name="model" required value="subaru">Subaru WRX STI<br>
                  <input type="radio" name="model" required value="corvette">Corvette<br>
               </div>
            </div>
            <div class="formGroup">
               <label> Parking Package:</label>
               <div class="formElements">
                  <input type="radio" name="park">Normal Parking<br>
                  <input type="radio" name="park" >Parking +<br>
                  <input type="radio" name="park" >VIP Parking<br>
                  <input type="radio" name="park" >VIP +<br>
               </div>
            <div class="formGroup">
               <label></label>
               <button type="submit"> >> Next >> </button>
            </div>
            <div class="centerText vertGap55">
                              
                              <br><br>
            <a href="?">Reload page</a>
            </div>
      </div>
   </form>
</div>
</body>
</html>