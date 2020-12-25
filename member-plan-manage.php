<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <section class="member">
                <?php include "layout/nav-member.php" ?>
                <div class="member-body">
                    <a href="javascript:history.back()" class="to-back font-blue hidden-desktop">
                        <div class="text-icon is-middle">
                            <i class="glyphicon glyphicon-menu-left" style="top: 56%"></i>
                            <span>กลับไปเมนูบัญชีทั่วไป</span>
                        </div>
                    </a>
                    <h2 class="font-semibold no-margin-top">วางแผนการจัดงานไมซ์</h2>
                    <p class="no-margin">ท่านสามารถเลือกกลุ่มธุรกิจด้านล่างตามที่ต้องการ โดยกดจากแทบเมนูด้านซ้ายสุดเพื่อเลือกกลุ่ม หลังจากนั้นระบบจะแสดงรายการของแต่ละธุรกิจ เมื่อท่านเลือกโดยการกดเพิ่มเข้าแผนจัดงานแล้ว สามารถตรวจสอบและแก้ไขรายการที่เลือกได้ในส่วน <a href="member.php" class="font-blue font-bold">ผู้ให้บริการที่เลือกแล้ว</a></p>
                    <br/>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-body" id="step1">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h3 class="font-semibold no-margin-top"><big>กิจกรรมงานสัมมนาครั้งที่ 5</big></h3>
                                        </div>
                                        <div class="col-sm-3">
                                            <p class="font-semibold" style="margin-top:3px;">วันที่จัดงาน : 24/04/20 - 25/04/20</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p class="font-semibold" style="margin-top:3px;">เวลา : 08.00 - 18.00 น.</p>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="font-semibold no-margin">ที่่ตั้งสถานที่จัดงาน</label>
                                            <p>กรุงเทพมหานคร</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="font-semibold no-margin">จำนวนคน</label>
                                            <p>250 คน</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="font-semibold no-margin">ประเภทการจัดงาน</label>
                                            <p>งานสัมมนา</p>
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            <a href="member-plan-manual.php" class="btn btn-sm btn-default" style="margin-top: 12px;">
                                                <div class="text-icon">
                                                    <i class="m-icon m-icon-edit"></i>
                                                    <span>แก้ไขข้อมูล</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <h3 class="font-semibold no-margin-bottom hidden-mobile">เลือกผู้ให้บริการ</h3>
                            <div class="select-service">
                                <ul class="service-type" id="step2">
                                    <h3 class="font-semibold no-margin-top hidden-desktop">เลือกผู้ให้บริการ</h3>
                                    <li data-type="1" onclick="switch_type(1)">ออร์แกไนเซอร์</li>
                                    <li class="active" data-type="2" onclick="switch_type(2)">Online Event</li>
                                </ul>
                                <div class="service-list scroll-custom" id="step3">
                                    <div class="post style-2" data-type="2" data-id="1">
                                        <div class="bg" style="background-image: url('assets/images/plan-post1.png')"><i class="m-icon m-icon-like-white"></i></div>
                                        <div class="text">
                                            <div class="head">
                                                <div class="star font-black">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty"></span>
                                                </div>
                                                <h3>Pullman Bangkok Grande Sukhumvit</h3>
                                                <p class="no-margin">กรุงเทพมหานคร</p>
                                                <div class="mode">
                                                    <div class="inner is-orange">ที่พัก</div>
                                                    <div class="inner is-purple">สถานที่จัดงาน</div>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="info font-14">
                                                    <div class="row">
                                                        <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                        <div class="col-xs-6">9 ห้อง</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-6">ความจุ (คน)</div>
                                                        <div class="col-xs-6">30 - 1,300 คน</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                        <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-6">ระยะทาง</div>
                                                        <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                                    </div>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="#" class="btn btn-trans">ดูข้อมูลสถานที่</a>
                                                    <button type="button" class="btn btn-blue btn-add" onclick="add(this)">+ เพิ่มเข้าแผนจัดงาน</button>
                                                    <button type="button" class="btn btn-default btn-cancel" onclick="cancel(this)"> 
                                                        <div class="text-icon is-middle">
                                                            <i class="m-icon m-icon-check-blue"></i>
                                                            <span>เพิ่มแล้ว</span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post style-2 active" data-type="2" data-id="2">
                                        <div class="bg" style="background-image: url('assets/images/plan-post2.png')"><i class="m-icon m-icon-like-white"></i></div>
                                        <div class="text">
                                            <div class="head">
                                                <div class="star font-black">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty"></span>
                                                </div>
                                                <h3>สัปดาห์หนังสือแห่งชาติครั้งที่ 28</h3>
                                                <p class="no-margin">กรุงเทพมหานคร</p>
                                                <div class="mode">
                                                    <div class="inner is-orange">ที่พัก</div>
                                                    <div class="inner is-purple">สถานที่จัดงาน</div>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="info font-14">
                                                    <div class="row">
                                                        <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                        <div class="col-xs-6">9 ห้อง</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-6">ความจุ (คน)</div>
                                                        <div class="col-xs-6">30 - 1,300 คน</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                        <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-6">ระยะทาง</div>
                                                        <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                                    </div>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="#" class="btn btn-trans">ดูข้อมูลสถานที่</a>
                                                    <button type="button" class="btn btn-blue btn-add" onclick="add(this)">+ เพิ่มเข้าแผนจัดงาน</button>
                                                    <button type="button" class="btn btn-default btn-cancel" onclick="cancel(this)"> 
                                                        <div class="text-icon is-middle">
                                                            <i class="m-icon m-icon-check-blue"></i>
                                                            <span>เพิ่มแล้ว</span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post style-2" data-type="2" data-id="3">
                                        <div class="bg" style="background-image: url('assets/images/plan-post1.png')"><i class="m-icon m-icon-like-white"></i></div>
                                        <div class="text">
                                            <div class="head">
                                                <div class="star font-black">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty"></span>
                                                </div>
                                                <h3>Pullman Bangkok Grande Sukhumvit</h3>
                                                <p class="no-margin">กรุงเทพมหานคร</p>
                                                <div class="mode">
                                                    <div class="inner is-orange">ที่พัก</div>
                                                    <div class="inner is-purple">สถานที่จัดงาน</div>
                                                </div>
                                            </div>
                                            <div class="body">
                                                <div class="info font-14">
                                                    <div class="row">
                                                        <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                        <div class="col-xs-6">9 ห้อง</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-6">ความจุ (คน)</div>
                                                        <div class="col-xs-6">30 - 1,300 คน</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                        <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-6">ระยะทาง</div>
                                                        <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                                    </div>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="#" class="btn btn-trans">ดูข้อมูลสถานที่</a>
                                                    <button type="button" class="btn btn-blue btn-add" onclick="add(this)">+ เพิ่มเข้าแผนจัดงาน</button>
                                                    <button type="button" class="btn btn-default btn-cancel" onclick="cancel(this)"> 
                                                        <div class="text-icon is-middle">
                                                            <i class="m-icon m-icon-check-blue"></i>
                                                            <span>เพิ่มแล้ว</span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 provider-select">
                            <div class="hidden-desktop">
                                <div class="provider-select-head">
                                    <h3 class="font-semibold no-margin">ผู้ให้บริการที่เลือกแล้ว 6 รายการ</h3>
                                    <div class="text-icon font-blue icon-right font-16 is-middle" onclick="$('.provider-select').addClass('open');">
                                        <i><span class="glyphicon glyphicon-menu-up"></span></i>
                                        <span><u>ตรวจสอบผู้ให้บริการที่เลือกแล้ว</u></span>
                                    </div>
                                    <div class="clearfix"><br/></div>
                                    <a href="member-quotation.php" class="btn btn-block btn-md btn-blue-linear font-medium btn-request" >ดำเนินการขอใบเสนอราคา</a>
                                </div>  
                                <div class="clearfix">
                                    <br/>
                                    <h3 class="font-semibold no-margin pull-left">ผู้ให้บริการที่เลือกแล้ว 6 รายการ</h3>
                                    <span class="glyphicon glyphicon-menu-down font-blue pull-right font-16" onclick="$('.provider-select').removeClass('open');"></span>
                                </div>
                            </div>
                            <div class="hidden-mobile">
                                <h3 class="font-semibold no-margin-bottom">ผู้ให้บริการที่เลือกแล้ว</h3>
                            </div>
                            <div class="selected-service scroll-custom">
                                <div class="panel panel-info" data-type="1" id="step4">
                                    <div class="panel-heading">ออร์แกไนเซอร์</div>
                                    <div class="panel-body">
                                        <div class="list" data-id="2">
                                            <div class="user">
                                                <div class="bg" style="background-image: url('assets/images/plan-c1.png')"></div>
                                                <h3 class="no-margin font-semibold">ดี อีเว้นท์ เมเนเม้นจ์</h3>
                                                <p>กรุงเทพมหานคร</p>
                                            </div>
                                            <div class="action dropdown">
                                                <button class="btn btn-trans btn-default dropdown-toggle btn-dots" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <span class="glyphicon glyphicon-option-horizontal"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right shadow">
                                                    <li onclick="remove(this)">
                                                        <div class="text-icon is-middle">
                                                            <i class="m-icon m-icon-trash"></i>
                                                            <span>ลบ</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info" data-type="2">
                                    <div class="panel-heading">Online Event</div>
                                    <div class="panel-body">
                                        <div class="list" data-id="2">
                                            <div class="user">
                                                <div class="bg" style="background-image: url('assets/images/plan-c2.png')"></div>
                                                <h3 class="no-margin font-semibold">สัปดาห์หนังสือแห่งชาติ ครั้งที่ 28</h3>
                                                <p>กรุงเทพมหานคร</p>
                                            </div>
                                            <div class="action dropdown">
                                                <button class="btn btn-trans btn-default dropdown-toggle btn-dots" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <span class="glyphicon glyphicon-option-horizontal"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right shadow">
                                                    <li onclick="remove(this)">
                                                        <div class="text-icon is-middle">
                                                            <i class="m-icon m-icon-trash"></i>
                                                            <span>ลบ</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info" data-type="3">
                                    <div class="panel-heading">อาหารและเครื่องดื่ม</div>
                                    <div class="panel-body">
                                        <div class="list" data-id="1">
                                            <div class="user">
                                                <div class="bg" style="background-image: url('assets/images/plan-c3.png')"></div>
                                                <h3 class="no-margin font-semibold">Eatfood Company</h3>
                                                <p>กรุงเทพมหานคร</p>
                                            </div>
                                            <div class="action dropdown">
                                                <button class="btn btn-trans btn-default dropdown-toggle btn-dots" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <span class="glyphicon glyphicon-option-horizontal"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right shadow">
                                                    <li onclick="remove(this)">
                                                        <div class="text-icon is-middle">
                                                            <i class="m-icon m-icon-trash"></i>
                                                            <span>ลบ</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="list" data-id="3">
                                            <div class="user">
                                                <div class="bg" style="background-image: url('assets/images/plan-c4.png')"></div>
                                                <h3 class="no-margin font-semibold">Cafe Amazon</h3>
                                                <p>กรุงเทพมหานคร</p>
                                            </div>
                                            <div class="action dropdown">
                                                <button class="btn btn-trans btn-default dropdown-toggle btn-dots" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <span class="glyphicon glyphicon-option-horizontal"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right shadow">
                                                    <li onclick="remove(this)">
                                                        <div class="text-icon is-middle">
                                                            <i class="m-icon m-icon-trash"></i>
                                                            <span>ลบ</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="member-quotation.php" id="step5" class="btn btn-block btn-md btn-blue-linear font-medium btn-request">ดำเนินการขอใบเสนอราคา</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include "layout/footer.php" ?>
        <script>
            function add(e)
            {
                var parent = $(e).parents('.post');
                var type = parent.attr('data-type');
                var id = parent.attr('data-id');
                var bg = parent.find('.bg').attr('style');
                var h3 = parent.find('.head h3').html();
                var p = parent.find('.head p').html();
                parent.addClass('active');
                $('.selected-service .panel[data-type="'+type+'"]').append(`<div class="list" data-id="${id}">
                                                                                <div class="user">
                                                                                    <div class="bg" style="${bg}"></div>
                                                                                    <h3 class="no-margin font-semibold">${h3}</h3>
                                                                                    <p>${p}</p>
                                                                                </div>
                                                                                <div class="action dropdown">
                                                                                    <button class="btn btn-trans btn-default dropdown-toggle btn-dots" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                                        <span class="glyphicon glyphicon-option-horizontal"></span>
                                                                                    </button>
                                                                                    <ul class="dropdown-menu dropdown-menu-right shadow">
                                                                                        <li onclick="remove(this)">
                                                                                            <div class="text-icon is-middle">
                                                                                                <i class="m-icon m-icon-trash"></i>
                                                                                                <span>ลบ</span>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>`);
            }

            function cancel(e)
            {
                var parent = $(e).parents('.post');
                var type = parent.attr('data-type');
                var id = parent.attr('data-id');
                parent.removeClass('active');
                $('.selected-service .panel[data-type="'+type+'"] .list[data-id="'+id+'"]').remove();
            }

            function remove(e)
            {
                var type = $(e).parents('.panel').attr('data-type');
                var id = $(e).parents('.list').attr('data-id');
                $(e).parents('.list').remove();
                $('.service-list .post[data-type="'+type+'"][data-id="'+id+'"]').removeClass('active')
            }

            function switch_type(value)
            {
                $('.service-type li').removeClass('active');
                $('.service-type li[data-type="'+value+'"]').addClass('active');

                $('.service-list .post').attr('data-type', value);
                $('.service-list').hide().fadeIn(300);
            }

            function set_tour()
            {
                var arrHelp = [
                    {
                        element: '#step1',
                        intro: '<h4>ขั้นตอนที่ 1/5</h4><p>ตรวจสอบความถูกต้องของข้อมูลที่ท่านได้กรอกรายละเอียดไปก่อนหน้านี้</p>',
                        position: 'bottom'
                    },
                    {
                        element: '#step2',
                        intro: '<h4>ขั้นตอนที่ 2/5</h4><p>เลือกประเภทของกลุ่มธุรกิจที่ท่านต้องการดูรายชื่อสถานประกอบการที่ต้องการ</p>',
                        position: 'right'
                    },
                    {
                        element: '#step3',
                        intro: '<h4>ขั้นตอนที่ 3/5</h4><p>เลือกสถานประกอบการที่ท่านต้องการขอใบเสนอราคาโดยกด <span class="font-blue">+เพิ่มเข้าแผนจัดงาน</span> หรือสามารถกดดูรายละเอียดข้อมูลได้ที่ปุ่ม <span class="font-blue">ดูข้อมูลสถานที่</span> </p>',
                        position: 'right'
                    },
                    {
                        element: '#step4',
                        intro: '<h4>ขั้นตอนที่ 4/5</h4><p>เมื่อท่านทำการเพิ่มเข้าแผนจัดงาน ระบบจะแสดงข้อมูลที่ท่านเลือกไว้ด้านขวา และสามารถกดลบได้ที่ปุ่มขวาบนกล่อง ( ••• )</p>',
                        position: 'bottom'
                    },
                    {
                        element: '#step5',
                        intro: '<h4>ขั้นตอนที่ 5/5</h4><p>เมื่อท่านได้เลือกรายการธุรกิจครบตามที่ต้องการสามารถกดปุ่ม ดำเนินการขอใบเสนอราคา และระบบจะทำการส่งคำขอทันที</p>',
                        position: 'left'
                    },
                ];

                var tour = introJs();
                tour.setOptions({
                    steps: arrHelp,
                    showStepNumbers: false,
                    showBullets: false,
                    nextLabel: 'ดูขั้นตอนถัดไป',
                    prevLabel: '<span class=\'glyphicon glyphicon-menu-left\'></span> ย้อนกลับ',
                    doneLabel: 'เข้าใจและปิด',
                    skipLabel: 'ข้าม',
                    hidePrev: true,
                    hideNext: false,
                    scrollToElement: true,
                    scrollTo: 'element',
                    onbeforechange: function(val) {
                        console.log(val);
                    }
                });
                tour.onchange(function(){
                    $('body').addClass('for-tour');
                });
                tour.onexit(function(){
                    $('body').removeClass('for-tour');
                });
                tour.start();
            }

            (function(){
                if($(window).width() >= 768)
                {
                    set_tour();
                }
            })();
            
        </script>
    </body>
</html>