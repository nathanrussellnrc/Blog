<?php
	$title="Send Post";
	$metadata=array("inc/metadataBody.html", "inc/metadataMenu.html", "inc/metadataPost.html", "inc/metadataPostForm.html");
	$content="inc/postForm.php";
	include "inc/redirect.php";
	if (isset($_GET["title"])) {
		include "../connections/connect.php";
		echo $_GET["title"];
		$connection->query("INSERT INTO posts (title, body) VALUES ('".$_GET["title"]."', '".$_GET["body"]."')");
		include "inc/disconnect.php";
	}
	include "inc/menu.php";
	include "inc/template.php";
?>