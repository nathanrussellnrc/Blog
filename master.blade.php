<html>
	<head>
		@yield ("metadata")
	</head>
	<body>
		<div id="header">
			<div class="headerItem">
				<span>Menu</span>
			</div>
		</div>
		<div id="menu" class="collapsed">
			<a class="menuItem" href="home">Home</a>
			<a class="menuItem" href="sendPost">Send Post</a>
		</div>
		<div id="feed">
			@yield ("content")
		</div>
	</body>
</html>
