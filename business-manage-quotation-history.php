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
                                <li ><a href="business-manage-chat.php">การสนทนา <span class="circle"></span></a></li>
                                <li class="active"><a href="business-manage-quotation.php">ใบเสนอราคา <span class="circle"></span></a></li>
                                <li ><a href="business-manage-promotion.php">จัดการโปรโมชั่น</a></li>
                                <li ><a href="business-manage-post.php">จัดการโพสต์ของธุรกิจ</a></li>
                                <li ><a href="business-manage-calendar.php">จัดการปฏิทินไมซ์</a></li>
                                <li ><a href="business-manage-dashboard.php">สถิติผู้เข้าดู</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active">
                                    <div class="b-quotation">
                                        <div class="btn-toolbar bg-white shadow-blue font-14" role="toolbar">
                                            <a href="business-manage-quotation.php" class="btn-group " role="group">
                                                <div class="chat-type">
                                                    <h2 class="no-margin font-semibold">10</h2>
                                                    <p class="no-margin">คำขอใบเสนอราคา</p>
                                                </div>
                                                <div class="text-icon font-regular is-middle hidden-desktop">
                                                    <i class="m-icon m-icon-search"></i>
                                                    <span>ดูรายการ</span>
                                                </div>
                                            </a>
                                            <a href="business-manage-quotation-history.php" class="btn-group active" role="group">
                                                <div class="chat-type">
                                                    <h2 class="no-margin font-semibold">3</h2>
                                                    <p class="no-margin">ใบเสนอราคาที่ส่งแล้ว</p>
                                                </div>
                                                <div class="text-icon font-regular is-middle hidden-desktop">
                                                    <i class="m-icon m-icon-search"></i>
                                                    <span>ดูรายการ</span>
                                                </div>
                                            </a>
                                            <a href="business-manage-quotation-reject.php" class="btn-group" role="group">
                                                <div class="chat-type">
                                                    <h2 class="no-margin font-semibold">1</h2>
                                                    <p class="no-margin">ใบเสนอราคาที่ยกเลิก</p>
                                                </div>
                                                <div class="text-icon font-regular is-middle hidden-desktop">
                                                    <i class="m-icon m-icon-search"></i>
                                                    <span>ดูรายการ</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="setting text-right">
                                            <div class="input-icon inline-block">
                                                <i class="m-icon m-icon-search"></i>
                                                <input type="text" class="form-control" placeholder="ค้นหาจากเลขที่ใบเสนอราคา, ชื่อ">
                                            </div>
                                        </div>
                                        <hr class="hidden-desktop" />
                                        <h3 class="mobile-font-16 hidden-desktop font-semibold no-margin-bottom">รายชื่อ</h3>
                                        <?php for($i=0 ; $i<3 ; $i++) { ?>
                                        <div class="panel panel-default <?= ($i == 0) ? '' : 'mt25' ?>">
                                            <div class="panel-body mobile-font-16">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="form-group">
                                                            <label class="hidden-mobile">รายชื่อ</label>
                                                            <div class="clearfix hidden-mobile"><br/></div>
                                                            <div class="user width-45">
                                                                <div class="bg transform-middle" style="background-image: url('assets/images/user-sh2.png')"></div>
                                                                <p class="no-margin">คุณทวีสิทธิ์<br/>นามสกุล</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="form-group">
                                                            <label>ข้อมูลติดต่อ</label>
                                                            <div class="clearfix hidden-mobile"><br/></div>
                                                            <p class="no-margin">080-000-0000</p>
                                                            <p class="no-margin">Thaveesilp@gmail.com</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="form-group">
                                                            <label>วันที่ขอใบเสนอราคา</label>
                                                            <div class="clearfix hidden-mobile"><br/></div>
                                                            <p class="no-margin">26/06/2020</p>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix hidden-desktop show-ipad"></div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="form-group">
                                                            <label>ประเภทคำขอ</label>
                                                            <div class="clearfix hidden-mobile"><br/></div>
                                                            <p class="no-margin">เลือกการจัดงาน (จับคู่อัตโนมัติ)</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4">
                                                        <div class="form-group">
                                                            <label>เลขที่ใบเสนอราคา</label>
                                                            <div class="clearfix hidden-mobile"><br/></div>
                                                            <p class="no-margin">TMC0001231400</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-4 hidden-mobile show-ipad">
                                                        <div class="form-group">
                                                            <div class="btn-box text-center no-half ipad-text-left">
                                                                <?php if($i == 0) { ?>
                                                                <button style="width: 150px;" type="button" class="cursor-default btn btn-md text-overflow btn-orange font-medium">
                                                                    <div class="text-icon is-middle">
                                                                        <i class="glyphicon glyphicon-ok"></i>
                                                                        <span>จองสำเร็จแล้ว</span>
                                                                    </div>
                                                                </button>
                                                                <?php } else {?>
                                                                <button style="width: 150px;" type="button" class="cursor-default btn btn-md text-overflow btn-orange font-medium" disabled>จองไม่สำเร็จ</button>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="in-panel mobile-no-margin-top mobile-in-panel"/>
                                                <h3 class="font-20 font-semibold">งานสัมมนาประจำปีบริษัท 2020</h3>
                                                <p class="font-semibold">ประเภทการจัดงาน : งานสัมมนา</p>
                                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tellus elementum sagittis vitae et leo duis ut. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Nec nam aliquam sem </div>
                                                <br/>
                                                <div class="border-box">
                                                    <h3 class="font-bold font-14 no-margin-top mobile-font-18">ข้อมูลทั่วไป</h3>
                                                    <div class="row font-12 mobile-font-16">
                                                        <div class="col-sm-3"><label class="font-semibold">สถานที่จัดงาน</label></div>
                                                        <div class="col-sm-3"><p class="no-margin">กรุงเทพมหานคร</p></div>
                                                        <div class="col-sm-3"><label class="font-semibold">วันที่จัดงาน</label></div>
                                                        <div class="col-sm-3"><p class="no-margin">24/04/20 - 25/04/20</p></div>
                                                    </div>
                                                    <div class="row font-12 mobile-font-16">
                                                        <div class="col-sm-3"><label class="font-semibold">จำนวนคน</label></div>
                                                        <div class="col-sm-3"><p class="no-margin">800 คน</p></div>
                                                        <div class="col-sm-3"><label class="font-semibold">เวลา</label></div>
                                                        <div class="col-sm-3"><p class="no-margin">09.00 - 18.00 น.</p></div>
                                                    </div>
                                                    <h3 class="font-bold font-14 mobile-font-18">ข้อมูลเฉพาะ</h3>
                                                    <div class="row font-12 mobile-font-16">
                                                        <div class="col-sm-3"><label class="font-semibold">สิ่งอำนวยความสะดวกในการเดินทาง</label></div>
                                                        <div class="col-sm-3"><p class="no-margin">มีที่จอดรถ, ติดรถไฟฟ้า BTS</p></div>
                                                        <div class="col-sm-3"><label class="font-semibold">ประเภทห้อง</label></div>
                                                        <div class="col-sm-3"><p class="no-margin">Ballroom</p></div>
                                                    </div>
                                                    <div class="row font-12 mobile-font-16">
                                                        <div class="col-sm-3"><label class="font-semibold">ขนาดพื้นที่ที่ต้องการ (ตร.ม.)</label></div>
                                                        <div class="col-sm-3"><p class="no-margin">250</p></div>
                                                        <div class="col-sm-3"><label class="font-semibold">สิ่งอำนวยความสะดวกอื่นๆ</label></div>
                                                        <div class="col-sm-3"><p class="no-margin">มีบริการรับส่งจากสนามบิน</p></div>
                                                    </div>
                                                </div>
                                                <div class="btn-box text-center hidden-desktop  no-half">
                                                    <?php if($i == 0) { ?>
                                                    <button style="width: 150px;" type="button" class="cursor-default btn btn-md text-overflow btn-orange font-medium">
                                                        <div class="text-icon is-middle">
                                                            <i class="glyphicon glyphicon-ok"></i>
                                                            <span>จองสำเร็จแล้ว</span>
                                                        </div>
                                                    </button>
                                                    <?php } else {?>
                                                    <button style="width: 150px;" type="button" class="cursor-default btn btn-md text-overflow btn-orange font-medium" disabled>จองไม่สำเร็จ</button>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
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

        <div class="modal fade" id="modal-cancel" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body font-16 mobile-font-16 pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <form action="" method="post">
                            <h2 class="font-22 no-margin-top font-medium mobile-font-18 mobile-font-bold">ยกเลิกคำขอใบเสนอราคา</h2>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input type="checkbox" id="cancel1">
                                            <label for="cancel1">สถานประกอบการไม่มีพื้นที่ที่สามารถรองรับได้</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="cancel2">
                                            <label for="cancel2">สถานประกอบการปิดชั่วคราวในวันจัดงาน</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="cancel3" onchange="$('#cancel_desc').slideToggle()">
                                            <label for="cancel3">เหตุผลอื่นๆ</label>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                    <div class="form-group" style="display: none;" id="cancel_desc">
                                        <label class="font-semibold font-blue">เหตุผลที่ยกเลิกคำขอใบเสนอราคาอื่นๆ</label>
                                        <textarea class="form-control" rows="5" placeholder="ระบุเหตุผลที่ต้องการยกเลิกคำขอใบเสนอราคา"></textarea>
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center mobile-no-margin-top">
                                <button type="button" data-dismiss="modal"  class="btn btn-md btn-blue-linear font-medium btn-minwidth mobile-btn-block">ยืนยันการยกเลิกคำขอ</button>
                            </div>
                            <br class="hidden-mobile"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>