(function() {

    // slide
    var banner = $('.banner').owlCarousel({
        loop: false,
        dots: false,
        responsive : {
            0 : {
                items: 1,
                slideBy: 1,
                stagePadding: 15,
                margin: 8,
                navText: ['<span class="glyphicon glyphicon-menu-left"></span>', '<span class="glyphicon glyphicon-menu-right"></span>'],
                nav: true,
            },
            767 : {
                items: 3,
                slideBy: 3,
                navText: ['', ''],
                nav: false,
                autoplay: true,
                autoplayTimeout: 6000,
                autoplayHoverPause: false
            },
            991 : {
                items: 5,
                slideBy: 5,
                navText: ['', ''],
                nav: false,
            }
        }
    });
    if($(window).width() < 768)
    {
        $('.banner').trigger('remove.owl.carousel', [4, 9]).trigger('refresh.owl.carousel');
    }

    $('.slide-mice').owlCarousel({
        navText: ['<span class="glyphicon glyphicon-menu-left"></span>', '<span class="glyphicon glyphicon-menu-right"></span>'],
        nav: true,
        dots: true,
        margin: 15,
        responsive : {
            0 : {
                items: 2,
                stagePadding: 0,
            },
            767 : {
                items: 6,
                stagePadding: 0,
            }
        }
    });
    $('.slide-location').owlCarousel({
        navText: ['<span class="glyphicon glyphicon-menu-left"></span>', '<span class="glyphicon glyphicon-menu-right"></span>'],
        nav: true,
        loop: false,
        dots: true,
        responsive : {
            0 : {
                items: 1,
                slideBy: 1,
            },
            767 : {
                items: 2,
                slideBy: 2,
            }
        }
    });
    $('.post-related-slide').owlCarousel({
        navText: ['<span class="glyphicon glyphicon-menu-left"></span>', '<span class="glyphicon glyphicon-menu-right"></span>'],
        nav: true,
        loop: false,
        margin: 0,
        responsive : {
            0 : {
                items: 1,
                dots: true,
            },
            767 : {
                items: 2,
                dots: false,
            },
            920 : {
                items: 3,
                dots: false,
            }
        }
    });

    if($(window).width() < 992)
    {
        $('.mobile-slide').addClass('owl-carousel');
        $('.mobile-slide').owlCarousel({
            navText: ['', ''],
            nav: true,
            loop: false,
            dots: false,
            margin: 15,
            responsive : {
                0 : {
                    items: 1,
                },
                767 : {
                    items: 2,
                }
            }
        });
    }

    // tab-filter
    $('.tab-filter > .head > .inner').click(function(){
        var value = $(this).attr('data-filter');
        var parent = $(this).parents('.tab-filter');
        parent.find('.body div[data-filter]').hide();
        parent.find('.head .inner').removeClass('active');
        if(value == '')
        {
            parent.find('.body div[data-filter]').fadeIn(300);
            parent.find('.head .inner[data-filter="'+value+'"]').addClass('active');
        }
        else
        {
            parent.find('.body div[data-filter="'+value+'"]').fadeIn(300);
            parent.find('.head .inner[data-filter="'+value+'"]').addClass('active');
        }
    });

    // totop
    $('.to-top').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 'slow');
    });

    // tooltip
    $('[data-toggle="tooltip"]').tooltip()

    // datepicker
    $('.datepicker2').datepicker({
        autoclose: true,
        todayHighlight: true
    });

    // input-textarea count
    $('body').on('keyup', '.limit-char .form-control', function(e){
        var parent = $(this).parents('.limit-char');
        var cnt = $(this).val().length;
        parent.find('.char .cnt').html(cnt);
    });

    // input-star
    $('body').on('click', '.input-score .star span', function(){
        var index = $(this).index();
        var parent = $(this).parents('.input-score');
        parent.find('span').removeClass('glyphicon-star-empty');
        parent.find('span').removeClass('glyphicon-star');
        parent.find('span:lt('+(index+1)+')').addClass('glyphicon-star');
        parent.find('span:gt('+index+')').addClass('glyphicon-star-empty');
        parent.find('input').val(index+1);
    });

    // input-password
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

    // input-slider
    $(".slider input").slider();
    $('.slider input').change(function(){
        var data = $(this).val().split(',');
        var parent = $(this).parents('.slider-box');
        parent.find('.slider-start').val(data[0]);
        parent.find('.slider-end').val(data[1]);
    });

    // upload
    $('body').on('change', '.upload-photo input', function(e){
        var parent = $(this).parents('.upload-photo');
        var input = e.target;
        var ele = $(this);
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(event) {
                parent.find('.preview').remove();
                parent.prepend('<div class="preview" style="background-image: url('+event.target.result+')"></div>');
            }
            reader.readAsDataURL(input.files[0]);
        }

    }).on('change', '.upload-file input', function(e){
        var parent = $(this).parents('.upload-file');
        var input = e.target;
        for (var i = 0; i < input.files.length; i++) {
            parent.find('.text').append(`<div class="inner">
                                            <span>${input.files[i].name}</span>
                                            <i class="m-icon m-icon-close remove-file"></i>
                                        </div>`);
        }
    }).on('click', '.remove-file', function(){
        $(this).parents('.inner').remove();

    }).on('change', '.upload-photos .input input', function(e){
        var ele = $(this).parents('.inner');
        var input = e.target;
        for (var i = 0; i < input.files.length; i++) {
            var reader = new FileReader();
            reader.onload = function(event) {
                ele.before(`<div class="inner">
                                <div class="bg" style="background-image: url('${event.target.result}')"></div>
                                <div class="action dropup">
                                    <button class="btn btn-trans btn-default dropdown-toggle btn-dots" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="glyphicon glyphicon-option-horizontal"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right shadow">
                                        <li>
                                            <div class="text-icon is-middle edit-photo">
                                                <i class="m-icon m-icon-edit"></i>
                                                <span>แก้ไขรูป</span>
                                                <input type="file" accept="image/*">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="text-icon is-middle remove-photo">
                                                <i class="m-icon m-icon-trash"></i>
                                                <span>ลบรูป</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>`);
            }
            reader.readAsDataURL(input.files[i]);
        }

    }).on('change', '.upload-photos .edit-photo input', function(e){
        var ele = $(this).parents('.inner');
        var input = e.target;
        ele.find('.action').removeClass('open');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(event) {
                ele.find('.bg').css('background-image', 'url("'+event.target.result+'")');
            }
            reader.readAsDataURL(input.files[0]);
        }

    }).on('click', '.upload-photos .remove-photo', function(){
        $(this).parents('.inner').remove();
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
    
    // copy link
    $('.btn-copylink').tooltip();
    $('.btn-copylink').click(function(e){
        e.preventDefault();
        
        if($('.copylink-input').val() == '')
        {
            $('.copylink-input').val(window.location.href);
        }
        
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
        setTimeout(() => {
            var msnry = new Masonry( '.grid', {
                itemSelector: '.grid-item'
            });
        }, 200);
    }

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

    // menu
    if($('.member-menu.for-business').length > 0)
    {
        var active = $('.member-menu.for-business .dropdown-item.active span').html();
        $('#menu-active').html(active);

        if($(window).width() < 768)
        {
            if($('.tab .nav-tabs .active').offset().left > ($(window).width() - 50))
            {
                $('.tab .nav-tabs').animate({
                    scrollLeft: $('.tab .nav-tabs .active').offset().left
                }, 'fast');
            }
        }
    }

    // new & promotion box
    $('.promotion-box').click(function(e){
        if(!e.target.closest('a'))
        {
            var url =  $(e.target).parents('.promotion-box').find('a').attr('href');
            window.location.href = url;
        }
    });

    // share sticky
    if($('.share.is-sticky').length > 0)
    {
        var share_top = $('.share.is-sticky').offset().top;  
        var share_left = $('.share.is-sticky').offset().left; 
        $(window).scroll(function() {                  
            var currentScroll = $(window).scrollTop(); 
            console.log(currentScroll, share_top, share_left);
            if (currentScroll >= share_top) {           
                $('.share.is-sticky').css({                      
                    position: 'fixed',
                    top: 100,
                    left: share_left,
                    right: 'auto'
                });
            } else {     
                $('.share.is-sticky').attr('style', '');  
            }
        });
    }

    // post
    $('.post .bg, .post .head h3, .post .head p').click(function(e){
        var url =  $(e.target).parents('.post').find('.btn-info-toggle').attr('href');
        if(!e.target.closest('i') && url != undefined)
        {
            window.location.href = url;
        }
    });
    $('.input-group.is-calendar .input-group-addon').click(function(){
        $(this).prev('input').focus();
    });

    // b-manage
    set_footer_business();
    $(window).resize(function(){
        set_footer_business();
    });

})();

function set_footer_business()
{
    if($('.b-manage').length > 0)
    {
        var b_addition = ($(window).width() < 768) ? 50 : ($(window).width() < 991) ? 550 : 280;
        var b_footer = $('header').height() + ($('footer').height() + b_addition);
        $(window).scroll(function() {    
            var b_body = $('#wrapper').height();           
            var b_scroll = $(window).scrollTop(); 
            var b_bottom = b_body - b_footer;
            console.log(b_scroll, b_bottom);
            if (b_scroll >= b_bottom) {           
                $('.step-footer').css({        
                    bottom: b_scroll - b_bottom
                });
            } else {     
                $('.step-footer').attr('style', '');  
            }
        });
    }
}

function open_search()
{
    $('#search').fadeIn(300);
}
function close_search()
{
    $('#search').fadeOut();
    $('#search .form-control').val('');
}

function set_panel_list()
{
    $('.panel_list').each(function(){
        
    });
}
