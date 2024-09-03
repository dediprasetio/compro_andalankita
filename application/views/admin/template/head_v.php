<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CMS | Andalalinkita.com</title>
	<link rel="icon" href="<?= base_url() ?>public/global-images/cms.png" type="image/ico" />

	<!-- Global stylesheets -->
	<link href="<?= base_url() ?>public/cms/plugins/font-awesome/font-awesome.css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/cms/plugins/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/cms/build/css/global/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/cms/build/css/global/bootstrap_limitless.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/cms/build/css/global/layout.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/cms/build/css/global/main.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/cms/build/css/global/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/cms/build/css/global/colors.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/cms/plugins/tables/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>public/cms/plugins/tables/datatables/extensions/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	<style lang="">
		form .error {
			margin-top: -10px;
			color: #ff0000;
		}
	</style>

	<!-- Core JS files -->
	<script src="<?= base_url() ?>public/cms/build/js/global/jquery.min.js"></script>
	<script src="<?= base_url() ?>public/cms/build/js/global/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?= base_url() ?>public/cms/plugins/visualization/d3/d3.min.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/forms/styling/switchery.min.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/ui/moment/moment.min.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/pickers/daterangepicker.js"></script>
	<!-- /theme JS files -->

	<!-- Theme JS files -->
	<script src="<?= base_url() ?>public/cms/plugins/forms/selects/select2.min.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/tables/datatables/datatables.min.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/tables/datatables/extensions/buttons.min.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/forms/validation/validate.min.js"></script>
	<!-- Jquery Steps -->
	<script src="<?= base_url() ?>public/cms/plugins/forms/wizards/steps.min.js"></script>
	<!-- Theme JS files -->
	<script src="<?= base_url() ?>public/cms/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/forms/styling/switchery.min.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/forms/styling/switch.min.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/notifications/pnotify.min.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/editors/ckeditor/ckeditor.js"></script>
	<script src="<?= base_url() ?>public/cms/plugins/editors/ckfinder/ckfinder.js">

	<!-- Custom and Page -->
	<script src="<?= base_url() ?>public/cms/build/js/custom/app.js"></script>
	<script src="<?= base_url() ?>public/cms/build/js/pages/dashboard.js"></script>
	<script src="<?= base_url() ?>public/cms/build/js/global/variable.js"></script>
	<script src="<?= base_url() ?>public/cms/build/js/global/function.js"></script>
	<script src="<?= base_url() ?>public/cms/build/js/global/main.js"></script>
	<script src="<?= base_url() ?>public/cms/build/js/global/function_pnotify.js"></script>

	<script src="<?= base_url() ?>public/cms/build/js/pages/change-photo.js"></script>
	<script src="<?= base_url() ?>public/cms/build/js/pages/change-password.js"></script>
	<!-- /Page -->
	<?php
	if (!empty($js_file)) {
		echo '<script type="module" src="' . base_url() . 'public/cms/build/js/pages/' . $js_file . '.js"></script>';
	}
	if (!empty($javascript)) {
		echo '<script type="module" src="' . base_url() . 'public/cms/build/js/pages/' . $javascript . '.js"></script>';
	}
	?>
</head>