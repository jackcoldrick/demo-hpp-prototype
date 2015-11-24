$(document).ready(function () {
    //Stylesheet changer
    $('.navbar-nav li a').click(function () {
        var id = $(this).attr('id');
        switch ($(this).attr('id')) {
            case "style-1":
                $('#theme').attr('href', 'css/style-1.css');
                $('#logo-box').attr('src', 'img/rxp_logo_white.svg');
                break;
            case "style-2":
                $('#theme').attr('href', 'css/style-2.css');
                $('#logo-box').attr('src', 'img/logo-2.png');
                break;
            case "style-3":
                $('#theme').attr('href', 'css/style-3.css');
                $('#logo-box').attr('src', 'img/logo-3.png');
                break;
            case "style-4":
                $('#theme').attr('href', 'css/style-4.css');
                $('#logo-box').attr('src', 'img/logo-4.png');
                break;
        }
    });
});
