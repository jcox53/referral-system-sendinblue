<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Referral System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
	
	<?php 
	/* We only show the form if an referring email address has been designated in the url */
	if( isset($_GET['referrer']) ){ 
	?>

		<!-- The data submitted through the form will be transferred to the page backend.php via an HTTP request using the POST method -->
		<form action="backend.php" method="POST">
			<input name="invite" type="text" placeholder="Email address of your friend" />
			<!-- The referring email address included in the url is added to the form via a hidden button -->
			<input name="referrer" value="<?php echo $_GET['referrer']; ?>" type="hidden" />
			<input type="submit" value="invite">
		</form>

	<?php } else { ?>
	
	Unable to find referring email address.
	
	<?php } ?>
</body>
</html>
