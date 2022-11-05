$(function () {

    /* -------------------------------------------------------
    【　共通】  スムーズスクロール
    ------------------------------------------------------- */
    $(window).on('load', function () {
        $('a[href^="#"]').click(function () {
            var speed = 500;
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top - $('.site-header').innerHeight() - 10;
            $("html, body").animate({ scrollTop: position }, speed, "swing");
            return false;
        });
    });


    /* -------------------------------------------------------
    【　共通】  ハンバーガーメニュー
    ------------------------------------------------------- */
    var scrollPosition;
    $(document).on('click', '#hamburger_button', function () {
        if ($('body').hasClass('fixed')) {
            $('.site-header').removeClass('menu-open');
            $('body').removeClass('fixed').css({ 'top': 0 });
            window.scrollTo(0, scrollPosition);
            return false;
        } else {
            $('.site-header').addClass('menu-open');
            scrollPosition = $(window).scrollTop();
            $('body').addClass('fixed').css({ 'top': -scrollPosition });
            return false;
        }
    });
});
