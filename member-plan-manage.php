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
                    <h2 class="font-semibold no-margin-top">วางแผนการจัดงานไมซ์</h2>
                    <p class="no-margin">ท่านสามารถเลือกกลุ่มธุรกิจด้านล่างตามที่ต้องการ โดยกดจากแทบเมนูด้านซ้ายสุดเพื่อเลือกกลุ่ม หลังจากนั้นระบบจะแสดงรายการของแต่ละธุรกิจ เมื่อท่านเลือกโดยการกดเพิ่มเข้าแผนจัดงานแล้ว สามารถตรวจสอบและแก้ไขรายการที่เลือกได้ในส่วน <a href="member.php" class="font-blue font-bold">ผู้ให้บริการที่เลือกแล้ว</a></p>
                    <br/>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
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
                                            <button class="btn btn-sm btn-default" style="margin-top: 12px;">
                                                <div class="text-icon">
                                                    <i class="m-icon m-icon-edit"></i>
                                                    <span>แก้ไขข้อมูล</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-sm-8">
                            <h3 class="font-semibold no-margin-bottom">เลือกผู้ให้บริการ</h3>
                            <div class="select-service">
                                <ul class="service-type">
                                    <li data-type="1" onclick="switch_type(1)">ออร์แกไนเซอร์</li>
                                    <li class="active" data-type="2" onclick="switch_type(2)">Online Event</li>
                                </ul>
                                <div class="service-list">
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
                        <div class="col-sm-4">
                            <h3 class="font-semibold no-margin-bottom">ผู้ให้บริการที่เลือกแล้ว</h3>
                            <div class="selected-service">
                                <div class="panel panel-info" data-type="1">
                                    <div class="panel-heading">ออร์แกไนเซอร์</div>
                                    <div class="panel-body">
                                        <div class="list" data-id="2">
                                            <div class="user">
                                                <div class="bg" style="background-image: url('assets/images/plan-c1.png')"></div>
                                                <h3 class="no-margin font-semibold">ดี อีเว้นท์ เมเนเม้นจ์</h3>
                                                <p>กรุงเทพมหานคร</p>
                                            </div>
                                            <div class="action">
                                                <span>&hellip;</span>
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
                                            <div class="action">
                                                <span>&hellip;</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading">อาหารและเครื่องดื่ม</div>
                                    <div class="panel-body">
                                        <div class="list" data-id="1">
                                            <div class="user">
                                                <div class="bg" style="background-image: url('assets/images/plan-c3.png')"></div>
                                                <h3 class="no-margin font-semibold">Eatfood Company</h3>
                                                <p>กรุงเทพมหานคร</p>
                                            </div>
                                            <div class="action">
                                                <span>&hellip;</span>
                                            </div>
                                        </div>
                                        <div class="list" data-id="3">
                                            <div class="user">
                                                <div class="bg" style="background-image: url('assets/images/plan-c4.png')"></div>
                                                <h3 class="no-margin font-semibold">Cafe Amazon</h3>
                                                <p>กรุงเทพมหานคร</p>
                                            </div>
                                            <div class="action">
                                                <span>&hellip;</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-block btn-md btn-blue-linear font-medium btn-request" data-dismiss="modal" data-toggle="modal" data-target="#modal-quotation">ดำเนินการขอใบเสนอราคา</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>

        <div class="modal fade" id="modal-quotation" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body font-16 pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <form action="" method="post" class="form-quotation">
                            <h2 class="title-yelloow">ขอใบเสนอราคา</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-medium">ประเภทการจัดงาน</label>
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="">เลือกประเภทการจัดงาน</option>
                                                <option value="1">ประเภท 1</option>
                                                <option value="2">ประเภท 2</option>
                                                <option value="3">ประเภท 3</option>
                                            </select>
                                            <span class="m-icon m-icon-dropdown"></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-medium">จำนวนคนที่เข้าร่วม</label>
                                        <input type="text" class="form-control" placeholder="ระบุจำนวนคน">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-medium">สถานที่จัดงาน</label>
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="">เลือกจังหวัด</option>
                                                <option value="1">จังหวัด 1</option>
                                                <option value="2">จังหวัด 2</option>
                                                <option value="3">จังหวัด 3</option>
                                            </select>
                                            <span class="m-icon m-icon-dropdown"></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-medium">วันที่เริ่มงาน</label>
                                        <div class="input-group is-calendar">
                                            <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-medium">วันที่สิ้นสุดงาน</label>
                                        <div class="input-group is-calendar">
                                            <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="font-medium">เวลา</label>
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="">10.00</option>
                                            </select>
                                            <span class="m-icon m-icon-dropdown"></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="font-medium">เวลา</label>
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="">19.00</option>
                                            </select>
                                            <span class="m-icon m-icon-dropdown"></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-medium">งบประมาณ</label>
                                        <input type="text" class="form-control" placeholder="ระบุงบประมาณในการจัดงาน">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-medium">รายละเอียดอื่นๆ เพิ่มเติม</label>
                                        <textarea class="form-control" rows="5" placeholder="ระบุรายละเอียดที่ท่านต้องการเพื่อให้ผู้ประกอบการสามารถออกใบเสนอราคาได้อย่างครบถ้วน"></textarea>
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-quotation-success"  class="btn btn-lg btn-blue-linear font-medium">ขอใบเสนอราคา</button>
                            </div>
                            <br/>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-quotation-success" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body font-16 pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <div class="status-box">
                            <br/><br/>
                            <img src="assets/images/status-success.png">
                            <h2 class="font-medium">ระบบดำเนินการส่งคำขอใบเสนอราคา<br/>เรียบร้อยแล้ว</h2>
                            <p></p>
                            <div class="btn-box">
                                <a href="member.php" style="width:300px;" class="btn btn-lg btn-blue-linear">ดูประวัติการขอใบเสนอราคา</a>
                            </div>
                            <br/><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                                                                <div class="action">
                                                                                    <span>&hellip;</span>
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

            function switch_type(value)
            {
                $('.service-type li').removeClass('active');
                $('.service-type li[data-type="'+value+'"]').addClass('active');

                $('.service-list .post').attr('data-type', value);
                $('.service-list').hide().fadeIn(300);
            }
        </script>
    </body>
</html>