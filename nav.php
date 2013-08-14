<?php

	$dropjava = dropdown("Java",array(
		href("java.php", "Java Tutorials"),
		href("javaref.php", "Java Reference")	
	));
	$drop1 = dropdown("Bukkit", array(
		href("bukkit.php", "Bukkit API Tutorials"),
		href("bukkitref.php", "Bukkit API Reference")
	));
	$dropmc = dropdown("Minecraft", array(
		href("minecraft.php", "Minecraft Modding Tutorials"),
		href("minecraftref.php", "Minecraft Modding Reference")
	));
	echo <<<"EOF"
	<nav class="navbar" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">{$sitename}</a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="{$hactive}"><a href="#">Home</a></li>
      
      {$dropjava}
      {$drop1} 
      {$dropmc}
    </ul>
    <form class="navbar-form navbar-right" action="" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Go</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
EOF
?>