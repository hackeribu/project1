<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reservation Form In HTML and CSS</title>
	<link rel="stylesheet" href="register.css">
	<form action="connect4.php" method="POST">
</head>
<body>
	
<div class="wrapper">
	<div class="registration_form">
		<div class="title">
			Reservation Form
		</div>

		<form>
			<div class="form_wrap">
				<div class="input_grp">
					<div class="input_wrap">
						<label for="fname">First Name</label>
						<input type="text" id="fname" name="firstname">
					</div>
					<div class="input_wrap">
						<label for="lname">Last Name</label>
						<input type="text" id="lname" name="lastname">
					</div>
				</div>
           
                <div class="input_wrap">
					<label for="email">Coming From</label>
					<input type="text" id="email" name="comingfrom">
				</div>
                <div class="input_wrap">
					<label for="email">Destination</label>
					<input type="text" id="email" name="destination">
				</div>
                <div class="input_wrapone">
					<label for="email">Departing
                    </label>
					<input type="date" id="email" name="departing">
				</div>
                <br>
                <div class="input_wrapone">
					<label for="email">Returning</label>
					<input type="date" id="email" name="returning">
				</div>
				<br>
						<div class="input_wrap">
							<label for="city">Children</label>
							<input type="text" id="city" name="children">
						</div>
		
						<div class="input_wrap">
							<label for="city">Adults</label>
							<input type="text" id="city" name="adults">
						</div>
						
						<div class="input_wrap">
							<input type="submit" value="Confirm Booking" class="submit_btn">
						</div>
					</div>
				</form>
			</div>
		</div>
                       
</form>

</body>
</html>/