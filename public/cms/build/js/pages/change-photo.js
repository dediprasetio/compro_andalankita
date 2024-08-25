document.addEventListener("DOMContentLoaded", function () {
	if ($("form[name='change-photo']").length > 0) {
		$("form[name='change-photo']").validate({
			// Specify validation rules
			rules: {
				photo: "required",
			},
			// Specify validation error messages
			messages: {
				photo: "Photo is required",
			},
			submitHandler: function (form) {
				var formData = new FormData(form);

				$.ajax({
					type: "POST",
					url: rootApp + "api/auth/change-photo",
					dataType: "json",
					data: formData,
					mimeType: "multipart/form-data",
					contentType: false,
					processData: false,
					success: function (res) {
						if ($(".image-profile").length > 0) {
							$(".image-profile").html(
								`<a href="#"><img src="${rootApp}public/images/profile/${res.data.photo}" width="38" height="38" class="rounded-circle" alt=""></a>`
							);
						}
						$("#modal-change-photo").modal("hide");
						pnotifySuccess(res.status, res.message);
					},
					error: function (request, error) {
						pnotifyError("Error", JSON.stringify(request.statusText));
					},
				});
			},
		});
	}
});
