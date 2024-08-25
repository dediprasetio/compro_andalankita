$(document).ready(function() {
    /*******************************************************************************************
								VALIDATE INPUT DATA SUPPLIER
	*******************************************************************************************/
	$("form[name='proccess-report']").validate({
		// Specify validation rules
		rules: {
			effective_start_date: "required",
			effective_end_date: "required",
		},
		// Specify validation error messages
		messages: {
			effective_start_date: "Pilih periode awal tanggal",
			effective_end_date: "Pilih periode akhir tanggal",
		},
		submitHandler: function (form) {
			var formData = new FormData(form);
			$.ajax({
				url: rootApp + "api/property/sold-by-date",
				type: "POST",
				data: formData,
				dataType: "json",
				contentType: false,
				processData: false,
				success: function (res) {
                    //Show view table list
                    $('.report-list-view').removeClass('d-none')

                    //Adding data to table list
                    let listData = ``
                    $.each(res.data, function(index, key){
                        listData += `<tr>
                                        <td>${index+1}</td>
                                        <td>${key.property_title}</td>
                                        <td>${key.agent_name}</td>
                                        <td>${key.owner_name}</td>
                                        <td>${key.customer_full_name}</td>
                                        <td>${key.effective_date}</td>
                                    </tr>`
                                    console.log(key.property_title)
                    })
                    
                    // return Make datatable
                    if ($("#table-transaction-report").length > 0) {
                        $("#table-transaction-report").dataTable().fnDestroy();
                        $('#body-report-list').html(listData)
                        $('#table-transaction-report').DataTable( {
                            dom: 'Bfrtip',
                            buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                            ]
                        } );
                    }
					pnotifySuccess(res.status, res.message);
				},
				error: function (request, error) {
					pnotifyError("Error", JSON.stringify(request.statusText));
				},
			});
		},
	});

    $('#table-transaction-report').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );