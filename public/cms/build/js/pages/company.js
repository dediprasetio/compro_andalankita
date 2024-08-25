document.addEventListener("DOMContentLoaded", function () {
	$("form[name='edit-company']").validate({
        // Specify validation rules
        rules: {
            branch_name: "required",
            branch_city: "required",
        },
        // Specify validation error messages
        messages: {
            branch_name: "Branch name is required",
            branch_name: "City is required",
        },
        submitHandler: function (form) {
            try {
                $.ajax({
                    url: rootApp + "api/my-company/edit",
                    type: "POST",
                    data: $("#edit-company").serialize(),
                    dataType: "json",
                    success: function (res) {
                        pnotifySuccess(res.status, res.message);
                    },
                    error: function (request, error) {
                        pnotifyError("Error", JSON.stringify(request.statusText));
                    },
                });
            } catch (error) {
                console.log(error);
            }
        },
    });
});