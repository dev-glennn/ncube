$(function () {
    headerType();
    fullScreenScroll();

    let widthSize = window.outerWidth;
    isMobile(widthSize)

    $(window).resize(function () {
        widthSize = window.outerWidth;
        isMobile(widthSize)
    })

    $(window).on('touchstart', function () {
  //      headerType();
    })


    $(".change__ul>li>a").on('click', function () {
        let lang = $(this).attr('data-lang')
        alert("글로벌 언어 홈페이지는 2020년 5월~6월 중 오픈 준비중입니다.")
        // $.ajax({
        //     url: '/lang_change.php',
        //     type: 'POST',
        //     data: {'lang': lang},
        //     success: function () {
        //         location.reload();
        //     }
        // })
        return false;
    });

	 $('body').scroll(function(){
		 headerType();
	 });

    $(".header__nav>ul>li, #rightAside>ul>li").on('click', function () {
        const target = $(this).attr('data-target');
        moveEvent(target)
    });
})

function headerType() {
    let top = $('body').scrollTop();

    if (top == 0) {
        $("header").addClass('start');
    } else {
        $("header").removeClass('start');
    }
}

function isMobile(width) {
    if (width <= 900) {
        $('body').attr('data-size', 'mobile')
    } else {
        $('body').attr('data-size', 'pc')
    }
}

function fullScreenScroll() {
    var scrollStart = 0;
    $('body').bind('mousewheel DOMMouseScroll wheel', function (e) {
        let widthSize = window.outerWidth;
        if (widthSize > 900) {
            var delta = e.originalEvent.deltaY;

            var this_index = $("#container").attr('data-index') * 1;
            var last_index = $("#container > *").last().index() * 1;

            if (scrollStart == 0) {
                scrollStart = 1;

                if (delta > 0 && this_index != last_index)
                    this_index++;
                else if (delta < 0 && this_index > 0)
                    this_index--;

                moveEvent(this_index)

                setTimeout(function () {
                    scrollStart = 0;
                }, 500);

                e.preventdefault();
            }
            return false;
        } else {
            headerType();
        }
    });
}

function moveEvent(index) {
    let last_index = $("#container > *").last().index() * 1;

    $("#container").attr('data-index', index).css('margin-top', '-' + ($(window).height() * index) + 'px');

    if (index == 0)
        $("header").addClass('start');
    else
        $("header").removeClass('start');

    $("#leftAside>img").addClass('none')

    if (index == 1 || index == 4) {
        $(".scroll-down-b").removeClass('none')
    } else if (index == last_index) {
        $(".scroll-up").removeClass('none')
    } else {
        $(".scroll-down-w").removeClass('none')
    }

    $('.header__nav > ul > li').removeClass('select');
    $('#rightAside > ul > li').removeClass('select');
    $('.header__nav > ul > li').eq(index - 1).addClass('select');
    $('#rightAside > ul > li').eq(index).addClass('select');
}