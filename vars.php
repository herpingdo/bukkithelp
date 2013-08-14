<?php
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
?>