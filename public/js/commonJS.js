$(document).ready(function () {
    str = "";
    $('.selected-option-menu').click(function () {
        str = $(this).text();
    });
    $("#department").val(str);
});