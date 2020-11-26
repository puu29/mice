<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <section class="member">
                <?php include "layout/nav-business.php" ?>
                <div class="member-body">
                    <div class="top-white">
                        <a href="member-business.php" class="to-back font-blue">
                            <div class="text-icon is-middle">
                                <i class="glyphicon glyphicon-menu-left"></i>
                                <span>กลับหน้าบัญชีธุรกิจ</span>
                            </div>
                        </a>
                        <div class="member-title">
                            <div class="pull-left">
                                <h2 class="font-semibold no-margin">Villa Hotel and Resort</h2>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="tab">
                            <ul class="nav nav-tabs text-left">
                                <li><a href="business-manage.php">โปรไฟล์ธุรกิจ</a></li>
                                <li class="active"><a href="business-manage-chat.php">การสนทนา <span class="circle"></span></a></li>
                                <li ><a href="business-manage-quotation.php">ใบเสนอราคา <span class="circle"></span></a></li>
                                <li ><a href="business-manage-promotion.php">จัดการโปรโมชั่น</a></li>
                                <li ><a href="business-manage-post.php">จัดการโพสต์ของธุรกิจ</a></li>
                                <li ><a href="business-manage-calendar.php">จัดการปฏิทินไมซ์</a></li>
                                <li ><a href="business-manage-dashboard.php">สถิติผู้เข้าดู</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active">
                                    <div class="b-chat">
                                        <div class="btn-toolbar bg-white shadow-blue font-14" role="toolbar">
                                            <a href="business-manage-chat.php" class="btn-group active" role="group">
                                                <div class="chat-type">
                                                    <h2 class="no-margin font-semibold">15</h2>
                                                    <p class="no-margin">แชทสนทนา</p>
                                                </div>
                                                <div class="text-icon font-regular is-middle hidden-desktop">
                                                    <i class="m-icon m-icon-search"></i>
                                                    <span>ดูรายการ</span>
                                                </div>
                                            </a>
                                            <a href="business-manage-chat-waiting.php" class="btn-group" role="group">
                                                <div class="chat-type">
                                                    <h2 class="no-margin font-semibold">4</h2>
                                                    <p class="no-margin">รอการนัด Video Call</p>
                                                </div>
                                                <div class="text-icon font-regular is-middle hidden-desktop">
                                                    <i class="m-icon m-icon-search"></i>
                                                    <span>ดูรายการ</span>
                                                </div>
                                            </a>
                                            <a href="business-manage-chat-confirm.php" class="btn-group" role="group">
                                                <div class="chat-type">
                                                    <h2 class="no-margin font-semibold">2</h2>
                                                    <p class="no-margin">ยืนยันการนัด Video Call</p>
                                                </div>
                                                <div class="text-icon font-regular is-middle hidden-desktop">
                                                    <i class="m-icon m-icon-search"></i>
                                                    <span>ดูรายการ</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="title-dialog clearfix">
                                            <div class="to-back font-blue pull-left">
                                                <div class="text-icon is-middle">
                                                    <i class="glyphicon glyphicon-menu-left" style="top: 56%"></i>
                                                    <span>ย้อนกลับ</span>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-md btn-blue-linear pull-right" style="margin-top: -12px;margin-bottom: 20px;" data-dismiss="modal" data-toggle="modal" data-target="#modal-quotation">
                                                <div class="text-icon is-middle no-margin">
                                                    <i class="m-icon m-icon-docs m-icon-white"></i>
                                                    <span>ส่งใบเสนอราคา</span>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-list shadow-blue">
                                                <div class="inner no-read">
                                                    <div class="user ">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/chat-user1.png')"></div>
                                                            <div class="no">5</div>
                                                            <div class="online"></div>
                                                        </div>
                                                        <div class="text">
                                                            <div class="pin"><i class="m-icon m-icon-pin m-icon-20"></i></div>
                                                            <p class="name"><b>ทรู๊ปมีเดีย ออกาไนซ์เซอร์จัดงานอีเว็นท์</b></p>
                                                            <p>รบกวนขอรายละเอียดใบเสนอราคา</p>
                                                            <p class="date"><small>17/06/2020</small> <small>18.34 น.</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inner no-read">
                                                    <div class="user">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/chat-user2.png')"></div>
                                                            <div class="no">5</div>
                                                            <div class="online"></div>
                                                        </div>
                                                        <div class="text">
                                                            <div class="pin"><i class="m-icon m-icon-pin m-icon-20"></i></div>
                                                            <p class="name"><b>คำแสด รีเวอร์แคว รีสอร์ท</b></p>
                                                            <p>ขอบคุณค่ะ</p>
                                                            <p class="date"><small>13/06/2020</small> <small>17.02 น.</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inner no-read">
                                                    <div class="user">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/chat-user3.png')"></div>
                                                            <div class="no">5</div>
                                                        </div>
                                                        <div class="text">
                                                            <p class="name"><b>บุษราคัม</b></p>
                                                            <p>ขอบคุณค่ะ</p>
                                                            <p class="date"><small>11/06/2020</small> <small>12.45 น.</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inner no-read">
                                                    <div class="user">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/chat-user4.png')"></div>
                                                        </div>
                                                        <div class="text">
                                                            <p class="name"><b>นภาลัย</b></p>
                                                            <p>ขอบคุณค่ะ</p>
                                                            <p class="date"><small>23/05/2020</small> <small>12.45 น.</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inner no-read">
                                                    <div class="user">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/chat-user5.png')"></div>
                                                        </div>
                                                        <div class="text">
                                                            <p class="name"><b>โรงแรมปริ๊นซ์ พาเลซ</b></p>
                                                            <p>ขอบคุณค่ะ</p>
                                                            <p class="date"><small>23/05/2020</small> <small>11.30 น.</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inner active">
                                                    <div class="user">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/chat-user6.png')"></div>
                                                            <div class="online"></div>
                                                        </div>
                                                        <div class="text">
                                                            <p class="name"><b>Villa Hotel and Resort</b></p>
                                                            <p>ต้องการอาหารและเครื่องดื่มพัก...</p>
                                                            <p class="date"><small>23/07/2020</small> <small>06.00 น.</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inner">
                                                    <div class="user">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/chat-user7.png')"></div>
                                                        </div>
                                                        <div class="text">
                                                            <p class="name"><b>ดี อีเว้นท์ เมเนเม้นจ์</b></p>
                                                            <p>ขอสอบถามราคาการดำเนินงานค่ะ</p>
                                                            <p class="date"><small>23/07/2020</small> <small>07.48 น.</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-dialog shadow-blue">
                                                <div class="head">
                                                    <div class="user pull-left">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/chat-user6.png')"></div>
                                                        </div>
                                                        <div class="text">
                                                            <p class="name font-semibold font-16">Villa Hotel and Resort</p>
                                                            <p class="online font-green font-semibold">Online</p>
                                                            <a href="" class="btn btn-md btn-trans"><i class="m-icon m-icon-btn-call"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown pull-right">
                                                        <button class="btn btn-trans btn-default dropdown-toggle btn-dots" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            <span class="glyphicon glyphicon-option-vertical"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right shadow-blue">
                                                            <li>
                                                                <div class="text-icon is-middle">
                                                                    <i class="m-icon m-icon-pin-outline"></i>
                                                                    <span>ปักหมุดแชทสนทนา</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="text-icon is-middle">
                                                                    <i class="m-icon m-icon-trash"></i>
                                                                    <span>ลบแชทสนทนา</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <button type="button" class="btn btn-md btn-blue-linear pull-right hidden-mobile show-ipad" data-dismiss="modal" data-toggle="modal" data-target="#modal-quotation">
                                                        <div class="text-icon is-middle for-list no-margin">
                                                            <i class="m-icon m-icon-docs m-icon-white"></i>
                                                            <span>ส่งใบเสนอราคา</span>
                                                        </div>
                                                    </button>
                                                </div>
                                                <div class="body">
                                                    <div class="inner" id="dialog">
                                                        <div class="date"><span>7.45 น.</span></div>
                                                        <div class="msg me">
                                                            <div class="text">สวัสดีค่ะ ขอสอบถามรายละเอียดเพิ่มเติมค่ะ</div>
                                                        </div>
                                                        <div class="msg me">
                                                            <div class="text">รายละเอียดงานเป็นประเภทงานสัมมนา ประมาณ 90-120 คนค่ะ ใช้สถานที่ทั้งวันตั้งแต่ 8.00-18.00 น. 2 วัน</div>
                                                        </div>
                                                        <div class="msg you">
                                                            <div class="text">ต้องการอาหารและเครื่องดื่มพักกลางวันด้วยมั้ยคะ</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    <div class="chat-upload">
                                                        <button class="btn btn-trans">
                                                            <input type="file" accept="image/*" onchange="send_msg_photo(this)">
                                                            <i class="m-icon m-icon-upload-photo"></i>
                                                        </button>
                                                        <button class="btn btn-trans">
                                                            <input type="file" accept=".pdf, .docx, .xlsx" onchange="send_msg_file(this)">
                                                            <i class="m-icon m-icon-upload-file"></i>
                                                        </button>
                                                    </div>
                                                    <div class="chat-msg">
                                                        <textarea id="input-text" class="form-control" placeholder="พิมพ์ข้อความที่นี่"></textarea>
                                                        <button type="button" class="btn btn-orange font-semibold" onclick="send_msg_text()">ส่งข้อความ</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note">
                                            <p>หากมีปัญหาด้านการใช้งานหรือข้อสงสัยสามารถกดส่งอีเมลเพื่อติดต่อ TCEB <br/>โดยเจ้าหน้าที่จะดำเนินการติดต่อกลับภายใน 3-5 วันทำการ</p>
                                            <a href="mailto:info@tceb.or.th" class="btn-gray btn btn-md btn-minwidth">
                                                <div class="text-icon is-middle">
                                                    <i class="m-icon m-icon-email m-icon-20"></i>
                                                    <span>&nbsp;ส่งอีเมลถึง TCEB</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <h2 class="title-yelloow">ส่งใบเสนอราคา</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">ประเภทการจัดงาน</label>
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
                                        <label class="font-semibold">จำนวนคนที่เข้าร่วม</label>
                                        <input type="text" class="form-control" placeholder="ระบุจำนวนคน">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">สถานที่จัดงาน</label>
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
                                        <label class="font-semibold">วันที่เริ่มงาน</label>
                                        <div class="input-group is-calendar">
                                            <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">วันที่สิ้นสุดงาน</label>
                                        <div class="input-group is-calendar">
                                            <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <label class="font-semibold">เวลา</label>
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="">10.00</option>
                                            </select>
                                            <span class="m-icon m-icon-dropdown"></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <label class="font-semibold"><br/></label>
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="">19.00</option>
                                            </select>
                                            <span class="m-icon m-icon-dropdown"></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="clearfix hidden-desktop"></div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-semibold">รายละเอียดอื่นๆ เพิ่มเติม</label>
                                        <textarea class="form-control" rows="5" placeholder="ระบุรายละเอียดที่ท่านต้องการเพื่อให้ผู้ประกอบการสามารถออกใบเสนอราคาได้อย่างครบถ้วน"></textarea>
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-semibold">ไฟล์อัพโหลด (สามารถอัพโหลดได้สูงสุด 5 ไฟล์)</label>
                                        <div class="upload-file">
                                            <div class="input">
                                                <input type="file" accept=".pdf" multiple maxlength="5" maxsize="25">
                                                <button type="button" class="btn btn-sm btn-orange">อัพโหลด์ไฟล์</button>
                                                <p class="no-margin">PDF Max file : 25 MB</p>
                                            </div>
                                            <div class="text"></div>
                                        </div>
                                        <p class="required">กรุณาอัพโหลดไฟล์</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group clearfix">
                                        <label class="font-semibold">ราคาของใบเสนอราคา :</label>
                                        <div class="input-time">
                                            <div class="select">
                                                <input type="text" class="form-control" value="10,000">
                                            </div>
                                            <span class="symbol">-</span>
                                            <div class="select">
                                                <input type="text" class="form-control"  value="50,000">
                                            </div>
                                        </div>
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-semibold">Note :</label>
                                        <textarea class="form-control" rows="5" placeholder="พิมพ์ข้อความที่ต้องการบอกเพิ่มเติม"></textarea>
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-quotation-success"  class="btn btn-lg btn-blue-linear font-semibold mobile-font-medium" style="width: 300px;">ส่งใบเสนอราคา</button>
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
                    <div class="modal-body font-16 mobile-font-16 pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <div class="status-box mobile-custom">
                            <br/><br/>
                            <img src="assets/images/status-success.png">
                            <h2 class="font-medium">ระบบดำเนินการส่งคำขอใบเสนอราคาสำเร็จ</h2>
                            <br class="hidden-desktop"/>
                            <p class="font-medium">ท่านสามารถดูประวัติการขอใบเสนอราคาได้ภายหลังใน <a href="business-manage-quotation-history.php" class="font-blue">เมนูใบเสนอราคา</a></p>
                            <br class="hidden-desktop"/>
                            <div class="btn-box">
                                <a href="business-manage-quotation-history.php" style="width:300px;" class="btn btn-lg btn-blue-linear">ดูใบเสนอราคา</a>
                            </div>
                            <br/><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-quotation-fail" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body font-16 mobile-font-16 pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <div class="status-box mobile-custom">
                            <br/><br/>
                            <img src="assets/images/status-fail.png">
                            <h2 class="font-medium">ระบบดำเนินการส่งคำขอใบเสนอราคา <b class="font-red font-semibold">ไม่สำเร็จ</b></h2>
                            <p class="font-medium">กรุณาทำรายการใหม่อีกครั้ง</p>
                            <div class="btn-box">
                                <a href="#" style="width:300px;" data-dismiss="modal" class="btn btn-lg btn-red">ทำรายการอีกครั้ง</a>
                            </div>
                            <br/><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            (function(){
                if($(window).width() < 768)
                {
                    $('.chat-list .inner').click(function(){
                        $('.chat-list, .title-highlight').hide();
                        $('.chat-dialog, .title-dialog').fadeIn(300);

                        $('.member-menu').hide();
                        $('.member-body .nav-tabs, .member-body .btn-toolbar').hide();
                        $('html, body').animate({ scrollTop: 0 }, 'fast');
                    });

                    $('.title-dialog .to-back').click(function(){
                        $('.chat-dialog, .title-dialog').hide();
                        $('.chat-list, .title-highlight').fadeIn(300);

                        $('.member-menu').show();
                        $('.member-body .nav-tabs, .member-body .btn-toolbar').show();
                    });
                }
            })();
            
            function send_msg_text()
            {
                var msg = $('#input-text').val();
                $('#input-text').val('');
                $('#dialog').append(`<div class="msg me">
                                        <div class="text">${msg}</div>
                                    </div>`);
                $('#dialog').parent().animate({ scrollTop: $('#dialog').height() }, 'fast');
            }

            function send_msg_file(e)
            {
                var msg = e.files[0].name;
                $('#input-text').val('');
                $('#dialog').append(`<div class="msg me">
                                    <div class="text is-file"><a href="${msg}" target="_blank">${msg}</a></div>
                                </div>`);
                $('#dialog').parent().animate({ scrollTop: $('#dialog').height() }, 'fast');
            }

            function send_msg_photo(e)
            {
                if (e.files && e.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        var msg = event.target.result;
                        $('#dialog').append(`<div class="msg me">
                                        <div class="text is-photo"><a href="${msg}"><img src="${msg}"></a></div>
                                    </div>`);
                        $('#dialog').parent().animate({ scrollTop: $('#dialog').height() }, 'fast');
                        $('#dialog .is-photo').magnificPopup({
                            delegate: 'a',
                            type: 'image',
                            gallery: {
                                enabled:true
                            }
                        });
                    }
                    reader.readAsDataURL(e.files[0]);
                }
            }

            (function(){
                $('.chat-msg textarea').keyup(function(e){
                    if(e.keyCode == 13 && !e.shiftKey)
                    {
                        send_msg_text();
                    }
                });
            })();
        </script>
    </body>
</html>