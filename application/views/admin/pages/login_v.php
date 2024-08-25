<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Property agent | Smarteyeapps.com</title>
    <link href="<?= base_url() ?>public/cms/plugins/font-awesome/font-awesome.css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link rel="icon" href="<?= base_url() ?>public/cms/images/logo/logo.png" type="image/ico" />
    <link href="<?= base_url() ?>public/cms/build/css/global/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>public/cms/build/css/global/login.css" rel="stylesheet" type="text/css">
    <style lang="">
        form .error {
            margin-top: -10px;
            color: #ff0000;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 login-card" style="margin-top: 200px;">
                    <div class="row">
                        <div class="col-md-5 detail-part text-center">
                            <div class="logo-cover" >
                                <br><br>
                                <img src="<?= base_url() ?>public/cms/images/logo/logo-login.png" alt="" width="105">
                                <h1 class="font-weight-bold mt-2 text-light" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">KOPERASI <br> KARANGANYAR JAYA</h1>
                                <!-- <h1 class="font-weight-bold mt-2" style="color: #353535; font-size: 1.7rem; background-color: RGBA(255, 255, 255, 0.4); padding: 3px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">KOPERASI</h1> -->
                            </div>
                            <!-- <p class="text-center" style="font-size: 1,4rem; margin-top: 0px; letter-spacing: 3px; font-weight: 600; text-shadow: 2px 1px 1px #404355; color: white;">Karanganyar Jaya</p> -->
                        </div>
                        <div class="col-md-7 logn-part">
                            <div class="row">
                                <div class="col-lg-10 col-md-12 mx-auto text-center">
                                    <h1>Form Login</h1>
                                <!-- <img src="<?= base_url() ?>public/cms/images/logo/logo-login.png" width="75" class="align-center" alt=""> -->
                                    <div class="form-cover">
                                        <h6>Silahkan masuk untuk mengakses semua fitur.</h6>
                                        <form name="login" id="login" action="#">
                                            <div class="form-group">
                                                <input placeholder="Masukan nama pengguna" type="text" class="form-control" name="username">
                                            </div>
                                            <div class="form-group">
                                                <input Placeholder="Masukan password" type="password" class="form-control" name="password">
                                            </div>
                                            <div class="row form-footer">
                                                <div class="col-md-6 forget-paswd">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Ingatkan Saya</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 button-div">
                                                    <button type="submit" class="btn btn-primary">Masuk</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- Global -->
<script src="<?= base_url() ?>public/cms/build/js/global/jquery.min.js"></script>
<script src="<?= base_url() ?>public/cms/build/js/global/popper.min.js"></script>
<script src="<?= base_url() ?>public/cms/build/js/global/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>public/cms/plugins/forms/validation/validate.min.js"></script>
<script src="<?= base_url() ?>public/cms/build/js/global/variable.js"></script>
<script src="<?= base_url() ?>public/cms/plugins/notifications/pnotify.min.js"></script>
<script src="<?= base_url() ?>public/cms/build/js/global/function_pnotify.js"></script>

<!-- Custom Page -->
<script src="<?= base_url() ?>public/cms/build/js/pages/login.js"></script>

</html>