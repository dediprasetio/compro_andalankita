import { viewAllUser } from "./initUser.js";

export function initAction() {
	/*******************************************************************************************
                                VALIDATE INPUT DATA SUPPLIER
    *******************************************************************************************/
	$("form[name='add-user']").validate({
		// Specify validation rules
		rules: {
			user_full_name: "required",
			user_fullname: "required",
			user_name: "required",
			password: "required",
			id_card: "required",
			photo: "required",
			user_email: "required",
			user_phone_number: "required",
			user_level_id: "required",
			status: "required",
		},
		// Specify validation error messages
		messages: {
			user_full_name: "Masukan nama",
			user_fullname: "Masukan nama lengkap (sama dengan group properti)",
			user_name: "Masukan nama pengguna",
			password: "Masukan password",
			id_card: "Masukan nomor identitas",
			photo: "Pilih foto",
			user_email: "Masukan E-mail",
			user_phone_number: "Masukan no telfon",
			user_level_id: "Pilih tingkatan pengguna",
			status: "Pilih status pengguna",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/user/add",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("#modal_form_add").modal("hide");
					$("form[name='add-user']")[0].reset();
					pnotifySuccess(res.status, res.message);
					viewAllUser();
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		},
	});

	/*******************************************************************************************
								ON CLICK BUTTON EDIT PASSWORD
    *******************************************************************************************/
	$("#table-body-user").on("click", ".btn-edit-password", function () {
	$("#modal_form_edit_password").modal("show");
		var id = $(this).data("id");
		$("#update_password_user_id").val(id);
	});

	$("form[name='update-password-user']").validate({
		// Specify validation rules
		rules: {
			password: "required",
		},
		// Specify validation error messages
		messages: {
			password: "Masukan password baru",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/user/update-password",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("#modal_form_edit_password").modal("hide");
					$("form[name='update-password-user']")[0].reset();
					pnotifySuccess(res.status, res.message);
					viewAllUser();
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		},
	});
	
	/*******************************************************************************************
								ON CLICK BUTTON EDIT FOTO
    *******************************************************************************************/
	$("#table-body-user").on("click", ".btn-edit-foto", function () {
	$("#modal_form_edit_foto").modal("show");
		var id = $(this).data("id");
		$("#update_foto_user_id").val(id);
	});

	$("form[name='update-foto-user']").validate({
		// Specify validation rules
		rules: {
			photo: "required",
		},
		// Specify validation error messages
		messages: {
			photo: "Pilih foto profil",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/user/update-photo",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("#modal_form_edit_foto").modal("hide");
					$("form[name='update-foto-user']")[0].reset();
					pnotifySuccess(res.status, res.message);
					viewAllUser();
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
			url: rootApp + "api/user/get-by-id",
			type: "GET",
			data: {
				id: id,
			},
			dataType: "json",
			success: function (res) {
				const data = res.data[0];
				console.log(data.user_fullname)
				$("#modal_form_edit").modal("show");
                $("#user_id").val(data.user_id);
                $("#user_level_id").val(data.user_level_id);
                $("#user_name").val(data.user_name);
                $("#user_full_name").val(data.user_full_name);
                $("#user_fullname").val(data.user_fullname);
                $("#user_email").val(data.user_email);
                $("#user_phone_number").val(data.user_phone_number);
                $("#id_card").val(data.id_card);
                $("#address").val(data.address);
                $("#status").val(data.status);
			},
			error: function (request, error) {
				// console.log("Request: " + JSON.stringify(request));
			},
		});
	});

	$("form[name='edit-user']").validate({
	    // Specify validation rules
		rules: {
			user_full_name: "required",
			user_fullname: "required",
			user_name: "required",
			password: "required",
			id_card: "required",
			photo: "required",
			user_email: "required",
			user_phone_number: "required",
			user_level_id: "required",
			status: "required",
		},
		// Specify validation error messages
		messages: {
			user_full_name: "Masukan nama",
			user_fullname: "Masukan nama lengkap (sama dengan grup properti)",
			user_name: "Masukan nama pengguna",
			password: "Masukan password",
			id_card: "Masukan nomor identitas",
			photo: "Pilih foto",
			user_email: "Masukan E-mail",
			user_phone_number: "Masukan no telfon",
			user_level_id: "Pilih tingkatan pengguna",
			status: "Pilih status pengguna",
		},
	    submitHandler: function (form) {
	        try {
	            $.ajax({
	                url: rootApp + "api/user/edit",
	                type: "POST",
                	data: $("#edit-user").serialize(),
	                dataType: "json",
	                success: function (res) {
	                    $("#modal_form_edit").modal("hide");
	                    pnotifySuccess(res.status, res.message);
	                    viewAllUser();
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
				url: rootApp + "api/user/delete",
				type: "POST",
				data: { id: id },
				dataType: "json",
				success: function (res) {
					pnotifySuccess(res.status, res.message);
					viewAllUser();
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		});
	});
}
