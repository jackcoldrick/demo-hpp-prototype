$(document).ready(function () {
    //HPP Account Changer
    $('.navbar-nav li a').click(function () {
        var id = $(this).attr('id');
        switch ($(this).attr('id')) {
            case "style-1":
                $('.account-type').val('embed');
                break;
            case "style-2":
                $('.account-type').val('embedtheme1');
                break;
            case "style-3":
                $('.account-type').val('embedtheme2');
                break;
            case "style-4":
                $('.account-type').val('embedtheme3');
                break;
        }
    });
});
