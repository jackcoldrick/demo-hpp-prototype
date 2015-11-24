$(document).ready(function () {
    //HPP Account Changer
    $('.navbar-nav li a').click(function () {
        var id = $(this).attr('id');
        switch ($(this).attr('id')) {
            case "style-1":
                $('#acc').val('hpp');
                break;
            case "style-2":
                $('#acc').val('hpptheme1');
                break;
            case "style-3":
                $('#acc').val('hpptheme2');
                break;
            case "style-4":
                $('#acc').val('hpptheme3');
                break;
        }
    });
});
