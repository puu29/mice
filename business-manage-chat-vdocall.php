<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <section class="member">
                <div class="member-body no-menu">
                    <div class="title-chat">
                        <div class="to-back font-blue" onclick="hide_chat()">
                            <div class="text-icon is-middle">
                                <i class="glyphicon glyphicon-menu-left"></i>
                                <span>กลับไปยังการ Video</span>
                            </div>
                        </div>
                        <button type="button" class="btn btn-md btn-blue-linear pull-right" style="margin-top: -12px;margin-bottom: 20px;" data-dismiss="modal" data-toggle="modal" data-target="#modal-quotation">
                            <div class="text-icon is-middle no-margin">
                                <i class="m-icon m-icon-docs m-icon-white"></i>
                                <span>ส่งใบเสนอราคา</span>
                            </div>
                        </button>
                    </div>
                    <div class="title-vdo">
                        <a href="javascript:history.back()" class="to-back font-blue hidden-desktop">
                            <div class="text-icon is-middle">
                                <i class="glyphicon glyphicon-menu-left"></i>
                                <span>ย้อนกลับ</span>
                            </div>
                        </a>
                    </div>
                    <div class="chat is-vdocall">
                        <div class="chat-dialog">
                            <div class="head">
                                <div class="user pull-left">
                                    <div class="img">
                                        <div class="bg" style="background-image: url('assets/images/vdocall-user3.png')"></div>
                                    </div>
                                    <div class="text">
                                        <p class="name font-semibold font-16">The Berkeley Hotel<br/>Pratunam</p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-md btn-blue-linear pull-right hidden-mobile" data-dismiss="modal" data-toggle="modal" data-target="#modal-quotation">
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
                                    <button type="button" class="btn btn-orange font-medium" onclick="send_msg_text()">ส่งข้อความ</button>
                                </div>
                            </div>
                        </div>
                        <div class="chat-vdo">
                            <div class="cv-call">
                                <div class="you">
                                    <div class="bg" style="background-image: url('assets/images/vdocall-you.png')"></div>
                                </div>
                                <div class="me">
                                    <div class="bg" style="background-image: url('assets/images/vdocall-me.png')"></div>
                                </div>
                                <div class="alert" id="alert">
                                    <div class="text">
                                        <p class="no-margin font-orange font-medium">เวลาการสนทนาเหลือเพียง 5 นาที</p>
                                        <p class="no-margin font-12">ระบบสามารถต่อเวลาในการสนทนาให้ท่านเพิ่มอีก 10 นาที</p>
                                    </div>
                                    <button type="button" onclick="add_time();" class="btn btn-md btn-default font-medium">เพิ่มเวลา 10 นาที</button>
                                </div>
                            </div>
                            <div class="cv-action">
                                <div class="inner">
                                    <div class="to-chat"  onclick="show_chat()">
                                        <div class="on"></div>
                                        <i class="m-icon m-icon-chat m-icon-white"></i>
                                    </div>
                                </div>
                                <div class="inner text-center" id="vdocall-feature">
                                    <i class="m-icon m-icon-vdo-sound m-icon-white active"></i>
                                    <i class="m-icon m-icon-vdo-photo m-icon-white active"></i>
                                </div>
                                <div class="inner text-right">
                                    <button type="button" class="btn btn-md btn-red font-semibold">วางสาย</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

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
                                        <label class="font-medium">จำนวนคนที่เข้าร่วม <span class="font-red">*</span></label>
                                        <input type="text" class="form-control" placeholder="ระบุจำนวนคน">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-medium">งบประมาณ (หากต้องการระบุ)</label>
                                        <input type="text" class="form-control" placeholder="ระบุงบประมาณในการจัดงาน">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-medium">วันที่เริ่มงาน <span class="font-red">*</span></label>
                                        <div class="input-group is-calendar">
                                            <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-medium">วันที่สิ้นสุดงาน <span class="font-red">*</span></label>
                                        <div class="input-group is-calendar">
                                            <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="font-medium">เวลา <span class="font-red">*</span></label>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
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
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="">19.00</option>
                                            </select>
                                            <span class="m-icon m-icon-dropdown"></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group mobile-no-margin">
                                        <label class="font-medium fullwidth">ไฟล์อัพโหลด (สามารถอัพโหลดได้สูงสุด 5 ไฟล์) <span class="font-red">*</span></label>
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
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="font-medium">ราคาของใบเสนอราคา <span class="font-red">*</span></label>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="10,000">
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <span class="symbol-range">-</span>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="50,000">
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-medium">Note</label>
                                        <textarea class="form-control" rows="5" placeholder="พิมพ์ข้อความที่ต้องการบอกเพิ่มเติม"></textarea>
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-quotation-success"  class="btn btn-lg btn-blue-linear font-medium">ส่งใบเสนอราคา</button>
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

        <?php include "layout/footer.php" ?>
        <script>
            function show_chat()
            {
                $('.chat-vdo, .title-vdo').hide();
                $('.chat-dialog, .title-chat').fadeIn(300);
            }

            function hide_chat()
            {
                $('.chat-dialog, .title-chat').hide();
                $('.chat-vdo, .title-vdo').fadeIn(300);
            }

            function add_time()
            {
                $('#alert').fadeOut();
            }
            
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

                $('#vdocall-feature .m-icon').click(function(){
                    $(this).toggleClass('active');
                });
            })();
        </script>
    </body>
</html>