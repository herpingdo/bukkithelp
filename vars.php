<?php
	$f = str_replace(".php", "", basename($_SERVER["SCRIPT_NAME"]));
////echo "PENIS PENIS PENIOS";
	//include_once("");

	$sitename = "Test";

	function dropdown($name, $items, $active=false) {
		$cl = "";
		if ($active) {
			$cl = "active";
		}
		$r = <<<"EOF"
		<li class="dropdown {$active}">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{$name} <b class="caret"></b></a>
        <ul class="dropdown-menu">
EOF;
	foreach ($items as $item) {
		$r .= <<<"EOF"
		<li>{$item}</li>
EOF;
	}
$r .= <<<"EOF"
        </ul>
      </li>
EOF;
	return $r;
	}

	function href($link, $title, $active=false) {
		//return "NULL NULL NULL";
		$cl = "";
		if ($active) {
			$cl = "active";
		}
		return '<a class="' . $cl . '" href="' . $link . '">' . $title . '</a>';
	}

	function qali($name, $desc) {
		$r = <<<"EOF"
		        <a href="#" class="list-group-item qali">
					<h4 class="list-group-item-heading">{$name}</h4>
			  		<p class="list-group-item-text" style="display: none;" class="qali-p">{$desc}</p>
			    </a>
EOF;

		return $r . "\n";
	}

	function readall($file) {
		//echo $file;
		$txt = file_get_contents($file);
		//echo $txt;
		return explode("\n", $txt);
	}

	function tutorial($n) {
		//echo $n;
			$f = str_replace(".php", "", basename($_SERVER["SCRIPT_NAME"]));

		//echo $f;
		$string = "tutorials/{$f}/{$n}.txt";
		//echo $string;
		$cont = readall($string);
		//var_dump($cont);
		$ckc = 0;
		$ret = "";
		foreach ($cont as $line) {
			if ($ckc < 2) {
				$ckc++;
				continue;
			}
			$ret .= $line . "\n";
		}
		return $ret;
	}

	function tutorial2($n, $cat) {
		//echo $f;
		$string = "tutorials/{$cat}/{$n}.txt";
		//echo $string;
		$cont = readall($string);
		//var_dump($cont);
		$ckc = 0;
		$ret = "";
		foreach ($cont as $line) {
			if ($ckc < 2) {
				$ckc++;
				continue;
			}
			$ret .= $line . "\n";
		}
		return $ret;
	}
?>