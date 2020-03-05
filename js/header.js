$(function () {

    headerType();

    $(window).scroll(function () {
        headerType();
    });

    $(".change__ul>li>a").on('click', function () {
        let lang = $(this).attr('data-lang')
        $.ajax({
            url: '/lang_change.php',
            type: 'POST',
            data: {'lang': lang},
            success: function () {
                location.reload();
            }
        })
        return false;
    })
})

function headerType() {
    let top = $(this).scrollTop();

    if(top==0){
        $("header").addClass('start');
    } else {
        $("header").removeClass('start');
    }
}