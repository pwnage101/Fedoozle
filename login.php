<!DOCTYPE HTML>
<html>
<head>
<title>Fedoozle</title>
<link rel="SHORTCUT ICON" href="img/icon.ico" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<script type="text/javascript" src="jquery-1.6.4.min.js"></script>
</head>
<body>
<form name="login" action="login.php" method="post">

<div id="center-box">
	<div id="fields">
		<input id="username-clear" type="text" value="Username" />
		<input id="username-username" type="text" name="username" spellcheck="false"/>
		<input id="password-clear" type="text" value="Password" autocomplete="off" />
		<input id="password-password" type="password" name="password" autocomplete="off" />
	</div>
	<div id="buttons">
		<input id="login-button" type="submit" value="" />
		<input id="generate-button" type="submit" value="" />
	</div>
	<div id="cloud1"></div>
	<div id="cloud2"></div>
	<div id="cloud3"></div>
	<div id="logo">
		<?php
			$letters = array("F","e","d","o","o","z","l","e");
			for($i=0;$i<8;$i++) echo "<span>".$letters[$i]."</span>";
		?>
	</div>
</div>

</form>

<script type="text/javascript" src="util.js"></script>
</body>
</html>

