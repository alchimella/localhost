$(document).ready(function() {
    var brand = document.getElementById('image_post-id');
    brand.className = 'attachment_upload3';
    brand.onchange = function() {
        document.getElementById('fakeUploadImagePost').value = this.value.substring(12);
    };

    // Source: http://stackoverflow.com/a/4459419/6396981
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.image_post-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image_post-id").change(function() {
        readURL(this);
    });
});