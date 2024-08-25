export function viewAllProperty() {
	$.ajax({
		url: rootApp + "api/property",
		type: "GET",
		dataType: "json",
		success: function (res) {
			var listOptionProperty = `<option></option>
									<optgroup label="Daftar Properti">`
			$.each(res.data, function (index, key) {
				listOptionProperty += `<option value="${key.property_id}">${key.property_title}</option>`
			})
			listOptionProperty += `</optgroup>`
			$('#option_property').html(listOptionProperty)
		},
		error: function (request, error) {
			// console.log("Request: " + JSON.stringify(request));
		},
	});
}

export function viewAllCustomer() {
	$.ajax({
		url: rootApp + "api/customer",
		type: "GET",
		dataType: "json",
		success: function (res) {
			var listOptionCustomer = `<option></option>
									<optgroup label="Daftar Customer">`
			$.each(res.data, function (index, key) {
				listOptionCustomer += `<option value="${key.customer_id}">${key.customer_full_name}</option>`
			})
			listOptionCustomer += `</optgroup>`
			$('#option_customer').html(listOptionCustomer)
		},
		error: function (request, error) {
			// console.log("Request: " + JSON.stringify(request));
		},
	});
}

export function countProperty() {
	$.ajax({
		url: rootApp + "api/property/count-property",
		type: "GET",
		dataType: "json",
		success: function (res) {
			$('.total-property').html(numberWithCommas(res.data.all_property === null ? 0 : res.data.all_property))
			$('.property-sold').html(numberWithCommas(res.data.sold_property === null ? 0 : res.data.sold_property))
			$('.property-available').html(numberWithCommas(res.data.available_property === null ? 0 : res.data.available_property))
		},
		error: function (request, error) {
			// console.log("Request: " + JSON.stringify(request));
		},
	});
}