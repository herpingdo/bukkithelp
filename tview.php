<html>
	<!-- Before you insult our website coding skills, please note that it is autogenerated with PHP, so the HTML is ugly. -->
	<?php include_once("header.php"); ?>
	<body>
		<?php include_once("nav.php"); include_once("vars.php"); ?>

		<div class="container">
			<div class="well">
				<?php
					$category = $_GET["cat"];
					$id = $_GET["id"];
					if (!isset($category) || !isset($id)) {
						echo "<h1>Invalid ID/Category specified.</h1>";
					} else {
						$tut = tutorial2($id, $category);
						if ($tut == "") {
							echo "<h1>ID or category not found.</h1>";
							echo "<h5>This most likely means you reached the end of the tutorial series.</h5>";
						} else {
							echo $tut;
						}
					}
					$iid = intval($id);
				?>
				<div align="right">
				<?php
				$prev = $iid - 1;
				$next = $iid + 1;
				echo <<<"EOF"
					<button class="btn btn-primary pointer" onclick="go('tview.php?cat={$category}&id={$prev}');">Previous</button>
EOF;
				if ($tut != "") {
					echo <<<"EOF"
						<button class="btn btn-primary pointer" onclick="go('tview.php?cat={$category}&id={$next}');">Next</button>

EOF;
				}
?>
				</div>
			</div>
		</div>
	</body>
</html>