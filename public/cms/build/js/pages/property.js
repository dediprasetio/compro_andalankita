import {viewAllProperty, countProperty, viewAllTags} from "./property/initProperty.js";
import {initAction} from "./property/initActionProperty.js";
import {initActionStepsAdd, initActionStepsUpdate} from "./property/initActionStepsProperty.js";

document.addEventListener("DOMContentLoaded", function () {
	viewAllTags();
	viewAllProperty();
	countProperty();
	initAction();
    initActionStepsAdd();
	initActionStepsUpdate();
});

// Another Initialize Action
document.addEventListener("DOMContentLoaded", function () {
	$(".cities-form-add").change(function () {
		$.ajax({
			url: rootApp + "api/area/get-by-city",
			type: "GET",
			data: {
				id: this.value
			},
			dataType: "json",
			success: function (res) {
				let listArea = ''
				listArea += `<option value="">-- Pilih Area Properti --</option>`
				$.each(res.data, function(index, key){
					listArea += `<option value="${key.area_id}">${key.area_name}</option>`
				})
				$(".area-form-add").html(listArea)
			},
			error: function (request, error) {
				pnotifyError("Error", JSON.stringify(request.statusText))
			},
		});
	});
});
