import { viewAllOwner } from "./initOwner.js";

export function initAction() {
	/*******************************************************************************************
                                VALIDATE INPUT DATA SUPPLIER
    *******************************************************************************************/
	$("form[name='add-owner']").validate({
		// Specify validation rules
		rules: {
			owner_name: "required",
			owner_type: "required",
			owner_photo: "required",
			// owner_phone_number: "required",
		},
		// Specify validation error messages
		messages: {
			owner_name: "Masukan pemilik",
			owner_type: "Pilih tipe kepelikan",
			owner_photo: "Pilih foto owner",
			// owner_phone_number: "Masukan No. Telp",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/owner/add",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("#modal_form_add").modal("hide");
					$("form[name='add-owner']")[0].reset();
					pnotifySuccess(res.status, res.message);
					viewAllOwner();
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
	$("#table-body-owner").on("click", ".btn-edit-foto", function () {
		$("#modal_form_edit_foto").modal("show");
		var id = $(this).data("id");
		$("#update_foto_owner_id").val(id);
	});

	$("form[name='update-foto-owner']").validate({
		// Specify validation rules
		rules: {
			owner_photo: "required",
		},
		// Specify validation error messages
		messages: {
			owner_photo: "Pilih foto profil",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/owner/update-photo",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("#modal_form_edit_foto").modal("hide");
					$("form[name='update-foto-owner']")[0].reset();
					pnotifySuccess(res.status, res.message);
					viewAllOwner();
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
	$("#table-body-owner").on("click", ".btn-edit", function () {
		var id = $(this).data("id");
		$.ajax({
			url: rootApp + "api/owner/get-by-id",
			type: "GET",
			data: {
				id: id,
			},
			dataType: "json",
			success: function (res) {
				const data = res.data[0];
				$("#modal_form_edit").modal("show");
                $("#owner_id").val(data.owner_id);
                $("#owner_name").val(data.owner_name);
                $("#owner_type").val(data.owner_type);
                $("#owner_photo").val(data.owner_photo);
                $("#id_number_type").val(data.id_number_type);
                $("#owner_phone_number").val(data.owner_phone_number);
                $("#owner_email").val(data.owner_email);
                $("#address").val(data.address);
			},
			error: function (request, error) {
				// console.log("Request: " + JSON.stringify(request));
			},
		});
	});

	$("form[name='edit-owner']").validate({
	    // Specify validation rules
		rules: {
			owner_name: "required",
			owner_type: "required",
			owner_phone_number: "required",
		},
		// Specify validation error messages
		messages: {
			owner_name: "Masukan pemilik",
			owner_type: "Pilih tipe kepelikan",
			owner_phone_number: "Masukan No. Telp",
		},
	    submitHandler: function (form) {
	        try {
	            $.ajax({
	                url: rootApp + "api/owner/edit",
	                type: "POST",
                	data: $("#edit-owner").serialize(),
	                dataType: "json",
	                success: function (res) {
	                    $("#modal_form_edit").modal("hide");
	                    pnotifySuccess(res.status, res.message);
	                    viewAllOwner();
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

	/*******************************************************************************************
                                    ON CLICK BUTTON DELETE
    *******************************************************************************************/
	$("#table-body-owner").on("click", ".btn-delete", function () {
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
				url: rootApp + "api/owner/delete",
				type: "POST",
				data: { id: id },
				dataType: "json",
				success: function (res) {
					pnotifySuccess(res.status, res.message);
					viewAllOwner();
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		});
	});
}
