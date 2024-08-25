import { viewAllAdvertisement } from "./initAdvertisement.js";

export function initAction() {
	/*******************************************************************************************
                                VALIDATE INPUT DATA SUPPLIER
    *******************************************************************************************/
	$("form[name='add']").validate({
		// Specify validation rules
		rules: {
			title: "required",
			description: "required",
			photo: "required",
			status_id: "required",
		},
		// Specify validation error messages
		messages: {
			title: "Masukan judul",
			description: "Deskripsikan agenda secara singkat",
			photo: "Pilih foto",
			status_id: "Pilih status",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/advertisement/add",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("#modal_form_add").modal("hide");
					$("form[name='add']")[0].reset();
					pnotifySuccess(res.status, res.message);
					viewAllAdvertisement();
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
	$("#table-body-user").on("click", ".btn-edit", function () {
		var id = $(this).data("id");
		$.ajax({
			url: rootApp + "api/advertisement/get-by-id",
			type: "GET",
			data: {
				id: id,
			},
			dataType: "json",
			success: function (res) {
				const data = res.data[0];
				$("#modal_form_edit").modal("show");
                $("#id").val(data.id);
                $("#title").val(data.title);
                $("#foto_existing").html(data.photo);
				$('#img_foto_existing').attr('src', rootApp+'public/global-images/advertisement/'+data.photo);
                $("#description").val(data.description);
                $("#status_id").val(data.status_id);
			},
			error: function (request, error) {
				// console.log("Request: " + JSON.stringify(request));
			},
		});
	});

	$("form[name='edit']").validate({
	    // Specify validation rules
		rules: {
			title: "required",
			description: "required",
			status_id: "required",
		},
		// Specify validation error messages
		messages: {
			title: "Masukan judul",
			description: "Deskripsikan agenda secara singkat",
			status_id: "Pilih status",
		},
	    submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/advertisement/update",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("#modal_form_edit").modal("hide");
					pnotifySuccess(res.status, res.message);
					viewAllAdvertisement();
				},
				error: function (request, error) {
					pnotifyError('Error', JSON.stringify(request.statusText));
				},
			});
	    },
	});

	/*******************************************************************************************
                                    ON CLICK BUTTON DELETE
    *******************************************************************************************/
	$("#table-body-user").on("click", ".btn-delete", function () {
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
				url: rootApp + "api/advertisement/delete",
				type: "POST",
				data: { id: id },
				dataType: "json",
				success: function (res) {
					pnotifySuccess(res.status, res.message);
					viewAllAdvertisement();
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		});
	});
}
