$(document).ready(function () {
    $("input[data-type='currency']").on({
        keyup: function () {
            formatCurrency($(this));
        },
        blur: function () {
            formatCurrency($(this), "blur");
        }
    });

    //CK Editor
    // Full featured editor
    // ------------------------------
    // var editor = CKEDITOR.replace( 'ckfinder' );
    // CKFinder.setupCKEditor( editor );
    // var editor = CKEDITOR.replace('e_editor_full');
    // CKFinder.setupCKEditor( editor );

    // Setup
    if($('#editor-full').length){
        CKEDITOR.replace('editor-full', {
            height: 400,
            extraPlugins: 'forms'
        });
    }
    if($('#e_editor_full').length){
        var editor2 = CKEDITOR.replace('e_editor_full', {
            height: 400,
            extraPlugins: 'forms'
        });
        CKFinder.setupCKEditor(editor2);
    }
    if($('#editor_full').length){
        var editor2 = CKEDITOR.replace('editor_full', {
            height: 400,
            extraPlugins: 'forms'
        });
        CKFinder.setupCKEditor(editor2);
    }
});