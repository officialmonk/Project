$(document).ready(function () {
    $(".mobile_bar").hide();
    $(".modal_registr").hide();
    $(".head").hide();
    $("#burg").on('click', function () {
        $(".mobile_bar").slideToggle();
        $(".modal_registr").slideUp();
    })

    $(".registration").on('click', function () {
        $(".modal_registr").slideDown();
        $(".mobile_bar").slideUp();
    })

    $(".back").on('click', function () {
        $(".modal_registr").slideUp();
    })

    var registr = $("#registr");
    registr.click(function () {
        var number_sign = $("#number_sign").val();
        var name_sign = $("#name_sign").val();
        var password_sign = $("#password_sign").val();
        var password_repeat_sign = $("#password_repeat_sign").val();

        if (password_sign == password_repeat_sign) {
            $("#number_sign").val('');
            $("#name_sign").val('');
            $("#password_sign").val('');
            $("#password_repeat_sign").val('');

            $.ajax({
                url: "registr.php",
                type: "POST",
                data: {
                    number_sign: number_sign,
                    name_sign: name_sign,
                    password_sign: password_sign
                },
                success: function () {
                    $("#number_sign").val('');
                    $("#name_sign").val('');
                    $("#password_sign").val('');
                    $("#password_repeat_sign").val('');
                }
            })
        } else {
            alert("Пароли не совпадают");
            $("#password_sign").val('');
            $("#password_repeat_sign").val('');
        }
    })
    var sign_desktop = $("#sign_desktop");
    sign_desktop.click(function () {
        var name_desktop = $("#name_desktop").val();
        var password_desktop = $("#password_desktop").val();
        $.ajax({
            url: "signDesktop.php",
            type: "POST",
            data: {
                name_desktop: name_desktop,
                password_desktop: password_desktop
            },
            success: function (data) {
                $("header").hide();
                $("#name_desktop").val('');
                $("#password_desktop").val('');
                $("#information").text(data);
                 $(".head").show();

            }
        })
    })

    var sign_mobile = $("#sign_mobile");
    sign_mobile.click(function () {
        var name_mobile = $("#name_mobile").val();
        var password_mobile = $("#password_mobile").val();

        $.ajax({
            url: "signMobile.php",
            type: "POST",
            data: {
                name_mobile: name_mobile,
                password_mobile: password_mobile
            },
            success: function (data) {
                $("header").hide();
                $("#name_mobile").val('');
                $("#password_mobile").val('');
                $("#information").text(data);
                $(".head").show();

            }
        })
    })
})

