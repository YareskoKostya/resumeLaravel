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
x = 0;
function addStudy(content) {
    if (x < 2) {
        $(content.replace("&amp;", /&/g)
            .replace("&lt;", /</g)
            .replace("&gt;", />/g)
            .replace("&quot;", /"/g)
            .replace("&#039;", /'/g)).insertBefore("#study");
        x++;
    } else
    {
        alert('Enough!');
    }
}
y = 0;
function addWork(content) {
    if (y < 2) {
        $(content.replace("&amp;", /&/g)
            .replace("&lt;", /</g)
            .replace("&gt;", />/g)
            .replace("&quot;", /"/g)
            .replace("&#039;", /'/g)).insertBefore("#work");
        y++;
    } else
    {
        alert('Enough!');
    }
}