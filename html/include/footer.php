<!--<script>-->
<!--    var scrollStart = 0;-->
<!--    $(document).ready(function () {-->
<!--        $('body').bind('mousewheel DOMMouseScroll wheel', function (e) {-->
<!--            var delta = e.originalEvent.deltaY;-->
<!--            console.log($('body').scrollTop())-->
<!---->
<!--            var this_index = $("#container").attr('data-index') * 1;-->
<!--            var last_index = $("#container > section").last().index() * 1;-->
<!---->
<!--            if (scrollStart == 0) {-->
<!--                scrollStart = 1;-->
<!---->
<!--                if (delta > 0 && this_index != last_index && $('body').scrollTop() == 0)-->
<!--                    this_index++;-->
<!--                else if (delta < 0 && this_index > 0 && $('body').scrollTop() == 0)-->
<!--                    this_index--;-->
<!--                else if (delta > 0 && this_index == last_index && $('body').scrollTop() == 0)-->
<!--                    $('body').animate({'scrollTop': $('#ft').height()}, 500);-->
<!--                else if (delta < 0 && this_index == last_index && $('body').scrollTop() > 0)-->
<!--                    $('body').animate({'scrollTop': 0}, 500);-->
<!---->
<!--                $("#container").attr('data-index', this_index).css('transform', 'translateY(-' + ($(window).height() * this_index) + 'px)');-->
<!---->
<!--                if (this_index == 0) {-->
<!--                    $("header").addClass('start');-->
<!--                } else {-->
<!--                    $("header").removeClass('start');-->
<!--                }-->
<!---->
<!--                setTimeout(function () {-->
<!--                    scrollStart = 0;-->
<!--                }, 500);-->
<!--            }-->
<!---->
<!--            console.log($(this).scrollTop())-->
<!---->
<!--        });-->
<!--    });-->
<!--</script>-->
<?php
include_once('footer.sub.php');
?>