//= require active_admin/base
//= require tinymce

$(document).ready(function() {
    tinyMCE.init({
        mode : "textareas",
        editor_selector : "tinymce_editor",
        theme: 'modern',
        language : 'ru',
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ]
    });
});