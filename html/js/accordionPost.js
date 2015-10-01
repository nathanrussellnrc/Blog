$(document).ready(function() {
	$(".postTitle.accordion").click(function() {
		postModel($(this));
	});
});

function postModel(clickedButton) {
	var innerCircle = clickedButton.children(".postButton").children(".innerCircle")
	var postBody = clickedButton.parent().children(".postBody")
	var currentState = innerCircle.attr("class")
	switch (currentState) {
		case "innerCircle":
			innerCircle.attr("class", "innerCircle shrunk");
			postBody.attr("class", "postBody collapsed");
			break;
		case "innerCircle shrunk":
			innerCircle.attr("class", "innerCircle");
			postBody.attr("class", "postBody");
			break;
	}

}
