<div class="post">
	<div class="postTitle accordion">
		<h1>
			<?php
				echo $post["id"];
				echo ": ";
				echo $post["title"];
			?>
		</h1>
		<?php include $post["button"]?>
	</div>
	<div class="postBody">
		<?php
			echo $post["body"];
		?>
	</div>
</div>
