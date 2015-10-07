<html>
	<head>
		{{ HTML::style('css/master.css'); }}
		{{ HTML::style('css/menu.css'); }}
		{{ HTML::script('js/accordionMenu.js'); }}
		{{ HTML::style('css/post.css'); }}
		{{ HTML::script('js/accordionPost.js'); }}
		{{ HTML::style('css/postForm.css'); }}
		{{ HTML::script('js/submitPostForm.js'); }}
		@yield "metadata"
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
			@yield "content"
			@include "view.loginStatusBar"
		</div>
	</body>
</html>
