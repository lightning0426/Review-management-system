jQuery(function ($) {
    $("a.top_area_link").on("click", function () {
        event.preventDefault();

        const area = $(this).data("area");
        //ナビが開いていたら閉じる

        if ($(window).width() > 630) {
            $("#HeaderFilter").fadeOut();
            $("#HeaderWindow").removeClass("active");
        }

        $("body").css("overflow-y", "hidden"); // 本文の縦スクロールを無効
        $("body").css("position", "fixed"); // 本文の縦スクロールを無効

        $(".AreaPop").show();
        $(".school-sp_popup_place_box").hide();

        $(`#${area}`).show();

        return false;
    });    
    $("a.top_area_link_home_sp").on("click", function () {
        console.log(11);
      event.preventDefault();

      const area = $(this).data("area");
      
      //ナビが開いていたら閉じる
      $("#HeaderFilter").fadeOut();
      $("#HeaderWindow").removeClass("active");
      $("body").css("overflow-y", "hidden"); // 本文の縦スクロールを無効
      $("body").css("position", "fixed"); // 本文の縦スクロールを無効

      $(".AreaHomeSpPop").show();
      $(".school-sp_popup_place_box").hide();
      console.log(11);
      
      $(`#${area}_sp`).show();

      return false;
    });
    $("#HeaderMenuBtn").on("click", function () {
        $("body").css("overflow-y", "hidden"); // 本文の縦スクロールを無効
        $("#HeaderFilter").fadeIn();
        $("#HeaderWindow").addClass("active");
    });
    $("#HeaderCloseBtn").on("click", function () {
        $("#HeaderFilter").fadeOut();
        $("#HeaderWindow").removeClass("active");
        $("body").css("overflow-y", "auto"); // 本文の縦スクロールを有効
    });
    $("#HeaderFilter").on("click", function () {
        $("#HeaderFilter").fadeOut();
        $("#HeaderWindow").removeClass("active");
        $("body").css("overflow-y", "auto"); // 本文の縦スクロールを有効
    });

    // header placeholder
    $("#HeaderInput")
        .click(function (e) {
            $("#HeaderInput input").focus();
            $("#HeaderPlaceHolder").hide();
        })
        .focusout(function (e) {
            if ($("#HeaderInput input").val() != "") {
                $("#HeaderPlaceHolder").hide();
            } else {
                $("#HeaderPlaceHolder").show();
            }
        });

    $(".HeaderAddBtn").on("click", function () {
        $(this).toggleClass("active").parent().next().stop().slideToggle();
    });

    var Header_H;
    $(window).on("load resize", function () {
        /* header */
        Header_H = $(".header_wrap").outerHeight();

        $('a[href^="#"]').on("click", function () {
            var speed = 500;
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? "html" : href);
            if (target.length) {
                var position = target.offset().top;
            }

            $("body,html")
                .stop()
                .animate({ scrollTop: position }, speed, "swing");
            return false;
        });

        if ($(window).width() < 960) {
            $(window).on("scroll", function () {
                if ($(window).scrollTop() > 0) {
                    $(".header_logo").hide(100);
                } else {
                    $(".header_logo").fadeIn();
                }
            });
        } else {
            $(window).on("scroll", function () {
                if ($(window).scrollTop() > 0) {
                    $(".header_logo").show();
                } else {
                    $(".header_logo").show();
                }
            });
        }
    });

    /* select */
    $(".FormSelect").on("change", function () {
        var SelectVal = $(this).find("option:selected").val();
        if (SelectVal == "00") {
            $(this).removeClass("active");
        } else {
            $(this).addClass("active");
        }
    });

    $(".TabBtn").on("click", function () {
        var TabTarget = $(this).data("tab");
        $(this).addClass("active").siblings().removeClass("active");
        $("." + TabTarget)
            .addClass("active")
            .siblings()
            .removeClass("active");
    });

    $(document).on("click", ".PopBtn", function () {
        const TargetPop = $(this).data("pop");
        const evaluationId = $(this).data("evaluation_id");
        if (evaluationId) {
            $("#" + TargetPop + "Window")
                .find("input[name='evaluation_id']")
                .val(evaluationId);
        }
        $("#" + TargetPop + "Filter").fadeIn();
        $("#" + TargetPop + "Window").show();
    });

    $(document).on("click", ".PopCloseBtn", function () {
        $(this).parents().prev(".popup_filter").fadeOut();
        $(this).parents(".popup_wrap,.SchoolPop,.popup_report_wrap").hide();
        $("body").css("overflow-y", "auto"); // 本文の縦スクロールを有効
        $("body").css("position", "static"); // 本文の縦スクロールを有効
    });

    $(document).on("click", ".MenuCloseBtn", function () {
        $("#MenuFilter").fadeOut();
        $(this).parents(".popup_wrap").hide();
    });

    $(".FollowBtn").on("click", function () {
        const nurseryId = $(this).data("nursery_id");

        const url = "/toggle_followed_nursery";

        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            type: "POST",
            url: url,
            data: {
                nursery_id: nurseryId,
            },
            dataType: "json",
        })
            .done(function (datas) {})
            .fail(function (XMLHttpRequest, textStatus, errorThrown) {
                alert(errorThrown);
            });

        $(this).toggleClass("active");
    });
    $(".LikeBtn").on("click", function () {
        $(this).toggleClass("active");
    });
    $('.JobLikeBtn').on('click', function () {
        const jobId = $(this).data('job_id');
        const url = '/toggle_kept_job';
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: url,
            data:{
                job_id: jobId
            },
            dataType: 'json',
        }).done(function(){
        }).fail(function(XMLHttpRequest, textStatus, errorThrown){
            alert(errorThrown);
        });

        $(this).toggleClass("active");

    });
    $("#CampaignBtn").on("click", function () {
        $(this)
            .toggleClass("active")
            .prev("#CampaignList")
            .find(".CampaignItem")
            .toggleClass("no_active");
    });
    $(".QABtn").on("click", function () {
        $(this).toggleClass("active").next().stop().slideToggle();
    });
    $(".AreaBtn").on("click", function () {
        $(this).toggleClass("active").next().stop().slideToggle();
    });
    $(".PwdBtn").on("click", function () {
        $(this).toggleClass("active");
        var input = $(this).prev("input");
        if (input.attr("type") == "text") {
            input.attr("type", "password");
        } else {
            input.attr("type", "text");
        }
    });
    $(".StepBtn").on("click", function () {
        $(this).parent().toggleClass("active").next().stop().slideToggle();
    });

    
});