$(document).ready(function () {
    var showNav = false;
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
})