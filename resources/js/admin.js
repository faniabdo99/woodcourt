tinymce.init({
    selector: 'textarea#editor',
    plugins: "anchor autoresize link autolink advlist image codesample lists media textpattern directionality emoticons",
    toolbar: "styleselect removeformat | anchor link | bold italic emoticons | numlist bullist | ltr rtl |alignleft aligncenter alignright |codesample | image media",
    menubar: false,
    default_link_target: "_blank",
    image_caption: true,
    image_title: true,
    images_upload_url: '/woodcourt/api/admin/upload-event-image',
    automatic_uploads: true,
    file_picker_types: 'image',
    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('name', 'name');
        input.setAttribute('accept', 'image/*');
        input.onchange = function() {
            var file = this.files[0];
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function() {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), {
                    title: file.name
                });
            };
        };
        input.click();
    }
});
$('select[name="type"]').change(function() {
    if ($(this).val() == 'event') {
        $('.event-date-group').removeClass('d-none');
    } else {
        $('.event-date-group').addClass('d-none');
    }
});
