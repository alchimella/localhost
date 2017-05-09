$(document).ready(function() {
    var brand = document.getElementById('photo-id');
    brand.className = 'attachment_upload2';
    brand.onchange = function() {
        document.getElementById('fakeUploadPhoto').value = this.value.substring(12);
    };

    // Source: http://stackoverflow.com/a/4459419/6396981
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.photo-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#photo-id").change(function() {
        readURL(this);
    });
});