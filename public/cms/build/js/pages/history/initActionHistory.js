export function initAction() {
	/*******************************************************************************************
                                    ON CLICK BUTTON EDIT
    *******************************************************************************************/
	$("form[name='edit']").validate({
		// Specify validation rules
		rules: {
			page_title: "required",
			short_descryption: "required",
		},
		// Specify validation error messages
		messages: {
			page_title: "Masukan judul",
			short_descryption: "Deskripsikan agenda secara singkat",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			const content_data = CKEDITOR.instances.editor_full.getData();
			formData.set('page_content', content_data);
			$.ajax({
				url: rootApp + "api/page/update",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					pnotifySuccess(res.status, res.message);
					if(res.data.photo != null){
						$('#curent_photo').html(`<img src="${rootApp}public/global-images/pages/${res.data.photo}"
								class=" mr-2" height="45" width="45" alt="">
							<label for="" id="foto_existing">${res.data.photo}</label>`)
					}
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		},
	});
}
