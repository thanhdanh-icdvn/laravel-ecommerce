function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document
                .getElementById("featured_image-previewer")
                .setAttribute("src", e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
window.addEventListener("DOMContentLoaded", () => {
    let input = document.getElementById("featured_image");
    if (input) {
        input.addEventListener("change", function () {
            readURL(this);
        });
    }
});
