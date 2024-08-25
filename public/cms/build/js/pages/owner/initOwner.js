var _initTableOwner = function (className) {
	// Initialize
	$("." + className).DataTable({
		autoWidth: false,
		columnDefs: [
			{
				width: 30,
				targets: 0,
			},
			{
				visible: false,
				targets: 1,
			},
			{
				orderable: false,
				width: 120,
				targets: 7,
			},
			{
				width: "15%",
				targets: [4, 5],
			},
			{
				width: "15%",
				targets: 6,
			},
			{
				width: "15%",
				targets: 3,
			},
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
		displayLength: 25,
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

export function viewAllOwner() {
	$.ajax({
		url: rootApp + "api/owner",
		type: "GET",
		dataType: "json",
		success: function (res) {
			var tbOwnerData = "";
			$.each(res.data, function (index, key) {
				tbOwnerData += `<tr>
                    <td>${index + 1}</td>
                    <td>${key.owner_type}</td>
                    <td>
						<img src="${rootApp}public/images/profile/${key.owner_photo}" class=" mr-2" height="50" width="50" alt="">
                    </td>
                    <td>
                        <h6 class="mb-0">
                            <a href="#">${key.owner_name}</a>
                        </h6>
                    </td>
                    <td>
						<h6 class="mb-0">
						<a href="#">${key.id_number}</a>
						<span class="d-block font-size-sm text-muted">Jenis ID: ${key.id_number_type}</span>
						</h6>
                    </td>
                    <td>
                        ${key.owner_phone_number}
                        <span class="d-block font-size-sm text-muted">E-mail: ${numberWithCommas(key.owner_email)}</span>
                    </td>
                    <td>
                        ${key.address}
                    </td>
                    <td class="text-center">
                        <div class="list-icons list-icons-extended">
                            <div class="list-icons-item dropdown">
                                <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item btn-edit-foto" data-id="${key.owner_id}"><i class="icon-images3"></i>Ubah Foto</a>
                                    <a href="#" class="dropdown-item btn-edit" data-id="${key.owner_id}"><i class="icon-file-plus"></i> Perbarui</a>
                                    <a href="#" class="dropdown-item btn-delete" data-id="${key.owner_id}"><i class="icon-cross2"></i> Hapus</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>`;
			});
			// return tbOwnerData;
			if ($(".table-owner").length > 0) {
				$(".table-owner").dataTable().fnDestroy();
				if ($("#table-body-owner").length > 0) {
					$("#table-body-owner").html(tbOwnerData);
				}
				_initTableOwner("table-owner");
			}
		},
		error: function (request, error) {
			// console.log("Request: " + JSON.stringify(request));
		},
	});
}