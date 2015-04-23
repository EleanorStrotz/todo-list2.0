<?php 
// looks for/links navigation.php config.php
	require_once(__DIR__ . "/../model/config.php");
?>
<nav>
	<ul>
	<!-- links you to post.php -->
		
		<li><a href="<?php echo $path . "login.php"?>">Login user</a></li>
		<li><a href="<?php echo $path . "register.php"?>">Register</a></li>
	</ul>

</nav>