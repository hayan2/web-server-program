<?php
	session_start();
	if (isset($_SESSION["userid"])) {
		$userid = $_SESSION["userid"];
	}
	else {
		$userid = "";
	}

	if (isset($_SESSION["username"])) {
		$username = $_SESSION["username"];
	}
	else {
		$username = "";
	}

	if (isset($_SESSION["userlevel"])) {
		$username = $_SESSION["userlevel"];
	}
	else {
		$username = "";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WEB</title>
	<link rel="stylesheet" type="text/css" href="style_www.css">
</head>
<body>
	<header>
		<h3 class="logo">
			<a href="../main/index.php">KMCU COMPUTER</a>
		</h3>
		<ul class="top_menu">
			<?php
				if (!$userid) {
					echo "<li>Welcome</li>";
				}
				else {
					$logged = $username."(Level:".$userlevel.")";
				}
			?>
		</ul>

		<ul class="main_menu">
			<?php
				if (!$userid) {
			?>
					<li><a href="../member/index.php?type=form">Sign up</a></li>
					<li><a href="../member/index.php?type=login_form">Sign in</a></li>
			<?php
				}
				else {
			?>
					<li><a href="../member/logout.php">Log out</a></li>
					<li><a href="../member/index.php?type=modify_form">Setting</a></li>
			<?php
				}
			?>
			<li>|</li>
			<li><a href="../mboard/index.php?type=list&table=_notice">Notice</a></li>
			<li><a href="../mboard/index.php?type=list&table=_qna">Q&A</a></li>
			<li><a href="../mboard/index.php?type=listt&table=_youtube">YOUTUBE</a></li>			
		</ul>
	</header>
</body>
</html>