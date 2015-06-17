<!DOCTYPE html>
<html>

	<head>
	<meta charset="utf-8">
		<title>ShoutBox</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

		<div id="container">

			<header>
				<h1>SHOUT IT! ShoutBox</h1>
			</header>

			<div id="shouts">
				<ul>
					<li class="shout"><span>10:15pm - </span> Bob: Hey what are you up to? </li>
					<li class="shout"><span>10:15pm - </span> Bob: Hey what are you up to? </li>
					<li class="shout"><span>10:15pm - </span> Bob: Hey what are you up to? </li>
					<li class="shout"><span>10:15pm - </span> Bob: Hey what are you up to? </li>
					<li class="shout"><span>10:15pm - </span> Bob: Hey what are you up to? </li>
					<li class="shout"><span>10:15pm - </span> Bob: Hey what are you up to? </li>
				</ul>
			</div> <!-- shouts -->
			<div id="input">
				<form method="post" action="process.php">
					<input type="text" name="user" placeholder="Enter Your Name">
					<input type="text" name="message" placeholder="Enter a Message">
					<br>
					<input class="shout-btn" type="submit" name="submit" value="Shout It Out">
				</form>
			</div> <!-- input -->
		</div> <!-- container -->

	</body>
</html>