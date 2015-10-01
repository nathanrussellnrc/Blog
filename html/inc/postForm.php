<?php
	$post["id"]="";
	$post["title"]="<textarea class='formInputTitle' form='postForm' name='title'></textarea>";
	$post["button"]="inc/postButtonSend.html";
	$post["body"]="<textarea class='formInputBody' form='postForm' name='body'></textarea>";
?>
<form id="postForm">
	<?php
		include "inc/post.php";
	?>
</form>