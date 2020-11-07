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
                                            <div class="upload-photo is-normal" style="width: 200px;">
                                                <div class="preview"></div>
                                                <div class="input">
                                                    <input type="file" accept="image/*">
                                                    <img src="assets/images/upload.png">
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
                                        <h3 class="font-semibold"><big>ใส่รายละเอียดธุรกิจของท่านแต่ละประเภท</big></h3>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="tab style-2 ">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#tab-info1" aria-controls="tab-info1" role="tab" data-toggle="tab">สถานที่จัดงาน</a></li>
                                                        <li><a href="#tab-info2" aria-controls="tab-info2" role="tab" data-toggle="tab">อาหารและเครื่องดื่ม</a></li>
                                                        <li><a href="#tab-info3" aria-controls="tab-info3" role="tab" data-toggle="tab">สถานที่พัก</a></li>
                                                    </ul>
                                                    <div class="tab-content no-padding-bottom">
                                                        <div role="tabpanel" class="tab-pane active" id="tab-info1">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading has-option">
                                                                    <div class="text-icon for-list is-middle no-margin">
                                                                        <i class="m-icon m-icon-table"></i>
                                                                        <h3 class="font-semibold no-margin pull-left">ข้อมูลห้องประชุมภายในสถานประกอบการ</h3>
                                                                    </div>
                                                                </div>
                                                                <?php if(isset($_GET['location1'])) { ?>
                                                                <div class="panel-body">
                                                                    <div class="room-card">
                                                                        <img class="img" src="assets/images/room-img1.png">
                                                                        <div class="text">
                                                                            <h3><b>ชื่อห้องประชุม 1</b></h3>
                                                                            <p><b>ขนาดห้องจัดประชุม (ตร.ม.)</b> : 1,500 ตร.ม.</p>
                                                                            <p><b>ชั้นของห้องจัดประชุม</b> : ชั้น 9</p>
                                                                            <p><b>น้ำหนักที่ห้องจัดประชุมรองรับ (กก.)</b> : 4,000 กก.</p>
                                                                            <p><b>ความสูงของเพดาน (ม.)</b> : 1,000 ม.</p>
                                                                            <hr/>
                                                                            <h3><small><b>การจัดรูปแบบห้องประชุม</b></small></h3>
                                                                            <div class="room-table">
                                                                                <div class="tr">
                                                                                    <div class="td"><img src="assets/images/icon-sit1.png"></div>
                                                                                    <div class="td text-overflow">120 ที่นั่ง</div>
                                                                                </div>
                                                                                <div class="tr">
                                                                                    <div class="td"><img src="assets/images/icon-sit2.png"></div>
                                                                                    <div class="td text-overflow">220 ที่นั่ง</div>
                                                                                </div>
                                                                                <div class="tr">
                                                                                    <div class="td"><img src="assets/images/icon-sit3.png"></div>
                                                                                    <div class="td text-overflow">150 ที่นั่ง</div>
                                                                                </div>
                                                                                <div class="tr">
                                                                                    <div class="td"><img src="assets/images/icon-sit4.png"></div>
                                                                                    <div class="td text-overflow">80 ที่นั่ง</div>
                                                                                </div>
                                                                                <div class="tr">
                                                                                    <div class="td"><img src="assets/images/icon-sit5.png"></div>
                                                                                    <div class="td text-overflow">30 ที่นั่ง</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="room-card">
                                                                        <img class="img" src="assets/images/room-img2.png">
                                                                        <div class="text">
                                                                            <h3><b>ชื่อห้องประชุม 1</b></h3>
                                                                            <p><b>ขนาดห้องจัดประชุม (ตร.ม.)</b> : 1,500 ตร.ม.</p>
                                                                            <p><b>ชั้นของห้องจัดประชุม</b> : ชั้น 9</p>
                                                                            <p><b>น้ำหนักที่ห้องจัดประชุมรองรับ (กก.)</b> : 4,000 กก.</p>
                                                                            <p><b>ความสูงของเพดาน (ม.)</b> : 1,000 ม.</p>
                                                                            <hr/>
                                                                            <h3><small><b>การจัดรูปแบบห้องประชุม</b></small></h3>
                                                                            <div class="room-table">
                                                                                <div class="tr">
                                                                                    <div class="td"><img src="assets/images/icon-sit1.png"></div>
                                                                                    <div class="td text-overflow">120 ที่นั่ง</div>
                                                                                </div>
                                                                                <div class="tr">
                                                                                    <div class="td"><img src="assets/images/icon-sit2.png"></div>
                                                                                    <div class="td text-overflow">220 ที่นั่ง</div>
                                                                                </div>
                                                                                <div class="tr">
                                                                                    <div class="td"><img src="assets/images/icon-sit3.png"></div>
                                                                                    <div class="td text-overflow">150 ที่นั่ง</div>
                                                                                </div>
                                                                                <div class="tr">
                                                                                    <div class="td"><img src="assets/images/icon-sit4.png"></div>
                                                                                    <div class="td text-overflow">80 ที่นั่ง</div>
                                                                                </div>
                                                                                <div class="tr">
                                                                                    <div class="td"><img src="assets/images/icon-sit5.png"></div>
                                                                                    <div class="td text-overflow">30 ที่นั่ง</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php } else { ?>
                                                                <div class="panel-body">
                                                                    <div class="overlay-line"></div>
                                                                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-room" class="btn btn-lg btn-block btn-default btn-add-option">
                                                                        <div class="text-icon is-middle">
                                                                            <i class="m-icon m-icon-plus"></i>
                                                                            <span>เพิ่มข้อมูลเพื่อทำให้ธุรกิจของท่านเสร็จสมบูรณ์</span>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="text-icon for-list is-middle no-margin">
                                                                        <i class="m-icon m-icon-table"></i>
                                                                        <h3 class="font-semibold no-margin pull-left">สิ่งอำนวยความสะดวกภายในห้องประชุม</h3>
                                                                    </div>
                                                                </div>
                                                                <?php if(isset($_GET['location2'])) { ?>
                                                                <div class="panel-body">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-4 col-xs-6">
                                                                                <p class="no-margin"><big>จำนวนโต๊ะ</big></p>
                                                                                <p>120 ตัว</p>
                                                                            </div>
                                                                            <div class="col-sm-4 col-xs-6">
                                                                                <p class="no-margin"><big>จำนวนเก้าอี้ </big></p>
                                                                                <p>300 ตัว</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-4 col-xs-6">
                                                                                <p class="no-margin"><big>จำนวนโซฟา</big></p>
                                                                                <p>1 ตัว</p>
                                                                            </div>
                                                                            <div class="col-sm-4 col-xs-6">
                                                                                <p></p>
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-wifi"></i>
                                                                                    <span>Wifi ในห้องประชุม</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="no-margin"><big>ระบบเสียง</big></p>
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-sound1"></i>
                                                                                    <span>ไมโครโฟน (แบบขาตั้ง แบบตั้งโต๊ะ และไร้สาย)</span>
                                                                                </div>
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-sound2"></i>
                                                                                    <span>ศูนย์กลางควบคุมระบบเสียง</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="no-margin"><big>ระบบภาพ</big></p>
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-photo1"></i>
                                                                                    <span>เครื่องฉายสไลด์และเครื่องฉายวิดีโอ</span>
                                                                                </div>
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-photo2"></i>
                                                                                    <span>จอภาพ</span>
                                                                                </div>
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-photo3"></i>
                                                                                    <span>จอทัชกรีน</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php } else { ?>
                                                                <div class="panel-body">
                                                                    <div class="overlay-line"></div>
                                                                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-room-facility" class="btn btn-lg btn-block btn-default btn-add-option">
                                                                        <div class="text-icon is-middle">
                                                                            <i class="m-icon m-icon-plus"></i>
                                                                            <span>เพิ่มข้อมูลเพื่อทำให้ธุรกิจของท่านเสร็จสมบูรณ์</span>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="text-icon for-list is-middle no-margin">
                                                                        <i class="m-icon m-icon-table"></i>
                                                                        <h3 class="font-semibold no-margin pull-left">สิ่งอำนวยความสะดวกสถานที่</h3>
                                                                    </div>
                                                                </div>
                                                                <?php if(isset($_GET['location3'])) { ?>
                                                                <div class="panel-body mobile-list">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-car"></i>
                                                                                    <span>บริการรถรับส่ง</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-restaurant"></i>
                                                                                    <span>ร้านอาหาร</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-drink"></i>
                                                                                    <span>ร้านกาแฟ</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-bar"></i>
                                                                                    <span>บาร์</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-club"></i>
                                                                                    <span>ไนท์คลับ</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-park"></i>
                                                                                    <span>บริการจอดรถ</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-service"></i>
                                                                                    <span>จุดแนะนำผู้เข้ารับบริการ</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-change"></i>
                                                                                    <span>บริการแลกเปลี่ยนเงินตราต่างประเทศ</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-disabled"></i>
                                                                                    <span>ส่งอำนวยความสะดวกสำหรับผู้พิการ</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-wifi"></i>
                                                                                    <span>Wifi ส่วนกลาง</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-food"></i>
                                                                                    <span>บริการอาหารว่างและเครื่องดื่ม</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p><big>สิ่งอำนวยความสะดวกหรือบริการอื่นๆ</big></p>
                                                                                <p>มีบริการห้องนั่งเล่นสำหรับเด็กเล็ก</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php } else { ?>
                                                                <div class="panel-body">
                                                                    <div class="overlay-line"></div>
                                                                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-park" class="btn btn-lg btn-block btn-default btn-add-option">
                                                                        <div class="text-icon is-middle">
                                                                            <i class="m-icon m-icon-plus"></i>
                                                                            <span>เพิ่มข้อมูลเพื่อทำให้ธุรกิจของท่านเสร็จสมบูรณ์</span>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="text-icon for-list is-middle no-margin">
                                                                        <i class="m-icon m-icon-park"></i>
                                                                        <h3 class="font-semibold no-margin pull-left">การรองรับการเดินทางและที่จอดรถ</h3>
                                                                    </div>
                                                                </div>
                                                                <?php if(isset($_GET['location4'])) { ?>
                                                                <div class="panel-body">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p><b>รองรับการเดินทางด้วย</b></p>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-check"></i>
                                                                                    <span>รถยนต์ส่วนตัว</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-check"></i>
                                                                                    <span>รถบัส</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-check"></i>
                                                                                    <span>รถไฟ</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-check"></i>
                                                                                    <span>เครื่องบิน</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-check"></i>
                                                                                    <span>รถไฟฟ้าบนดิน.BTS</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-check"></i>
                                                                                    <span>รถไฟฟ้าใต้ดิน MRT</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-3 col-xs-6">
                                                                                <p class="no-margin">รถยนต์ (คัน)</p>
                                                                                <p class="font-blue"><big>250</big></p>
                                                                            </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                                                                <p class="no-margin">รถบัส (คัน)</p>
                                                                                <p class="font-blue"><big>50</big></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php } else { ?>
                                                                <div class="panel-body">
                                                                    <div class="overlay-line"></div>
                                                                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-park" class="btn btn-lg btn-block btn-default btn-add-option">
                                                                        <div class="text-icon is-middle">
                                                                            <i class="m-icon m-icon-plus"></i>
                                                                            <span>เพิ่มข้อมูลเพื่อทำให้ธุรกิจของท่านเสร็จสมบูรณ์</span>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="text-icon for-list is-middle no-margin">
                                                                        <i class="m-icon m-icon-award"></i>
                                                                        <h3 class="font-semibold no-margin pull-left">ข้อมูลมาตรฐาน/รางวัลที่ได้รับ</h3>
                                                                    </div>
                                                                </div>
                                                                <?php if(isset($_GET['location5'])) { ?>
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
                                                                </div>
                                                                <?php } else { ?>
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
                                                        <div role="tabpanel" class="tab-pane" id="tab-info2">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="text-icon for-list is-middle no-margin">
                                                                        <i class="m-icon m-icon-food-action"></i>
                                                                        <h3 class="font-semibold no-margin pull-left">ข้อมูลเฉพาะด้านธุรกิจบริการอาหารและเครื่องดื่ม</h3>
                                                                    </div>
                                                                </div>
                                                                <?php if(isset($_GET['food1'])) { ?>
                                                                <div class="panel-body mobile-list">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="no-margin"><b>ระดับราคาอาหาร/คน</b></p>
                                                                                <p class="font-blue"><big>51 - 100</big></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="no-margin"><b>ความสามารถในการรองรับ (ที่)</b></p>
                                                                                <p class="font-blue"><big>151 - 200</big></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr/>
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-beer"></i>
                                                                                    <span>จำหน่ายเครื่องดื่มมึนเมา</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-reserved"></i>
                                                                                    <span>รับจองที่นั่ง</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-user-group"></i>
                                                                                    <span>รองรับการใช้บริการแบบกลุ่ม</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-credit"></i>
                                                                                    <span>รองรับการจ่ายเงินด้วยบัตรเครดิต</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-wifi"></i>
                                                                                    <span>มีบริการ wifi</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-park"></i>
                                                                                    <span>มีบริการที่จอดรถ</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-road"></i>
                                                                                    <span>ที่จอดรถริมถนน</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-sea"></i>
                                                                                    <span>ติดชายหาด</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-catering"></i>
                                                                                    <span>มีบริการ Catering</span>
                                                                                </div>
                                                                                <br/><br/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p><b>บริการอื่นๆ</b></p>
                                                                                <p>บริการสั่งทำอาหารสำหรับมือพิเศษหรือจัดงานเลี้ยงได้ตามที่ต้องการ</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php } else { ?>
                                                                <div class="panel-body">
                                                                    <div class="overlay-line"></div>
                                                                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-food" class="btn btn-lg btn-block btn-default btn-add-option">
                                                                        <div class="text-icon is-middle">
                                                                            <i class="m-icon m-icon-plus"></i>
                                                                            <span>เพิ่มข้อมูลเพื่อทำให้ธุรกิจของท่านเสร็จสมบูรณ์</span>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="text-icon for-list is-middle no-margin">
                                                                        <i class="m-icon m-icon-food-type"></i>
                                                                        <h3 class="font-semibold no-margin pull-left">ประเภทอาหารที่มีให้บริการ</h3>
                                                                    </div>
                                                                </div>
                                                                <?php if(isset($_GET['food2'])) { ?>
                                                                <div class="panel-body">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-food-type"></i>
                                                                                    <span>บุฟเฟ่ต์</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-food-type"></i>
                                                                                    <span>ก๋วยเตี๋ยว</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-food-type"></i>
                                                                                    <span>อาหารไทย</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-food-type"></i>
                                                                                    <span>อาหารเหนือ</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-food-type"></i>
                                                                                    <span>อาหารใต้</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-food-type"></i>
                                                                                    <span>อาหารจีน</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-food-type"></i>
                                                                                    <span>อาหารมุสลิม/อิสลาม</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php } else { ?>
                                                                <div class="panel-body">
                                                                    <div class="overlay-line"></div>
                                                                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-food-type" class="btn btn-lg btn-block btn-default btn-add-option">
                                                                        <div class="text-icon is-middle">
                                                                            <i class="m-icon m-icon-plus"></i>
                                                                            <span>เพิ่มข้อมูลเพื่อทำให้ธุรกิจของท่านเสร็จสมบูรณ์</span>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="text-icon for-list is-middle no-margin">
                                                                        <i class="m-icon m-icon-park"></i>
                                                                        <h3 class="font-semibold no-margin pull-left">การรองรับการเดินทางและที่จอดรถ</h3>
                                                                    </div>
                                                                </div>
                                                                <?php if(isset($_GET['food3'])) { ?>
                                                                <div class="panel-body">
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p><b>รองรับการเดินทางด้วย</b></p>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-check"></i>
                                                                                    <span>รถยนต์ส่วนตัว</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-check"></i>
                                                                                    <span>รถบัส</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-check"></i>
                                                                                    <span>รถไฟ</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-check"></i>
                                                                                    <span>เครื่องบิน</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-check"></i>
                                                                                    <span>รถไฟฟ้าบนดิน.BTS</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="text-icon for-list is-middle">
                                                                                    <i class="m-icon m-icon-check"></i>
                                                                                    <span>รถไฟฟ้าใต้ดิน MRT</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="row">
                                                                            <div class="col-sm-3 col-xs-6">
                                                                                <p class="no-margin">รถยนต์ (คัน)</p>
                                                                                <p class="font-blue"><big>250</big></p>
                                                                            </div>
                                                                            <div class="col-sm-3 col-xs-6">
                                                                                <p class="no-margin">รถบัส (คัน)</p>
                                                                                <p class="font-blue"><big>50</big></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php } else { ?>
                                                                <div class="panel-body">
                                                                    <div class="overlay-line"></div>
                                                                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-park" class="btn btn-lg btn-block btn-default btn-add-option">
                                                                        <div class="text-icon is-middle">
                                                                            <i class="m-icon m-icon-plus"></i>
                                                                            <span>เพิ่มข้อมูลเพื่อทำให้ธุรกิจของท่านเสร็จสมบูรณ์</span>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="text-icon for-list is-middle no-margin">
                                                                        <i class="m-icon m-icon-award"></i>
                                                                        <h3 class="font-semibold no-margin pull-left">ข้อมูลมาตรฐาน/รางวัลที่ได้รับ</h3>
                                                                    </div>
                                                                </div>
                                                                <?php if(isset($_GET['food4'])) { ?>
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
                                                                </div>
                                                                <?php } else { ?>
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
                                                        <div role="tabpanel" class="tab-pane" id="tab-info3">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h3 class="font-semibold no-margin">สถานที่พัก</h3>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="form-group">
                                                                        -
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="panel panel-default b-detail-other">
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
                                                <select class="form-control">
                                                    <option value="">09.00 น.</option>
                                                </select>
                                                <span class="m-icon m-icon-dropdown"></span>
                                            </div>
                                            <div class="select">
                                                <select class="form-control">
                                                    <option value="">18.00 น.</option>
                                                </select>
                                                <span class="m-icon m-icon-dropdown"></span>
                                            </div>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-right">
                                <button type="submit" class="btn btn-md btn-blue-linear font-semibold btn-minwidth">บันทึกข้อมูล</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modal-checkbox" id="modal-room" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <h3 class="no-margin font-semibold">ข้อมูลห้องประชุมภายในสถานประกอบการ</h3>
                    </div>
                    <div class="modal-body pd-40">
                        <form action="?location1=true" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">ชื่อห้องประชุม 1</label>
                                        <input type="text" class="form-control" placeholder="ชื่อห้องประชุม">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">ขนาดห้องจัดประชุม (ตร.ม.)</label>
                                        <input type="text" class="form-control" placeholder="ตัวอย่าง ; 750 ตร.ม.">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">ชั้นของห้องจัดประชุม</label>
                                        <input type="text" class="form-control" placeholder="ชั้นของห้องจัดประชุม">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">น้ำหนักที่ห้องจัดประชุมรองรับ (กก.)</label>
                                        <input type="text" class="form-control" placeholder="ตัวอย่าง ; 2500 ก.ก.">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">ความสูงของเพดาน (ม.)</label>
                                        <input type="text" class="form-control" placeholder="ตัวอย่าง ; 400 ม.">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="fullwidth font-semibold">การจัดรูปแบบห้องประชุม</label>
                                        <div class="room-plan">
                                            <div class="inner">
                                                <div class="text">
                                                    <p>แบบโรงภาพยนตร์</p>
                                                    <img src="assets/images/icon-sit1.png">
                                                </div>
                                                <div class="input-unit">
                                                    <input type="text" data-mask="0000" class="form-control" placeholder="0">
                                                    <span>ที่นั่ง</span>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <p>แบบห้องเรียน</p>
                                                    <img src="assets/images/icon-sit2.png">
                                                </div>
                                                <div class="input-unit">
                                                    <input type="text" data-mask="0000" class="form-control" placeholder="0">
                                                    <span>ที่นั่ง</span>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <p>แบบโต๊ะจีน</p>
                                                    <img src="assets/images/icon-sit3.png">
                                                </div>
                                                <div class="input-unit">
                                                    <input type="text" data-mask="0000" class="form-control" placeholder="0">
                                                    <span>ที่นั่ง</span>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <p>แบบค็อกเทล</p>
                                                    <img src="assets/images/icon-sit4.png">
                                                </div>
                                                <div class="input-unit">
                                                    <input type="text" data-mask="0000" class="form-control" placeholder="0">
                                                    <span>ที่นั่ง</span>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <p>แบบ Board Room</p>
                                                    <img src="assets/images/icon-sit5.png">
                                                </div>
                                                <div class="input-unit">
                                                    <input type="text" data-mask="0000" class="form-control" placeholder="0">
                                                    <span>ที่นั่ง</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="fullwidth font-semibold">อัพโหลดรูปภาพห้องประชุม</label>
                                        <div class="upload-right-detail">
                                            <div class="upload-photo is-normal pull-left">
                                                <div class="preview"></div>
                                                <div class="input">
                                                    <input type="file" accept="image/*">
                                                    <img src="assets/images/upload.png">
                                                </div>
                                            </div>
                                            <ul class="pull-left">
                                                <li>แนะนำขนาดของรูปภาพกว้าง 1200 px และความสูง 800 px</li>
                                                <li>ไฟล์ภาพสูงสุด 3 MB</li>
                                                <li>ใช้รูปภาพที่เป็นแนวนอนจึงจะได้การแสดงผลที่ดีที่สุด</li>
                                            </ul>
                                        </div>
                                        <p class="required">กรุณาอัพโหลดข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-right">
                                <button type="submit" class="btn btn-md btn-blue-linear font-semibold btn-minwidth">บันทึกข้อมูล</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modal-checkbox" id="modal-room-facility" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <h3 class="no-margin font-semibold">สิ่งอำนวยความสะดวกภายในห้องประชุม</h3>
                    </div>
                    <div class="modal-body pd-40">
                        <form action="?location2=true" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">จำนวนโต๊ะ (ตัว)</label>
                                        <input type="text" data-mask="0000" class="form-control">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">จำนวนเก้าอี้ (ตัว)</label>
                                        <input type="text" data-mask="0000" class="form-control">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold">จำนวนโซฟา (ตัว)</label>
                                        <input type="text" data-mask="0000" class="form-control">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-semibold"></label>
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-wifi">
                                            <label for="mrf-wifi">Wifi ในห้องประชุม</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-sm-12">
                                        <label class="font-semibold">ระบบเสียง</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-sound1">
                                            <label for="mrf-sound1">ไมโครโฟน (แบบขาตั้ง แบบตั้งโต๊ะ และไร้สาย)</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-sound2">
                                            <label for="mrf-sound2">ศูนย์กลางควบคุมระบบเสียง</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-sound3">
                                            <label for="mrf-sound3">เครื่องขยายเสียง</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-sound4">
                                            <label for="mrf-sound4">
                                                <input type="text" class="form-control border-under no-padding fullwidth" placeholder="ระบุระบบเสียงอื่นๆ">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-sm-12">
                                        <label class="font-semibold">ระบบภาพ</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-photo1">
                                            <label for="mrf-photo1">เครื่องฉายสไลด์และเครื่องฉายวิดีโอ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-photo2">
                                            <label for="mrf-photo2">ระบบฉายภาพคอมพิวเตอร์</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-photo3">
                                            <label for="mrf-photo3">จอภาพ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-photo4">
                                            <label for="mrf-photo4">โทรทัศน์สี</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-photo5">
                                            <label for="mrf-photo5">
                                                <input type="text" class="form-control border-under no-padding fullwidth" placeholder="ระบุระบบภาพอื่นๆ">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-sm-12">
                                        <label class="font-semibold">อุปกรณ์สำนักงานและอุปกรณ์</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-device1">
                                            <label for="mrf-device1">ไวท์บอร์ด</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-device2">
                                            <label for="mrf-device2">ฟลิฟชาร์ท (Flip Chart)</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-device3">
                                            <label for="mrf-device3">เวทีเคลื่อนย้ายได้</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-device4">
                                            <label for="mrf-device4">ฟลอร์เต้นรำเคลื่อนย้ายได้</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-device5">
                                            <label for="mrf-device5">ฉากกั้นเคลื่อนย้ายได้</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-device6">
                                            <label for="mrf-device6">ชุดเครื่องเขียน</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <input type="checkbox" id="mrf-device7">
                                            <label for="mrf-device7">
                                                <input type="text" class="form-control border-under no-padding fullwidth" placeholder="ระบุอุปกรณ์สำนักงานและอุปกรณ์อื่นๆ">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-right">
                                <button type="submit" class="btn btn-md btn-blue-linear font-semibold btn-minwidth">บันทึกข้อมูล</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade modal-checkbox" id="modal-food" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <h3 class="no-margin font-semibold">ข้อมูลเฉพาะด้านธุรกิจบริการอาหารและเครื่องดื่ม</h3>
                    </div>
                    <div class="modal-body pd-40">
                        <form action="?food1=true" method="post">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-semibold">ระดับราคาอาหาร (คน)</label>
                                        <div class="radio-select is-orange">
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-price1">
                                                <label for="mf-price1">0 - 100</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-price2">
                                                <label for="mf-price2">101 - 250</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-price3">
                                                <label for="mf-price3">251 - 500</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-price4">
                                                <label for="mf-price4">501 - 1,000</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-price5">
                                                <label for="mf-price5">1,001 - 1,500</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-price6">
                                                <label for="mf-price6">1,501 - 2,000</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-price7">
                                                <label for="mf-price7">2,001 - 2,500</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-price8">
                                                <label for="mf-price8">2,501 - 3,000</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-price9">
                                                <label for="mf-price9">3,001 - 3,500</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-price10">
                                                <label for="mf-price10">3,501 - 4,000</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-price11">
                                                <label for="mf-price11">4,001 - 4,500</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-price12">
                                                <label for="mf-price12">4,501 - 5,000</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-price13">
                                                <label for="mf-price13">5,000 ขึ้นไป</label>
                                            </div>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-semibold">ความสามารถในการรองรับ (ที่)</label>
                                        <div class="radio-select is-orange">
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-sit1">
                                                <label for="mf-sit1">0 - 50</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-sit2">
                                                <label for="mf-sit2">51 - 100</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-sit3">
                                                <label for="mf-sit3">101 - 150</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-sit4">
                                                <label for="mf-sit4">151 - 200</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-sit5">
                                                <label for="mf-sit5">201 - 300</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-sit6">
                                                <label for="mf-sit6">301 - 500</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mf-sit7">
                                                <label for="mf-sit7">500 ขึ้นไป</label>
                                            </div>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-semibold">บริการ</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mf-service1">
                                                    <label for="mf-service1">จำหน่ายเครื่องดื่มมึนเมา</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mf-service2">
                                                    <label for="mf-service2">รับจองที่นั่ง</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mf-service3">
                                                    <label for="mf-service3">รองรับการใช้บริการแบบกลุ่ม</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mf-service4">
                                                    <label for="mf-service4">รองรับการจ่ายเงินด้วยบัตรเครดิต</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mf-service5">
                                                    <label for="mf-service5">มีบริการ wifi</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mf-service6">
                                                    <label for="mf-service6">มีบริการที่จอดรถ</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mf-service7">
                                                    <label for="mf-service7">ที่จอดรถริมถนน</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mf-service8">
                                                    <label for="mf-service8">ติดชายหาด</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mf-service9">
                                                    <label for="mf-service9">มีบริการ Catering</label>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mf-service10">
                                                    <label for="mf-service10">
                                                        <input type="text" class="form-control border-under no-padding" placeholder="บริการอื่นๆ">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-right">
                                <button type="submit" class="btn btn-md btn-blue-linear font-semibold btn-minwidth">บันทึกข้อมูล</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modal-checkbox" id="modal-park" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <h3 class="no-margin font-semibold">การรองรับการเดินทางและที่จอดรถ</h3>
                    </div>
                    <div class="modal-body pd-40">
                        <form action="?food3=true&location4=true" method="post">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-semibold">รองรับการเดินทางด้วย</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mp-car1">
                                                    <label for="mp-car1">รถยนต์ส่วนตัว</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mp-car2">
                                                    <label for="mp-car2">รถบัส</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mp-car3">
                                                    <label for="mp-car3">รถไฟ</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mp-car4">
                                                    <label for="mp-car4">เครื่องบิน</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mp-car5">
                                                    <label for="mp-car5">รถไฟฟ้าบนดิน BTS</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mp-car6">
                                                    <label for="mp-car6">รถไฟฟ้าใต้ดิน MRT</label>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mp-car10">
                                                    <label for="mp-car10">
                                                        <input type="text" class="form-control border-under no-padding" placeholder="การเดินทางอื่นๆ">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-semibold" data-mask="0000">จำนวนที่จอดรถยนต์ (คัน)</label>
                                        <input type="text" class="form-control">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                    <div class="form-group mt-5">
                                        <div class="radio-select is-blue is-round">
                                            <div class="radio">
                                                <input type="radio" name="time" id="mp-plus1">
                                                <label for="mp-plus1">+ 10</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mp-plus2">
                                                <label for="mp-plus2">+ 50</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mp-plus3">
                                                <label for="mp-plus3">+ 100</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mp-plus4">
                                                <label for="mp-plus4">+ 200</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="mp-plus5">
                                                <label for="mp-plus5">+ 500</label>
                                            </div>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-right">
                                <button type="submit" class="btn btn-md btn-blue-linear font-semibold btn-minwidth">บันทึกข้อมูล</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modal-checkbox" id="modal-food-type" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <h3 class="no-margin font-semibold">ประเภทอาหารที่มีให้บริการ</h3>
                    </div>
                    <div class="modal-body pd-40">
                        <form action="?food2=true" method="post">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <?php $food_type = array('ก๋วยเตี๋ยว','ของหวาน','เครื่องดื่ม/น้ำผลไม้/ชานมไข่มุก','ชาบู/สุกี้ยากี้','บุฟเฟ่ต์','เบเกอรี่/เค้ก','ปิ้งย่าง','ผับ/ร้านเหล้า/บาร์','พิซซ่า','มังสวิรัติ/เจ','ร้านกาแฟ/ชา','สตรีทฟู้ด/รถเข็น','สเต็ก','หมูกระทะ','อาหารเกาหลี','อาหารจีน','อาหารเช้า','อาหารญี่ปุ่น','อาหารใต้','อาหารทะเล','อาหารไทย','อาหารนานาชาติ','อาหารเหนือ','อาหารอินเดีย','อาหารอีสาน/ส้มตำ','ไอศกรีม'); ?>
                                            <?php for($i = 0 ; $i < count($food_type) ; $i++) { ?>
                                            <div class="col-sm-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="mft-type<?= $i; ?>">
                                                    <label for="mft-type<?= $i; ?>"><?= $food_type[$i]; ?></label>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-right">
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
                        <form action="?food4=true&location5=true" method="post">
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
                                            <label for="ma-standard">เป็นมาตรฐาน/รางวัล ที่เกี่ยวข้องกับการพัฒนาอย่างยั่งยืน (Sustainable related reward)</label>
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
                            <div class="btn-box text-right">
                                <button type="submit" class="btn btn-md btn-blue-linear font-semibold btn-minwidth">บันทึกข้อมูล</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>