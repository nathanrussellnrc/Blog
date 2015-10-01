<?php
	include "../connections/connect.php";
	$result=$connection->query("SELECT * FROM posts");
	while($post=$result->fetch_assoc()) {
		$post["button"]="inc/postButtonAccordion.html";
		include "inc/post.php";
	}
	include "inc/disconnect.php";
?>
