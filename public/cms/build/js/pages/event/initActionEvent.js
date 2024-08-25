import { viewAllevent } from "./initEvent.js";

export function initAction() {
	/*******************************************************************************************
                                VALIDATE INPUT DATA SUPPLIER
    *******************************************************************************************/
	$("form[name='add']").validate({
		// Specify validation rules
		rules: {
			title: "required",
			short_descryption: "required",
			photo: "required",
			content: "required",
			event_date: "required",
			status_id: "required",
			location: "required",
		},
		// Specify validation error messages
		messages: {
			title: "Masukan judul",
			short_descryption: "Deskripsikan agenda secara singkat",
			photo: "Pilih foto",
			content: "Masukan konten",
			event_date: "Pilih tanggal dilaksanakannya agenda",
			status_id: "Pilih status",
			location: "Masukan lokasi dilaksanakannya agenda"
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/event/add",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("#modal_form_add").modal("hide");
					$("form[name='add']")[0].reset();
					pnotifySuccess(res.status, res.message);
					viewAllevent();
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
			url: rootApp + "api/event/get-by-id",
			type: "GET",
			data: {
				id: id,
			},
			dataType: "json",
			success: function (res) {
				const data = res.data[0];
				$("#modal_form_edit").modal("show");
                $("#event_id").val(data.event_id);
                $("#title").val(data.title);
                $("#foto_existing").html(data.photo);
                $("#short_description").val(data.short_description);
				CKEDITOR.instances.e_editor_full.updateElement();
				CKEDITOR.instances.e_editor_full.setData(data.content);
                $("#event_date").val(data.event_date);
                $("#status_id").val(data.status_id);
                $("#location").val(data.location);
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
			short_descryption: "required",
			content: "required",
			event_date: "required",
			status_id: "required",
			location: "required",
		},
		// Specify validation error messages
		messages: {
			title: "Masukan judul",
			short_descryption: "Deskripsikan agenda secara singkat",
			content: "Masukan konten",
			event_date: "Pilih tanggal dilaksanakannya agenda",
			status_id: "Pilih status",
			location: "Masukan lokasi dilaksanakannya agenda"
		},
	    submitHandler: function (form) {
	        try {
				let formData = $("#edit").serializeArray()
				console.log(formData)
				for (var item in formData)
					{
					if (formData[item].name == 'content') {
						formData[item].value = CKEDITOR.instances.e_editor_full.getData()
					}
				}
	            $.ajax({
	                url: rootApp + "api/event/update",
	                type: "POST",
                	data: formData,
	                dataType: "json",
	                success: function (res) {
	                    $("#modal_form_edit").modal("hide");
	                    pnotifySuccess(res.status, res.message);
	                    viewAllevent();
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
				url: rootApp + "api/event/delete",
				type: "POST",
				data: { id: id },
				dataType: "json",
				success: function (res) {
					pnotifySuccess(res.status, res.message);
					viewAllevent();
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		});
	});
}
