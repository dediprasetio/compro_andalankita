import { viewAllCity } from "./initCity.js";

export function initAction() {
	/*******************************************************************************************
								VALIDATE INPUT DATA SUPPLIER
	*******************************************************************************************/
	$("form[name='add-city']").validate({
		// Specify validation rules
		rules: {
			city_name: "required",
		},
		// Specify validation error messages
		messages: {
			city_name: "Jenis aset harus diisi",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/city/add",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("#modal_form_add").modal("hide");
					pnotifySuccess(res.status, res.message);
					$("form[name='add-city']")[0].reset();
					viewAllCity();
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		},
	});


	/*******************************************************************************************
									ON CLICK BUTTON EDIT
	*******************************************************************************************/
	$("#table-body-city").on("click", ".btn-edit", function () {
		var id = $(this).data("id");
		$.ajax({
			url: rootApp + "api/city/get-by-id",
			type: "GET",
			data: {
				id: id,
			},
			dataType: "json",
			success: function (res) {
				const data = res.data[0];
				$("#modal_form_edit").modal("show");
				$("#city_id").val(data.city_id);
				$("#city_name").val(data.city_name);
			},
			error: function (request, error) {
				// console.log("Request: " + JSON.stringify(request));
			},
		});
	});

	$("form[name='edit-city']").validate({
		// Specify validation rules
		rules: {
			asset_category_name: "required",
		},
		// Specify validation error messages
		messages: {
			asset_category_name: "Masukan jenis aset",
		},
		submitHandler: function (form) {
			try {
				$.ajax({
					url: rootApp + "api/city/edit",
					type: "POST",
					data: $("#edit-city").serialize(),
					dataType: "json",
					success: function (res) {
						$("#modal_form_edit").modal("hide");
						pnotifySuccess(res.status, res.message);
						viewAllCity();
					},
					error: function (request, error) {
						pnotifyError('Error', JSON.stringify(request.statusText));
					},
				});
			} catch (error) {
				console.log(error);
			}
		},
	});
}
