$(document).ready(function() {
	$(".headerItem").click(function() {
		menuModel($(this));
	});
});

function menuModel(clickedButton) {
	var menu = clickedButton.parent().parent().children("#menu");
	var currentState = clickedButton.attr("class")
	switch (currentState) {
		case "headerItem light":
			clickedButton.attr("class", "headerItem");
			menu.attr("class", "collapsed");
			break;
		case "headerItem":
			clickedButton.attr("class", "headerItem light");
			menu.attr("class", "");
			break;
	}

}
