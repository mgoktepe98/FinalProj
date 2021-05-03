<html>
	<head>
		<title>Get card!</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="banner">
         		Webengers Secret Travel Agency 
      		</div> 
		<h1>Your payment is successfully processed!</h1>

		<p>Thank you for using our site :)</p>
									
		<?php						
			if(isset($_POST['Name']) && isset($_POST['month']) && (!empty($_POST['card'])) && isset($_POST['cardNum']) && isset($_POST['year']) &&isset($_POST['CVV'])) {
				$data = $_POST['Name'] . ';' . $_POST['cardNum'] . ';' . $_POST['card'] . ';' . $_POST['CVV'] . ';' . $_POST['month'] . ';' . $_POST['year'] ."\r\n";
				$ret = file_put_contents('data.html', $data, FILE_APPEND | LOCK_EX);			
			}
			else {
				echo '<script>alert("Please fill in all boxes")</script>';
				echo '<script>window.history.back() </script>';				
			}
		?>				
		<a href="payment.html">Go back</a>
	</body>
</html> 
