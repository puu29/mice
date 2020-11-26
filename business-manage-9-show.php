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
                    <div class="step-footer">
                        <div class="text fullwidth">
                            <div class="symbol">
                                <i class="m-icon m-icon-heart"></i>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                            <div class="step">
                                <i class="m-icon m-icon-heart active"></i>
                                <i class="m-icon m-icon-heart active"></i>
                                <i class="m-icon m-icon-heart"></i>
                                <i class="m-icon m-icon-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="top-white">
                        <a href="member-business.php" class="to-back font-blue hidden-mobile">
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
                                <li class="active"><a href="business-manage.php">โปรไฟล์ธุรกิจ</a></li>
                                <li><a href="business-manage-chat.php">การสนทนา <span class="circle"></span></a></li>
                                <li ><a href="business-manage-quotation.php">ใบเสนอราคา <span class="circle"></span></a></li>
                                <li ><a href="business-manage-promotion.php">จัดการโปรโมชั่น</a></li>
                                <li ><a href="business-manage-post.php">จัดการโพสต์ของธุรกิจ</a></li>
                                <li ><a href="business-manage-calendar.php">จัดการปฏิทินไมซ์</a></li>
                                <li ><a href="business-manage-dashboard.php">สถิติผู้เข้าดู</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active">
                                    <div class="panel panel-default">
                                        <div class="panel-body no-padding">
                                            <div class="row is-border-right">
                                                <div class="col col-sm-4">
                                                    <p class="font-semibold">สถานะการอนุมัติ</p>
                                                    <div class="font-orange">การอนุมัติยังไม่สำเร็จ</div>
                                                </div>
                                                <div class="col col-sm-4">
                                                    <p class="font-semibold">สิทธิพิเศษ</p>
                                                    <div class="text-icon is-middle">
                                                        <i class="m-icon m-icon-heart m-icon-20"></i>
                                                        <span>&nbsp;ระดับเริ่มต้น</span>
                                                    </div>
                                                    <a href="business-heart.php" class="font-link pull-right">ดูการสะสมใจไมซ์</a>
                                                </div>
                                                <div class="col col-sm-4">
                                                    <div class="score-me font-14 pull-left">
                                                        <p class="font-semibold no-margin">จำนวนคะแนน</p>
                                                        <div class="text-icon is-middle icon-right">
                                                            <i class="m-icon m-icon-mice m-icon-20"></i>
                                                            <span class="font-18 font-semibold"><big>34,034&nbsp;</big></span>
                                                        </div>
                                                    </div>
                                                    <a href="business-score.php" style="width: 160px;margin-top: 5px;" class="btn btn-md btn-blue font-semibold pull-right">แลกคะแนน</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-body no-padding">
                                            <div class="bs-callout"> 
                                                <div class="text-icon for-list no-margin">
                                                    <i class="m-icon m-icon-chat-orange"></i>
                                                    <p><b class="font-semibold">ข้อความจากเจ้าหน้าที่</b> ​: กรุณาเปลี่ยนรูปสำหรับประกอบธุรกิจ เนื่องจากมีรูปภาพที่ติดลายน้ำอยู่ 2-3 รูป หลังจากท่านทำการอัพเดทรูปเรียบร้อยแล้ว ทางเจ้าหน้าที่ตรวจสอบและเปลี่ยนสถานะการอนุมัติให้ท่าน  </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-body font-medium">
                                            <h2 class="no-margin font-semibold">Villa Hotel and Resort</h2>
                                            <p class="no-margin">ปทุมวัน, กรุงเทพมหานคร</p>
                                            <br/>
                                            <a href="search-detail.php" class="font-link font-blue" target="_blank">ดูตัวอย่างการแสดงโปรโฟล์ธุรกิจ</a>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-body b-photo">
                                            <h3 class="no-margin font-semibold font-16">รูปสำหรับประกอบธุรกิจ</h3>
                                            <p>ใส่รูปภาพประกอบเพื่อให้ธุรกิจของคุณน่าสนใจมากยิ่งขึ้น</p>
                                            <div class="upload-photos style-2 is-mobile-half">
                                                <div class="inner for-upload no-margin-bottom">
                                                    <div class="input">
                                                        <input type="file" accept="image/*" multiple>
                                                        <div class="text">
                                                            <div class="text-icon">
                                                                <i class="m-icon m-icon-plus"></i>
                                                                <p class="no-margin font-black font-medium">อัพโหลดรูปภาพ</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="no-margin font-semibold font-16">เพิ่มรูปภาพธุกิจของคุณ</h3>
                                            <ul class="no-margin">
                                                <li>เพิ่มรูปภาพได้สูงสุด 15 ภาพ ขนาดไฟล์ไม่เกิน 3 MB.</li>
                                                <li>เพิ่มรูปภาพให้ถึง 4 ภาพเป็นอย่างต่ำ</li>
                                                <li>แนะนำขนาดของรูปภาพกว้าง 1200 px และความสูง 800 px</li>
                                                <li>ใช้รูปภาพที่เป็นแนวนอนจึงจะได้การแสดงผลที่ดีที่สุด</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="b-manage">
                                        <h3 class="font-semibold mobile-font-16"><big>ใส่รายละเอียดธุรกิจของท่านแต่ละประเภท</big></h3>
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12">
                                                <div class="tab style-2 ">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#tab-info1" aria-controls="tab-info1" role="tab" data-toggle="tab">โชว์/การแสดง</a></li>
                                                    </ul>
                                                    <div class="tab-content no-padding-bottom">
                                                        <div role="tabpanel" class="tab-pane active" id="tab-info1">
                                                            <div class="panel panel-default">
                                                                <?php if(isset($_GET['award'])) { ?>
                                                                <div class="panel-heading has-option">
                                                                    <div class="text-icon for-list is-middle mobile-no-middle no-margin">
                                                                        <i class="m-icon m-icon-award"></i>
                                                                        <h3 class="font-semibold no-margin pull-left">ข้อมูลมาตรฐาน/รางวัลที่ได้รับ</h3>
                                                                    </div>
                                                                    <button type="button" class="btn btn-default btn-sm btn-edit hidden-mobile" data-dismiss="modal" data-toggle="modal" data-target="#modal-award">
                                                                        <div class="text-icon">
                                                                            <i class="m-icon m-icon-edit"></i>
                                                                            <span>แก้ไขข้อมูล</span>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <div class="panel-body mobile-list">
                                                                    <div class="border-box">
                                                                        <div class="form-group">
                                                                            <label class="font-semibold no-margin">มาตรฐานที่ได้รับ (ภาษาไทย) </label>
                                                                            <p>ISO20101</p>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="font-semibold no-margin">มาตรฐานที่ได้รับ (ภาษาอังกฤษ)</label>
                                                                            <p>ISO20101</p>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="font-semibold no-margin">คำอธิบายมาตราฐานรางวัล (ภาษาไทย)</label>
                                                                            <p>Event Sustainability Management Systems</p>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="font-semibold no-margin">คำอธิบายมาตราฐานรางวัล (ภาษาอังกฤษ)</label>
                                                                            <p>Event Sustainability Management Systems</p>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="alert alert-info alert-custom">
                                                                                <div class="text-icon for-list no-margin">
                                                                                    <i class="m-icon m-icon-check-blue"></i>
                                                                                    <span>เป็นมาตรฐาน/รางวัล ที่เกี่ยวข้องกับการพัฒนาอย่างยั่งยืน (Sustainable related reward)</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="font-semibold no-margin">หน่วยงานที่ให้การรับรอง (ภาษาไทย)</label>
                                                                            <p>บริษัท จำกัด</p>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="font-semibold no-margin">หน่วยงานที่ให้การรับรอง (ภาษาอังกฤษ)</label>
                                                                            <p>Lorem Ipsum Company</p>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="font-semibold no-margin">ปีที่ได้รับการรับรองมาตรฐาน</label>
                                                                            <p>2019</p>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="font-semibold no-margin">ปีที่ได้รับการรับรองมาตรฐาน</label>
                                                                            <p>2020</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="btn-box mobile-text-center hidden-desktop">
                                                                        <button type="button" class="btn btn-default btn-sm btn-edit" data-dismiss="modal" data-toggle="modal" data-target="#modal-award">
                                                                            <div class="text-icon">
                                                                                <i class="m-icon m-icon-edit"></i>
                                                                                <span>แก้ไขข้อมูล</span>
                                                                            </div>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <?php } else { ?>
                                                                <div class="panel-heading">
                                                                    <div class="text-icon for-list is-middle mobile-no-middle no-margin">
                                                                        <i class="m-icon m-icon-award"></i>
                                                                        <h3 class="font-semibold no-margin pull-left">ข้อมูลมาตรฐาน/รางวัลที่ได้รับ</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="overlay-line"></div>
                                                                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-award" class="btn btn-lg btn-block btn-default btn-add-option">
                                                                        <div class="text-icon is-middle">
                                                                            <i class="m-icon m-icon-plus"></i>
                                                                            <span>เพิ่มข้อมูลเพื่อทำให้ธุรกิจของท่านเสร็จสมบูรณ์</span>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="panel panel-default b-detail-other">
                                                    <?php if(isset($_GET['new'])) { ?>
                                                    <div class="panel-heading has-option">
                                                        <h3 class="font-semibold no-margin">รายละเอียดอื่นๆ</h3>
                                                        <button type="button" class="btn btn-default btn-sm btn-edit" data-dismiss="modal" data-toggle="modal" data-target="#modal-contact">
                                                            <div class="text-icon is-middle">
                                                                <i class="m-icon m-icon-plus"></i>
                                                                <span>เพิ่มข้อมูล</span>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <p class="no-margin"><b>เบอร์โทรศัพท์</b></p>
                                                            <p class="font-gray-light">- ยังไม่มีข้อมูล -</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <p class="no-margin"><b>เว็บไซต์</b></p>
                                                            <p class="font-gray-light">- ยังไม่มีข้อมูล -</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <p class="no-margin"><b>ชื่่อบัญชี Facebook/Page</b></p>
                                                            <p class="font-gray-light">- ยังไม่มีข้อมูล -</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <p class="no-margin"><b>ชื่อบัญชีผู้ใช้ Line</b></p>
                                                            <p class="font-gray-light">- ยังไม่มีข้อมูล -</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <p class="no-margin"><b>วันทำการ</b></p>
                                                            <p class="font-gray-light">- ยังไม่มีข้อมูล -</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <p class="no-margin"><b>เวลาเปิด-ปิดโดยประมาณ</b></p>
                                                            <p class="font-gray-light">- ยังไม่มีข้อมูล -</p>
                                                        </div>
                                                    </div>
                                                    <?php } else { ?>
                                                        <div class="panel-heading has-option">
                                                        <h3 class="font-semibold no-margin">รายละเอียดอื่นๆ</h3>
                                                        <button type="button" class="btn btn-default btn-sm btn-edit" data-dismiss="modal" data-toggle="modal" data-target="#modal-contact">
                                                            <div class="text-icon">
                                                                <i class="m-icon m-icon-edit"></i>
                                                                <span>แก้ไขข้อมูล</span>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <p class="no-margin"><b>เบอร์โทรศัพท์</b></p>
                                                            <p>080-000-0000</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <p class="no-margin"><b>เว็บไซต์</b></p>
                                                            <p>www.vilaahotelresort.com</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <p class="no-margin"><b>ชื่่อบัญชี Facebook/Page</b></p>
                                                            <p>VillaHotelandresort</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <p class="no-margin"><b>ชื่อบัญชีผู้ใช้ Line</b></p>
                                                            <p>@VillaHotelandresort</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <p class="no-margin"><b>วันทำการ</b></p>
                                                            <p>จันทร์ - เสาร์</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <p class="no-margin"><b>เวลาเปิด-ปิดโดยประมาณ</b></p>
                                                            <p>09.00 - 19.00 น.</p>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
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

        <div class="modal fade modal-checkbox" id="modal-contact" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <h3 class="no-margin font-semibold">ช่องทางการติดต่อ</h3>
                    </div>
                    <div class="modal-body pd-40">
                        <script>
                            function set_all_day(e){
                                var parent = $(e).parents('.business-days');
                                var value = $(e).prop('checked');
                                if(value) parent.find('.radio-select').hide();
                                else parent.find('.radio-select').show();
                            }

                            function set_all_hr(e){
                                var parent = $(e).parents('.business-hrs');
                                var value = $(e).prop('checked');
                                console.log(value);
                                if(value) parent.find('.select').hide();
                                else parent.find('.select').show();
                            }
                        </script>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">เบอร์โทรศัพท์</label>
                                        <input type="text" data-mask="000-000-0000" class="form-control" placeholder="เบอร์โทรศัพท์" value="080-000-0000">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">เว็บไซต์</label>
                                        <input type="text" class="form-control" placeholder="เว็บไซต์" value="www.vilaahotelresort.com">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">ชื่่อบัญชี Facebook/Page</label>
                                        <input type="text" class="form-control" placeholder="ชื่่อบัญชี Facebook/Page" value="VillaHotelandresort">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">ชื่อบัญชีผู้ใช้ Line</label>
                                        <input type="text" class="form-control" placeholder="ชื่อบัญชีผู้ใช้ Line" value="@VillaHotelandresort">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="fullwidth font-semibold">วันทำการ</label>
                                        <div class="business-days">
                                            <div class="checkbox no-margin-top">
                                                <input type="checkbox" id="mc-day-all" onchange="set_all_day(this)">
                                                <label for="mc-day-all">ทุกวัน</label>
                                            </div>
                                            <div class="radio-select is-blue">
                                                <div class="radio">
                                                    <input type="checkbox" id="mc-day1">
                                                    <label for="mc-day1">จันทร์</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="checkbox" id="mc-day2">
                                                    <label for="mc-day2">อังคาร</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="checkbox" id="mc-day3">
                                                    <label for="mc-day3">พุธ</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="checkbox" id="mc-day4">
                                                    <label for="mc-day4">พฤหัสบดี</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="checkbox" id="mc-day5">
                                                    <label for="mc-day5">ศุกร์</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="checkbox" id="mc-day6">
                                                    <label for="mc-day6">เสาร์</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="checkbox" id="mc-day7">
                                                    <label for="mc-day7">อาทิตย์</label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="fullwidth font-semibold">เวลาเปิด-ปิดโดยประมาณ</label>
                                        <div class="business-hrs">
                                            <div class="checkbox no-margin-top" >
                                                <input type="checkbox" id="mc-hr-all" onchange="set_all_hr(this)">
                                                <label for="mc-hr-all">เปิด 24 ชั่วโมง</label>
                                            </div>
                                            <div class="select">
                                                <select class="form-control mobile-font-semibold">
                                                    <option value="">09.00 น.</option>
                                                </select>
                                                <span class="m-icon m-icon-dropdown"></span>
                                            </div>
                                            <div class="select">
                                                <select class="form-control mobile-font-semibold">
                                                    <option value="">18.00 น.</option>
                                                </select>
                                                <span class="m-icon m-icon-dropdown"></span>
                                            </div>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-right mobile-text-center">
                                <button type="submit" class="btn btn-md btn-blue-linear font-semibold btn-minwidth">บันทึกข้อมูล</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modal-checkbox" id="modal-award" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <h3 class="no-margin font-semibold">ข้อมูลมาตรฐาน/รางวัลที่ได้รับ</h3>
                    </div>
                    <div class="modal-body pd-40">
                        <form action="?award=true" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>มาตรฐานที่ได้รับ ลำดับที่ 1 (ภาษาไทย)</label>
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="">เลือกหรือระบุมาตรฐานที่ได้รับ</option>
                                            </select>
                                            <span class="m-icon m-icon-dropdown"></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>มาตรฐานที่ได้รับ ลำดับที่ 1 (ภาษาอังกฤษ)</label>
                                        <input type="text" class="form-control">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>คำอธิบายมาตราฐานรางวัล (ภาษาไทย)</label>
                                        <div class="limit-char">
                                            <textarea class="form-control" rows="3" placeholder="คำอธิบายเพิ่มเติม (ภาษาไทย)" maxlength="600"></textarea>
                                            <div class="char"><span class="cnt">0</span>/600</div>
                                        </div>
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group no-margin">
                                        <label>คำอธิบายมาตราฐานรางวัล (ภาษาอังกฤษ)</label>
                                        <div class="limit-char">
                                            <textarea class="form-control" rows="3" placeholder="คำอธิบายเพิ่มเติม (ภาษาไทย)" maxlength="600"></textarea>
                                            <div class="char"><span class="cnt">0</span>/600</div>
                                        </div>
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input type="checkbox" id="ma-standard">
                                            <label for="ma-standard" class="font-14">เป็นมาตรฐาน/รางวัล ที่เกี่ยวข้องกับการพัฒนาอย่างยั่งยืน (Sustainable related reward)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>หน่วยงานที่ให้การรับรอง (ภาษาไทย)</label>
                                        <input type="text" class="form-control" placeholder="ระบุหน่วยงานที่ให้การรับรอง (ภาษาไทย)">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>หน่วยงานที่ให้การรับรอง (ภาษาอังกฤษ)</label>
                                        <input type="text" class="form-control" placeholder="ระบุหน่วยงานที่ให้การรับรอง (ภาษาอังกฤษ)">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ปีที่ได้รับการรับรองมาตรฐาน</label>
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="">เลือกปีที่ได้รับ</option>
                                            </select>
                                            <span class="m-icon m-icon-dropdown"></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ปีที่สิ้นสุดของมาตรฐานที่ได้รับ</label>
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="">เลือกปีที่ได้รับ</option>
                                            </select>
                                            <span class="m-icon m-icon-dropdown"></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-right mobile-text-center">
                                <button type="submit" class="btn btn-md btn-blue-linear font-semibold btn-minwidth">บันทึกข้อมูล</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php if(isset($_GET['new'])) { ?>
            <div class="modal fade" id="modal-welcome" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-body pd-40">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                            <div class="content text-center">
                                <div class="form-group">
                                    <img src="assets/images/popup-build.png" width="238">
                                </div>
                                <div class="form-group font-18 mobile-font-16">
                                    <h3 class="font-blue font-20">ยินดีต้อนรับสู่การเข้าร่วมธุรกิจกับเรา!</h3>
                                    <p>ท่านสามารถใส่ข้อมูลรายละเอียดของประเภทธุรกิจหลักและธุรกิจรองได้หลังจากนี้ และเมื่อท่านทำการใส่ข้อมูลจนครบและถูกต้องเรียบร้อย จะได้รับหัวใจไมซ์ดวงที่ 2</p>
                                    <p><a href="#" class="font-link font-blue font-semibold font-14" data-dismiss="modal" data-toggle="modal" data-target="#modal-benefit">สิทธิพิเศษคืออะไร?</a></p>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox font-16 mobile-font-14 text-left">
                                        <input type="checkbox" id="accept">
                                        <label for="accept">ข้าพเจ้ายินยอมว่าข้อมูลต่อไปนี้เป็นข้อมูลที่ถูกต้อง เป็นความจริงและไม่ละเมิดลิขสิทธิ์ผู้อื่น</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="btn-box">
                                        <button type="button" class="btn btn-md btn-blue-linear font-semibold btn-minwidth" style="width: 230px" data-dismiss="modal" data-toggle="modal" data-target="#modal-receive-heart">เริ่มใส่ข้อมูลรายละเอียด</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-receive-heart" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-body pd-40">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                            <div class="content text-center">
                                <div class="form-group">
                                    <img src="assets/images/popup-heart.png" width="98">
                                </div>
                                <div class="form-group font-18 mobile-font-16">
                                    <h3 class="font-blue font-20">ท่านได้รับหัวใจไมซ์ 1 ดวง <br class="hidden-desktop" />สำหรับการลงทะเบียนธุรกิจ</h3>
                                    <br class="hidden-mobile"/>
                                    <p>
                                        สามารถสะสมดวงต่อไปได้โดยการเพิ่มเติมข้อมูลเฉพาะของธุรกิจของท่านที่ละเอียดมากขึ้น
                                        และสามารถแก้ไขข้อมูลที่ทำการกรอกไปสักครู่ ได้ในเมนู <b class="font-orange">“ข้อมูลธุรกิจ”</b>
                                    </p>
                                    <p class="no-margin-bottom">นอกจากนั้นท่านจะได้รับสิทธิพิเศษเพิ่มมากขึ้นจากการสะสมหัวใจไมซ์ให้ครบทั้ง 4 ดวง</p>
                                    <br/>
                                    <p class="no-margin-bottom"><a href="#" class="font-link font-blue font-semibold font-14" data-dismiss="modal" data-toggle="modal" data-target="#modal-benefit">สิทธิพิเศษคืออะไร?</a></p>
                                    <br/>
                                </div>
                                <div class="form-group">
                                    <div class="btn-box">
                                        <button type="button" class="btn btn-md btn-blue-linear font-semibold btn-minwidth" style="width: 230px" data-dismiss="modal">เข้าใจและปิดหน้าต่าง</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-benefit" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content ">
                        <div class="modal-body pd-40">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                            <div class="">
                                <h2 class="no-margin font-semibold">สิทธิพิเศษคืออะไร?</h2>
                                <p>สิทธิพิเศษคือตัวกำหนดในการได้รับสิทธิต่างๆ ในเว็บ MICE Marketplace ซึ่งจะขยับเป็นขั้นบันได แบ่งเป็นทั้งหมด 4 ระดับดังนี้</p>
                                <div class="shadow-blue">
                                    <table class="table no-margin mobile-full">
                                        <thead>
                                            <tr>
                                                <th>ระดับ</th>
                                                <th class="hidden-mobile">สัญลักษณ์</th>
                                                <th class="hidden-mobile">วิธีการได้รับสิทธิ</th>
                                                <th class="hidden-mobile">รายละเอียดสิทธิพิเศษ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="mobile-font-semibold mobile-no-padding-bottom">ระดับเริ่มต้น</td>
                                                <td class="mobile-no-padding-top">
                                                    <i class="m-icon m-icon-heart m-icon-20"></i>
                                                </td>
                                                <td>
                                                    <label class="hidden-desktop">วิธีการได้รับสิทธิ</label>
                                                    <ul>
                                                        <li>ได้รับตั้งแต่เริ่มต้นลงทะเบียน</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <label class="hidden-desktop">รายละเอียดสิทธิพิเศษ</label>
                                                    <ul>
                                                        <li class="font-blue font-semibold">รับรู้ข้อมูลข่าวสารล่าสุดของวงการ</li>
                                                        <li class="font-blue font-semibold">สร้างปฏิทินอีเว้นท์ไมซ์</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="mobile-font-semibold mobile-no-padding-bottom">ระดับปานกลาง</td>
                                                <td class="mobile-no-padding-top">
                                                    <i class="m-icon m-icon-heart m-icon-20"></i>
                                                    <i class="m-icon m-icon-heart m-icon-20"></i>
                                                </td>
                                                <td>
                                                    <label class="hidden-desktop">วิธีการได้รับสิทธิ</label>
                                                    <ul>
                                                        <li class="font-gray-light">ได้รับตั้งแต่เริ่มต้นลงทะเบียน</li>
                                                        <li >จากการระบุข้อมูลครบตามที่กำหนด</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <label class="hidden-desktop">รายละเอียดสิทธิพิเศษ</label>
                                                    <ul>
                                                        <li class="font-blue font-semibold">โอกาสในการสร้างพันธมิตรทางธุรกิจ</li>
                                                        <li class="font-blue font-semibold">โอกาสได้รับสิทธิ์อยู่ระดับต้นๆ ในการค้นหาเมื่อมีการค้นหาข้อมูล</li>
                                                        <li>รับรู้ข้อมูลข่าวสารล่าสุดของวงการ MICE</li>
                                                        <li>สร้างปฏิทินอีเว้นท์ไมซ์</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="mobile-font-semibold mobile-no-padding-bottom">ระดับสูง</td>
                                                <td class="mobile-no-padding-top">
                                                    <i class="m-icon m-icon-heart m-icon-20"></i>
                                                    <i class="m-icon m-icon-heart m-icon-20"></i>
                                                    <i class="m-icon m-icon-heart m-icon-20"></i>
                                                </td>
                                                <td>
                                                    <label class="hidden-desktop">วิธีการได้รับสิทธิ</label>
                                                    <ul>
                                                        <li class="font-gray-light">ได้รับตั้งแต่เริ่มต้นลงทะเบียน</li>
                                                        <li class="font-gray-light">จากการระบุข้อมูลครบตามที่กำหนด</li>
                                                        <li>มีการโพสต์ข่าวสารหรือโปรโมชั่น 30 โพสต์</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <label class="hidden-desktop">รายละเอียดสิทธิพิเศษ</label>
                                                    <ul>
                                                        <li class="font-blue font-semibold">Performance Analytic</li>
                                                        <li>โอกาสในการสร้างพันธมิตรทางธุรกิจ</li>
                                                        <li>โอกาสได้รับสิทธิ์อยู่ระดับต้นๆ ในการค้นหาเมื่อมีการค้นหาข้อมูล</li>
                                                        <li>รับรู้ข้อมูลข่าวสารล่าสุดของวงการ MICE</li>
                                                        <li>สร้างปฏิทินอีเว้นท์ไมซ์</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="mobile-font-semibold mobile-no-padding-bottom">ระดับสูงสุด</td>
                                                <td class="mobile-no-padding-top">
                                                    <i class="m-icon m-icon-heart m-icon-20"></i>
                                                    <i class="m-icon m-icon-heart m-icon-20"></i>
                                                    <i class="m-icon m-icon-heart m-icon-20"></i>
                                                    <i class="m-icon m-icon-heart m-icon-20"></i>
                                                </td>
                                                <td>
                                                    <label class="hidden-desktop">วิธีการได้รับสิทธิ</label>
                                                    <ul>
                                                        <li class="font-gray-light">ได้รับตั้งแต่เริ่มต้นลงทะเบียน</li>
                                                        <li class="font-gray-light">จากการระบุข้อมูลครบตามที่กำหนด</li>
                                                        <li class="font-gray-light">มีการโพสต์ข่าวสารหรือโปรโมชั่น 30 โพสต์</li>
                                                        <li>ชวนเพื่อน (ผู้จัดงาน/ผู้ประกอบการ) 8 คนขึ้นไป</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <label class="hidden-desktop">รายละเอียดสิทธิพิเศษ</label>
                                                    <ul>
                                                        <li class="font-blue font-semibold">รับสิทธิได้โปรโมทลงเพจ Thai MICE Connect</li>
                                                        <li>Performance Analytic</li>
                                                        <li>โอกาสในการสร้างพันธมิตรทางธุรกิจ</li>
                                                        <li>โอกาสได้รับสิทธิ์อยู่ระดับต้นๆ ในการค้นหาเมื่อมีการค้นหาข้อมูล</li>
                                                        <li>รับรู้ข้อมูลข่าวสารล่าสุดของวงการ MICE</li>
                                                        <li>สร้างปฏิทินอีเว้นท์ไมซ์</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                (function(){
                    setTimeout(() => {
                        $('#modal-welcome').modal('show');
                    }, 500);
                })();
            </script>
        <?php } ?>

        <script>
            (function(){
                $('.modal').on('shown.bs.modal', function () {
                    $('[data-mask]').each(function(){
                        var mask = $(this).attr('data-mask');
                        $(this).mask(mask);
                    });
                });
            })();   
        </script>
    </body>
</html>