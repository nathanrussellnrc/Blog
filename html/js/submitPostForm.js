$(document).ready(function() {
	$(".postButton.submit").click(function() {
		postFormModel($(this));
	});
});

function postFormModel(clickedButton) {
	clickedButton.parent().parent().parent().submit();
}
