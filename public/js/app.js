$(document).ready(function () {

    $('.leftmenutrigger').on('click', function (e) {
        $('.side-nav').toggleClass("open");
        $('#wrapper').toggleClass("open");
        e.preventDefault();
    });

    $('.group-user-avatar').popover('enable');

    $(".post-comment-icon").click(function () {
        console.log("click");
        $(this).closest(".posts-wrapper").find(".comments-rendered").slideToggle("slow", function () {
            console.log($(".comments-rendered").css("display") == "block");
        });
    });
    //.user-popup-select
    $("#addUserhref").click(function () {
        $(".bg").slideToggle("slow", function () {
            $(".user-popup-select").slideToggle("slow", function () {});
            if ($(".bg").css("display") == "block") {
                $(".adduser").css("color", "white");
                $("#addUserhref").html("<i class=\'fas fa-times\' id='addUserhref'></i>");
                $("#addUsertext").html("Закрыть");
            }
            else {
                $(".adduser").css("color", "black");
                $("#addUserhref").html("<i class=\'fas fa-plus fa-2x\' id=\'addUserhref\'></i>");
                $("#addUsertext").html("Добавить");
            }
        });


    });

});

