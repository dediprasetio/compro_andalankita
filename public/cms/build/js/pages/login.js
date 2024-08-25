$(function () {
	// Initialize form validation on the login form.
	// It has the name attribute "login"
	$("form[name='login']").validate({
		// Specify validation rules
		rules: {
			username: "required",
			password: {
				required: true,
			},
		},
		// Specify validation error messages
		messages: {
			username: "Please enter your Username",
			password: {
				required: "Please provide a password",
			},
		},
		submitHandler: function (form) {
			try {
				$.ajax({
					url: rootApp + "api/auth/login",
					type: "POST",
					data: $('#login').serialize(),
					dataType: "json",
					success: function (res) {
                        window.location.href = rootApp+'admin';
					},
					error: function (request, error) {
						alert('Nama pengguna atau password salah!');
					},
				});
			} catch (error) {
                console.log(error);
            }
		},
	});
});