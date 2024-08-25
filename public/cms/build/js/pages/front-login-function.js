$( document ).ready(function() {
    checkLoginAgent()
});

$("#form-front-login").submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: rootApp + "api/auth/login-agen",
        type: "POST",
        data: $("#form-front-login").serialize(),
        success: function (res) {
            setCookie(appShortName+'MAIN_LOGIN_STATUS', 1, 1)
            setCookie(appShortName+'MAIN_USER_ID', res.data.userid, 1)
            setCookie(appShortName+'MAIN_fullname', res.data.fullname, 1)
            setCookie(appShortName+'MAIN_level', res.data.level, 1)
            setCookie(appShortName+'MAIN_ID_CARD', res.data.id_card, 1)
            setCookie(appShortName+'MAIN_PHONE_NUMBER', res.data.phone_number, 1)
            setCookie(appShortName+'MAIN_EMAIL', res.data.email, 1)
            setCookie(appShortName+'MAIN_PHOTO', res.data.photo, 1)
            window.location.href = rootApp;
        },
        error: function (request, error) {
            alert("Nama pengguna atau password salah!")
        },
    });
});

function checkLoginAgent(){
	//GET LEVEL AGEN LOGIN
	const levelAgen = getCookie(appShortName+'MAIN_level') != '' ? getCookie(appShortName+'MAIN_level') : '';
	if(levelAgen == 'agen'){
		$('#login-button').html('<a href="javascript:void(0)" onclick="logoutFunction()" class="text-black"><small>Logout Akun</small></a>');
	}else{
		$('#login-button').html(`<a href="${rootApp}home/login" class="text-black"><small>Login Akun</small></a>`);
	}
}

function logoutFunction(){
    setCookie(appShortName+'MAIN_LOGIN_STATUS', 0, 1)
    setCookie(appShortName+'MAIN_USER_ID', '', 1)
    setCookie(appShortName+'MAIN_fullname', '', 1)
    setCookie(appShortName+'MAIN_level', '', 1)
    setCookie(appShortName+'MAIN_ID_CARD', '', 1)
    setCookie(appShortName+'MAIN_PHONE_NUMBER', '', 1)
    setCookie(appShortName+'MAIN_EMAIL', '', 1)
    setCookie(appShortName+'MAIN_PHOTO', '', 1)
    alert('Anda telah keluar!!')
    window.location.href = rootApp;
}