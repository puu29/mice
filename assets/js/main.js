(function() {

    $('.banner').owlCarousel({
        items: 5,
        slideBy: 5,
        navText: ['', ''],
        nav: false,
        loop: false,
        dots: false,
        animateOut: 'fadeOut',
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: false
    });

    $('.slide-mice').owlCarousel({
        items: 6,
        navText: ['<span class="glyphicon glyphicon-menu-left"></span>', '<span class="glyphicon glyphicon-menu-right"></span>'],
        nav: true,
        loop: true,
        dots: true,
        margin: 15
    });

    $('.slide-location').owlCarousel({
        items: 2,
        slideBy: 2,
        navText: ['<span class="glyphicon glyphicon-menu-left"></span>', '<span class="glyphicon glyphicon-menu-right"></span>'],
        nav: true,
        loop: false,
        dots: true
    });

    $('.post-related-slide').owlCarousel({
        items: 3,
        slideBy: 1,
        navText: ['<span class="glyphicon glyphicon-menu-left"></span>', '<span class="glyphicon glyphicon-menu-right"></span>'],
        nav: true,
        loop: false,
        dots: false,
        margin: 0
    });

    setTimeout(() => {
        $('.datepicker2').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    }, 500);

    $('body').on('keyup', '.limit-char .form-control', function(e){
        var parent = $(this).parents('.limit-char');
        var cnt = $(this).val().length;
        parent.find('.char .cnt').html(cnt);
    }).on('click', '.input-score .star span', function(){
        var index = $(this).index();
        var parent = $(this).parents('.input-score');
        parent.find('span').removeClass('glyphicon-star-empty');
        parent.find('span').removeClass('glyphicon-star');
        parent.find('span:lt('+(index+1)+')').addClass('glyphicon-star');
        parent.find('span:gt('+index+')').addClass('glyphicon-star-empty');
        parent.find('input').val(index+1);
    });

    $('.short-search .m-icon').click(function(){
        $(this).parents('.short-search').slideUp(300);
    });

    $('.action-showpass .m-icon').click(function(){
        var parent = $(this).parents('.action-showpass');
        if(parent.hasClass('open'))
        {
            parent.removeClass('open');
            parent.find('input[type="text"]').attr('type', 'password');
        }
        else
        {
            parent.addClass('open');
            parent.find('input[type="password"]').attr('type', 'text');
        }
    });

    // upload
    $('.upload-photo input').change(function(e){
        var parent = $(this).parents('.upload-photo');
        var input = e.target;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(event) {
                parent.find('.preview').css('background-image', 'url("'+event.target.result+'")');
            }
            reader.readAsDataURL(input.files[0]);
        }
    });

    // like
    $('.post .m-icon-like-white').click(function(){
        $(this).toggleClass('active');
    });

    // vdo
    $('.vdo .m-icon-vdo').click(function(){
        var parent = $(this).parents('.vdo');
        var src = parent.find('iframe').attr('src');
        parent.addClass('open');
        parent.find('iframe').attr('src', src+'?autoplay=1');
    });
    $('.modal').on('hidden.bs.modal', function () {
        if($(this).find('iframe').length > 0)
        {
            var iframe = $(this).find('iframe');
            var src = iframe.attr('src').split('autoplay=1').join('');
            iframe.attr('src', src);
        }
    });

    // search
    $('.form-search input').keyup(function(){
        $('.autocomplete').show();
    });
    $('.form-search .btn-close').click(function(){
        $('.autocomplete').hide();
        $('.autocomplete .auto-text').show();
        $('.form-search input').val('');
    });
    $('.autocomplete .auto-text p').click(function(){
        var text = $(this).html().split('<b>').join('');
        text = text.split('</b>').join('');
        $('.form-search input').val(text);
        $('.autocomplete .auto-text').hide();
    });

    // copy link
    $('.btn-copylink').tooltip();
    $('.btn-copylink').click(function(e){
        e.preventDefault();
        $('.copylink-input').val(window.location.href);
        var copyText = $('.copylink-input');
        copyText.select();
        document.execCommand("copy");
        $('.btn-copylink').attr('data-original-title', 'Copied!').tooltip('show');
        setTimeout(function(){
            $('.btn-copylink').tooltip('hide');
        }, 1000);
    });
    $('.btn-copylink').on('hidden.bs.tooltip', function (e) {
        $('.btn-copylink').attr('data-original-title', 'Copy Link');
    });

    // grid
    if($('.grid').length > 0)
    {
        var msnry = new Masonry( '.grid', {
            itemSelector: '.grid-item'
        });
    }

    // slider
    $(".slider input").slider();
    $('.slider input').change(function(){
        var data = $(this).val().split(',');
        var parent = $(this).parents('.slider-box');
        parent.find('.slider-start').val(data[0]);
        parent.find('.slider-end').val(data[1]);
    });

})();

function open_search()
{
    $('#search').fadeIn(300);
}
function close_search()
{
    $('#search').fadeOut();
    $('#search .form-control').val('');
}