var _initTableProperty = function (className) {
	// Initialize
	$("." + className).DataTable({
		autoWidth: false,
		columnDefs: [
			{
				width: 140,
				targets: 2,
			},
			{
				visible: false,
				targets: 1,
			},
			// {
			// 	orderable: false,
			// 	width: 120,
			// 	targets: 7,
			// },
			// {
			// 	width: "15%",
			// 	targets: [4, 5],
			// },
			// {
			// 	width: "15%",
			// 	targets: 6,
			// },
			// {
			// 	width: "15%",
			// 	targets: 3,
			// },
		],
		order: [[0, "asc"]],
		dom: '<"datatable-header"fl><"datatable-scroll-lg"t><"datatable-footer"ip>',
		language: {
			search: "<span>Filter:</span> _INPUT_",
			searchPlaceholder: "Type to filter...",
			lengthMenu: "<span>Show:</span> _MENU_",
			paginate: {
				first: "First",
				last: "Last",
				next: $("html").attr("dir") == "rtl" ? "&larr;" : "&rarr;",
				previous: $("html").attr("dir") == "rtl" ? "&rarr;" : "&larr;",
			},
		},
		lengthMenu: [25, 50, 75, 100],
		displayLength: 12,
		drawCallback: function (settings) {
			var api = this.api();
			var rows = api.rows({ page: "current" }).nodes();
			var last = null;

			api
				.column(1, { page: "current" })
				.data()
				.each(function (group, i) {
					if (last !== group) {
						$(rows)
							.eq(i)
							.before(
								'<tr class="table-active table-border-double"><td colspan="8" class="font-weight-semibold">' +
									group +
									"</td></tr>"
							);

						last = group;
					}
				});

			// Initializw Select2
			if (!$().select2) {
				console.warn("Warning - select2.min.js is not loaded.");
				return;
			}
			$(".form-control-select2").select2({
				width: 150,
				minimumResultsForSearch: Infinity,
			});
		},
	});
};

export function _uniform() {
	var _componentUniform = function () {
		if (!$().uniform) {
			console.warn("Warning - uniform.min.js is not loaded.");
			return;
		}

		// Default initialization
		$(".form-check-input-styled").uniform();

		//
		// Contextual colors
		//

		// Primary
		$(".form-check-input-styled-primary").uniform({
			wrapperClass: "border-primary-600 text-primary-800",
		});

		// Danger
		$(".form-check-input-styled-danger").uniform({
			wrapperClass: "border-danger-600 text-danger-800",
		});

		// Success
		$(".form-check-input-styled-success").uniform({
			wrapperClass: "border-success-600 text-success-800",
		});

		// Warning
		$(".form-check-input-styled-warning").uniform({
			wrapperClass: "border-warning-600 text-warning-800",
		});

		// Info
		$(".form-check-input-styled-info").uniform({
			wrapperClass: "border-info-600 text-info-800",
		});

		// Custom color
		$(".form-check-input-styled-custom").uniform({
			wrapperClass: "border-indigo-600 text-indigo-800",
		});
	};
}

export function viewAllProperty() {
	$.ajax({
		url: rootApp + "api/property",
		type: "GET",
		dataType: "json",
		success: function (res) {
			var tbProperty = "";
			$.each(res.data, function (index, key) {
				/******************************* TERSEWAA / TERJUAL ************************************************/
				let sale_type = key.sale_type == "Sewa" ? '<span class="badge badge-info">Sewa</span>' : '<span class="badge badge-success">Jual</span>';
				if(key.sale_status == 1){
				    sale_type = key.sale_type == "Sewa" ? '<span class="badge badge-danger text-white">Disewa</span>' : '<span class="badge badge-danger text-white">Terjual</span>';
				}
				tbProperty += `<tr>
                    <td>${index + 1}</td>
                    <td>${key.asset_category_name}</td>
                    <td>
						<h6 class="mb-0">
							<a href="#" class="text-secondary font-weight-bold">${key.property_title} ${sale_type}</a>
							<span class="d-block font-size-sm text-muted"><small>${key.property_description.substring(0, 100)}</small></span>
						</h6>
                    </td>
                    <td>
                        <h6 class="mb-0">
                            <small>LB :${formatNumber(key.building_area)} m<sup>2</sup> || LT :${formatNumber(key.land_area)} m<sup>2</sup></small>
							<span class="d-block font-size-sm text-muted">KT : ${key.bedroom} || KM : ${key.bathroom}</span>
                        </h6>
                    </td>
                    <td>
						<span class="text-info">${key.unit_number}, ${key.area_name}, ${key.city_name}</span>
                    </td>
                    <td>
                        Rp. ${formatNumber(key.price)}
						<span class="d-block font-size-sm text-muted">Fee : ${key.fee}%</span>
                    </td>
                    <td>
						<a href="#">${key.owner_name}</a>
						<span class="d-block font-size-sm text-muted">Agen : ${key.agent_name}</span>
                    </td>
                    <td class="text-center">
                        <div class="list-icons list-icons-extended">
                            <div class="list-icons-item dropdown">
                                <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item btn-edit" data-id="${
																			key.property_id
																		}"><i class="icon-file-plus"></i> Perbarui</a>
                                    <a href="#" class="dropdown-item btn-delete" data-id="${
																			key.property_id
																		}"><i class="icon-cross2"></i> Hapus</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>`;
			});
			// return tbProperty;
			if ($(".table-property").length > 0) {
				$(".table-property").dataTable().fnDestroy();
				if ($("#table-body-property").length > 0) {
					$("#table-body-property").html(tbProperty);
				}
				_initTableProperty("table-property");
			}
		},
		error: function (request, error) {
			// console.log("Request: " + JSON.stringify(request));
		},
	});
}

export function viewAllTags() {
	$.ajax({
		url: rootApp + "api/tags",
		type: "GET",
		dataType: "json",
		success: function (res) {
			var listOptionTags = `<option value="">-- Pilih Tag --</option>`
			$.each(res.data, function (index, key) {
				listOptionTags += `<option value="${key.tag_code}">${key.tag_name}</option>`
			})
			$('.option_tags').html(listOptionTags)
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