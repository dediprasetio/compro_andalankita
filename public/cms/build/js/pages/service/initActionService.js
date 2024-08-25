import { viewAllCustomer, viewAllProperty, countProperty } from "./initService.js";
export function initAction() {
	/*******************************************************************************************
								VALIDATE INPUT DATA SUPPLIER
	*******************************************************************************************/
	$("form[name='add-transaction']").validate({
		// Specify validation rules
		rules: {
			property_id: "required",
			customer_id: "required",
		},
		// Specify validation error messages
		messages: {
			property_id: "Pilih properti",
			customer_id: "Pilih / Tambahkan Customer",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/service/add",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					viewAllProperty()
					$("form[name='add-transaction']")[0].reset();
					pnotifySuccess(res.status, res.message);
					countProperty()
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		},
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
			$('.loader-import').removeClass("d-none")
			var formData = new FormData(form);
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
					countProperty()
					$('.loader-import').addClass("d-none")
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		},
	});

	/*******************************************************************************************
								ADD CUSTOMER (MODAL AND SUBMIT)
	*******************************************************************************************/
	$('#btn-modal-add-customer').click(function () {
		$('#modal_form_add').modal('show')
	})

	$("form[name='add-customer']").validate({
		// Specify validation rules
		rules: {
			customer_full_name: "required",
		},
		// Specify validation error messages
		messages: {
			customer_phone_number: "Masukan customer",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/customer/add",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
					$("#modal_form_add").modal("hide");
					$("form[name='add-customer']")[0].reset();
					pnotifySuccess(res.status, res.message);
					viewAllCustomer();
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		},
	});

	/*******************************************************************************************
								PREVIEW TRANSACTION
	*******************************************************************************************/
	$('#btn-preview').click(function () {
		let id = $('#option_property').val()
		let property_id = id == '' ? 0 : id
		$.ajax({
			url: rootApp + "api/property/id",
			type: "GET",
			data: { id: property_id },
			dataType: "json",
			success: function (res) {
				let data = res.data[0]
				let sale_type = data.sale_type == 1 ? 'Jual' : 'Sewa'
				$('#property_description').val(data.property_description)
				$('#additional_detail').val(`LT/LB:${data.land_area}/${data.building_area} | KT/KM:${data.bedroom}/${data.bathroom}`)
				$('#property_category').val(data.owner_id)
				$('#sale_type').val(sale_type)
				$('#address').val(data.address)
				$('#city').val(data.city_name)
				$('#area').val(data.area_name)
				$('#price').val(data.price)
				$('#fee').val(data.fee)
				$('#agent').val(data.agent_name)
				$('#owner').val(data.owner_name)
			},
			error: function (request, error) {
				pnotifyError("Error", JSON.stringify(request.statusText));
			},
		});
	})

}