import { viewAllProperty, countProperty } from "./initProperty.js";

export function initAction() {
	/*******************************************************************************************
									ON CLICK BUTTON EDIT
	*******************************************************************************************/
	$("#table-body-property").on("click", ".btn-edit", function () {
		var id = $(this).data("id");
		$.ajax({
			url: rootApp + "api/property/get-by-id",
			type: "GET",
			data: {
				id: id,
			},
			dataType: "json",
			success: function (res) {
				const data = res.data;
				const dataProperty = data.property;
				const dataAreas = data.areas;

				//Dom area option
				let areaOption = `<option value="">-- Pilih Area Properti --</option>`;
				$.each(dataAreas, function (index, key) {
					areaOption += `<option value="${key.area_id}">${key.area_name}</option>`;
				})
				$('.area-form-update').html(areaOption)

				$("#modal_form_edit").modal("show");
				$("#property_id").val(dataProperty.property_id);
				$("#property_title").val(dataProperty.property_title);
				$("#asset_category_id").val(dataProperty.asset_category_id);
				$("#property_description").val(dataProperty.property_description);
				$("#sale_type").val(dataProperty.sale_type);
				$("#tag_code").val(dataProperty.tag_code);
				$("#address").val(dataProperty.address);
				$("#unit_number").val(dataProperty.unit_number);
				$("#area_id").val(dataProperty.area_id);
				$("#city_id").val(dataProperty.city_id);
				$("#land_area").val(dataProperty.land_area);
				$("#building_area").val(dataProperty.building_area);
				$("#bedroom").val(dataProperty.bedroom);
				$("#bathroom").val(dataProperty.bathroom);
				$("#price").val(dataProperty.price);
				$("#agent_id").val(dataProperty.agent_id);
				$("#fee").val(dataProperty.fee);
				$("#owner_id").val(dataProperty.owner_id);
			},
			error: function (request, error) {
				// console.log("Request: " + JSON.stringify(request));
			},
		});
	});

	/*******************************************************************************************
									ON CLICK BUTTON DELETE
	*******************************************************************************************/
	$("#table-body-property").on("click", ".btn-delete", function () {
		var id = $(this).data("id");
		// Setup
		var notice = new PNotify({
			title: "Konfirmasi",
			text: "<p>Apakah anda yakin ingin menghapus baris ini? Anda tidak dapat mengembalikannya.</p>",
			hide: false,
			type: "warning",
			confirm: {
				confirm: true,
				buttons: [
					{
						text: "Ya, Hapus",
						addClass: "btn btn-sm btn-primary",
					},
					{
						text: "Batal",
						addClass: "btn btn-sm btn-link",
					},
				],
			},
			buttons: {
				closer: false,
				sticker: false,
			},
		});

		// On Comfirm
		notice.get().on("pnotify.confirm", function () {
			$.ajax({
				url: rootApp + "api/property/delete",
				type: "POST",
				data: { id: id },
				dataType: "json",
				success: function (res) {
					pnotifySuccess(res.status, res.message);
					viewAllProperty();
					countProperty()
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		});
	});

	/*******************************************************************************************
								UPLOAD PROPERTIES
	*******************************************************************************************/
	$("form[name='upload-excel']").validate({
		// Specify validation rules
		rules: {
			file: "required",
		},
		// Specify validation error messages
		messages: {
			file: "Pilih file excel yang akan di upload",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$('.loader-import').removeClass("d-none")
			$.ajax({
				url: rootApp + "api/import/properties",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("form[name='upload-excel']")[0].reset();
					pnotifySuccess(res.status, res.message);
					viewAllProperty()
					countProperty()
					$('.loader-import').addClass("d-none")
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		},
	});
}