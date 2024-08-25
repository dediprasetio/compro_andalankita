import { viewAllProperty, countProperty } from "./initProperty.js";

/*******************************************************************************************
                            VALIDATE INPUT DATA PROPERTY
*******************************************************************************************/
export function initActionStepsAdd() {
    // Wizard with validation
    //

    // Stop function if validation is missing
    if (!$().validate) {
        console.warn('Warning - validate.min.js is not loaded.');
        return;
    }

    // Show form
    var form = $('.steps-add-property').show();


    // Initialize wizard
    $('.steps-add-property').steps({
        headerTag: 'h6',
        bodyTag: 'fieldset',
        titleTemplate: '<span class="number">#index#</span> #title#',
        labels: {
            previous: '<i class="icon-arrow-left13 mr-2" /> Previous',
            next: 'Next <i class="icon-arrow-right14 ml-2" />',
            finish: 'Submit form <i class="icon-arrow-right14 ml-2" />'
        },
        transitionEffect: 'fade',
        autoFocus: true,
        onStepChanging: function (event, currentIndex, newIndex) {

            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex) {
                return true;
            }

            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {

                // To remove error styles
                form.find('.body:eq(' + newIndex + ') label.error').remove();
                form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
            }

            form.validate().settings.ignore = ':disabled,:hidden';
            return form.valid();
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ':disabled';
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            var formAdd = $('#add-property')[0];
            var formData = new FormData(formAdd);
            event.preventDefault();
            $.ajax({
                url: rootApp + "api/property/add",
                type: "POST",
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function (res) {
                    pnotifySuccess(res.status, res.message);
                    setTimeout(function(){
                        window.location.reload(1);
                     }, 2000);
                    viewAllProperty();
                    $('#add-property')[0].reset();
                    countProperty()
                },
                error: function (request, error) {
                    pnotifyError("Error", JSON.stringify(request.statusText));
                },
            });
        }
    });


    // Initialize validation
    $('.steps-add-property').validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-invalid-label',
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },

        // Different components require proper error label placement
        errorPlacement: function (error, element) {

            // Unstyled checkboxes, radios
            if (element.parents().hasClass('form-check')) {
                error.appendTo(element.parents('.form-check').parent());
            }

            // Input with icons and Select2
            else if (element.parents().hasClass('form-group-feedback') || element.hasClass('select2-hidden-accessible')) {
                error.appendTo(element.parent());
            }

            // Input group, styled file input
            else if (element.parent().is('.uniform-uploader, .uniform-select') || element.parents().hasClass('input-group')) {
                error.appendTo(element.parent().parent());
            }

            // Other elements
            else {
                error.insertAfter(element);
            }
        },
        // Specify validation rules
        rules: {
            property_title: "required",
            asset_category_id: "required",
            sale_type: "required",
            tag_code: "required",
            address: "required",
            unit_number: "required",
            area_id: "required",
            city_id: "required",
            land_area: "required",
            building_area: "required",
            bedroom: "required",
            bathroom: "required",
            price: "required",
            agent_id: "required",
            fee: "required",
            owner_id: "required",
        },
        // Specify validation error messages
        messages: {
            property_title: "Masukan judul properti",
            asset_category_id: "Jenis properti harus dipilih",
            sale_type: "Tipe penjualan harus dipilih",
            tag_code: "Tag harus dipilih",
            address: "Masukan alamat properti",
            unit_number: "Nomor unit harus diisi",
            area_id: "Pilih area",
            city_id: "Pilih kota",
            land_area: "Masukan LT",
            building_area: "Masukan LB",
            bedroom: "Masukan KT",
            bathroom: "Masukan KM",
            price: "Berapa harga properti ini",
            agent_id: "Siapa agen yang bertanggungjawab",
            fee: "Masukan keuntungan yang didapat agen (%)",
            owner_id: "Pilih pemilik properti, tambahkan jika belum terdaftar",
        },
    });
};

export function initActionStepsUpdate() {
    // Wizard with validation
    //

    // Stop function if validation is missing
    if (!$().validate) {
        console.warn('Warning - validate.min.js is not loaded.');
        return;
    }

    // Show form
    var form = $('.steps-update-property').show();


    // Initialize wizard
    $('.steps-update-property').steps({
        headerTag: 'h6',
        bodyTag: 'fieldset',
        titleTemplate: '<span class="number">#index#</span> #title#',
        labels: {
            previous: '<i class="icon-arrow-left13 mr-2" /> Previous',
            next: 'Next <i class="icon-arrow-right14 ml-2" />',
            finish: 'Submit form <i class="icon-arrow-right14 ml-2" />'
        },
        transitionEffect: 'fade',
        autoFocus: true,
        onStepChanging: function (event, currentIndex, newIndex) {

            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex) {
                return true;
            }

            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {

                // To remove error styles
                form.find('.body:eq(' + newIndex + ') label.error').remove();
                form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
            }

            form.validate().settings.ignore = ':disabled,:hidden';
            return form.valid();
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ':disabled';
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            var form = $('#update-property')[0];
            var formData = new FormData(form);
            event.preventDefault();
            $.ajax({
                url: rootApp + "api/property/edit",
                type: "POST",
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function (res) {
                    $("#modal_form_edit").modal("hide");
                    pnotifySuccess(res.status, res.message);
                    viewAllProperty();
                    $('#update-property')[0].reset();
                },
                error: function (request, error) {
                    pnotifyError("Error", JSON.stringify(request.statusText));
                },
            });
        }
    });


    // Initialize validation
    $('.steps-update-property').validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-invalid-label',
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },

        // Different components require proper error label placement
        errorPlacement: function (error, element) {

            // Unstyled checkboxes, radios
            if (element.parents().hasClass('form-check')) {
                error.appendTo(element.parents('.form-check').parent());
            }

            // Input with icons and Select2
            else if (element.parents().hasClass('form-group-feedback') || element.hasClass('select2-hidden-accessible')) {
                error.appendTo(element.parent());
            }

            // Input group, styled file input
            else if (element.parent().is('.uniform-uploader, .uniform-select') || element.parents().hasClass('input-group')) {
                error.appendTo(element.parent().parent());
            }

            // Other elements
            else {
                error.insertAfter(element);
            }
        },
        // Specify validation rules
        rules: {
            property_title: "required",
            asset_category_id: "required",
            sale_type: "required",
            tag_code: "required",
            address: "required",
            unit_number: "required",
            area_id: "required",
            city_id: "required",
            land_area: "required",
            building_area: "required",
            bedroom: "required",
            bathroom: "required",
            price: "required",
            agent_id: "required",
            fee: "required",
            owner_id: "required",
        },
        // Specify validation error messages
        messages: {
            property_title: "Masukan judul properti",
            asset_category_id: "Jenis properti harus dipilih",
            sale_type: "Tipe penjualan harus dipilih",
            tag_code: "Tag harus dipilih",
            address: "Masukan alamat properti",
            unit_number: "Nomor unit harus diisi",
            area_id: "Pilih area",
            city_id: "Pilih kota",
            land_area: "Masukan LT",
            building_area: "Masukan LB",
            bedroom: "Masukan KT",
            bathroom: "Masukan KM",
            price: "Berapa harga properti ini",
            agent_id: "Siapa agen yang bertanggungjawab",
            fee: "Masukan keuntungan yang didapat agen (%)",
            owner_id: "Pilih pemilik properti, tambahkan jika belum terdaftar",
        },
    });
};