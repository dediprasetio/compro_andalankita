import { viewAllArea } from "./initArea.js";

export function initAction() {
	/*******************************************************************************************
								VALIDATE INPUT DATA SUPPLIER
	*******************************************************************************************/
	$("form[name='add-area']").validate({
		// Specify validation rules
		rules: {
			asset_cateegory_name: "required",
		},
		// Specify validation error messages
		messages: {
			asset_cateegory_name: "Jenis aset harus diisi",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/area/add",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("#modal_form_add").modal("hide");
					$("form[name='add-area']")[0].reset();
					pnotifySuccess(res.status, res.message);
					viewAllArea();
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
	$("#table-body-area").on("click", ".btn-edit", function () {
		var id = $(this).data("id");
		$.ajax({
			url: rootApp + "api/area/get-by-id",
			type: "GET",
			data: {
				id: id,
			},
			dataType: "json",
			success: function (res) {
				const data = res.data[0];
				$("#modal_form_edit").modal("show");
				$("#area_id").val(data.area_id);
				$("#area_name").val(data.area_name);
				$("#city_id").val(data.city_id);
				console.log(data.city_id);
				$("#area_description").val(data.area_description);
			},
			error: function (request, error) {
				// console.log("Request: " + JSON.stringify(request));
			},
		});
	});

	$("form[name='edit-area']").validate({
		// Specify validation rules
		rules: {
			area_name: "required",
		},
		// Specify validation error messages
		messages: {
			area_name: "Masukan jenis aset",
		},
		submitHandler: function (form) {
			try {
				$.ajax({
					url: rootApp + "api/area/edit",
					type: "POST",
					data: $("#edit-area").serialize(),
					dataType: "json",
					success: function (res) {
						$("#modal_form_edit").modal("hide");
						pnotifySuccess(res.status, res.message);
						viewAllArea();
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
