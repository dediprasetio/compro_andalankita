import { viewAllAssetCategory } from "./initAssetCategory.js";

export function initAction() {
	/*******************************************************************************************
								VALIDATE INPUT DATA SUPPLIER
	*******************************************************************************************/
	$("form[name='add-asset-category']").validate({
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
				url: rootApp + "api/asset-category/add",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("#modal_form_add").modal("hide");
					$("form[name='add-asset-category']")[0].reset();
					pnotifySuccess(res.status, res.message);
					viewAllAssetCategory();
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
	$("#table-body-asset-category").on("click", ".btn-edit", function () {
		var id = $(this).data("id");
		$.ajax({
			url: rootApp + "api/asset-category/get-by-id",
			type: "GET",
			data: {
				id: id,
			},
			dataType: "json",
			success: function (res) {
				const data = res.data[0];
				$("#modal_form_edit").modal("show");
				$("#asset_category_id").val(data.asset_category_id);
				$("#asset_category_name").val(data.asset_category_name);
			},
			error: function (request, error) {
				// console.log("Request: " + JSON.stringify(request));
			},
		});
	});

	$("form[name='edit-asset-category']").validate({
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
					url: rootApp + "api/asset-category/edit",
					type: "POST",
					data: $("#edit-asset-category").serialize(),
					dataType: "json",
					success: function (res) {
						$("#modal_form_edit").modal("hide");
						pnotifySuccess(res.status, res.message);
						viewAllAssetCategory();
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
