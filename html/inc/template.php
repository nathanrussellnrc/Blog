<?php
	session_start();
	if (isset($_GET["username"])) {
		include "../connections/connect.php";
		$result=$connection->query("SELECT * FROM login WHERE username='".$_GET["username"]."' AND password='".$_GET["password"]."'");
		$login=$result->fetch_assoc();
		$count=$result->num_rows;
		if ($count >= 1) {
			$_SESSION["username"]=$login["username"];
		}
		include "inc/disconnect.php";
	}
?>
<html>
	<head>
		<?php
			echo "<title>".$title."</title>";
			foreach ($metadata as $item) {
				include $item;
			}
		?>
	</head>
	<body>
		<div id="header">
			<div class="headerItem">
				<span>Menu</span>
			</div>
		</div>
		<div id="menu" class="collapsed">
			<?php
				foreach ($menu as $item) {
					echo "<a class='menuItem' href='".$item["href"]."'>".$item["text"]."</a>";
				}
			?>
		</div>
		<div id="feed">
			<?php
				include $content;
			?>
				<?php
					if (!isset($_SESSION["username"])) {
						echo "<form id='login'>";
						$post["id"]="";
						$post["title"]="Username <textarea class='formInputTitle' form='login' name='username' title='username'></textarea> Password <textarea class='formInputTitle' form='login' name='password' title='password'></textarea>";
						$post["button"]="inc/postButtonLogin.html";
						$post["body"]="";
						include "inc/post.php";
						echo "</form>";
					} else {
						echo "<form action='logout.php'>";
						$post["id"]="";
						$post["title"]="Logout (".$_SESSION["username"].")";
						$post["button"]="inc/postButtonLogout.html";
						$post["body"]="";
						include "inc/post.php";
						echo "</form>";
					}
				?>
			</form>
		</div>
	</body>
</html>
