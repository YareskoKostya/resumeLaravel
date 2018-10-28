function addPhoto(){
    document.getElementById('imgInp').click();
}
function check() {
    if (!imgInp.required)
    {
        alert('Add Photo');
    }
}
$(document).ready( function() {

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
            document.getElementById("imgInp").required = true;
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
});
