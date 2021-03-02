jQuery(document).ready(function ($) {

    var mediaUploader;
    // alert();
    $('#upload-button').on('click', function(e) {
        e.preventDefault();
        if(mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title : 'Choose Profile Picture',
            button : {
                text : 'Choose a picture'
            },
            multiple: false,
            // url : 'options.php',
        });
        mediaUploader.on('select', function () {
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#profile_picture').val(attachment.url)
            // alert(attachment.url);
            $('#profile-picture-general').attr("src", attachment.url)
        });
        mediaUploader.open();
    });

    $('#remove-picture').on('click', function (e) {
        e.preventDefault();
        var answer = confirm("Are you sure");
        if (answer == true) {
            console.log('yes')
        }
    })

});