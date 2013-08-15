<?php
		include_once("vars.php");

	echo <<<"EOF"
<head>
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"></link>
		<link rel="stylesheet" type="text/css" href="style.css"></link>
		<script src="script.js"></script>
EOF;
	echo "\n";
	$hactive = "";
	$jactive = "";
	$title = "{$sitename} | ";
	$homeref = "index.php";
	switch ($f) {
		case "index":
			$title .= "Index";
			$hactive = "active";
			$homeref = "#";
			break;
		case "java":
			$title .= "Java Tutorials";
			$jactive = "active";
			break;
		case "bukkit":
			$title .= "Bukkit API Tutorials";
			break;
		case "tview":
			$title .= "Tutorial Viewer";

	}

	echo <<<"EOF"
		<title>{$title}</title>
	</head>
EOF;

echo "\n";
?>