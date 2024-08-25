function pnotifySuccess(
	title = "Sucess",
	text = "Sucess"
) {
	new PNotify({
		title: title,
		text: text,
		addclass: "alert alert-styled-left",
		type: "success",
	});
}

function pnotifyError(
	title = "Error",
	text = "Something went wrong please try again"
) {
	new PNotify({
		title: title,
		text: text,
		addclass: "alert alert-warning alert-styled-left",
		type: "error",
	});
}

function pnotifyInfo(
	title = "Info",
	text = "Info"
) {
	new PNotify({
		title: title,
		text: text,
		addclass: "alert alert-styled-left",
		type: "info",
	});
}