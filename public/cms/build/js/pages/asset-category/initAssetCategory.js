var _initTableOwner = function (className) {
	// Initialize
	$("." + className).DataTable({
		autoWidth: false,
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
		displayLength: 25,
		drawCallback: function (settings) {
			var api = this.api();

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

export function viewAllAssetCategory() {
	$.ajax({
		url: rootApp + "api/asset-category",
		type: "GET",
		dataType: "json",
		success: function (res) {
			var tbAssetCategory = "";
			$.each(res.data, function (index, key) {
				tbAssetCategory += `<tr>
                    <td>${index + 1}</td>
                    <td>
                        <h6 class="mb-0">
                            ${key.asset_category_name}
                        </h6>
                    </td>
					<td class="text-center">
                        <div class="list-icons list-icons-extended">
                            <div class="list-icons-item dropdown">
                                <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item btn-edit" data-id="${
																			key.asset_category_id
																		}"><i class="icon-file-plus"></i> Perbarui</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>`;
			});
			// return tbAssetCategory;
			if ($(".table-asset-category").length > 0) {
				$(".table-asset-category").dataTable().fnDestroy();
				if ($("#table-body-asset-category").length > 0) {
					$("#table-body-asset-category").html(tbAssetCategory);
				}
				_initTableOwner("table-asset-category");
			}
		},
		error: function (request, error) {
			// console.log("Request: " + JSON.stringify(request));
		},
	});
}