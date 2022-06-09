$(document).ready(function () {
    var showNav = false;

    $.ajax({
        method: "get",
        url: "gettheme",
        dataType: "json"
    }).done(function (response) {
        if (response.theme == 'dark') {
            $("#darkSwitch").prop('checked', true);
        } else {
            $("#darkSwitch").prop('checked', false);
        }
    })

    $("#showHideBtn").on("click", function () {
        if (showNav) {
            $("#navControl").removeClass("show-nav");
            $("#navControl").removeClass("normal-nav");
            $("#navControl").addClass("hide-nav");
            setTimeout(function () {
                $("#navControl").addClass("d-none");
            }, 1000)
            showNav = false;
        }
        else if (!showNav) {
            $("#navControl").removeClass("d-none");
            $("#navControl").removeClass("hide-nav");
            $("#navControl").removeClass("normal-nav");
            $("#navControl").addClass("show-nav");

            showNav = true;
        }
    });

    $(window).resize(function () {
        $("#navControl").removeClass("hide-nav");
        $("#navControl").removeClass("show-nav");
        $("#navControl").removeClass("d-none");
        $("#navControl").addClass("normal-nav");

        showNav = false;
    });

    $("#file-upload").on("change", function () {
        $("#fileUploadName").text($("#file-upload")[0].files[0].name);
    });

    $("#chooseFileBtn").on("click", function () {
        $("#file-upload").trigger("click");
    })

    $("#darkSwitch").on("change", function () {
        if ($("#darkSwitch").is(':checked')) {
            $("html").attr("data-theme", "dark");
            $("#headerImgSmall").attr("src", "static/pcdWebsite/images/caduceus_darktheme.png");
            $("#headerImgBig").attr("src", "static/pcdWebsite/images/logo_transparent_darktheme.png");
            $.ajax({
                method: "get",
                url: "settheme",
                data: { "theme": "dark" }
            });

        } else {
            $("html").attr("data-theme", "light");
            $("#headerImgSmall").attr("src", "static/pcdWebsite/images/caduceus.png");
            $("#headerImgBig").attr("src", "static/pcdWebsite/images/logo_transparent.png");
            $.ajax({
                method: "get",
                url: "settheme",
                data: { "theme": "light" }
            });
        }
    })
})