<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
	<div id="frm">
		<form action="process.php" method="POST">
			<p>
					<label>USERNAME:</label>
					<input type="text" id="user" name="user" />
			</p>
			<p>
					<label>PASSWORD:</label>
					<input type="password" id="pass" name="pass" />
			</p>
			<p>
					<input type="submit" id="btn" name="login" />
			</p>

		</form>

	</div>
</body>