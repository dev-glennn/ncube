<!DOCTYPE html>
<html lang="<?= $country ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"
    />
    <title>nCube</title>
    <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" href="./css/common.css?ver=<?= G5_CSS_VER ?>">
    <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
    <script>
        var scrollStart = 0;
        $(document).ready(function () {
            $('body').bind('mousewheel DOMMouseScroll wheel', function (e) {
                var delta = e.originalEvent.deltaY;

                var this_index = $("#container").attr('data-index') * 1;
                var last_index = $("#container > *").last().index() * 1;

                if (scrollStart == 0) {
                    scrollStart = 1;

                    if (delta > 0 && this_index != last_index)
                        this_index++;
                    else if (delta < 0 && this_index > 0)
                        this_index--;

                    $("#container").attr('data-index', this_index);
                    $('body').animate({'scrollTop': ($(window).height() * this_index)}, 500);

                    if (this_index == 0)
                        $("header").addClass('start');
                    else
                        $("header").removeClass('start');

                    $("#leftAside>img").addClass('none')

                    if (this_index == 1 || this_index == 4) {
                        $(".scroll-down-b").removeClass('none')
                    } else if (this_index == last_index) {
                        $(".scroll-up").removeClass('none')
                    } else {
                        $(".scroll-down-w").removeClass('none')
                    }

                    $('.header__nav > ul > li').removeClass('select');
                    $('#rightAside > ul > li').removeClass('select');
                    $('.header__nav > ul > li').eq(this_index - 1).addClass('select');
                    $('#rightAside > ul > li').eq(this_index).addClass('select');

                    setTimeout(function () {
                        scrollStart = 0;
                    }, 500);
                }

                return false;
            });
        });
    </script>
</head>
<body data-lang="<?= $country ?>">