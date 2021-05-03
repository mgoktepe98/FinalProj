<html>
	<head>
		<title>Payment</title>
		<link href="style1.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<div id="banner">
         		Webengers Secret Travel Agency 
    </div> 
		<h1> Payment </h1>		
		<br> 		
		<h2> Payment Method Details </h2>
		<form action="payment.php" method="post">
			<label for="Name"> <strong>Account number</strong></label><br><br>
			<input placeholder = "Card number" maxlength="16" type="text" id="cardNum" name="cardNum" required><br><br>
      <strong><div id="card-type"></div> </strong></br></br>

			<label for="Name"> <strong>Name on Account</strong></label><br><br>	
			<input placeholder = "Name on card" type="text" id="Name" name="Name" required><br><br>
			
			<br>
			<label for="CVV"> <strong>CVV</strong></label><br><br>
			<input placeholder = "CVV" style="width:100 ;" type="text" id="CVV" name="CVV" required><br><br>
			
			<label for="month"><strong> Expired month </strong></label><br><br>
			<select style="width:150 ;" name="month" required>
				<option > (Choose month) </option>
				<option value="01"> 01 </option>
				<option value="02"> 02</option>
				<option value="03"> 03 </option>
				<option value="04"> 04 </option>
				<option value="05"> 05 </option>
				<option value="06"> 06 </option>
				<option value="07"> 07 </option>
				<option value="08"> 08 </option>
				<option value="09"> 09 </option>
				<option value="10"> 10 </option>
				<option value="11"> 11 </option>
				<option value="12"> 12 </option>				
			</select>
			
			<br><br>
			
			<label for="year"> <strong>Expired year</strong></label><br><br>
			<input placeholder="Expired year" style="width:150 ;" type="text" id="year" name="year" required><br><br>
			
			<input type="submit" value="Continue">
			
		</form>
    <script type="text/javascript" src="cc.js"></script>
	<body>

</html>